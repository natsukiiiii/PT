<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        // プロフィールコントローラーの内容をusersコントローラーへ
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



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('profiles.edit', compact('user'));
    }

    // 撮ってきたID取得して
    // edit.bladeに渡して
    // edit.bladeからupdateに渡す
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $user)
    {
        // $user = User::find($request->id);
        // $user->update($request->all());
        // return redirect()->route('profile.edit');

        $auth_id = Auth::id();

        $user = User::updateOrCreate([
            'id' => $auth_id,
        ],[
            'id' => $auth_id,
            'name' => $user->name,
            'specialized' => $user->specialized,
            'company' => $user->company,
            'about' => $user->about,
            'twitter_url' => $user->twitter_url,
            'facebook_url' => $user->facebook_url,
            'instagram_url' => $user->instagram_url,



        ]);

        // $auth_id = Auth::id();
        return redirect()->route('profile.edit', $auth_id);
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
