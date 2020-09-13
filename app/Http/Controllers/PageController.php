<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hello(){
    	return 'Hello World';
    }
    public function about(){
    	return 'Erlangga Natanegara <br>
    			1931710134';
    }
    

    }
