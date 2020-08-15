@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container border rounded" style="margin-top:15vh; margin-bottom:15vh; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
    <h1 class="text-center" style="margin:40px;">Form Struktur</h1>
        <form action="/struktur" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Uraian</label>
                    <input type="text" class="form-control" name="uraian" required>
                </div>
                <div class="col-md-6 form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="kategori" placeholder="">
                        @foreach($kategori as $unit)
                        <option value="{{ $unit->kategori }}">{{ $unit->kategori }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>Volume</label>
                <textarea class="form-control" name="volume" id="" cols="30" rows="5" required></textarea>
            </div> 

            <div class="form-group">
                <label>Satuan</label>
                <textarea class="form-control" name="satuan" id="" cols="30" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label>Harga Satuan</label>
                <textarea class="form-control" name="harga_satuan" id="" cols="30" rows="5" required></textarea>
            </div>  

            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" required>
                </div>
            </div>
            
            <div class="d-flex justify-content-center">    
                <button style="margin: 20px; width:200px;" type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
                <a href="/struktur" style="margin: 20px; width:200px;" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
@endsection