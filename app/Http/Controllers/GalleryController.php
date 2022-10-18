<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use PharIo\Manifest\Url;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $galleries = Gallery::orderBy('id', 'DESC')->get();
        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
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
            "image_url" => 'required',
            'image_url.*'=>'mimes:jpg,jpeg,png,gif,doc,docx,pdf,mp4,svg'
        ],
            [
                'image_url.required' => 'Select image',
                'image_url.mimes'=>'file must be jpg,jpeg,png,gif,doc,docx,pdf'
            ]
       );

        foreach ($request->image_url as $image_url) {

            $gallery = new Gallery();
            $gallery->user_id = Auth::id();

            if ($save = Storage::put('galleries',$image_url))
            $gallery->image_url = explode('/',$save)[1];
            // $gallery->image_url = $image_url->storeAs('public/galleries', $fileNameToStore);
            $save = $gallery->save();
        }

        Session::flash('message', 'Images uploaded successfully');
        return redirect()->route('galleries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        // Delete image file
        Storage::delete('galleries/' . $gallery->image_url);

        // Delete data from table
        $gallery->delete();

        Session::flash('delete-message', 'Image deleted successfully');
        return redirect()->route('galleries.index');
    }
}
