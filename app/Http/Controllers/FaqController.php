<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Faq;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class FaqController extends Controller
{
    function getFaq()
    {
        $faqs = Faq::get();
        return view('faqs.faq', compact('faqs'));
    }
    function getIdFaq($id)
    {
        $user = User::all();
        $faqs = Faq::findOrFail($id);
        return view('faqs.edit', compact('user', 'faqs'));
    }
    function tambahFaq()
    {
        $user = User::all();
        return view('faqs.tambah', compact('user'));
    }
    function postFaq(Request $request)
    {
        Alert::success('Berhasil', 'Data berhasil ditambah!');
        $validator = Validator::make($request->all(), [
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $faqs['pertanyaan'] = $request->pertanyaan;
        $faqs['jawaban'] = $request->jawaban;

        Faq::create($faqs);
        // dd($request->all());
        return redirect('/Faq')->with('success', 'Data berhasil ditambah!');
    }
    function editFaq(Request $request, $id)
    {
        Alert::success('Berhasil', 'Data berhasil diubah!');
        $validator = Validator::make($request->all(), [
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $faqs['pertanyaan'] = $request->pertanyaan;
        $faqs['jawaban'] = $request->jawaban;
        Faq::whereId($id)->update($faqs);
        //dd($request->all());
        return redirect('/Faq')->with('success', 'Data berhasil diedit!');
    }
    function detailFaq($id)
    {
        $user = User::all();
        $faqs = Faq::findOrFail($id);
        return view('faqs.detail', compact('faqs', 'user'));
    }
    function deleteFaq($id)
    {
        $faqs = Faq::find($id);
        if ($faqs) {
            $faqs->delete();
        }
        Alert::success('Berhasil', 'Data berhasil dihapus!');
        return redirect('/Faq')->with('toast_success', 'Data berhasil dihapus!');
    }
}
