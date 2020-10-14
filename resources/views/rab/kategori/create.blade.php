@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container border rounded" style="margin-top:15vh; margin-bottom:15vh; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
        <div class="row" style="border-top:solid 5px #f39c12; border-bottom:solid 1px #bdbdbd;">
            <div class="col text-center">
                <h1 style="margin:30px;">Form Kategori RAB</h1>
                <h3 class="text-center" style="margin:40px; margin-top:-20px;">{{ $proyek->nama_proyek }}</h3>
            </div>
        </div>
        <form action="/rab/{{ $proyek->id }}/kategori/create" method="POST" enctype="multipart/form-data" style="margin-top:30px;">
        @csrf
            <input type="text" name="id_proyek" value="{{ $proyek->id }}" hidden>
            <div class="form-group">
                <label>Nama Kategori Uraian</label>
                <input type="text" class="form-control" name="uraian" required>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="keterangan" placeholder="">
                    <option value="Persiapan">Persiapan</option>
                    <option value="Struktur">Struktur</option>
                    <option value="Arsitektur">Arsitektur</option>
                    <option value="MEP">MEP</option>
                </select>
            </div>         

            <div class="d-flex justify-content-center">
                <button style="margin: 20px; width:200px;" type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
                <a href="/rab/{{ $proyek->id }}/kategori"class="btn btn-danger" style="margin: 20px; width:200px;">Batal</a>
            </div>
        </form>
    </div>
@endsection