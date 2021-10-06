<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use PDF;
use Illuminate\Support\Facades\Gate;
class ArticleController extends Controller
{
   /* public function article ($page){
        return view('article',['name'=>'Erlangga Natanegara Putra Aryando'],['page'=>$page]);
    }
    public function postbs (){
        return view('postbs');
    }*/
    /*public function __construct()
    {
    $this->middleware('auth');
    $this->middleware(function($request, $next){
    if(Gate::allows('manage-articles')) return $next($request);
    abort(403, 'Anda tidak memiliki cukup hak akses');
    });
    }*/

    public function __invoke($id){
        $articles = \App\Article::find($id);
        $articles = json_decode(json_encode($articles));
        return view('articles', ['articles'=>$articles], ['id'=>$id]);
        $value = Cache::rememberForever('articles', function(){
            return \app\articles::all();
        });    
    }
    public function index(){
        $articles = Article::all();
        return view('manage',['articles' => $articles]);
    }
    public function add(){
    return view('addarticle');
    }

    public function create(Request $request){
    if($request->file('image')){
    $image_name = $request->file('image')->store('images','public');
    }
    Article::create([
    'title' => $request->title,
    'content' => $request->content,
    'featured_image' => $image_name,
    ]);
    return redirect('/homecc');
    }
    public function edit($id){
    $article = Article::find($id);
    return view('editarticle',['article'=>$article]);
    }

    public function update($id, Request $request){
    $article = Article::find($id);
    $article->title = $request->title;
    $article->content = $request->content;
    if($article->featured_image && file_exists(storage_path('public/' . $article->featured_image)))
    { \Storage::delete('public/'.$article->featured_image);}
    $image_name = $request->file('image')->store('images', 'public');
    $article->featured_image = $image_name;
    $article->save();
    return redirect('/homecc');
    }
    public function delete($id){
    $article = Article::find($id);
    $article->delete();
    return redirect('/homecc');
    }

    public function cetak_pdf(){
        $article = Article::all();
        $pdf = PDF::loadview('articles_pdf',['article'=>$article]);
        return $pdf->stream();
       }       

}