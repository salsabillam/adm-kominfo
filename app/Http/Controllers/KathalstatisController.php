<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kategorihalstatis as Kategorihalstatis;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class KathalstatisController extends Controller
{
    function getKathalstatis()
    {
        $kathalstatiss = Kategorihalstatis::get();
        return view('kathalstatiss.kathalstatis', compact('kathalstatiss'));
    }
    function getIdKathalstatis($id)
    {
        $user = User::all();
        $kathalstatiss = Kategorihalstatis::findOrFail($id);
        return view('kathalstatiss.edit', compact('user', 'kathalstatiss'));
    }
    function tambahKathalstatis()
    {
        $user = User::all();
        return view('kathalstatiss.tambah', compact('user'));
    }
    function postKathalstatis(Request $request)
    {
        Alert::success('Berhasil', 'Data berhasil ditambah!');
        $validator = Validator::make($request->all(), [
            'kategori' => 'required|string|max:50',
            'keterangan' => 'required|string|max:50',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $kathalstatiss['kategori'] = $request->kategori;
        $kathalstatiss['keterangan'] = $request->keterangan;

        Kategorihalstatis::create($kathalstatiss);
        // dd($request->all());
        return redirect('/Kathalstatis')->with('success', 'Data berhasil ditambah!');
    }
    function editKathalstatis(Request $request, $id)
    {
        Alert::success('Berhasil', 'Data berhasil diubah!');
        $validator = Validator::make($request->all(), [
            'kategori' => 'required|string|max:50',
            'keterangan' => 'required|string|max:50',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $kathalstatiss['kategori'] = $request->kategori;
        $kathalstatiss['keterangan'] = $request->keterangan;
        Kategorihalstatis::whereId($id)->update($kathalstatiss);
        //dd($request->all());
        return redirect('/Kathalstatis')->with('success', 'Data berhasil diedit!');
    }
    function detailKathalstatis($id)
    {
        $user = User::all();
        $kathalstatiss = Kategorihalstatis::findOrFail($id);
        return view('kathalstatiss.detail', compact('kathalstatiss', 'user'));
    }
    function deleteKathalstatis($id)
    {
        $kathalstatiss = Kategorihalstatis::find($id);
        if ($kathalstatiss) {
            $kathalstatiss->delete();
        }
        Alert::success('Berhasil', 'Data berhasil dihapus!');
        return redirect('/Kathalstatis')->with('toast_success', 'Data berhasil dihapus!');
    }
}
