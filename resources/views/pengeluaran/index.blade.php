@extends('layouts.header_footer_admin')

@section('content2')
    <h1 class="d-xl-flex justify-content-xl-center" style="margin-bottom: 0px;margin-top: 7rem;">Pengeluaran</h1>
    <div class="col-md-12 search-table-col">
        <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing here.."></div><span class="counter pull-right"></span><button class="btn btn-primary" type="button">Tambah<i class="fa fa-plus" style="margin-left: 5px;"></i></button>
        <div
            class="table-responsive table-bordered table table-hover table-bordered results">
            <table class="table table-bordered table-hover">
                <thead class="bill-header cs">
                    <tr>
                        <th id="trs-hd" class="col-lg-1" style="width: 2%;">No.</th>
                        <th id="trs-hd" class="col-lg-2" style="width: 10%;">Tanggal</th>
                        <th id="trs-hd" class="col-lg-3" style="width: 10%;">Nama Barang</th>
                        <th id="trs-hd" class="col-lg-2" style="width: 30%;">Deskripsi</th>
                        <th id="trs-hd" class="col-lg-2" style="width: 10%;">Qty</th>
                        <th id="trs-hd-1" class="col-lg-2" style="width: 10%;">Harga Satuan</th>
                        <th id="trs-hd-2" class="col-lg-2" style="width: 10%;">Jumlah</th>
                        <th id="trs-hd" class="col-lg-2" style="width: 13%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pemasukan as $unit)
                    <tr>
                        <td>{{ $unit->id }}</td>
                        <td>{{ $unit->tanggal }}</td>
                        <td>{{ $unit->nama_barang }}</td>
                        <td>{{ $unit->deskripsi }}</td>
                        <td>{{ $unit->qty }}</td>
                        <td>{{ $unit->harga_satuan }}</td>
                        <td>{{ $unit->jumlah }}</td>
                        <td><button class="btn btn-success" style="margin-left: 5px;" type="submit">Edit<i class="fa fa-edit" style="font-size: 15px;margin-left: 5px;"></i></button>
                        <button class="btn btn-danger" style="margin-left: 5px;" type="submit">Hapus<i class="fa fa-trash" style="font-size: 15px;margin-left: 5px;"></i></button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">{{ $pemasukan->links() }}</div>
    </div>
    </div>
@endsection