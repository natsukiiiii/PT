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
        $user = User::find($id);
        // IF分でユーザーがいなかったら４０４に飛ばす
        // if(Auth::id() !== $user->id){
        //     return abort(404);
        // }
        $profileUser = User::latest('updated_at')->first('name','specialized');


        $experience = Experience::latest('updated_at')->get('name');

        $education = Education::latest('updated_at')->get('name');

        $publication = Publication::latest('updated_at')->get('name');

        $socialevent = Socialevent::latest('updated_at')->get('name');
        return view('users.show', compact('user', 'profileUser', 'experience', 'education', 'publication', 'socialevent'));

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
