@extends('layouts.header_footer_admin')

@section('content2')
    <h1 class="text-center" style="margin-top: 7rem;">List Proyek</h1>
    <div class="col-md-12 search-table-col">
        <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing here.."></div><span class="counter pull-right"></span><a href="/proyek/create"><button class="btn btn-primary" type="button">Tambah<i class="fa fa-plus" style="margin-left: 5px;"></i></button></a>
        <div
            class="table-responsive table-bordered table table-hover table-bordered results">
            <table class="table table-bordered table-hover">
                <thead class="bill-header cs">
                    <tr>
                        <th id="trs-hd" class="col" style="width: 2%;">#</th>
                        <th id="trs-hd" class="col" style="width: 20%;">Nama Proyek</th>
                        <th id="trs-hd" class="col" style="width: 30%;">Lokasi</th>
                        <th id="trs-hd" class="col" style="width: 14%;">Tgl. Mulai</th>
                        <th id="trs-hd" class="col" style="width: 14%;">Tgl. Selesai</th>
                        <th id="trs-hd" class="col" style="width: 20%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                @if(session('success_message'))
                    <div class="alert alert-success">
                        {{ session('success_message') }}
                    </div>
                @endif
                @foreach($proyek as $unit)
                    <tr>
                        <td>{{ $unit->id }}</td>
                        <td>{{ $unit->nama_proyek }}</td>
                        <td>{{ $unit->lokasi }}</td>
                        <td>{{ $unit->tgl_mulai }}</td>
                        <td>{{ $unit->tgl_selesai }}</td>
                        <td>
                            <div class="row">
                                <div class="col-sm" style="padding-left:12px; padding-right:2px;">
                                    <!-- <form action="/rab/{{ $unit->id }}" method="GET">
                                        <button class="btn btn-info btn-sm" style="width: 100%; font-size:12px;">Lihat<i class="fa fa-eye" style="font-size: 13px; margin-left: 5px;"></i></button>
                                    </form> -->
                                    <a class="btn btn-info btn-sm" style="width: 100%; font-size:12px;" data-toggle="collapse" href="#collapseExample{{ $unit->id }}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Lihat<i class="fa fa-eye" style="font-size: 13px; margin-left: 5px;"></i>
                                    </a>
                                </div>
                                <div class="col-sm" style="padding-left:2px; padding-right:2px;">
                                    <form action="/proyek/edit/{{ $unit->id }}" method="GET">
                                        @csrf
                                        <button class="btn btn-success btn-sm" style="width: 100%; font-size:12px;">Edit<i class="fa fa-edit" style="font-size: 13px; margin-left: 5px;"></i></button>
                                    </form>
                                </div>
                                <div class="col-sm" style="padding-right:15px; padding-left:2px;">
                                    <form action="/proyek/{{ $unit->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" style="width: 100%; font-size:12px;">Hapus<i class="fa fa-trash" style="font-size: 13px; margin-left: 5px;"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="collapse" id="collapseExample{{ $unit->id }}">
                        <td colspan=6>
                            <div class="collapse" id="collapseExample{{ $unit->id }}">
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-header" style="padding-bottom:0px;">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 class="card-title" style="margin-top:5px;">Detail Klien</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text" style="font-size:15px; margin-bottom:-5px;">Email Klien:</p>
                                                <p class="card-text">{{ $unit->email_klien }}</p>
                                                <p class="card-text" style="font-size:15px; margin-bottom:-5px;">No. HP Klien:</p>
                                                <p class="card-text">{{ $unit->no_hp }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h6 class="card-title">Progress Pengerjaan</h6>
                                        <div class="progress" style="margin-bottom:20px;">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                        </div>
                                    
                                        <h6 class="card-title">Progress Keuangan</h6>
                                        <div class="progress" style="margin-bottom:20px;">
                                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="row" style="margin-top:15px;">
                                    <div class="col-5">
                                        <div class="card">
                                            <div class="card-header" style="padding-bottom:0px;">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 class="card-title" style="margin-top:5px;">Neraca Saldo</h5>
                                                    </div>
                                                    <div class="col text-right">
                                                        <a href="/neraca/{{ $unit->id }}" type="button" class="btn btn-info btn-sm">Lihat Neraca<i class="fa fa-eye" style="font-size: 13px; margin-left: 5px;"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="btn-group" style="width:100%" role="group" aria-label="Basic example">
                                                    <a href="/neraca/{{ $unit->id }}/kategori" type="button" class="btn btn-dark btn-sm">Kategori</a>
                                                    <a href="/neraca/{{ $unit->id }}/pemasukan" type="button" class="btn btn-outline-primary btn-sm">Pemasukan</a>
                                                    <a href="/neraca/{{ $unit->id }}/pengeluaran" type="button" class="btn btn-outline-secondary btn-sm">Pengeluaran</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-header" style="padding-bottom:0px;">
                                                <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title" style="margin-top:5px;">Rencana Anggaran Belanja</h5>
                                                        </div>
                                                        <div class="col text-right">
                                                            <a href="/rab/{{ $unit->id }}" type="button" class="btn btn-info btn-sm">Lihat Rekap RAB<i class="fa fa-eye" style="font-size: 13px; margin-left: 5px;"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="card-body">
                                                <div class="btn-group" style="width:100%" role="group" aria-label="Basic example">
                                                    <a href="/rab/{{ $unit->id }}/kategori" type="button" class="btn btn-dark btn-sm">Kategori</a>
                                                    <a href="/rab/{{ $unit->id }}/persiapan" type="button" class="btn btn-outline-primary btn-sm">Persiapan</a>
                                                    <a href="/rab/{{ $unit->id }}/arsitektur" type="button" class="btn btn-outline-secondary btn-sm">Arsitektur</a>
                                                    <a href="/rab/{{ $unit->id }}/struktur" type="button" class="btn btn-outline-success btn-sm">Struktur</a>
                                                    <a href="/rab/{{ $unit->id }}/mep" type="button" class="btn btn-outline-danger btn-sm">MEP</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>

                        </td>
                    </tr>
                    
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">{{ $proyek->links() }}</div>
    </div>
    </div>
@endsection