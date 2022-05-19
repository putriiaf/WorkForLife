<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = "My Profile";
        // $user_id = request()->user()->id;
        // $profilUser = User::where('id', $user_id)->first();
        // $my_posts = Post::where('user_id', $user_id)->get();
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . session('token'),
        ])->get('http://apiwfl.herokuapp.com/api/profile');
        $response = $response->object();
        $profilUser = $response->profile;
        $my_posts = $response->post;
        return view('/user/profile', compact(['title', 'profilUser', 'my_posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $title = "My Profile";
        // $id = auth()->user()->id;
        // $user = User::where('id', $id)->first();
        // $my_posts = Post::where('user_id', $id)->get();
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . session('token'),
        ])->get('http://apiwfl.herokuapp.com/api/profile/'.$user);
        $response = $response->object();
        $profilUser = $response->profile;
        $my_posts = $response->post;
        return view('/user/profile', compact(['title', 'profilUser', 'my_posts']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($username)
    {
        $title = "Edit Profile";
        // $profilUser = User::where('username', $username)->first();
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . session('token'),
        ])->get('http://apiwfl.herokuapp.com/api/profile/'.$username.'/edit');
        $profilUsers = $response->object();
        return view('/user/editProfile', compact(['title', 'profilUsers']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $id = $request->user()->id;
        $profilUser = User::where('id', $id)->first();
        $rules = [
            'nama' => 'required|max:255',
            'no_telp' => 'required|numeric|digits_between:10,14',
            'jk' => 'required|max:1',
            'posisi' => 'required|max:255',
            'perusahaan' => 'required|max:255',
        ];

        if ($request->username != $profilUser->username) {
            $rules['username'] = 'required|min:3|max:255|unique:users';
        }
        if ($request->email != $profilUser->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }
        if ($request->password != $profilUser->passoword) {
            $rules['password'] = 'required|min:3|max:255';
        }

        $validatedData = $request->validate($rules);
        $validatedData['password'] = Hash::make($validatedData['password']);

        if ($request->file('foto_profil')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['foto_profil'] = $request->file('foto_profil')->store('foto-profil');
        }

        $validatedData['id'] = $id;
        User::where('id', $id)->update($validatedData);
        return redirect('/profile')->with('success', 'Profile updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
