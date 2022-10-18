<?php

namespace App\Http\Controllers;

use App\Mail\VisitorContact;
use App\Post;
use App\Category;
use App\About;
use App\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class WebsiteController extends Controller
{
    public function index()
    {
          $categories = Category::orderBy('name', 'ASC')->where('is_published', '1')->get();
        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->where('is_published', '1')->paginate(5);
           $abouts = About::orderBy('id', 'DESC')->get();
            $infos = Info::orderBy('id', 'DESC')->get();

     
       
            
    
        return view('website.index', compact('abouts','categories','posts','infos'));
    }
   
    public function post($slug)
    {
        $post = Post::where('slug', $slug)->where('post_type', 'post')->where('is_published', '1')->first();
        if ($post) {
            return view('website.post', compact('post'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->where('is_published', '1')->first();
        if ($category) {
            $posts = $category->posts()->orderBy('posts.id', 'DESC')->where('is_published', '1')->paginate(6);
            return view('website.category', compact('category', 'posts'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }
    }
    
        public function  about()
      {
        $about = About::where('en_title',$en_title)->first();
        if ($about) {
            return view('website.about', compact('about'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }
    }
       
     public function aboutt()
    {
        return view('website.about');
    }
     
    public function showContactForm()
    {
        return view('website.contact');
    }
   
    public function submitContactForm(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        Mail::to('noara22797@gmail.com')->send(new VisitorContact($data));

        Session::flash('message', 'Thank you for your email');
        return redirect()->route('contact.show');
    }
         public function information()
        {
            return view('website.information');
        }

     public function get_image($name)
        {

            $file = Storage::exists('galleries/'.$name);

            if($file)
            {
                $file = Storage::download('galleries/'.$name);
                return $file;
            }
            else
            {
                return false;
            }

        }
}
