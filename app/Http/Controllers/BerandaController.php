<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukan;
use App\Models\Siswa;

class BerandaController extends Controller
{
    public function beranda() {
        $pem = Pemasukan::latest()->paginate(1);
        $sis = Siswa::count();
        return view('Halaman.beranda',compact('pem', 'sis'));
    }
}
