<?php

namespace App\Http\Controllers\Test;

use App\Model\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    public function show($id)
    {
      // $user = DB::table('lzh_members')->where([['id', '=', $id]])->get();
      // $user = DB::table('lzh_members')->where('id',$id)->first();
      // $email = DB::table('lzh_members')->where('id', $id)->value('user_email');
      // $user_=json_decode($user,true);
        // echo url()->full();
      // DB::table('lzh_members')->orderBy('id')->chunk(100, function ($users) {
      //     foreach ($users as $user) {
      //         echo $user->user_name.'<br/>';
      //     }
      // });
        //return view('user.profile', ['user' => $user]);
        // return view('user.profile', ['email' => $email]);
    }

    // public function log($id){
    // 	return view('user.profile', ['Log' => Log::findOrFail($id)]);
    // }
   public function setCache(){
   	   Cache::put('key','34343434','11111');
   }

   public function profile($id){
   	   return redirect()->action(
	    'Test\ArticleController@show', ['id' => $id]
	   );
   }






}