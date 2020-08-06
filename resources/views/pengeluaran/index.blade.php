@extends('layouts.header_footer_admin')

@section('content2')
    <h1 class="text-center" style="margin-top: 7rem;">Pengeluaran</h1>
    <div class="col-md-12 search-table-col">
        <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing here.."></div><span class="counter pull-right"></span><a href="/pengeluaran/create"><button class="btn btn-primary" type="button">Tambah<i class="fa fa-plus" style="margin-left: 5px;"></i></button></a>
        <div
            class="table-responsive table-bordered table table-hover table-bordered results">
            <table class="table table-bordered table-hover">
                <thead class="bill-header cs">
                    <tr>
                        <th id="trs-hd" class="col" style="width: 2%;">#</th>
                        <th id="trs-hd" class="col" style="width: 7%;">Tanggal</th>
                        <th id="trs-hd" class="col" style="width: 10%;">Nama Barang</th>
                        <th id="trs-hd" class="col" style="width: 13%;">Nama Toko</th>
                        <th id="trs-hd" class="col" style="width: 28%;">Deskripsi</th>
                        <th id="trs-hd" class="col" style="width: 10%;">Kategori</th>
                        <!-- <th id="trs-hd" class="col" style="width: 5%;">Qty</th>
                        <th id="trs-hd" class="col" style="width: 8%;">Harga Satuan</th> -->
                        <th id="trs-hd" class="col" style="width: 10%;">Jumlah</th>
                        <th id="trs-hd" class="col" style="width: 20%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                @if($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @foreach($pengeluaran as $unit)
                    <tr>
                        <td>{{ $unit->id }}</td>
                        <td>{{ $unit->tanggal_belanja }}</td>
                        <td>{{ $unit->list_belanja }}</td>
                        <td>{{ $unit->nama_toko }}</td>
                        <td>{{ $unit->deskripsi }}</td>
                        <td>{{ $unit->kategori }}</td>
                        <!-- <td>{{ $unit->jumlah_barang }}</td>
                        <td>{{ $unit->harga_satuan }}</td> -->
                        <td>{{ $unit->jumlah }}</td>
                        <td>
                            <div class="row">
                                <div class="col-sm" style="padding-left:12px; padding-right:2px;">
                                    <form action="/pengeluaran/{{ $unit->id }}" method="GET">
                                        <button class="btn btn-info btn-sm" style="width: 100%; font-size:12px;">Lihat<i class="fa fa-eye" style="font-size: 13px; margin-left: 5px;"></i></button>
                                    </form>
                                </div>
                                <div class="col-sm" style="padding-left:2px; padding-right:2px;">
                                    <form action="/pengeluaran/edit/{{ $unit->id }}" method="GET">
                                        @csrf
                                        <button class="btn btn-success btn-sm" style="width: 100%; font-size:12px;">Edit<i class="fa fa-edit" style="font-size: 13px; margin-left: 5px;"></i></button>
                                    </form>
                                </div>
                                <div class="col-sm" style="padding-right:15px; padding-left:2px;">
                                    <form action="/pengeluaran/{{ $unit->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" style="width: 100%; font-size:12px;">Hapus<i class="fa fa-trash" style="font-size: 13px; margin-left: 5px;"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">{{ $pengeluaran->links() }}</div>
    </div>
    </div>
@endsection