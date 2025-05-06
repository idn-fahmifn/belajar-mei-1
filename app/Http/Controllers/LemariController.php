<?php

namespace App\Http\Controllers;

use App\Models\Lemari;
use Illuminate\Http\Request;

class LemariController extends Controller
{
    public function index()
    {
        $data = Lemari::all(); //memanggil semua value yang ditampung di model Lemari.
        return view('lemari.index', compact('data'));
    }
}
