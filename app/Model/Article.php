<?php

namespace App\Model;

// use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class Article
{
    // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     `id`,`title`,`art_info`,`art_keyword`,`art_content`,`art_writer`,`art_time`,`type_id`,`art_url`,`art_img`,`art_userid`,`sort_order`,`art_click`,`art_set`,`art_attr`,
    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'art_keyword', 'art_content',
    // ];


    public static function getArticle($id){
        $article = DB::table('lzh_article')->where([
            ['id', '=', $id]
        ])->get();
        
        return $article;

    }
}
