<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index()
    {
        $images = Gallery::all();
//        dd($images);

        return view('gallery.list',compact('images'));
    }


    public function create()
    {
        return view('gallery.create');
    }


    public function store(Request $request)
    {

        $images=array();
        if($files=$request->file('image')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move('galleryImages',$name);
                $images[]=$name;
            }
        }


        Gallery::create([
            'image'=>  implode("|",$images),
        ]);


        return response()->json(['uplodaded'=>'/galleryImages'.$name]);
    }


    public function show(Gallery $gallery)
    {
        //
    }


    public function edit(Gallery $gallery)
    {
        return view('gallery.edit');
    }


    public function update(Request $request, Gallery $gallery)
    {
        //
    }


    public function destroy(Gallery $gallery)
    {
        //
    }
}
