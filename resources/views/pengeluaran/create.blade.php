@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container border rounded" style="margin-top:15vh; margin-bottom:15vh; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
        <h1 class="text-center" style="margin:40px;">Form Pengeluaran</h1>
        <form action="/pengeluaran" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" required>
                </div>
                <div class="col-md-6 form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="kategori" placeholder="">
                        @foreach($kategori as $unit)
                        <option value="{{ $unit->nama_kategori }}">{{ $unit->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" required>
            </div>
            <div class="form-group">
                <label>Nama Toko</label>
                <input type="text" class="form-control" name="toko">
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="" cols="30" rows="5" required></textarea>
            </div>

            <div class="row">
                <div class="col form-group">
                    <label>Qty</label>
                    <input type="number" class="form-control" name="qty" id="qty" required>
                </div>

                <div class="col form-group">
                    <label>Harga Satuan</label>
                    <input type="text" class="form-control" name="harga" id="harga" required>
                </div>
            </div>            

            <div class="row">
                <div class="col form-group">
                    <label>Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" id="jumlah" required>
                </div>
                <div class="col">
                    <label>Bukti</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="bukti">
                            <label class="custom-file-label">Pilih File</label>
                        </div>
                    </div>
                </div>
            </div>    

            
            <div class="d-flex justify-content-center">
                <button style="margin: 20px; width:200px;" type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
                <a href="/pengeluaran" class="btn btn-danger" style="margin: 20px; width:200px;">Batal</a>
            </div>
        </form>
    </div>
@endsection