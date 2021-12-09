<?php

namespace App\Http\Controllers;

use App\Socialevent;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Auth;

class SocialEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socialevents = Socialevent::all();
        return view('socialevents.index', compact('socialevents'));
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
        // $socialEvent = new Socialevent;
        // $socialEvent->name = $request->name;
        // $socialEvent->user_id = Auth::id();

        // $socialEvent ->save();
        // return redirect()->route('socialevents.index');

           $input = $request->all();
           $input['user_id'] = Auth::id();
           Socialevent::create($input);
           return redirect()->route('socialevent.index');


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
        $socialevent = Socialevent::find($id);
        // dd($experience);
        return view('socialevents.edit', compact('socialevent'));
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
        $socialevent = Socialevent::find($id);
        // dd($id);
        $socialevent->update($request->all());
        // return view('socialevents.edit', compact('socialevent'));
        return redirect()->route('socialevent.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $socialevent = Socialevent::find($id);
        $socialevent -> delete();
        return redirect()->route('socialevent.index');
    }
}
