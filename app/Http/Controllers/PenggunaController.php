<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\HeaderSlide;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class PenggunaController extends Controller
{
    function getPengguna()
    {
        $data = User::get();
        return view('penggunas.pengguna', compact('data'));
    }
    function getIdPengguna($id)
    {
        $user = User::all();
        $data = User::findOrFail($id);
        return view('penggunas.edit', compact('data', 'user'));
    }
    function tambahPengguna()
    {
        $data = User::all();
        return view('penggunas.tambah', compact('data'));
    }
    function postPengguna(Request $request)
    {
        Alert::success('Berhasil', 'Data berhasil ditambah!');
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'nullable',
            'role' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $foto = $request->file('foto');
        $filename = date('Y-m-d') . $foto->getClientOriginalName();
        $path = 'pengguna-foto/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($foto));

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['username'] = $request->username;
        $data['role'] = $request->role;
        $data['foto'] = $filename;

        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }

        User::create($data);
        //dd($request->all());
        return redirect('/Pengguna')->with('success', 'Data berhasil ditambah!');
    }
    function editPengguna(Request $request, $id)
    {
        Alert::success('Berhasil', 'Data berhasil diubah!');
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'nullable',
            'role' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $foto = $request->file('foto');
        $filename = date('Y-m-d') . $foto->getClientOriginalName();
        $path = 'pengguna-foto/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($foto));

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['username'] = $request->username;
        $data['role'] = $request->role;
        $data['foto'] = $filename;

        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }

        User::whereId($id)->update($data);
        //dd($request->all());
        return redirect('/Pengguna')->with('success', 'Data berhasil diedit!');
    }
    function detailPengguna($id)
    {
        $user = User::all();
        $data = User::findOrFail($id);
        return view('penggunas.detail', compact('data', 'user'));
    }
    function deletePengguna($id)
    {
        $data = User::find($id);
        if ($data) {
            $data->delete();
        }
        Alert::success('Berhasil', 'Data berhasil dihapus!');
        return redirect('/Pengguna')->with('toast_success', 'Data berhasil dihapus!');
    }
}
