@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container border rounded" style="margin-top:15vh; margin-bottom:15vh; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
        <h1 class="text-center" style="margin:40px;">Form Kategori</h1>
        <form action="/rab/kategori/edit/{{ $unit->id }}" method="POST" enctype="multipart/form-data">
        @csrf
                <input type="text" class="form-control" name="id_proyek" value="{{ $unit->id_proyek }}" hidden>
            <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" class="form-control" name="nama" value="{{ $unit->nama_kategori }}">
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <select class="form-control" name="keterangan" placeholder="Pilih">
                    <option value="Persiapan" @if($unit->keterangan == 'Persiapan') selected @endif>Persiapan</option>
                    <option value="Struktur" @if($unit->keterangan == 'Struktur') selected @endif>Struktur</option>
                    <option value="Arsitektur" @if($unit->keterangan == 'Arsitektur') selected @endif>Arsitektur</option>
                    <option value="MEP" @if($unit->keterangan == 'MEP') selected @endif>MEP</option>
                </select>
            </div>

            <div class="d-flex justify-content-center">
                <button style="margin: 20px; width:200px;" type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
                <a href="/rab/{{ $unit->id_proyek }}/kategori" class="btn btn-danger" style="margin:20px; width:200px;">Batal</a>
            </div>
        </form>
    </div>
@endsection