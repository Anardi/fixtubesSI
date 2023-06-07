@extends('Layout.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        {{-- <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6 justify-content-center">
                  <h1>Menambahkan Data Pasien</h1>
              </div><!-- /.col -->
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div> --}}
        <div class="container">
            <div class="text-center">
                <h3>Menambahkan Data Pegawai</h3>
            </div><!-- /.col -->
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('postPegawai') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">ID Pegawai</label>
                                    <input type="text" name="id_pegawai" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Pegawai</label>
                                    <input type="text" name="nama_pegawai" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Jadwal</label>
                                    <select name="kode_jadwal" class="form-control">
                                        @foreach ($jadwal as $item)
                                            <option value="{{ $item->kode_jadwal }}">{{ $item->kode_jadwal . ' - ' . $item->hari .'( '. $item->jam_mulai .' - '. $item->jam_selesai .' )' }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Dokter</label>
                                    <select name="id_dokter" class="form-control">
                                        @foreach ($dokter as $item)
                                            <option value="{{ $item->id_dokter }}">{{ $item->id_dokter . ' - ' . $item->Nama_Dokter }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Alamat Pegawai</label>
                                    <input type="text" name="Alamat_pegawai" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Telepon Pegawai</label>
                                    <input type="text" name="telp_pegawai" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Lahir Pegawai</label>
                                    <input type="text" name="ttl_pegawai" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection
