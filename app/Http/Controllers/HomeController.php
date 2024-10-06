<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::orderBy('date', 'desc')->take(3)->get();
        return view('home', ['news' => $news]);
    }

    public function news()
    {
        $news = News::orderBy('date', 'desc')->get();
        return view('news', ['news' => $news]);
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function history()
    {
        return view('history');
    }

    public function documents()
    {
        return view('documents');
    }
}
