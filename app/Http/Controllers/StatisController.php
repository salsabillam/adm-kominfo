<?php

namespace App\Http\Controllers;

use App\Models\HalStatis;
use App\Models\User;
use App\Models\KategoriHalStatis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class StatisController extends Controller
{
    function getStatis()
    {
        $statis = HalStatis::get();
        return view('halstatiss.halstatis', compact('statis'));
    }
    function getIdStatis($id)
    {
        $user = User::all();
        $kategori = KategoriHalStatis::all();
        $statis = HalStatis::findOrFail($id);
        return view('halstatiss.edit', compact('user', 'statis', 'kategori'));
    }
    function tambahStatis()
    {
        $user = User::all();
        $kategori = KategoriHalStatis::all();
        return view('halstatiss.tambah', compact('user', 'kategori'));
    }
    function postStatis(Request $request)
    {
        Alert::success('Berhasil', 'Data berhasil ditambah!');
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:100',
            'kategori_hal_statis_id' => 'required',
            'isi' => 'required',
            'tgl' => 'required|date|date_format:Y-m-d',
            'status' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $file = $request->file('file');
        $filename = date('Y-m-d') . $file->getClientOriginalName();
        $path = 'statis-file/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($file));

        $statis['judul'] = $request->judul;
        $statis['kategori_hal_statis_id'] = $request->kategori_hal_statis_id;
        $statis['isi'] = $request->isi;
        $statis['tgl'] = $request->tgl;
        $statis['status'] = $request->status;
        $statis['user_id'] = $request->user_id;
        $statis['file'] = $filename;

        HalStatis::create($statis);
        //dd($request->all());
        return redirect('/Statis')->with('success', 'Data berhasil ditambah!');
    }
    function editStatis(Request $request, $id)
    {
        Alert::success('Berhasil', 'Data berhasil diubah!');
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:100',
            'kategori_hal_statis_id' => 'required',
            'isi' => 'required',
            'tgl' => 'required|date|date_format:Y-m-d',
            'status' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $file = $request->file('file');
        $filename = date('Y-m-d') . $file->getClientOriginalName();
        $path = 'statis-file/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($file));

        $statis['judul'] = $request->judul;
        $statis['kategori_hal_statis_id'] = $request->kategori_hal_statis_id;
        $statis['isi'] = $request->isi;
        $statis['tgl'] = $request->tgl;
        $statis['status'] = $request->status;
        $statis['user_id'] = $request->user_id;
        $statis['file'] = $filename;

        HalStatis::whereId($id)->update($statis);
        //dd($request->all());
        return redirect('/Statis')->with('success', 'Data berhasil diedit!');
    }
    function detailStatis($id)
    {
        $user = User::all();
        $kategori = KategoriHalStatis::get();
        $statis = HalStatis::findOrFail($id);
        return view('halstatiss.detail', compact('statis', 'user', 'kategori'));
    }
    function deleteStatis($id)
    {
        $statis = HalStatis::find($id);
        if ($statis) {
            $statis->delete();
        }
        Alert::success('Berhasil', 'Data berhasil dihapus!');
        return redirect('/Statis');
    }
    function pdfStatis()
    {
        $statis = HalStatis::get();
        return view('halstatiss.pdf', compact('statis'));
    }
}
