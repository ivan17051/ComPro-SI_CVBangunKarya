@extends('layouts.header_footer_admin')

@section('content2')
    <div class="row">
        <div class="col text-center" style="margin-top: 4.7rem;">
            <h1 style="margin:30px;">Kategori RAB</h1>
            <h3 class="text-center" style="margin:40px; margin-top:-20px;">{{ $proyek->nama_proyek }}</h3>
        </div>
    </div>
    <div class="col-md-12 search-table-col">
        <div class="form-group pull-right col-lg-4">
            <input type="text" class="search form-control" placeholder="Search by typing here..">
        </div>
        <span class="counter pull-right"></span>
        <a href="/rab/{{ $proyek->id }}/kategori/create"><button class="btn btn-primary" type="button">Tambah<i class="fa fa-plus" style="margin-left: 5px;"></i></button></a>
        
        <div
            class="table-responsive table-bordered table table-hover table-bordered results">
            <table class="table table-bordered table-hover">
                <thead class="bill-header cs">
                    <tr>
                        <th id="trs-hd" class="col-lg" style="width: 2%;">#</th>
                        <th id="trs-hd" class="col-lg" style="width: 55%;">Nama Kategori</th>
                        <th id="trs-hd" class="col-lg" style="width: 25%;">Keterangan</th>
                        <th id="trs-hd" class="col-lg" style="width: 18%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                @if(session('success_message'))
                    <div class="alert alert-success">
                        {{ session('success_message') }}
                    </div>
                @endif
                @foreach($kategori as $unit)
                    <tr>
                        <td>{{ $unit->id }}</td>
                        <td>{{ $unit->nama_kategori }}</td>
                        <td>{{ $unit->keterangan }}</td>
                        <td>
                            <div class="row">
                                <div class="col-sm" style="padding-left:12px; padding-right:2px;">
                                    <form action="/rab/kategori/edit/{{ $unit->id }}" method="GET">
                                        @csrf
                                        <button class="btn btn-success btn-sm" style="width: 100%; font-size:12px;">Edit<i class="fa fa-edit" style="font-size: 13px; margin-left: 5px;"></i></button>
                                    </form>
                                </div>
                                <div class="col-sm" style="padding-right:15px; padding-left:2px;">
                                    <form action="/rab/kategori/edit/{{ $unit->id }}" method="POST">
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
            <div class="d-flex justify-content-center">{{ $kategori->links() }}</div>
    </div>
    </div>
@endsection