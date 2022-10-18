<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
         $abouts = About::orderBy('id', 'DESC')->get();
        return view('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       if(About::count()>=1){
            return redirect()->back()->with(['error'=>'abouts limit reached']);
        }
        $about = About::orderBy('id', 'DESC')->get();
        return view('admin.about.create', compact('about'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate($request, [
        
            "en_title" => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            "ar_title" => 'required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'  ],
            [
         
       
             "en_details" => 'required',
             "ar_details" => 'required',

       
            
       ]
        );

        $about = new  About();
        $about->user_id = Auth::id();
        $about->en_title= $request->en_title;
        $about->ar_title = $request->ar_title;
        $about->en_details = $request->en_details;
        $about->ar_details = $request->ar_details;
        $about->save();

      

        Session::flash('message', 'about created successfully');
        return redirect()->route('abouts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
           return view('admin.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
                  $this->validate($request, [
        
            "en_title" => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            "ar_title" => 'required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'  ],
            [
         
       
             "en_details" => 'required',
             "ar_details" => 'required',

       
            
       ]
        );
  
    
        $about->user_id = Auth::id();
        $about->en_title= $request->en_title;
        $about->ar_title = $request->ar_title;
        $about->en_details = $request->en_details;
        $about->ar_details = $request->ar_details;
        $about->save();

      

        Session::flash('message', 'about created successfully');
        return redirect()->route('abouts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
            if(About::count()>=1){
            return redirect()->back()->with(['error'=>'clients limit reached']);
        }
        
        $about->delete();

        Session::flash('delete-message', 'about deleted successfully');
        return redirect()->route('abouts.index');
    }
}
