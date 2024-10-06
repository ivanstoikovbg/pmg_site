<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->take(2)->get();
        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $news = News::findOrFail($id); 
        return view('news.show', compact('news'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'date' => 'required|date',
        ]);

        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'date' => $request->date,
        ]);

        return redirect()->route('news.index')->with('success', 'Новината е създадена успешно!');
    }
}
