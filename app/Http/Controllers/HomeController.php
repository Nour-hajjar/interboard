<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\About;
use App\Info;
use Illuminate\Http\Request;




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
        $categories = Category::orderBy('id', 'DESC')->limit('3')->get();
          $abouts = About::orderBy('id', 'ASC')->get();
        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->get();
       $infos = Info::orderBy('id', 'DESC')->get();
        return view('admin.index', compact('categories', 'posts','abouts','infos'));
    }
}
