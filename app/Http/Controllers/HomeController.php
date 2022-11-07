<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $post = Http::get('http://apiwfl.herokuapp.com/api/posts');
        $loker = Http::get('http://apiwfl.herokuapp.com/api/lokers');
        $post = $post->object();
        $loker = $loker->object();
        return view('index', [
            'title' => 'Home',
            'active' => 'home',
            'posts' => $post->data,
            'latest_loker' => $loker->data
        ]);
    }
}
