@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container border rounded" style="margin-top:15vh; margin-bottom:15vh; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
        <div class="row" style="border-top:solid 5px #f39c12; border-bottom:solid 1px #bdbdbd;">
            <div class="col text-center">
                <h1 style="margin:30px;">Edit Pengalaman</h1>
            </div>
        </div>
        <form action="/portofolio/pengalaman/edit/{{ $unit->id }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row" style="margin-top:30px;">
                <div class="col form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="kategori" placeholder="">
                        <option value="Pembangunan" @if($unit->kategori == "Pembangunan") selected @endif>Pembangunan</option>
                        <option value="Desain" @if($unit->kategori == "Desain") selected @endif>Desain</option>
                        <option value="Renovasi" @if($unit->kategori == "Renovasi") selected @endif>Renovasi</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Tahun</label>
                <input type="text" class="form-control" name="tahun" value="{{ $unit->tahun }}" required>
            </div>

            <div class="form-group">
                <label>Pengalaman</label>
                <textarea class="form-control" name="pengalaman" cols="30" rows="5" required>{{ $unit->pengalaman }}</textarea>
            </div> 
                
            <div class="d-flex justify-content-center">
                <button style="margin: 20px; width:200px;" type="submit" name="submit" class="btn btn-primary">Update Data</button>
                <a href="/portofolio/pengalaman" style="margin: 20px; width:200px;" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
@endsection