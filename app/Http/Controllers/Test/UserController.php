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
      // $exist=DB::table('lzh_ad')->where('ad_type', 2)->exists();
      // $ad=DB::table('lzh_ad')->selectRaw('id * ? as price_with_tax', [1.0825])->get();//id is the column name,'?' stand for argument(1.0825)
        // $c=DB::table('lzh_ad')->where([['content->img','=', 'abc'],['id','=',2]])->get();//ERROR
        $users = DB::table('members')->paginate(15);
       
   
        return view('user.profile', ['users' => $users]);
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