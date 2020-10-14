@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container border rounded" style="margin-top:15vh; margin-bottom:15vh; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
        <div class="row" style="border-top:solid 5px #f39c12; border-bottom:solid 1px #bdbdbd;">
            <div class="col text-center">
                <h1 style="margin:30px;">Edit Struktur RAB</h1>
                <h3 class="text-center" style="margin:40px; margin-top:-20px;">{{ $proyek->nama_proyek }}</h3>
            </div>
        </div>
        <form action="/rab/struktur/edit/{{ $unit->id }}" method="POST" enctype="multipart/form-data" style="margin-top:30px;">
        @csrf
            <input type="text" name="id_proyek" value="{{ $unit->id_proyek }}" hidden>
            <div class="form-group">
                <label>Uraian</label>
                <input type="text" class="form-control" name="uraian" value="{{ $unit->uraian }}" required>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori" placeholder="">
                    @foreach($kategori as $unit2)
                    <option value="{{ $unit2->nama_kategori }}" @if($unit->kategori == $unit2->nama_kategori) selected @endif>{{ $unit2->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>
        
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Volume</label>
                        <input type="text" class="form-control" name="volume" id="qty" value="{{ $unit->volume }}" required>
                    </div> 
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Satuan</label>
                        <input type="text" class="form-control" name="satuan" value="{{ $unit->satuan }}" required>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Harga Satuan</label>
                        <input type="text" class="form-control" name="harga_satuan" id="harga" value="{{ $unit->harga_satuan }}" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" class="form-control" name="jumlah" id="jumlah" value="{{ $unit->jumlah }}" required>
                    </div>
                </div>
            </div>
            
            <div class="d-flex justify-content-center">
                <button style="margin: 20px; width:200px;" type="submit" name="submit" class="btn btn-primary">Update Data</button>
                <a href="/rab/{{ $unit->id_proyek }}/struktur" style="margin: 20px; width:200px;" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
@endsection