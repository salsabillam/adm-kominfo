<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\GaleriFoto;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class GaleriFotoController extends Controller
{
    function getGalerifoto()
    {
        $galerifotos = GaleriFoto::all();
        return view('galerifotos.galerifoto', compact('galerifotos'));
    }
    function getIdGalerifoto($id)
    {
        $user = User::all();
        $albums = Album::all();
        $galerifotos = GaleriFoto::findOrFail($id);
        return view('galerifotos.edit', compact('user', 'galerifotos', 'albums'));
    }
    function tambahGalerifoto()
    {
        $user = User::all();
        $albums = Album::all();
        return view('galerifotos.tambah', compact('user', 'albums'));
    }
    function postGalerifoto(Request $request)
    {
        Alert::success('Berhasil', 'Data berhasil ditambah!');
        $validator = Validator::make($request->all(), [
            'album_id' => 'required',
            'judul' => 'required|string|max:100',
            'keterangan' => 'required|string|max:100',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $foto = $request->file('foto');
        $filename = date('Y-m-d') . $foto->getClientOriginalName();
        $path = 'galerifoto-file/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($foto));

        $galerifotos['album_id'] = $request->album_id;
        $galerifotos['judul'] = $request->judul;
        $galerifotos['keterangan'] = $request->keterangan;
        $galerifotos['foto'] = $filename;

        GaleriFoto::create($galerifotos);
        // dd($request->all());
        return redirect('/Galerifoto')->with('success', 'Data berhasil ditambah!');
    }
    function editGalerifoto(Request $request, $id)
    {
        Alert::success('Berhasil', 'Data berhasil diubah!');
        $validator = Validator::make($request->all(), [
            'album_id' => 'required',
            'judul' => 'required|string|max:100',
            'keterangan' => 'required|string|max:100',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $foto = $request->file('foto');
        $filename = date('Y-m-d') . $foto->getClientOriginalName();
        $path = 'galerifoto-file/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($foto));

        $galerifotos['album_id'] = $request->album_id;
        $galerifotos['judul'] = $request->judul;
        $galerifotos['keterangan'] = $request->keterangan;
        $galerifotos['foto'] = $filename;
        GaleriFoto::whereId($id)->update($galerifotos);
        //dd($request->all());
        return redirect('/Galerifoto')->with('success', 'Data berhasil diedit!');
    }
    function detailGalerifoto($id)
    {
        $user = User::all();
        $albums = Album::get();
        $galerifotos = GaleriFoto::findOrFail($id);
        return view('galerifotos.detail', compact('galerifotos', 'user', 'albums'));
    }
    function deleteGalerifoto($id)
    {
        $galerifotos = GaleriFoto::find($id);
        if ($galerifotos) {
            $galerifotos->delete();
        }
        Alert::success('Berhasil', 'Data berhasil dihapus!');
        return redirect('/Galerifoto')->with('toast_success', 'Data berhasil dihapus!');
    }
}
