@extends('layouts.header_footer_admin')

@section('content2')
    <div class="row">
        <div class="col text-center" style="margin-top: 4.7rem;">
            <h1 style="margin:30px;">Gallery</h1>
        </div>
    </div>
    <div class="col-md-12 search-table-col">
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">Tambah<i class="fa fa-plus" style="margin-left: 5px;"></i></button>
    </div>
    <div class="photo-gallery" style="margin-top:10px; padding-top:40px; border-top:solid;">
        <div class="container">
            <div class="row photos">
            @foreach($gallery as $unit)
                <div class="col-sm-6 col-md-4 col-lg-3 item">
                    <div class="card">
                        <a data-lightbox="card-img-top photos" href="/{{$unit->upload_foto}}">
                            <img class="img-fluid" src="/{{$unit->upload_foto}}">
                        </a>
                        <div class="card-footer">
                            <form action="/portofolio/gallery/{{ $unit->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-danger btn-sm" style="width: 100%; font-size:12px;">Hapus<i class="fa fa-trash" style="font-size: 13px; margin-left: 5px;"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
                <div class="col-sm-6 col-md-4 col-lg-3 item">
                    <div class="card">
                        <a data-lightbox="card-img-top photos" href="/{{$unit->upload_foto}}">
                            <img class="img-fluid" src="">
                        </a>
                        <div class="card-footer">
                            <form action="/portofolio/gallery/{{ $unit->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-danger btn-sm" style="width: 100%; font-size:12px;">Hapus<i class="fa fa-trash" style="font-size: 13px; margin-left: 5px;"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="d-flex justify-content-center"></div> -->
        </div>
    </div> 
    
    
                            
            
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="/portofolio/gallery/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content" style="border-top:solid 5px #f39c12; border-bottom:solid 1px #bdbdbd;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengalaman</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label>Upload Foto</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="upload_foto">
                                    <label class="custom-file-label">Pilih File</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" type="submit" name="submit" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        
@endsection