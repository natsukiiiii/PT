<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Education;
use App\Publication;
use App\Socialevent;


use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\User;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //   {{ START 共通 }}
        $user = User::find($id);
        // IF分でユーザーがいなかったら４０４に飛ばす
        if(Auth::id() !== $user->id){
            return abort(404);
        }
        $user_id = Experience::get(['user_id']);
        // dd($user_id);
        // 投稿したユーザーのI'dを取りたい
        $profileUser = User::latest('updated_at')->first('name','specialized');
  //   {{ END 共通 }}


         //   {{ STRAT experience }}
        // $experience = Experience::latest('updated_at')->get('name');
        $experience = Experience::get();
        if(Auth::id() === $user_id){
            return view('users.show', compact('user_id'));
        }
        // dd($experience);
        $user->load('experience');
    //   {{ END experience }}

        //   {{ STRAT education }}
        $user_id = Education::get(['user_id']);
        $education = Education::get();
        if(Auth::id() === $user_id){
            return view('users.show', compact('user_id'));
        }
        $user->load('education');
        // dd($education);
         //   {{ END education }}

         //   {{ STRAT publication }}
         $user_id = Publication::get(['user_id']);
         $publication = Publication::get();
         if(Auth::id() === $user_id){
             return view('users.show', compact('user_id'));
         }
         $user->load('publication');

  //   {{ END publication }}


                 //   {{ STRAT socialevent }}
                 $user_id = Socialevent::get(['user_id']);
                 $socialevent = Socialevent::get();
                 if(Auth::id() === $user_id){
                     return view('users.show', compact('user_id'));
                 }
                 $user->load('socialevent');
  //   {{ END socialevent }}
        return view('users.show', compact('user_id', 'user', 'profileUser', 'experience', 'education', 'publication', 'socialevent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
