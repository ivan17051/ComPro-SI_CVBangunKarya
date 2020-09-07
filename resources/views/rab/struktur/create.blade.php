@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container border rounded" style="margin-top:15vh; margin-bottom:15vh; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
    <h1 class="text-center" style="margin:40px;">Form Struktur</h1>
        <form action="/rab/{{ $proyek->id }}/struktur/create" method="POST" enctype="multipart/form-data">
        @csrf
            <input type="text" name="id_proyek" value="{{ $proyek->id }}" hidden>
            
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori" placeholder="">
                    @foreach($kategori as $unit)
                    <option value="{{ $unit->nama_kategori }}">{{ $unit->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Uraian</label>
                <input type="text" class="form-control" name="uraian" required>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Volume</label>
                        <input type="text" class="form-control" name="volume" id="qty" required>
                    </div> 
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Satuan</label>
                        <input type="text" class="form-control" name="satuan" required>
                    </div>
                </div>
            </div>
            
              

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Harga Satuan</label>
                        <input type="text" class="form-control" name="harga_satuan" id="harga" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" class="form-control" name="jumlah" id="jumlah" required>
                    </div>
                </div>
            </div>
            
            <div class="d-flex justify-content-center">    
                <button style="margin: 20px; width:200px;" type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
                <a href="/rab/{{ $proyek->id }}/struktur" style="margin: 20px; width:200px;" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
@endsection