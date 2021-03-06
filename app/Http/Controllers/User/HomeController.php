<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Model\user\post;
use App\Model\user\category;
use App\Model\user\tag;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $posts = post::where('status',1)->latest()->paginate(5);  
        //$posts = post::latest('status',1)->paginate(5);
        return view('user.home', compact('posts'));
    }
    
    public function category(category $category)
    {
        $posts = $category->posts();
        return view('user.home',compact('posts'));
    }
    
    public function tag(tag $tag)
    {
        $posts = $tag->posts();
        return view('user.home',compact('posts'));
    }
}
