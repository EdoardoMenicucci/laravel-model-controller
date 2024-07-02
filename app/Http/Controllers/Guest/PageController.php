<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $data = ['movies' => $movies];
        return view('home', $data);
    }

    public function onlyTitle()
    {
        $movies = Movie::all();
        $data = ['movies' => $movies];
        return view('title', $data);
    }
}
