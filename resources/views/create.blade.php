@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container border rounded" style="margin-top:15vh; margin-bottom:15vh; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
        <h1 class="text-center" style="margin:40px;">Form Proyek</h1>
        <form action="/proyek/create" method="POST" enctype="multipart/form-data">
        @csrf            
            <div class="form-group">
                <label>Nama Proyek</label>
                <input type="text" class="form-control" name="nama_proyek" required>
            </div>
            
            <div class="form-group">
                <label>Lokasi Proyek</label>
                <textarea class="form-control" name="lokasi" id="" cols="30" rows="5" required></textarea>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Email Klien</label>
                        <input type="email" class="form-control" name="email_klien" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>No. HP Klien</label>
                        <input type="text" class="form-control" name="hp_klien" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input type="date" class="form-control" name="tgl_mulai" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Perkiraan Tanggal Selesai</label>
                        <input type="date" class="form-control" name="tgl_selesai" required>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button style="margin: 20px; width:200px;" type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
                <a href="/proyek" class="btn btn-danger" style="margin: 20px; width:200px;">Batal</a>
            </div>
        </form>
    </div>
@endsection