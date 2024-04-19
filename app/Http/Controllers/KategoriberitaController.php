<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\KategoriBerita as KatBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriberitaController extends Controller
{
    function getKategoriberita()
    {
        $katberitas = KatBerita::get();
        return view('katberitas.katberita', compact('katberitas'));
    }
    function getIdKategoriBerita($id)
    {
        $user = User::all();
        $katberitas = KatBerita::findOrFail($id);
        return view('katberitas.edit', compact('user', 'katberitas'));
    }
    function tambahKategoriberita()
    {
        $user = User::all();
        return view('katberitas.tambah', compact('user'));
    }
    function postKategoriberita(Request $request)
    {
        Alert::success('Berhasil', 'Data berhasil ditambah!');
        $validator = Validator::make($request->all(), [
            'kategori' => 'required|string|max:50',
            'keterangan' => 'required|string|max:50',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $katberitas['kategori'] = $request->kategori;
        $katberitas['keterangan'] = $request->keterangan;

        KatBerita::create($katberitas);
        // dd($request->all());
        return redirect('/Kategoriberita')->with('success', 'Data berhasil ditambah!');
    }
    function editKategoriberita(Request $request, $id)
    {
        Alert::success('Berhasil', 'Data berhasil diubah!');
        $validator = Validator::make($request->all(), [
            'kategori' => 'required|string|max:50',
            'keterangan' => 'required|string|max:50',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $katberitas['kategori'] = $request->kategori;
        $katberitas['keterangan'] = $request->keterangan;
        KatBerita::whereId($id)->update($katberitas);
        //dd($request->all());
        return redirect('/Kategoriberita')->with('success', 'Data berhasil diedit!');
    }
    function detailKategoriberita($id)
    {
        $user = User::all();
        $katberitas = KatBerita::findOrFail($id);
        return view('katberitas.detail', compact('katberitas', 'user'));
    }
    function deleteKategoriberita($id)
    {
        $katberitas = KatBerita::find($id);
        if ($katberitas) {
            $katberitas->delete();
        }
        Alert::success('Berhasil', 'Data berhasil dihapus!');
        return redirect('/Kategoriberita')->with('toast_success', 'Data berhasil dihapus!');
    }
}
