@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container">
        <form action="/kategori" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group" style="margin-top:120px">
                <label>Nama Kategori</label>
                <input type="text" class="form-control" name="nama">
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <select class="form-control" name="keterangan" placeholder="Pilih">
                    <option value="Pemasukan">Pemasukan</option>
                    <option value="Pengeluaran">Pengeluaran</option>
                </select>
            </div>

            <div class="d-flex justify-content-center">
                <button style="margin: 40px" type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </form>
    </div>
@endsection