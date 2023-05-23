<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Tingkat2;
use App\Models\Tingkat3;
use App\Models\Pemasukan;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index(Request $request)
    {
        if($request->has('search')) {
            $siswa = siswa::all()->where('nama', '=',$request->search);
            $tingkat2 = Tingkat2::all()->where('nama', '=',$request->search);
            $tingkat3 = Tingkat3::all()->where('nama', '=',$request->search);
        }else{
    
            $siswa = siswa::all();
            $tingkat2 = Tingkat2::all();
            $tingkat3 = Tingkat3::all();
        }
        return view('Siswa.tingkat-satu', compact('siswa', 'tingkat2', 'tingkat3'));
    }

    // public function index()
    //{
       // $siswa = siswa::all();
       // return view('Siswa.tingkat-satu', compact('siswa'));
    //}

    public function indexx(Request $request)
    {
        if($request->has('search')) {
            $tingkat2 = Tingkat2::all()->where('nama', '=',$request->search);
        }else{
            $tingkat2 = Tingkat2::all();
        }
        return view('Siswa.tingkat-dua', compact('tingkat2'));
    }

    public function indexxx(Request $request)
    {
        if($request->has('search')) {
            $tingkat3 = Tingkat3::all()->where('nama', '=',$request->search);
        }else{
            $tingkat3 = Tingkat3::all();
        }
        return view('Siswa.tingkat-tiga', compact('tingkat3'));
    }

    public function cetakSiswa()
    {
        $siswa = Siswa::get();
        return view('Siswa.cetak-siswa', compact('siswa'));
    }

    public function pemasukan(Request $request)
    {
        if($request->has('search')) {
            $pem = Pemasukan::all()->where('tanggal', '=',$request->search);
        }else{
            $pem = Pemasukan::all();
        }
        return view('Siswa.pemasukan', compact('pem'));
        // $pem = Pemasukan::all();
        // return view('Siswa.pemasukan', compact('pem'));
    }
    
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Siswa.create-satu');
    }

    public function createe()
    {
        return view('Siswa.create-dua');
    }

    public function createee()
    {
        return view('Siswa.create-tiga');
    }

    public function crtpemasukan()
    {
        return view('Siswa.create-pemasukan');
    }
    
    



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Siswa::create ([
            'tanggal' => $request->tanggal,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'sumbangan' => $request->sumbangan,
            'pembayaran_satu' => $request->pembayaran_satu,
            'sisa_sumbangan' => $request->sisa_sumbangan,
            
        ]);

        return redirect('tingkat-satu')->with('success', 'Data Berhasil Tersimpan!');
    }

    public function storee(Request $request)
    {
        // dd($request->all());
        Tingkat2::create ([
            'tanggal' => $request->tanggal,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'tunggakan' => $request->tunggakan,
            'pembayaran' => $request->pembayaran,
            'sisa_tunggakan' => $request->sisa_tunggakan,
        ]);

        return redirect('tingkat-dua')->with('success', 'Data Berhasil Tersimpan!');
    }

    public function storeee(Request $request)
    {
        // dd($request->all());
        Tingkat3::create ([
            'tanggal' => $request->tanggal,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'tunggakan' => $request->tunggakan,
            'pembayaran' => $request->pembayaran,
            'sisa_tunggakan' => $request->sisa_tunggakan,
        ]);

        return redirect('tingkat-tiga')->with('success', 'Data Berhasil Tersimpan!');
    }

    public function pemasukann(Request $request)
    {
        // dd($request->all());
        Pemasukan::create ([
            'tanggal' => $request->tanggal,
            'nominal' => $request->nominal,
            'sumber' => $request->sumber,
        ]);

        return redirect('pemasukan')->with('success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sis = Siswa::findorfail($id);
        return view('Siswa.edit-satu', compact('sis'));
    }

    public function editt($id)
    {
        $sis = Tingkat2::findorfail($id);
        return view('Siswa.edit-dua', compact('sis'));
    }

    public function edittt($id)
    {
        $sis = Tingkat3::findorfail($id);
        return view('Siswa.edit-tiga', compact('sis'));
    }

    public function editPemasukan($id)
    {
        $pem = Pemasukan::findorfail($id);
        return view('Siswa.edit-pemasukan', compact('pem'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sis = Siswa::findorfail($id);
        $sis->update($request->all());
        return redirect('tingkat-satu');
    }

    public function updatee(Request $request, $id)
    {
        $sis = Tingkat2::findorfail($id);
        $sis->update($request->all());
        return redirect('tingkat-dua');
    }

    public function updateee(Request $request, $id)
    {
        $sis = Tingkat3::findorfail($id);
        $sis->update($request->all());
        return redirect('tingkat-tiga');
    }

    public function updatePemasukan(Request $request, $id)
    {
        $pem = Pemasukan::findorfail($id);
        $pem->update($request->all());
        return redirect('pemasukan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sis = Siswa::findorfail($id);
        $sis->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }

    public function destroyy($id)
    {
        $sis = Tingkat2::findorfail($id);
        $sis->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
    public function destroyyy($id)
    {
        $sis = Tingkat3::findorfail($id);
        $sis->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }

    public function deletePemasukan($id)
    {
        $pem = Pemasukan::findorfail($id);
        $pem->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }

    public function cetakForm() {
        return view('Siswa.cetak-siswa-form');
    }

    public function cetakPemasukanPertanggal($tglawal, $tglakhir) {
     // dd(["Tanggal Awal : ".$tglawal, "Tanggal Akhir : ".$tglakhir]);
        $cetakPertanggal = Pemasukan::all()->whereBetween('tanggal', [$tglawal, $tglakhir]);
        return view('Siswa.cetak-pemasukan-pertanggal', compact('cetakPertanggal'));
    }
}
