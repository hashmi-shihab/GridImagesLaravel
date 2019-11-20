<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index()
    {
        return view('gallery.list');
    }


    public function create()
    {
        return view('gallery.create');
    }


    public function store(Request $request)
    {
        //
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
