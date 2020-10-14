@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container border rounded" style="margin-top:15vh; margin-bottom:15vh; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
        <div class="row" style="border-top:solid 5px #f39c12; border-bottom:solid 1px #bdbdbd;">
            <div class="col text-center">
                <h1 style="margin:30px;">Edit Data Proyek</h1>
                <h3 style="margin:40px; margin-top:-30px;">{{ $unit->nama_proyek }}</h3>
            </div>
        </div>
        <form action="/proyek/edit/{{ $unit->id }}" method="POST" enctype="multipart/form-data" style="margin-top:30px;">
        @csrf            
            <div class="form-group">
                <label>Nama Proyek</label>
                <input type="text" class="form-control" name="nama_proyek" value="{{ $unit->nama_proyek }}" required>
            </div>
            
            <div class="form-group">
                <label>Lokasi Proyek</label>
                <textarea class="form-control" name="lokasi" id="" cols="30" rows="5" required>{{ $unit->lokasi }}</textarea>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Email Klien</label>
                        <input type="email" class="form-control" name="email_klien" value="{{ $unit->email_klien }}" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>No. HP Klien</label>
                        <input type="text" class="form-control" name="hp_klien" value="{{ $unit->no_hp }}" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input type="date" class="form-control" name="tgl_mulai" value="{{ $unit->tgl_mulai }}" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Perkiraan Tanggal Selesai</label>
                        <input type="date" class="form-control" name="tgl_selesai" value="{{ $unit->tgl_selesai }}" required>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button style="margin: 20px; width:200px;" type="submit" name="submit" class="btn btn-primary">Update Data</button>
                <a href="/proyek" class="btn btn-danger" style="margin: 20px; width:200px;">Batal</a>
            </div>
        </form>
    </div>
@endsection