@extends('layouts.header_footer_admin')

@section('content2')
    <div class="row">
        <div class="col text-center" style="margin-top: 4.7rem;">
            <h1 style="margin:30px;">Neraca Keuangan</h1>
            <h3 class="text-center" style="margin:40px; margin-top:-20px;">{{ $proyek->nama_proyek }}</h3>
        </div>
    </div>
    <div class="col-md-12 search-table-col">
        <div class="table-responsive table-bordered table table-hover table-bordered results">
            <table class="table table-bordered table-hover">
                <thead class="bill-header cs">
                    <tr>
                        <th id="trs-hd" class="col-lg" style="width: 10%;">No. Akun</th>
                        <th id="trs-hd" class="col-lg" style="width: 50%;">Perkiraan/Akun</th>
                        <th id="trs-hd" class="col-lg" style="width: 20%;">Debit</th>
                        <th id="trs-hd" class="col-lg" style="width: 20%;">Kredit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pemasukan as $unit1)                  
                        <tr> 
                            <td></td>
                            <td>{{ $unit1->kategori }}</td>
                            <td>Rp {{ number_format($unit1->jumlah) }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                    @foreach($pengeluaran as $unit2)
                        <tr> 
                            <td></td>
                            <td>{{ $unit2->kategori }}</td>
                            <td></td>
                            <td>Rp {{ number_format($unit2->jumlah) }}</td>
                        </tr>
                    @endforeach
                        <tr class="bg-dark"> 
                            <td colspan=2 class="text-center" style="color:white;">Jumlah</td>
                            <td style="color:white;">Rp {{ number_format($sum1) }}</td>
                            <td style="color:white;">Rp {{ number_format($sum2) }}</td>
                        </tr>
                </tbody>
            </table>
    </div>
    </div>
@endsection