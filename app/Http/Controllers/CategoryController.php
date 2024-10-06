<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($category)
    {
        $documents = Document::where('category', $category)->get();
        return view('categories.show', compact('documents', 'category'));
    }
}