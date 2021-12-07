<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExperienceRequest;
use App\User;
use App\Experience;
use App\Education;

use Auth;


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  information
    public function update_information(Request $request, $id)
    {
        $user = User::find($id);


        $user->update($request->all());
        return redirect()->route('setting.profile');
    }


    // experience
    public function update_experience(Request $experience)
    {
        $experience = Experience::updateOrCreate([
            'id' => $experience->id,
        ],[
            'id' => $experience->id,
            'name' => $experience->name,


        ]);
        return redirect()->route('setting.experience');


    }

        // education
        public function update_education(Request $education)
        {
            $education = Education::updateOrCreate([
                'id' => $education->id,
            ],[
                'id' => $education->id,
                'name' => $education->name,


            ]);
            // dd($education->name);


            // dd($request);

            // dd($experience->name);

            return redirect()->route('setting.education');


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

       /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profile(Request $request)
    {
        $user = Auth::user();
        // ユーザー渡す
        return view('settings.profile', compact('user'));
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function experience(Request $experience)
    {
        $user = Auth::user();
        // $experience = Experience::get();

        return view('settings.experience', compact('user', 'experience'));
    }



        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function education(Request $education)
    {
        $user = Auth::user();
        // $experience = Experience::get();

        return view('settings.education', compact('user', 'education'));
    }
}
