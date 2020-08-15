@extends('layouts.header_footer_admin')

@section('content2')
    <div class="container border rounded" style="margin-top:15vh; margin-bottom:15vh; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
    <h1 class="text-center" style="margin:40px;">Edit Pemasukan</h1>
        <form action="/struktur/edit/{{ $unit->id_struktur }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Uraian</label>
                    <input type="text" class="form-control" name="uraian" value="{{ $unit->uraian }}" required>
                </div>
                <div class="col-md-6 form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="kategori" placeholder="">
                        @foreach($kategori as $unit2)
                        <option value="{{ $unit2->kategori }}" @if($unit->kategori == $unit2->kategori) selected @endif>{{ $unit2->kategori }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>Volume</label>
                <textarea class="form-control" name="volume" cols="30" rows="5" required>{{ $unit->volume }}</textarea>
            </div> 

            <div class="form-group">
                <label>Satuan</label>
                <textarea class="form-control" name="satuan" cols="30" rows="5" required>{{ $unit->satuan }}</textarea>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Harga Satuan</label>
                    <input type="text" class="form-control" name="harga_satuan" value="{{ $unit->harga_satuan }}" required>
                </div>

                <div class="col-md-6 form-group">
                    <label>Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" value="{{ $unit->jumlah }}" required>
                </div>
            </div>
            
            <div class="d-flex justify-content-center">
                <button style="margin: 20px; width:200px;" type="submit" name="submit" class="btn btn-primary">Update Data</button>
                <a href="/pemasukan" style="margin: 20px; width:200px;" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
@endsection