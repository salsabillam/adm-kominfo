<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GaleriVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class GaleriVideoController extends Controller
{
    function getGalerivideo()
    {
        $galerivideos = GaleriVideo::get();
        return view('galerivideos.galerivideo', compact('galerivideos'));
    }
    function getIdGalerivideo($id)
    {
        $user = User::all();
        $galerivideos = GaleriVideo::findOrFail($id);
        return view('galerivideos.edit', compact('user', 'galerivideos'));
    }
    function tambahGalerivideo()
    {
        $user = User::all();
        return view('galerivideos.tambah', compact('user'));
    }
    function postGalerivideo(Request $request)
    {
        Alert::success('Berhasil', 'Data berhasil ditambah!');
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:100',
            'embed' => 'required',
            'keterangan' => 'required|string|max:100',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $cover = $request->file('cover');
        $filename = date('Y-m-d') . $cover->getClientOriginalName();
        $path = 'galerivideo-file/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($cover));

        $galerivideos['judul'] = $request->judul;
        $galerivideos['embed'] = $request->embed;
        $galerivideos['keterangan'] = $request->keterangan;
        $galerivideos['cover'] = $filename;

        GaleriVideo::create($galerivideos);
        // dd($request->all());
        return redirect('/Galerivideo')->with('success', 'Data berhasil ditambah!');
    }
    function editGalerivideo(Request $request, $id)
    {
        Alert::success('Berhasil', 'Data berhasil diubah!');
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:100',
            'embed' => 'required',
            'keterangan' => 'required|string|max:100',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $cover = $request->file('cover');
        $filename = date('Y-m-d') . $cover->getClientOriginalName();
        $path = 'galerivideo-file/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($cover));

        $galerivideos['judul'] = $request->judul;
        $galerivideos['embed'] = $request->embed;
        $galerivideos['keterangan'] = $request->keterangan;
        $galerivideos['cover'] = $filename;
        GaleriVideo::whereId($id)->update($galerivideos);
        //dd($request->all());
        return redirect('/Galerivideo')->with('success', 'Data berhasil diedit!');
    }
    function detailGalerivideo($id)
    {
        $user = User::all();
        $galerivideos = GaleriVideo::findOrFail($id);
        return view('galerivideos.detail', compact('galerivideos', 'user'));
    }
    function deleteGalerivideo($id)
    {
        $galerivideos = Galerivideo::find($id);
        if ($galerivideos) {
            $galerivideos->delete();
        }
        Alert::success('Berhasil', 'Data berhasil dihapus!');
        return redirect('/Galerivideo')->with('toast_success', 'Data berhasil dihapus!');
    }
}
