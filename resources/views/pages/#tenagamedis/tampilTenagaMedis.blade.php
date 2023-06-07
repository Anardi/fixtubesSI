@extends('Layout.admin')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="text-center">
                <h3>Menambahkan Data Tenaga Medis</h3>
            </div><!-- /.col -->
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('updateTenagaMedis', $tenagamedis->id_tenagamedis) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">ID Tenaga Medis</label>
                                    <input type="text" name="id_tenagamedis" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $tenagamedis->id_tenagamedis }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kamar</label>
                                    <select name="kode_kamar" class="form-control">
                                        @foreach ($kamar as $item)
                                            <option value="{{ $item->kode_kamar }}" {{ $item->kode_kamar == $tenagamedis->kode_kamar ? 'selected' : '' }}>
                                                {{ $item->kode_kamar . ' - ' . $item->jenis_kamar }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Obat</label>
                                    <select name="kode_obat" class="form-control">
                                        @foreach ($obat as $item)
                                            <option value="{{ $item->kode_obat }}" {{ $item->kode_obat == $tenagamedis->kode_obat ? 'selected' : '' }}>
                                                {{ $item->kode_obat . ' - ' . $item->Nama_Obat }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Tenaga Medis</label>
                                    <input type="text" name="Nama_Tenagamedis" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $tenagamedis->Nama_Tenagamedis }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
