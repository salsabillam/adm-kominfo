<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Dokumen;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;


class DokumenController extends Controller
{
    function getDokumen()
    {
        $dokumens = Dokumen::get();
        return view('dokumens.dokumen', compact('dokumens'));
    }
    function getIdDokumen($id)
    {
        $user = User::all();
        $dokumens = Dokumen::findOrFail($id);
        return view('dokumens.edit', compact('user', 'dokumens'));
    }
    function tambahDokumen()
    {
        $user = User::all();
        return view('dokumens.tambah', compact('user'));
    }
    function postDokumen(Request $request)
    {
        Alert::success('Berhasil', 'Data berhasil ditambah!');
        $validator = Validator::make($request->all(), [
            'nama_doc' => 'required|string|max:50',
            'link' => 'required|string|max:11',
            'keterangan' => 'required|string|max:200',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $file = $request->file('file');
        $filename = date('Y-m-d') . $file->getClientOriginalName();
        $path = 'dokumen-file/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($file));

        $dokumens['nama_doc'] = $request->nama_doc;
        $dokumens['link'] = $request->link;
        $dokumens['keterangan'] = $request->keterangan;
        $dokumens['file'] = $filename;

        Dokumen::create($dokumens);
        // dd($request->all());
        return redirect('/Dokumen')->with('success', 'Data berhasil ditambah!');
    }
    function editDokumen(Request $request, $id)
    {
        Alert::success('Berhasil', 'Data berhasil diubah!');
        $validator = Validator::make($request->all(), [
            'nama_doc' => 'required|string|max:50',
            'link' => 'required|string|max:11',
            'keterangan' => 'required|string|max:200',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $file = $request->file('file');
        $filename = date('Y-m-d') . $file->getClientOriginalName();
        $path = 'dokumen-file/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($file));

        $dokumens['nama_doc'] = $request->nama_doc;
        $dokumens['link'] = $request->link;
        $dokumens['keterangan'] = $request->keterangan;
        $dokumens['file'] = $filename;
        Dokumen::whereId($id)->update($dokumens);
        //dd($request->all());
        return redirect('/Dokumen')->with('success', 'Data berhasil diedit!');
    }
    function detailDokumen($id)
    {
        $user = User::all();
        $dokumens = Dokumen::findOrFail($id);
        return view('dokumens.detail', compact('dokumens', 'user'));
    }
    function deleteDokumen($id)
    {
        $dokumens = Dokumen::find($id);
        if ($dokumens) {
            $dokumens->delete();
        }
        Alert::success('Berhasil', 'Data berhasil dihapus!');
        return redirect('/Dokumen')->with('toast_success', 'Data berhasil dihapus!');
    }
}
