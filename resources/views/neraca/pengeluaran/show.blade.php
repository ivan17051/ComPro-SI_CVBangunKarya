@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container border rounded" style="margin-top:15vh; margin-bottom:15vh; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
    <h1 class="text-center" style="margin:40px;">Lihat Pengeluaran</h1>
        <form action="/pengeluaran/{{ $unit->id }}" method="GET" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Tanggal</label>
                    <p class="border rounded" style="padding:5px;">{{ $unit->tanggal_belanja }}</p>
                </div>
                <div class="col-md-6 form-group">
                    <label>Kategori</label>
                    <p class="border rounded" style="padding:5px;">{{ $unit->kategori }}</p>
                </div>
            </div>

            <div class="form-group">
                <label>Nama Barang</label>
                <p class="border rounded" style="padding:5px;">{{ $unit->list_belanja }}</p>
            </div>
            <div class="form-group">
                <label>Nama Toko</label>
                <p class="border rounded" style="padding:5px;">{{ $unit->nama_toko }}</p>
            </div>
            

            <div class="form-group">
                <label>Deskripsi</label>
                <p class="border rounded" style="padding:5px; height:150px;">{{ $unit->deskripsi }}</p>
            </div> 

            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Jumlah Barang</label>
                    <p class="border rounded" style="padding:5px;">{{ number_format($unit->jumlah_barang) }}</p>
                </div>
                <div class="col-md-6 form-group">
                    <label>Harga Satuan</label>
                    <p class="border rounded" style="padding:5px;">Rp {{ number_format($unit->harga_satuan) }}</p>
                </div>
            </div>

            <div class="form-group">
                <label>Jumlah</label>
                <p class="border rounded" style="padding:5px;">Rp {{ number_format($unit->jumlah) }}</p>
            </div>

            <div class="text-center">
                <p><label>Foto Bukti</label></p>
                <div class="photos">
                    <div class="item">
                        @if($unit->upload_bukti == NULL)
                        <p>Tidak Ada Foto</p>
                        @else
                        <a data-lightbox="photos" href="/{{ $unit->upload_bukti }}"><img class="img-fluid col-md-3" src="/{{ $unit->upload_bukti }}" alt="Foto"></a>
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="d-flex justify-content-center">
                <a href="/neraca/{{ $unit->id_proyek }}/pengeluaran" style="margin: 20px; width:200px;" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
@endsection