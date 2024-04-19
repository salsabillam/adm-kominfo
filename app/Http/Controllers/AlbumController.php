<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class AlbumController extends Controller
{
    function getAlbumfoto()
    {
        $albumfotos = Album::get();
        return view('albumfotos.albumfoto', compact('albumfotos'));
    }
    function getIdAlbumfoto($id)
    {
        $user = User::all();
        $albumfotos = Album::findOrFail($id);
        return view('albumfotos.edit', compact('user', 'albumfotos'));
    }
    function tambahAlbumfoto()
    {
        $user = User::all();
        return view('albumfotos.tambah', compact('user'));
    }
    function postAlbumfoto(Request $request)
    {
        Alert::success('Berhasil', 'Data berhasil ditambah!');
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:100',
            'tgl' => 'required|date|date_format:Y-m-d',
            'cover' => 'required|image|max:2048',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $cover = $request->file('cover');
        $filename = date('Y-m-d') . $cover->getClientOriginalName();
        $path = 'album-image/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($cover));
        $albumfotos['judul'] = $request->judul;
        $albumfotos['tgl'] = $request->tgl;
        $albumfotos['user_id'] = $request->user_id;
        $albumfotos['cover'] = $filename;

        Album::create($albumfotos);

        return redirect('/Albumfoto')->with('toast_success', 'Data berhasil ditambah!');
    }
    function editAlbumfoto(Request $request, $id)
    {
        Alert::success('Berhasil', 'Data berhasil diubah!');
        //ddd($request);
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:100',
            'tgl' => 'required|date|date_format:Y-m-d',
            'cover' => 'required|image|max:2048',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $cover = $request->file('cover');
        $filename = date('Y-m-d') . $cover->getClientOriginalName();
        $path = 'album-image/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($cover));
        $albumfotos['judul'] = $request->judul;
        $albumfotos['tgl'] = $request->tgl;
        $albumfotos['user_id'] = $request->user_id;
        $albumfotos['cover'] = $filename;
        Album::whereId($id)->update($albumfotos);
        //dd($request->all());
        return redirect('/Albumfoto')->with('toast_success', 'Data berhasil diubah!');
    }
    function detailAlbumfoto($id)
    {
        $user = User::all();
        $albumfotos = Album::findOrFail($id);
        return view('albumfotos.detail', compact('albumfotos', 'user'));
    }
    function deleteAlbumfoto($id)
    {
        $albumfotos = Album::find($id);
        if ($albumfotos) {
            $albumfotos->delete();
        }
        Alert::success('Berhasil', 'Data berhasil dihapus!');
        return redirect('/Albumfoto')->with('toast_success', 'Data berhasil dihapus!');
    }
}
