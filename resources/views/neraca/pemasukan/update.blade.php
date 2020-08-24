@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container border rounded" style="margin-top:15vh; margin-bottom:15vh; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
    <h1 class="text-center" style="margin:40px;">Edit Pemasukan</h1>
        <form action="/neraca/pemasukan/edit/{{ $unit->id }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <input type="text" class="form-control" name="id_proyek" value="{{ $unit->id_proyek }}" hidden>
                <div class="col-md-6 form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" value="{{ $unit->tanggal_pemasukan }}" required>
                </div>
                <div class="col-md-6 form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="kategori" placeholder="">
                        @foreach($kategori as $unit2)
                        <option value="{{ $unit2->nama_kategori }}" @if($unit->kategori == $unit2->nama_kategori) selected @endif>{{ $unit2->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" name="deskripsi" cols="30" rows="5" required>{{ $unit->deskripsi }}</textarea>
            </div> 

            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" value="{{ $unit->jumlah_pemasukan_klien }}" required>
                </div>
                <div class="col-md-6">
                    <label>Bukti</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="bukti" value="{{ $unit->upload_bukti }}">
                            <label class="custom-file-label">Pilih File</label>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="d-flex justify-content-center">
                <button style="margin: 20px; width:200px;" type="submit" name="submit" class="btn btn-primary">Update Data</button>
                <a href="/neraca/{{ $unit->id_proyek }}/pemasukan" style="margin: 20px; width:200px;" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
@endsection