<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmurController extends Controller
{
    public function form()
    {
        return view('umur.form');
    }

    public function sukses()
    {
        return view('umur.sukses');
    }

    public function proses_umur(Request $request)
    {
        // validator untuk memasuk input
        $request->validate([
            'nama' => 'required|string|min:3|max:50',
            'umur' => 'required|integer|min:1|max:60'
        ]);

        return redirect()->route('sukses.form');

    }

}
