@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container">
        <form action="/pengeluaran" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group" style="margin-top:120px">
                <label>Tanggal</label>
                <input type="date" class="form-control" name="tanggal">
            </div>

            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" placeholder="">
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" placeholder="">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori" placeholder="">
                    @foreach($kategori as $unit)
                    <option value="{{ $unit->nama_kategori }}">{{ $unit->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Qty</label>
                <input type="number" class="form-control" name="qty" placeholder="">
            </div>

            <div class="form-group">
                <label>Harga Satuan</label>
                <input type="text" class="form-control" name="harga" placeholder="">
            </div>

            <div class="form-group">
                <label>Jumlah</label>
                <input type="text" class="form-control" name="jumlah" placeholder="">
            </div>
            
            <label>Bukti</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="bukti">
                    <label class="custom-file-label">Pilih File</label>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button style="margin: 40px" type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </form>
    </div>
@endsection