<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Acara;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index(){
        $acara = Acara::where('status', 'active')
        ->orderBy('tanggal_acara', 'asc')
        ->get();
        return view('home', compact('acara'));
    }
}
