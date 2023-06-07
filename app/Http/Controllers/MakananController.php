<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function tampil()
    {
        $makanans = Makanan::all();
        
        //cek database makanan
        // dd($makanans);
        
        return view('welcome', ['makanans' => $makanans]);
    }
}
