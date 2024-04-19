<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class AgendaController extends Controller
{
    function getAgenda()
    {
        $agendas = Agenda::get();
        return view('agendas.agenda', compact('agendas'));
    }
    function getIdAgenda($id)
    {
        $user = User::all();
        $agendas = Agenda::findOrFail($id);
        return view('agendas.edit', compact('user', 'agendas'));
    }
    function tambahAgenda()
    {
        $user = User::all();
        return view('agendas.tambah', compact('user'));
    }
    function postAgenda(Request $request)
    {
        Alert::success('Berhasil', 'Data berhasil ditambah!');
        $validator = Validator::make($request->all(), [
            'hari' => 'required|string|max:10',
            'tgl' => 'required|date|date_format:Y-m-d',
            'waktu' => 'required|date_format:H:i:s',
            'lokasi' => 'required|string|max:100',
            'kegiatan' => 'required|string|max:250',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $agendas['hari'] = $request->hari;
        $agendas['tgl'] = $request->tgl;
        $agendas['waktu'] = $request->waktu;
        $agendas['lokasi'] = $request->lokasi;
        $agendas['kegiatan'] = $request->kegiatan;
        $agendas['user_id'] = $request->user_id;

        Agenda::create($agendas);
        // dd($request->all());
        return redirect('/Agenda')->with('toast_success', 'Data berhasil ditambah!');
    }
    function editAgenda(Request $request, $id)
    {
        Alert::success('Berhasil', 'Data berhasil diubah!');
        $validator = Validator::make($request->all(), [
            'hari' => 'required|string|max:10',
            'tgl' => 'required|date|date_format:Y-m-d',
            'waktu' => 'required|date_format:H:i:s',
            'lokasi' => 'required|string|max:100',
            'kegiatan' => 'required|string|max:250',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $agendas['hari'] = $request->hari;
        $agendas['tgl'] = $request->tgl;
        $agendas['waktu'] = $request->waktu;
        $agendas['lokasi'] = $request->lokasi;
        $agendas['kegiatan'] = $request->kegiatan;
        $agendas['user_id'] = $request->user_id;
        Agenda::whereId($id)->update($agendas);
        //dd($request->all());
        return redirect('/Agenda')->with('toast_success', 'Data berhasil diedit!');
    }
    function detailAgenda($id)
    {
        $user = User::all();
        $agendas = Agenda::findOrFail($id);
        return view('agendas.detail', compact('agendas', 'user'));
    }
    function deleteAgenda($id)
    {
        Alert::success('Berhasil', 'Data berhasil dihapus!');
        $agendas = Agenda::find($id);
        if ($agendas) {
            $agendas->delete();
        }
        return redirect('/Agenda');
    }
    function pdfAgenda()
    {
        $agendas = Agenda::get();
        return view('agendas.pdf', compact('agendas'));
    }
}
