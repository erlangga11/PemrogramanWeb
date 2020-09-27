<?php
/*Ini Pertemuan 2
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
    	return 'Hello World';
    }
    public function about(){
    	return 'Erlangga Natanegara <br>
    			1931710134';
    }
    public function sdtg(){
    	return 'Selamat Datang';
    }
} */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class WelcomeController extends Controller
{
public function hello() {
return view('blog.hello', ['name' => 'Erlangga Natanegara']);
}
}