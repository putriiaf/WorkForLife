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
            "title" => "Upload Posts",
            'message' => NULL
        ]);
    }
    public function edit($id)
    {
        return view('posts.editPost', [
            'title' => 'Edit Post',
            'posts' => Post::where('id', $id)->first()
            // 'posts' => $posts
        ]);
    }
    public function update(Request $request, Post $post)
    {
        $rules = [
            'judul' => 'required|max:255',
        //     'institusi_penyelenggara' => 'required|max:255',
        //     'tgl_event' => 'required',
            'deskripsi' => 'required',
        //     'link_reg' => 'required',
        //     'status_event' => 'required',
        //     'category_id' => 'required',
            'user_id' => 'required'
        //     'domisili_id' => 'required',
        //     'poster' => 'image|file|max:5000',
        ];
        $validatedData = $request->validate($rules);
        $validatedData["user_id"] = auth()->user()->id;

        Post::where('id', $post->id)->update($validatedData);
        return redirect('/profile');
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
