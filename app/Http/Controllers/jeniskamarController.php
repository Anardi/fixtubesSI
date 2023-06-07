<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\jeniskamarModel;

class jeniskamarController extends Controller
{
    public function index(){
        $data = array(
            "jeniskamar" => jeniskamarModel::all(),
        );
        return view('pages.#jeniskamar.jeniskamar', $data);
    }

    //Tambah Data
    public function create(){
        return view('pages.#jeniskamar.tambahJenisKamar');
    }

    public function store(Request $request)
    {
        jeniskamarModel::create($request->all());
        return redirect('/jeniskamar')->with('success', 'Data Berhasil Di Tambahkan!');
    }
    //Delete Data 
    public function delete($jenis_kamar){
        $jenis_kamar = jeniskamarModel::where('jenis_kamar', $jenis_kamar);
        $jenis_kamar->delete();

        return redirect('/jeniskamar')->with('success', 'Data Berhasil Di Hapus!');
    }
    //Edit Data
    public function edit($jenis_kamar)
    {
        $jenis_kamar = jeniskamarModel::find($jenis_kamar);
        return view('pages.#jeniskamar.tampilJenisKamar', ['jenis_kamar' => $jenis_kamar]);
    }   
    
    public function update(Request $request, string $jenis_kamar)
    {
        $jenis_kamar = jeniskamarModel::find($jenis_kamar);
        $jenis_kamar->update($request->all());
        return redirect('jeniskamar')->with('success', 'Data Berhasil Di Edit!');
    }
}