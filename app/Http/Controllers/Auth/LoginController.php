<?php

namespace App\Http\Controllers\Auth;

use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    // twitterの認証ページへユーザーをリダイレクト
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // ツイッターからユーザを取得
    public function handleProviderCallback()
    {
        try{
        $user = Socialite::driver('twitter')->user();
        $socialUser = User::firstOrCreate([
            'token' => $user->token,
        ], [
            'token' => $user->token,
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar_original,
        ]);
        Auth::login($socialUser, true);
    }catch(Exception $e){
        return redirect()->route('posts.index');
    }
    return redirect()->route('posts.index');
    }
}