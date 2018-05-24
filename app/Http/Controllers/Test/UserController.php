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
    	$user = DB::table('lzh_members')->where([
            ['id', '=', $id]
        ])->get();
        $user_=json_decode($user,true);
        return view('user.profile', ['user' => $user_]);
    }

    // public function log($id){
    // 	return view('user.profile', ['Log' => Log::findOrFail($id)]);
    // }
   public function setCache(){
   	   Cache::put('key','34343434','11111');
   }

   public function profile($id){
   	   return redirect()->action(
	    'Test\ArticleController@show', ['id' => 9]
	   );
   }






}