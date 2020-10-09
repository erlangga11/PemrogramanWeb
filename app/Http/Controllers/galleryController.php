<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class galleryController extends Controller
{
    public function gallery(){
        $articleAll=Article::all();
        $adticle=json_decode(json_encode($articleAll));
        return view ('gallery')->with(compact('articleAll'));
        $value = Cache::rememberForever('article',function(){
            return \App\Article::all();
        });
}
}