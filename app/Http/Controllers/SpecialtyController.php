<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    public function index()
    {
        $specialties = [
            ['title' => 'Математика с немски', 'description' => 'Описание за Математика с немски', 'learn' => ['Тема 1', 'Тема 2', 'Тема 3']],
            ['title' => 'Математика с английски', 'description' => 'Описание за Математика с английски', 'learn' => ['Тема 1', 'Тема 2', 'Тема 3']],
            ['title' => 'Софтуерни и хардуерни науки', 'description' => 'Описание за Софтуерни и хардуерни науки', 'learn' => ['Програмиране и разработка на софтуер.', 'Програмиране и разработка на софтуер.', 'Програмиране и разработка на софтуер.']],
            ['title' => 'Природни науки', 'description' => 'Описание за Природни науки', 'learn' => ['Тема 1', 'Тема 2', 'Тема 3']],
        ];

        return view('specialties.index', compact('specialties'));
    }
}
