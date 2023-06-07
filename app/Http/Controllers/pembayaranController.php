<?php

namespace App\Http\Controllers;

use App\Models\obatModel;
use App\Models\pasienModel;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\pembayaranModel;

class pembayaranController extends Controller
{
    public function index(){
        $data = array(
            "pembayaran" => pembayaranModel::leftJoin('data_pasien', 'data_pembayaran.kode_pasien', '=', 'data_pasien.kode_pasien')
            ->leftJoin('data_obat', 'data_pembayaran.kode_obat', '=', 'data_obat.kode_obat')
            ->selectRaw('data_pembayaran.*, data_pasien.Nama_pasien as pasien, data_obat.Nama_Obat as obat')
            ->get(),
        );
        return view('pages.#pembayaran.pembayaran', $data);
    }
    //Tambah Data
    public function create(){
        $data = [
            'pasien' => pasienModel::all(),
            'obat' => obatModel::all(),
        ];
        return view('pages.#pembayaran.tambahPembayaran', $data);
    }

    public function store(Request $request)
    {
        pembayaranModel::create($request->all());
        return redirect('/pembayaran')->with('success', 'Data Berhasil Di Tambahkan!');
    }
    //Edit Data
    public function edit($id_pembayaran)
    {
        $data = [
            "pembayaran" => pembayaranModel::find($id_pembayaran),
            'pasien' => pasienModel::all(),
            'obat' => obatModel::all(),
        ];
        return view('pages.#pembayaran.tampilPembayaran',$data);
    }
    
    public function update(Request $request, string $id_pembayaran)
    {
        $data = [
            'id_pembayaran'=>$request->id_pembayaran,
            'kode_pasien'=>$request->kode_pasien,
            'kode_obat' => $request->kode_obat,
            'Jumlah_bayar'=>$request->Jumlah_bayar,
        ];
        pembayaranModel::find($id_pembayaran)->update($data);

        return redirect('/pembayaran')->with('success', 'Data Berhasil Di Edit!');
    }

    //Delete Data
    public function delete($id_pembayaran){
        $pembayaran = pembayaranModel::where('id_pembayaran', $id_pembayaran);
        $pembayaran->delete();

        return redirect('/pembayaran')->with('success', 'Data Berhasil Di Hapus!');
    }
}