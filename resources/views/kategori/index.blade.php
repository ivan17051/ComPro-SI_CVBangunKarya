@extends('layouts.header_footer_admin')

@section('content2')
    <h1 class="text-center" style="margin-top: 7rem;">Kategori</h1>
    <div class="col-md-12 search-table-col">
        <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing here.."></div><span class="counter pull-right"></span><a href="/kategori/create"><button class="btn btn-primary" type="button">Tambah<i class="fa fa-plus" style="margin-left: 5px;"></i></button></a>
        <div
            class="table-responsive table-bordered table table-hover table-bordered results">
            <table class="table table-bordered table-hover">
                <thead class="bill-header cs">
                    <tr>
                        <th id="trs-hd" class="col-lg" style="width: 2%;">No.</th>
                        <th id="trs-hd" class="col-lg" style="width: 55%;">Nama Kategori</th>
                        <th id="trs-hd" class="col-lg" style="width: 25%;">Keterangan</th>
                        <th id="trs-hd" class="col-lg" style="width: 18%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kategori as $unit)
                    <tr>
                        <td>{{ $unit->id_kategori }}</td>
                        <td>{{ $unit->nama_kategori }}</td>
                        <td>{{ $unit->keterangan }}</td>
                        <td>
                            <button class="btn btn-success" style="margin-left: 5px; width: 45%;" type="submit">Edit<i class="fa fa-edit" style="font-size: 15px;margin-left: 5px;"></i></button>
                            <button class="btn btn-danger" style="margin-left: 5px; width: 45%;" type="submit">Hapus<i class="fa fa-trash" style="font-size: 15px;margin-left: 5px;"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">{{ $kategori->links() }}</div>
    </div>
    </div>
@endsection