@extends('layouts.header_footer_admin')

@section('content2')
<div class="row">
        <div class="col text-center" style="margin-top: 4.7rem;">
            <h1 style="margin:30px;">Pengalaman Kerja</h1>
        </div>
    </div>
    <div class="col-md-12 search-table-col">
        <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing here.."></div><span class="counter pull-right"></span><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">Tambah<i class="fa fa-plus" style="margin-left: 5px;"></i></button>
        <div
            class="table-responsive table-bordered table table-hover table-bordered results">
            <table class="table table-bordered table-hover">
                <thead class="bill-header cs">
                    <tr>
                        <th id="trs-hd" class="col-lg" style="width: 2%;">#</th>
                        <th id="trs-hd" class="col-lg" style="width: 20%;">Kategori</th>
                        <th id="trs-hd" class="col-lg" style="width: 15%;">Tahun</th>
                        <th id="trs-hd" class="col-lg" style="width: 45%;">Keterangan</th>
                        <th id="trs-hd" class="col-lg" style="width: 18%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                @if(session('success_message'))
                    <div class="alert alert-success">
                        {{ session('success_message') }}
                    </div>
                @endif
                @foreach($pengalaman as $unit)
                    <tr>
                        <td>{{ $unit->id }}</td>
                        <td>{{ $unit->kategori }}</td>
                        <td>{{ $unit->tahun }}</td>
                        <td>{{ $unit->pengalaman }}</td>
                        <td>
                            <div class="row">
                                <div class="col-sm" style="padding-left:12px; padding-right:2px;">
                                    <form action="/portofolio/pengalaman/edit/{{ $unit->id }}" method="GET">
                                        @csrf
                                        <button class="btn btn-success btn-sm" style="width: 100%; font-size:12px;">Edit<i class="fa fa-edit" style="font-size: 13px; margin-left: 5px;"></i></button>
                                    </form>
                                </div>
                                <div class="col-sm" style="padding-right:15px; padding-left:2px;">
                                    <form action="/portofolio/pengalaman/{{ $unit->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" style="width: 100%; font-size:12px;">Hapus<i class="fa fa-trash" style="font-size: 13px; margin-left: 5px;"></i></button>
                                    </form>
                                </div>
                            </div>
                            
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!-- <div class="d-flex justify-content-center"></div> -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="/portofolio/pengalaman/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content" style="border-top:solid 5px #f39c12; border-bottom:solid 1px #bdbdbd;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengalaman</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Kategori</label>
                                <select class="form-control" name="kategori" placeholder="">
                                    <option value="Pembangunan">Pembangunan</option>
                                    <option value="Desain">Desain</option>
                                    <option value="Renovasi">Renovasi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Tahun</label>
                                <input type="text" class="form-control" name="tahun" id="tahun">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Pengalaman</label>
                                <textarea class="form-control" name="pengalaman" id="pengalaman"></textarea>
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
        </div>
    </div>
    </div> 
@endsection