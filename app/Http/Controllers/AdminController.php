<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Album;
use App\Models\Berita;
use App\Models\GaleriFoto;
use App\Models\HalStatis;
use App\Models\KategoriBerita;
use App\Models\KategoriHalStatis;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    function index()
    {
        $agendas = Agenda::get();
        $count_agenda = count($agendas);

        $beritas = Berita::get();
        $count_berita = count($beritas);

        $statis = HalStatis::get();
        $count_statis = count($statis);

        $foto = GaleriFoto::get();
        $count_foto = count($foto);

        $albums = Album::get();
        $count_album = count($albums);

        $katberita = KategoriBerita::get();
        $count_katberita = count($katberita);

        $kathalstatis = KategoriHalStatis::get();
        $count_kathalstatis = count($kathalstatis);

        $user = User::get();
        $count_user = count($user);

        return view('dashboard', [
            'totalagenda' => $count_agenda,
            'totalberita' => $count_berita,
            'totalstatis' => $count_statis,
            'totalfoto' => $count_foto,
            'totalalbum' => $count_album,
            'totalkatberita' => $count_katberita,
            'totalkathalstatis' => $count_kathalstatis,
            'totaluser' => $count_user,
        ]);
    }

    function getProfile()
    {
        $data = User::get();
        return view('profile', compact('data'));
    }

    function edit(Request $request)
    {
        Alert::success('Sukses', 'Data berhasil diubah!');

        $foto = $request->file('foto');
        $filename = date('Y-m-d') . $foto->getClientOriginalName();
        $path = 'pengguna-foto/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($foto));

        $user = User::findOrFail(Auth::user()->id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->username = $request->input('username');
        $user->role = $request->input('role');
        $user['foto'] = $filename;
        $user->save();
        //dd($request->all());
        return redirect('/Profile')->with('success', 'Data berhasil diedit!');
    }
}
