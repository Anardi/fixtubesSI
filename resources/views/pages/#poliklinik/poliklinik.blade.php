@extends('layout.admin')
@section('content')
    <section class="content">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="container">
                        <!--
               <div class="row g-3 align-items-center mt-2">
                 <div class="col-auto">
                   <label for="inputPassword6" class="col-form-label">Cari Nama Dokter</label>
                 </div>
                   <div class="col-auto">
                      <input type="search" id="inputPassword6" class="form-control" aria-labelledby="passwordHelpInline">
                   </div>
               </div>-->
                        <div class="row">
                            <a onclick="exportTableToPDF('Data Poliklinik', 'poliklinik')" class="btn btn-outline-info mb-3">Export PDF</a>
                            <div class="col-lg-12">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Data Poliklinik
                                        </h3>
                                        <div class="card-tools">
                                            <a href="{{ route('formPoliklinik') }}"
                                                class="btn btn-outline-success btn-sm">Tambah Poliklinik</a>
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                title="Collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="box-body table-responsive no-padding">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Nomer</th>
                                                        <th scope="col">Kode poliklinik</th>
                                                        <th scope="col">Nama Poliklinik</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no = 1;
                                                    @endphp
                                                    @foreach ($poliklinik as $key)
                                                        <tr>
                                                            <th scope="row">{{ $no++ }}</th>
                                                            <td>{{ $key->kode_poliklinik }}</td>
                                                            <td>{{ $key->nama_poli }}</td>
                                                            <td>
                                                                <a href="{{ route('editPoliklinik', $key->kode_poliklinik) }}"
                                                                    class="btn btn-info btn-sm mx-1">
                                                                    <i class="fas fa-edit"></i>
                                                                </a>
                                                                <form
                                                                    action="{{ route('deletePoliklinik', $key->kode_poliklinik) }}"
                                                                    method="post" class="d-inline">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <button class="btn btn-danger btn-sm mx-1"
                                                                        onclick="return confirm('Are you sure delete?')">
                                                                        <i class="fas fa-trash-alt"></i>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        </div>
    </section>
@endsection
