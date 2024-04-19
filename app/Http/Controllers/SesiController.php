<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }
    function login(Request $request)
    {
        Alert::success('Selamat Datang!', 'Anda Berhasil Masuk!');
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
                'g-recaptcha-response' => 'required|captcha'
            ],
            [
                'email.required' => 'Email wajib diisi',
                'password.required' => 'Password wajib diisi',
            ]
        );
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($infologin)) {
            return redirect('Dashboard');
            exit();
        } else {
            return redirect('')->withErrors('Email dan password yang dimasukan tidak sesuai')->withInput();
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
