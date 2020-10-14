@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container border rounded" style="margin-top:15vh; margin-bottom:15vh; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
        <div class="row" style="border-top:solid 5px #f39c12; border-bottom:solid 1px #bdbdbd;">
            <div class="col text-center">
                <h1 style="margin:30px;">Detail Struktur RAB</h1>
                <h3 class="text-center" style="margin:40px; margin-top:-20px;">{{ $proyek->nama_proyek }}</h3>
            </div>
        </div>
        <form action="/rab/struktur/{{ $unit->id_struktur }}" method="GET" enctype="multipart/form-data" style="margin-top:30px;">
            <div class="form-group">
                <label>Kategori</label>
                <p class="border rounded" style="padding:5px;">{{ $unit->kategori }}</p>
            </div>
            <div class="form-group">
                <label>Uraian</label>
                <p class="border rounded" style="padding:5px;">{{ $unit->uraian }}</p>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Volume</label>
                        <p class="border rounded" style="padding:5px;">{{ $unit->volume }}</p>
                    </div> 
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Satuan</label>
                        <p class="border rounded" style="padding:5px;">{{ $unit->satuan }}</p>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Harga Satuan</label>
                <p class="border rounded" style="padding:5px;">Rp {{ number_format($unit->harga_satuan) }}</p>
            </div>

            <div class="form-group">
                <label>Jumlah</label>
                <p class="border rounded" style="padding:5px;">Rp {{ number_format($unit->jumlah) }}</p>
            </div>
            
            <div class="d-flex justify-content-center">
                <a href="/rab/{{ $unit->id_proyek }}/struktur" style="margin: 20px; width:200px;" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
@endsection