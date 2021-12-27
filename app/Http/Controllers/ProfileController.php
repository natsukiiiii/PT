<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use JD\Cloudder\Facades\Cloudder;
use JD\Cloudder\CloudderServiceProvider;


class ProfileController extends Controller
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
        // if(Auth::id() !== $user->user_id){
        //     return abort(404);
        // }
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
            'image' => $user->image,
            'image_path' => $user->image_path,
            'public_id' => $user->public_id,


            'specialized' => $user->specialized,
            'company' => $user->company,
            'about' => $user->about,
            'twitter_url' => $user->twitter_url,
            'facebook_url' => $user->facebook_url,
            'instagram_url' => $user->instagram_url,



        ]);

        // $user = new User;

        // if ($image = $user->file('image')) {
        // if ($image = $user->find('image')) {
            //ここで$user->fileでfileが使えない.が、dd($image)で画像は取得できており、cloudinaryにも保存はできていた。
            //  DBに保存されている。value保持できており、追加で画像表示させることで解決。
        if ($image = $user->image) {
            // dd($image);

            $image_path = $image->getRealPath();
            Cloudder::upload($image_path, null);
            //直前にアップロードされた画像のpublicIdを取得する。
            $publicId = Cloudder::getPublicId();
            $logoUrl = Cloudder::secureShow($publicId, [
                'width'     => 200,
                'height'    => 200
            ]);
            $user->image_path = $logoUrl;
            $user->public_id  = $publicId;
        }
        $user->save();


        return redirect()->route('profile.edit', $auth_id)->with('flash_message', 'プロフィールに追加されました!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = PoUserst::find($id);

        if(Auth::id() !== $user->user_id){
            return abort(404);
        }

        if(isset($user->public_id)){
            Cloudder::destroyImage($user->public_id);
        }

        $user -> delete();

        return redirect()->route('users.show');
    }
}
