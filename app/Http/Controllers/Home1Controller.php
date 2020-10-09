<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
class HomeController extends Controller

{
    //public function home(){
        //return view('home',['name'=>'Erlangga Natanegara Putra Aryando']);
        //$articles = DB::table('article') ->get();
    //}
    /*public function homebs(){
    	return view('homebs');
    }*/
    public function home(){
        $article=Article::all();
        return view('dbase',['article'=>$article]);
    }
    public function home2($id){
        $article=Article::find($id);
        return view('dbase2',['article'=>$article],['id'=>$id]);
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
