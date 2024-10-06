<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('galleries.index', compact('galleries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|max:2048',
        ]);

        $path = $request->file('image')->store('public');

        Gallery::create([
            'title' => $request->title,
            'image' => basename($path),
        ]);

        return redirect()->route('galleries.index');
    }
}
