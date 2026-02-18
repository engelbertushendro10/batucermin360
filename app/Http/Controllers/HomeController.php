<?php

namespace App\Http\Controllers;

use App\Models\Acara;

class HomeController extends Controller
{
    public function index(){
        $acaras = Acara::where('status', 'publish')
        ->orderBy('tanggal_acara', 'asc')
        ->get();
        return view('home', compact('acaras'));
    }
}
