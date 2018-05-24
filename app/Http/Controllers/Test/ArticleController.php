<?php

namespace App\Http\Controllers\Test;

use App\Model\Article;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ArticleController extends Controller
{
    public function show($id)
    {
    	// $article = DB::table('lzh_article')->where([
     //        ['id', '=', $id]
     //    ])->get();
        // return view('article', ['article' => Article::getArticle($id)]);
        $article = DB::table('lzh_article')->where([['id','=',$id]])->get();
        return view('article', ['article' => $article]);
    }

    // public function log($id){
    // 	return view('user.profile', ['Log' => Log::findOrFail($id)]);
    // }
}