<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news1(){
        return redirect()-> to('https://www.educastudio.com/news') ;
    }
    public function news2($id){
        return redirect()-> to('https://www.educastudio.com/news/'.$id);
    }
}