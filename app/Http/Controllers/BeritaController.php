<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\User;
use App\Models\KategoriBerita;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaController extends Controller
{
    function getBerita()
    {
        $beritas = Berita::get();
        $user = User::get();
        $kategori_berita = KategoriBerita::get();
        return view('beritas.berita', compact('beritas', 'kategori_berita'));
    }
    function getIdBerita($id)
    {
        $user = User::all();
        $kategori_berita = KategoriBerita::all();
        $beritas = Berita::findOrFail($id);
        return view('beritas.edit', compact('user', 'beritas', 'kategori_berita'));
    }
    function tambahBerita()
    {
        $user = User::all();
        $kategori_berita = KategoriBerita::all();
        return view('beritas.tambah', compact('user', 'kategori_berita'));
    }
    function postBerita(Request $request)
    {
        Alert::success('Berhasil', 'Data berhasil ditambah!');
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:85',
            'kategori_berita_id' => 'required',
            'isi' => 'required',
            'tgl' => 'required|date|date_format:Y-m-d',
            'status' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $gambar = $request->file('gambar');
        $filename = date('Y-m-d') . $gambar->getClientOriginalName();
        $path = 'berita-file/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($gambar));

        $beritas['judul'] = $request->judul;
        $beritas['kategori_berita_id'] = $request->kategori_berita_id;
        $beritas['isi'] = $request->isi;
        $beritas['gambar'] = $filename;
        $beritas['tgl'] = $request->tgl;
        $beritas['status'] = $request->status;
        $beritas['user_id'] = $request->user_id;
        Berita::create($beritas);
        //dd($request->all());
        return redirect('/Berita')->with('success', 'Data berhasil ditambah!');
    }
    function editBerita(Request $request, $id)
    {
        Alert::success('Berhasil', 'Data berhasil diubah!');
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:85',
            'kategori_berita_id' => 'required',
            'isi' => 'required',
            'tgl' => 'required|date|date_format:Y-m-d',
            'status' => 'required',
            'user_id' => 'required|exists:user, id',
        ]);
        //if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $gambar = $request->file('gambar');
        $filename = date('Y-m-d') . $gambar->getClientOriginalName();
        $path = 'berita-file/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($gambar));

        $beritas['judul'] = $request->judul;
        $beritas['kategori_berita_id'] = $request->kategori_berita_id;
        $beritas['isi'] = $request->isi;
        $beritas['gambar'] = $filename;
        $beritas['tgl'] = $request->tgl;
        $beritas['status'] = $request->status;
        $beritas['user_id'] = $request->user_id;

        Berita::whereId($id)->update($beritas);
        //dd($request->all());
        return redirect('/Berita')->with('success', 'Data berhasil diubah!');
    }
    function detailBerita($id)
    {
        $user = User::get();
        $kategori_berita = KategoriBerita::get();
        $beritas = Berita::findOrFail($id);
        return view('beritas.detail', compact('beritas', 'user', 'kategori_berita'));
    }
    function deleteBerita($id)
    {
        $beritas = Berita::find($id);
        if ($beritas) {
            $beritas->delete();
        }
        Alert::success('Berhasil', 'Data berhasil dihapus!');
        return redirect('/Berita')->with('toast_success', 'Data berhasil dihapus!');
    }
    function pdfBerita()
    {
        $beritas = Berita::get();
        return view('beritas.pdf', compact('beritas'));
    }
}
