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
                <h3>Edit Kamar</h3>
            </div><!-- /.col -->
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('updateKamar', $kamar->kode_kamar) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kode Kamar</label>
                                    <input type="text" name="kode_kamar" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $kamar->kode_kamar }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Jenis Kamar</label>
                                    <select name="jenis_kamar" class="form-control">
                                        @foreach ($jenis_kamar as $item)
                                            <option value="{{ $item->jenis_kamar }}" {{ $item->jenis_kamar == $kamar->jenis_kamar ? 'selected' : '' }}>{{ $item->jenis_kamar . ' - '. $item->nama_kamar }}</option>

                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tarif Layanan</label>
                                    <input type="text" name="Tarif_layanan" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $kamar->Tarif_layanan }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Fasilitas</label>
                                    <input type="text" name="Fasilitas" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $kamar->Fasilitas }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection
