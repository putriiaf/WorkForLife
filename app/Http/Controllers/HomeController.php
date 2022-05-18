<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Vacancy;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'Home',
            'active' => 'home',
            'latest_posts' => Post::latest()->limit(5)->get(),
            'latest_loker' => Vacancy::latest()->limit(3)->get()
        ]);
    }
}
