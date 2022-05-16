<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->is_admin == 1) {
                return redirect()->intended('/dashboard/events');
            } else {
                return redirect()->intended('/');
            }
        }

        return back()->with('loginError', 'Login failed!');
        // $client = new Client();
        // $response = $client->request('POST', 'http://localhost:8080/api/login');
        // $data = json_decode($response->getBody(),true);
        // $token = $data['access_token'];
        // $role = $data['role'];
        // $id = $data['id'];
        // $company_id = $data['company_id'];
        // $foto_profil = $data['foto_profil'];
        // session(['token' => $token]);
        // session(['role' => $role]);
        // session(['id' => $id]);
        // session(['company_id' => $company_id]);
        // session(['foto_profil' => $foto_profil]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // $client = new Client();
        // $response = $client->post('http://localhost:8080/api/logout', [
        //     'headers' => [
        //         'Accept' => 'application/json',
        //         'Authorization' => 'Bearer ' . session('token'),
        //     ],
        // ]);
        // $data = json_decode($response->getBody(),true);
        // $request->session()->flush();
        return redirect('/');
    }
}
