<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class BannerController extends Controller
{
    function getBanner()
    {
        $banners = Banner::get();
        return view('banners.banner', compact('banners'));
    }
    function getIdBanner($id)
    {
        $user = User::all();
        $banners = Banner::findOrFail($id);
        return view('banners.edit', compact('user', 'banners'));
    }
    function tambahBanner()
    {
        $user = User::all();
        return view('banners.tambah', compact('user'));
    }
    function postBanner(Request $request)
    {
        Alert::success('Berhasil', 'Data berhasil ditambah!');
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:85',
            'kategori' => 'required',
            'link' => 'required|string|max:100',
            'status' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $file = $request->file('file');
        $filename = date('Y-m-d') . $file->getClientOriginalName();
        $path = 'banner-image/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($file));
        $banners['judul'] = $request->judul;
        $banners['kategori'] = $request->kategori;
        $banners['link'] = $request->link;
        $banners['status'] = $request->status;
        $banners['file'] = $filename;

        Banner::create($banners);

        return redirect('/Banner')->with('toast_success', 'Data berhasil ditambah!');
    }
    function editBanner(Request $request, $id)
    {
        Alert::success('Berhasil', 'Data berhasil diubah!');
        //ddd($request);
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:85',
            'kategori' => 'required',
            'link' => 'required|string|max:100',
            'status' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $file = $request->file('file');
        $filename = date('Y-m-d') . $file->getClientOriginalName();
        $path = 'banner-image/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($file));
        $banners['judul'] = $request->judul;
        $banners['kategori'] = $request->kategori;
        $banners['link'] = $request->link;
        $banners['status'] = $request->status;
        $banners['file'] = $filename;

        Banner::whereId($id)->update($banners);
        //dd($request->all());
        return redirect('/Banner')->with('toast_success', 'Data berhasil diedit!');
    }
    function detailBanner($id)
    {
        $user = User::all();
        $banners = Banner::findOrFail($id);
        return view('banners.detail', compact('banners', 'user'));
    }
    function deleteBanner($id)
    {
        $banners = Banner::find($id);
        if ($banners) {
            $banners->delete();
        }
        Alert::success('Berhasil', 'Data berhasil dihapus!');
        return redirect('/Banner')->with('toast_success', 'Data berhasil dihapus!');
    }
}
