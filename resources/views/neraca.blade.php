@extends('layouts.header_footer_admin')

@section('content2')
    <h1 class="d-xl-flex justify-content-xl-center" style="margin-bottom: 0px;margin-top: 7rem;">Neraca Keuangan</h1>
    <div class="col-md-12 search-table-col">
        <div class="table-responsive table-bordered table table-hover table-bordered results">
            <table class="table table-bordered table-hover">
                <thead class="bill-header cs">
                    <tr>
                        <th id="trs-hd" class="col-lg" style="width: 7%;">No. Akun</th>
                        <th id="trs-hd" class="col-lg" style="width: 45%;">Perkiraan/Akun</th>
                        <th id="trs-hd" class="col-lg" style="width: 15%;">Debit</th>
                        <th id="trs-hd" class="col-lg" style="width: 15%;">Kredit</th>
                        <th id="trs-hd" class="col-lg" style="width: 18%;">Saldo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pemasukan as $unit1)
                        <tr> 
                            <td></td>
                            <td></td>
                            <td>{{ $unit1 }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforeach
                    @foreach($pengeluaran as $unit2)
                        <tr> 
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{ $unit2 }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                    {{ $pemasukan }} - {{ $pengeluaran }}
                </tbody>
            </table>
    </div>
    </div>
@endsection