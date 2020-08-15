@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container border rounded" style="margin-top:15vh; margin-bottom:15vh; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
    <h1 class="text-center" style="margin:40px;">Lihat Pemasukan</h1>
        <form action="/struktur/{{ $unit->id_struktur }}" method="GET" enctype="multipart/form-data">
        <div class="row">
                <div class="col-md-6 form-group">
                    <label>Uraian</label>
                    <p class="border rounded" style="padding:5px;">{{ $unit->uaraian }}</p>
                </div>
                <div class="col-md-6 form-group">
                    <label>Kategori</label>
                    <p class="border rounded" style="padding:5px;">{{ $unit->kategori }}</p>
                </div>
            </div>

            <div class="form-group">
                <label>Volume</label>
                <p class="border rounded" style="padding:5px; height:150px;">{{ $unit->volume }}</p>
            </div> 

            <div class="form-group">
                <label>Satuan</label>
                <p class="border rounded" style="padding:5px; height:150px;">{{ $unit->satuan }}</p>
            </div>

            <div class="form-group">
                <label>Harga Satuan</label>
                <p class="border rounded" style="padding:5px;">Rp {{ number_format($unit->harga_satuan) }}</p>
            </div>

            <div class="row">
                <div class="col-md-12 form-group">
                    <label>Jumlah</label>
                    <p class="border rounded" style="padding:5px;">Rp {{ number_format($unit->jumlah) }}</p>
                </div>
            </div>
            
            <div class="d-flex justify-content-center">
                <a href="/pemasukan" style="margin: 20px; width:200px;" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
@endsection