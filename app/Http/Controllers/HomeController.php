<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articleAll=Article::all();
        $adticle=json_decode(json_encode($articleAll));
        return view ('homequiz')->with(compact('articleAll'));
        $value = Cache::rememberForever('article',function(){
            return \App\Article::all();
        });
    }
}
