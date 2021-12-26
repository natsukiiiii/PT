<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
use Illuminate\Support\Collection;

use App\User;

use Auth;


class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // // IF分でユーザーがいなかったら４０４に飛ばす
        // if(Auth::id() !== $user->id){
        //     return abort(404);
        // }
$id = Auth::id();
        $user = User::get();
        // $user = Auth::id();

        // dd($user);

        // !? ログインユーザー取得

        
        $user_id = Experience::get(['user_id']);
        // $user_id = Experience::get();
// $user = User::find();

// $user = auth()->user()->id;
        // dd($user);
// 
// $user = $user_id


        // 投稿中user_idを取得する
        // dd($user);

        // 投稿したuser_idとlogin user ===

        // $experiences = Experience::get();
        $experiences = Experience::get();

        // if(Auth::id() !== $user_id){
        //     return abort(404);
        // }
        // dd($experiences);

        if($id === $user_id){
            return view('experiences.index', compact('id', 'user', 'user_id', 'experiences'));
        }
        // dd($user_id);

        // $user->load('experience');

        return view('experiences.index', compact('id', 'user_id', 'user', 'experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::id();
        // if(Auth::id() !== $experience->user_id){
        //     return abort(404);
        // }
        Experience::create($input);
        return redirect()->route('experience.index')->with('flash_message', 'プロフィールに追加されました!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
    {
        // dd($id);
        $experience = Experience::find($id);
        if(Auth::id() !== $experience->user_id){
            return abort(404);
        }
        // dd($experience);
        return view('experiences.edit', compact('experience'));
        // dd($experiences->id);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $experience = Experience::find($id);
        if(Auth::id() !== $experience->user_id){
            return abort(404);
        }
        // dd($id);
        $experience->update($request->all());
        // return view('experiences.edit', compact('experience'));
        return redirect()->route('experience.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experience = Experience::find($id);
        if(Auth::id() !== $experience->user_id){
            return abort(404);
        }
        $experience -> delete();
        return redirect()->route('experience.index');
    }
}
