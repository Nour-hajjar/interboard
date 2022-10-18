<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $infos = Info::orderBy('id', 'DESC')->get();
        return view('admin.info.index', compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           $info = Info::orderBy('id', 'DESC')->get();
        return view('admin.info.create', compact('info'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function search (Request $request)
{
    $search = $request->get('search');
    $infos = Info::when($search, function($sql) use ($search) {
            $sql->where('code', 'like', '%' . $search . '%');
            
        })
        ->paginate(100);
// dd($branchs);
    return view('website.search', compact('infos'));
}

    public function store(Request $request)
    {
         $this->validate($request, [
        
            "en_name" => 'required',
            "ar_name" => 'required',
            "name" => 'required',
            "name_a" => 'required',
            "en_course" => 'required',
            "ar_course" => 'required',
            "code" => 'required',
            "date" => 'required',
        

       
            
       ]
        );

        $info = new  Info();
        $info->user_id = Auth::id();
        $info->en_name= $request->en_name;
        $info->ar_name = $request->ar_name;
        $info->name = $request->name;
        $info->name_a = $request->name_a;
        $info->en_course = $request->en_course;
        $info->ar_course = $request->ar_course;
        $info->code = $request->code;
        $info->date = $request->date;

        $info->save();

      

        Session::flash('message', 'info created successfully');
        return redirect()->route('infos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function show(Info $info)
    {
         return view('admin.info.show', compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(Info $info)
    {
        return view('admin.info.edit', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Info $info)
    {
        
         $this->validate($request, [
        
            "en_name" => 'required',
            "ar_name" => 'required',
            "name" => 'required',
            "name_a" => 'required',
            "en_course" => 'required',
            "ar_course" => 'required',
            "code" => 'required',
            "date" => 'required',
            ]
        );

        $info->user_id = Auth::id();
        $info->en_name= $request->en_name;
        $info->ar_name = $request->ar_name;
        $info->name = $request->name;
        $info->name_a = $request->name_a;
        $info->en_course = $request->en_course;
        $info->ar_course = $request->ar_course;
        $info->code = $request->code;
        $info->date = $request->date;

        $info->save();

      

        Session::flash('message', 'info created successfully');
        return redirect()->route('infos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info $info)
    {
        
        $info->delete();

        Session::flash('delete-message', 'info deleted successfully');
        return redirect()->route('infos.index');
    }
}
