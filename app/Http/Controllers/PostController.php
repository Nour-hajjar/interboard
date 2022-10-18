<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->get();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "thumbnail" => 'required',
           'en_title' => ['required', 'regex:/^([a-zA-Z0-9]+)(\s[a-zA-Z0-9]+)*$/'],

          'ar_title' => ['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'],
               'en_sub_title' => ['nullable', 'regex:/^([a-zA-Z0-9]+)(\s[a-zA-Z0-9]+)*$/'],

          'ar_sub_title' => [ 'nullable','regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'],

                "en_details" => 'required',
                "ar_details" => 'required',
            "category_id" => "required"
        ],
            [
                'thumbnail.required' => 'Enter thumbnail url',
                'en_title.required' => 'Enter title',
                'ar_details.required' => 'Enter details',
                'category_id.required' => 'Select categories',
            ]
        );

        $post = new  Post();
        $post->user_id = Auth::id();
        $post->thumbnail = $request->thumbnail;
        $post->en_title = $request->en_title;
        $post->ar_title = $request->ar_title;
        $post->slug = str_slug($request->en_title);
        $post->en_sub_title = $request->en_sub_title;
        $post->ar_sub_title = $request->ar_sub_title;
        $post->en_details = $request->en_details;
        $post->ar_details = $request->ar_details;
        $post->is_published = $request->is_published;
        $post->post_type = 'post';
        $post->save();

        $post->categories()->sync($request->category_id, false);

        Session::flash('message', 'Post created successfully');
        return redirect()->route('posts.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
          return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.post.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        
        $post->user_id = Auth::id();
        $post->thumbnail = $request->thumbnail;
        $post->en_title = $request->en_title;
        $post->slug = str_slug($request->en_title);
        $post->ar_title = $request->ar_title;
        $post->en_sub_title = $request->en_sub_title;
        $post->ar_sub_title = $request->ar_sub_title;
        $post->en_details = $request->en_details;
        $post->ar_details = $request->ar_details;
        $post->is_published = $request->is_published;
        $post->save();

        $post->categories()->sync($request->category_id);

        Session::flash('message', 'Post updated successfully');
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        Session::flash('delete-message', 'Post deleted successfully');
        return redirect()->route('posts.index');
    }
}
