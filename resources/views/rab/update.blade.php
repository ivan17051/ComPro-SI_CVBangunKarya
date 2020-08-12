@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container border rounded" style="margin-top:15vh; margin-bottom:15vh; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
        <h1 class="text-center" style="margin:40px;">Form Proyek</h1>
        <form action="/rab/edit/{{ $unit->id }}" method="POST" enctype="multipart/form-data">
        @csrf            
            <div class="form-group">
                <label>Nama Proyek</label>
                <input type="text" class="form-control" name="nama_proyek" value="{{ $unit->nama_proyek }}" required>
            </div>
            
            <div class="form-group">
                <label>Lokasi Proyek</label>
                <textarea class="form-control" name="lokasi" id="" cols="30" rows="5" required>{{ $unit->lokasi }}</textarea>
            </div>

            <input type="text" name="total" value="{{ $unit->total }}" hidden>

            <div class="d-flex justify-content-center">
                <button style="margin: 20px; width:200px;" type="submit" name="submit" class="btn btn-primary">Update Data</button>
                <a href="/rab" class="btn btn-danger" style="margin: 20px; width:200px;">Batal</a>
            </div>
        </form>
    </div>
@endsection