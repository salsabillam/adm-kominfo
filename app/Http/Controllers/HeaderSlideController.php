<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\HeaderSlide;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class HeaderSlideController extends Controller
{
    function getHeaderslide()
    {
        $headers = HeaderSlide::get();
        return view('headerslides.headerslide', compact('headers'));
    }
    function getIdHeaderslide($id)
    {
        $user = User::all();
        $headers = HeaderSlide::findOrFail($id);
        return view('headerslides.edit', compact('user', 'headers'));
    }
    function tambahHeaderslide()
    {
        $user = User::all();
        return view('headerslides.tambah', compact('user'));
    }
    function postHeaderslide(Request $request)
    {
        Alert::success('Berhasil', 'Data berhasil ditambah!');
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:85',
            'keterangan' => 'required|string|max:100',
            'status' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $file = $request->file('file');
        $filename = date('Y-m-d') . $file->getClientOriginalName();
        $path = 'headerslide-file/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($file));

        $headers['judul'] = $request->judul;
        $headers['keterangan'] = $request->keterangan;
        $headers['file'] = $filename;
        $headers['status'] = $request->status;

        HeaderSlide::create($headers);
        // dd($request->all());
        return redirect('/Headerslide')->with('success', 'Data berhasil ditambah!');
    }
    function editHeaderslide(Request $request, $id)
    {
        Alert::success('Berhasil', 'Data berhasil diubah!');
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:85',
            'keterangan' => 'required|string|max:100',
            'status' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $file = $request->file('file');
        $filename = date('Y-m-d') . $file->getClientOriginalName();
        $path = 'headerslide-file/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($file));

        $headers['judul'] = $request->judul;
        $headers['keterangan'] = $request->keterangan;
        $headers['file'] = $filename;
        $headers['status'] = $request->status;
        HeaderSlide::whereId($id)->update($headers);
        //dd($request->all());
        return redirect('/Headerslide')->with('success', 'Data berhasil diedit!');
    }
    function detailHeaderslide($id)
    {
        $user = User::all();
        $headers = HeaderSlide::findOrFail($id);
        return view('headerslides.detail', compact('headers', 'user'));
    }
    function deleteHeaderslide($id)
    {
        $headers = HeaderSlide::find($id);
        if ($headers) {
            $headers->delete();
        }
        Alert::success('Berhasil', 'Data berhasil dihapus!');
        return redirect('/Headerslide')->with('toast_success', 'Data berhasil dihapus!');
    }
}
