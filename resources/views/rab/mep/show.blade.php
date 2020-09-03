@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container border rounded" style="margin-top:15vh; margin-bottom:15vh; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
        <h1 class="text-center" style="margin:40px;">Form MEP</h1>
        <form action="" method="" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label>Kategori</label>
                <p class="border rounded" style="padding:5px;">{{ $unit->kategori }}</p>
                </select>
            </div>
            <div class="form-group">
                <label>Uraian</label>
                <p class="border rounded" style="padding:5px;">{{ $unit->uraian }}</p>
            </div>
            <div class="row">
                <div class="col form-group">
                    <label>Volume</label>
                    <p class="border rounded" style="padding:5px;">{{ $unit->volume }}</p>
                </div>
                <div class="col form-group">
                    <label>Satuan</label>
                    <p class="border rounded" style="padding:5px;">{{ $unit->satuan }}</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col form-group">
                    <label>Harga Satuan</label>
                    <p class="border rounded" style="padding:5px;">Rp {{ number_format($unit->harga_satuan) }}</p>
                </div>

                <div class="col form-group">
                    <label>Jumlah</label>
                    <p class="border rounded" style="padding:5px;">Rp {{ number_format($unit->jumlah) }}</p>
                </div>
            </div>            

            <div class="d-flex justify-content-center">
                <a href="/rab/{{ $unit->id_proyek }}/mep"class="btn btn-danger" style="margin: 20px; width:200px;">Kembali</a>
            </div>
        </form>
    </div>
@endsection