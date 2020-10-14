@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container border rounded" style="margin-top:15vh; margin-bottom:15vh; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
        <div class="row" style="border-top:solid 5px #f39c12; border-bottom:solid 1px #bdbdbd;">
            <div class="col text-center">
                <h1 style="margin:30px;">Form MEP RAB</h1>
                <h3 class="text-center" style="margin:40px; margin-top:-20px;">{{ $proyek->nama_proyek }}</h3>
            </div>
        </div>
        <form action="/rab/{{ $proyek->id }}/mep/create" method="POST" enctype="multipart/form-data" style="margin-top:30px;">
        @csrf
            <input type="text" name="id_proyek" value="{{ $proyek->id }}" hidden>
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori" placeholder="">
                    @foreach($kategori as $unit2)
                    <option value="{{ $unit2->nama_kategori }}">{{ $unit2->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Uraian</label>
                <input type="text" class="form-control" name="uraian" required>
            </div>
            <div class="row">
                <div class="col form-group">
                    <label>Volume</label>
                    <input type="text" class="form-control" name="volume" id="qty" required>
                </div>
                <div class="col form-group">
                    <label>Satuan</label>
                    <input type="text" class="form-control" name="satuan" required>
                </div>
            </div>
            
            <div class="row">
                <div class="col form-group">
                    <label>Harga Satuan</label>
                    <input type="text" class="form-control" name="harga" id="harga" required>
                </div>

                <div class="col form-group">
                    <label>Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" id="jumlah" required>
                </div>
            </div>            

            <div class="d-flex justify-content-center">
                <button style="margin: 20px; width:200px;" type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
                <a href="/rab/{{ $proyek->id }}/mep"class="btn btn-danger" style="margin: 20px; width:200px;">Batal</a>
            </div>
        </form>
    </div>
@endsection