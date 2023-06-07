
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
        <h3>Data Pemeriksaan</h3>
    </div><!-- /.col -->
    <div class="row justify-content-center">
      <div class="col-8">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('updatePemeriksaan', $data_pemeriksaaan->kode_pemeriksaan) }}" method="POST" >
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kode Pemeriksaan</label>
              <input type="text" name="kode_pemeriksaan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data_pemeriksaaan->kode_pemeriksaan }}" >
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tanggal Periksa</label>
              <input type="date" name="tgl_periksa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data_pemeriksaaan->tgl_periksa }}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Keluhan</label>
              <input type="tinytext" name="Keluhan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data_pemeriksaaan->Keluhan }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                <input type="text" name="Keterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data_pemeriksaaan->Keterangan }}">
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Biaya pemeriksaan</label>
              <input type="text" name="Biaya_pemeriksaan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data_pemeriksaaan->Biaya_pemeriksaan }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      </div>
    </div>

</div>

@endsection
