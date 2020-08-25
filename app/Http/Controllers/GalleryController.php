<?php

namespace App\Http\Controllers;
use App\Gallery;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view('gallery.index')->with('galleries', $gallery);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
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
            'title'    => 'required',
            'image'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000000',
            'order_no' => 'required'
        ]);

        $gallery = NEW Gallery;
        $gallery->title = $request->input('title');
        $gallery->order_no = $request->input('order_no');

        $image = $request->file('image');
        $name = str_slug($request->input('image')).''.time();
        $folder = '/images/gallery/';
        $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
        request()->image->move(public_path('images/gallery'), $filePath);
        $gallery->image = $filePath;

        $gallery->save();
        
        return redirect('/dashboard/gallery')->with('success', 'Gallery Created');
        
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('gallery.edit')->with('gallery', $gallery);
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
            'title'    => 'required',
            'order_no' => 'required'
        ]);
        
        $gallery = Gallery::find($id);

        if ($request->hasFile('image')) 
        {
            $image_up = $request->input('image');
            $image_path = '/images/gallery/'.$gallery->image;
            if($gallery->image  != $image_up) 
            {
                unlink(public_path() . $gallery->image);
            }
            $dir = '/images/gallery/';
            $image = $request->file('image');
            $name = str_slug($request->input('image')).''.time();
            $filePath = $dir . $name. '.' . $image->getClientOriginalExtension();
            request()->image->move(public_path('images/gallery'), $filePath);
            $gallery->image = $filePath;
        } 
        $gallery->title = $request->input('title');
        $gallery->order_no = $request->input('order_no');

        $gallery->save();

        return redirect('/dashboard/gallery')->with('success', 'Gallery Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);

        unlink(public_path() . $gallery->image);
        $gallery->delete();    
        return redirect('/dashboard/gallery')->with('danger','Gallery Removed');
    }
}
