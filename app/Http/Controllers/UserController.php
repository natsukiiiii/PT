<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Education;


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
        // $users = User::all();
        $user = User::find($id);
        // IF分でユーザーがいなかったら４０４に飛ばす
        // if(Auth::id() !== $user->user_id){
        //     return abort(404);
        // }

        // $user->load('experience');
        $experience = Experience::latest('updated_at')->get('name');
        // $experience = Experience::find($id);

        $education = Education::latest('updated_at')->get('name');


        // dd($id);
        // return view('users.show', compact('user', 'experience'));
        return view('users.show', compact('user', 'experience', 'education'));

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
