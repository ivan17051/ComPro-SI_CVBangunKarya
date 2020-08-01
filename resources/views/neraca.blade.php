@extends('layouts.header_footer_admin')

@section('content2')
    <h1 class="d-xl-flex justify-content-xl-center" style="margin-bottom: 0px;margin-top: 7rem;">Neraca Keuangan</h1>
    <div class="col-md-12 search-table-col">
        <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing here.."></div><span class="counter pull-right"></span><button class="btn btn-primary" type="button">Tambah<i class="fa fa-plus" style="margin-left: 5px;"></i></button>
        <div
            class="table-responsive table-bordered table table-hover table-bordered results">
            <table class="table table-bordered table-hover">
                <thead class="bill-header cs">
                    <tr>
                        <th id="trs-hd" class="col-lg" style="width: 2%;">No.</th>
                        <th id="trs-hd" class="col-lg" style="width: 10%;">Tanggal</th>
                        <th id="trs-hd" class="col-lg" style="width: 10%;">Nama Barang</th>
                        <th id="trs-hd" class="col-lg" style="width: 30%;">Deskripsi</th>
                        <th id="trs-hd" class="col-lg" style="width: 10%;">Qty</th>
                        <th id="trs-hd" class="col-lg" style="width: 10%;">Harga Satuan</th>
                        <th id="trs-hd" class="col-lg" style="width: 10%;">Jumlah</th>
                        <th id="trs-hd" class="col-lg" style="width: 13%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>02 Dec 2019</td>
                        <td>Baterai</td>
                        <td>Untuk&nbsp;</td>
                        <td>5</td>
                        <td>10000</td>
                        <td>50000</td>
                        <td>
                            <button class="btn btn-success" style="margin-left: 5px; text-size: 5;" type="submit">Edit<i class="fa fa-edit" style="font-size: 15px;margin-left: 5px;"></i></button>
                            <button class="btn btn-danger" style="margin-left: 5px;" type="submit">Hapus<i class="fa fa-trash" style="font-size: 15px;margin-left: 5px;"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>17 Dec 2019</td>
                        <td>Alat tulis</td>
                        <td>Untuk keperluan kantor</td>
                        <td>12</td>
                        <td>2000</td>
                        <td>24000</td>
                        <td><button class="btn btn-success" style="margin-left: 5px;" type="submit">Edit<i class="fa fa-edit" style="font-size: 15px;margin-left: 5px;"></i></button><button class="btn btn-danger" style="margin-left: 5px;" type="submit">Hapus<i class="fa fa-trash" style="font-size: 15px;margin-left: 5px;"></i></button></td>
                    </tr>
                </tbody>
            </table>
    </div>
    </div>
@endsection