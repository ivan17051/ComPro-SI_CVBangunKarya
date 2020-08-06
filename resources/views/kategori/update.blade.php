@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container border rounded" style="margin-top:15vh; margin-bottom:15vh; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
        <h1 class="text-center" style="margin:40px;">Form Kategori</h1>
        <form action="/kategori/edit/{{ $unit->id }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" class="form-control" name="nama" value="{{ $unit->nama_kategori }}">
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <select class="form-control" name="keterangan" placeholder="Pilih">
                    <option value="Pemasukan" @if($unit->keterangan == 'Pemasukan') selected @endif>Pemasukan</option>
                    <option value="Pengeluaran" @if($unit->keterangan == 'Pengeluaran') selected @endif>Pengeluaran</option>
                </select>
            </div>

            <div class="d-flex justify-content-center">
                <button style="margin: 20px; width:200px;" type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
                <a href="/kategori" class="btn btn-danger" style="margin:20px; width:200px;">Batal</a>
            </div>
        </form>
    </div>
@endsection