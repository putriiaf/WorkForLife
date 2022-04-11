<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;

class UploadPostsController extends Controller
{
    public function index()
    {
        return view('posts.upload', [
            "title" => "Pengajuan Event",
            'active' => 'categories',
            'message' => NULL
        ]);
    }

    public function store(Request $request)
    {
            Post::create([
                'judul' => request('judul'),
                'deskripsi' => request('deskripsi'),
                'user_id' => request('user_id')
                //'slug' => Str::replace(' ', '-', Str::lower(request('nama_event')))
            ]);

            return redirect('/uploadpost')->with('success', 'Postingan diunggah.');
    }
}
