<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use App\Article;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function index(){
         $articleAll=Article::all();
         $adticle=json_decode(json_encode($articleAll));
         return view ('homequiz')->with(compact('articleAll'));
         $value = Cache::rememberForever('article',function(){
            return \App\Article::all();
        });
    }
    public function homecc(){
        $articleAll=Article::all();
        $adticle=json_decode(json_encode($articleAll));
        return view ('home')->with(compact('articleAll'));
        $value = Cache::rememberForever('article',function(){
            return \App\Article::all();
        });
    }
    public function homequiz(){
        $articleAll=Article::all();
        $adticle=json_decode(json_encode($articleAll));
        return view ('homequiz')->with(compact('articleAll'));
        $value = Cache::rememberForever('article',function(){
            return \App\Article::all();
        });
    }
}
