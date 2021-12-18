<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\QuestionRequest;
use App\Question;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class QuestionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $questions = Question::all();
        // $questions->load('user');


        // return view('questions.index', compact('questions'));


        $questions = Question::paginate(2);
// 検索フォームで入力された値を取得する
         $search = $request->input('search');
        // クエリビルダ
        $query = Question::query();

       // もし検索フォームにキーワードが入力されたら
        if ($search !== null) {

            // 全角スペースを半角に変換
            $spaceConversion = mb_convert_kana($search, 's');

            // 単語を半角スペースで区切り、配列にする（例："山田 翔" → ["山田", "翔"]）
            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);


            // 単語をループで回し、ユーザーネームと部分一致するものがあれば、$queryとして保持される
            foreach($wordArraySearched as $value) {
                $query->where('title', 'like', '%'.$value.'%')->orWhere('text', 'like', '%'.$value.'%');
            }
// 上記で取得した$queryをページネートにし、変数$usersに代入
// getでも良い
            $questions = $query->paginate(2);
        }
        $questions->load('user');
// dd($search);
        // ビューにquestionsとsearchを変数として渡す
        return view('questions.index')
            ->with([
                'questions' => $questions,
                'search' => $search,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::id();
        Question::create($input);
        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $question = Question::find($id);
         $question -> load('user', 'questionsComments');
        return view('questions.show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::find($id);

        if(Auth::id() !== $question->user_id){
            return abort(404);
        }

        return view('questions.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionRequest $request, $id)
    {
        $question = Question::find($id);
        if(Auth::id() !== $question->user_id){
            return abort(404);
        }
        $question->update($request->all());
        return view('questions.show', compact('question'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);
        if(Auth::id() !== $question->user_id){
            return abort(404);
        }
        $question -> delete();
        return redirect()->route('questions.index');
    }
}
