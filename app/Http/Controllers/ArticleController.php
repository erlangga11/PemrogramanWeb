<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ArticleController extends Controller
{
   /* public function article ($page){
        return view('article',['name'=>'Erlangga Natanegara Putra Aryando'],['page'=>$page]);
    }
    public function postbs (){
        return view('postbs');
    }*/
    public function __invoke($id){
        $articles = \App\Article::find($id);
        $articles = json_decode(json_encode($articles));
        return view('articles', ['articles'=>$articles], ['id'=>$id]);
        $value = Cache::rememberForever('articles', function(){
            return \app\articles::all();
        });    
    }
}