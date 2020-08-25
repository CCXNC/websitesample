<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('news.index')->with('news',$news);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
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
            'title'       => 'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000000',
            'content'     => 'required',
            'is_gallery'  => 'required',
        ]);

        $news = NEW News;
        $news->title = $request->input('title');
        $news->is_gallery = $request->input('is_gallery');
        $news->content = $request->input('content');
        $news->created_by = auth()->user()->name;

        $image = $request->file('image');
        $name = str_slug($request->input('image')).''.time();
        $folder = '/images/';
        $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $filePath);
        $news->image = $filePath; 

        $news->save();

        return redirect('/dashboard/news')->with('success', 'News Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $new = News::find($id);
        return view('news.show')->with('new', $new);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('news.edit')->with('new', $news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'       => 'required',
            //'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000000',
            'content'     => 'required',
            'is_gallery'  => 'required',
        ]);

        $news = News::find($id);
        if ($request->hasFile('image')) 
        {
            $image_up = $request->input('image');
            $image_path = '/images/'.$news->image;
            if($news->image  != $image_up) 
            {
                unlink(public_path() . $news->image);
            }
            $dir = '/images/';
            $image = $request->file('image');
            $name = str_slug($request->input('image')).''.time();
            $filePath = $dir . $name. '.' . $image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $filePath);
            $news->image = $filePath;
        } 
        
        $news->title = $request->input('title');
        $news->is_gallery = $request->input('is_gallery');
        $news->content = $request->input('content');
        $news->created_by = auth()->user()->name;

        $news->save();

        return redirect('/dashboard/news')->with('success', 'News Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);

        unlink(public_path() . $news->image);
        $news->delete();    
        return redirect('/dashboard/news')->with('danger','News Removed');

    }
}
