<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function item1(){
        return redirect()-> to('https://www.educastudio.com/category/marbel-edu-games') ;
    }
    public function item2(){
        return redirect()-> to('https://www.educastudio.com/category/marbel-and-friends-kids-games') ;
    }
    public function item3(){
        return redirect()-> to('https://www.educastudio.com/category/riri-story-books') ;
    }
    public function item4(){
        return redirect()-> to('https://www.educastudio.com/category/kolak-kids-songs') ;
    }
}
