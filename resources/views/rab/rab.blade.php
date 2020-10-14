@extends('layouts.header_footer_admin')

@section('content2')
    <div class="row">
        <div class="col text-center" style="margin-top: 4.7rem;">
            <!-- <nav aria-label="breadcrumb text-center" style="background-color:#e9ecef;">
                <ol class="breadcrumb" style="font-size:14px; margin-left:40px;">
                    <li class="breadcrumb-item"><a href="/rab">Proyek RAB</a></li>
                    <li class="breadcrumb-item active">Rekap RAB</li>
                </ol>
            </nav> -->
            <h1 style="margin:30px;">Rekap Rencana Anggaran Belanja</h1>
            <h3 class="text-center" style="margin:40px; margin-top:-20px;">{{ $proyek->nama_proyek }}</h3>
        </div>
    </div>
    
    <div class="col-md-12" style="margin-top:40px;">
        
        <div class="table-responsive table-bordered table table-hover table-bordered">
            <table class="table table-bordered table-hover">
                <thead class="bill-header cs">
                    <tr>
                        <th id="trs-hd" class="col" style="width: 5%;">#</th>
                        <th id="trs-hd" class="col" style="width: 45%;">Uraian</th>
                        <th id="trs-hd" class="col" style="width: 25%;">Jumlah</th>
                        <th id="trs-hd" class="col" style="width: 25%;">Total</th>
                    </tr>
                </thead>
                <tbody>
                @if($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                    <tr>                        
                        <td colspan="4" style="background-color:#d3d3d3;"><b>PERSIAPAN</b></td>
                    </tr>
                    @foreach($persiapan as $unit)
                    <tr>
                        <td></td>
                        <td>{{ $unit->kategori }}</td>
                        <td>Rp {{ number_format($unit->jumlah) }}</td>
                        <td></td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="3"><b>Total</b></td>
                        <td><b>Rp {{ number_format($sumper) }}</b></td>
                    </tr>
                    <tr>                                                
                        <td colspan="4" style="background-color:#d3d3d3;"><b>STRUKTUR</b></td>
                    </tr>
                    @foreach($struktur as $unit)
                    <tr>
                        <td></td>
                        <td>{{ $unit->kategori }}</td>
                        <td>Rp {{ number_format($unit->jumlah) }}</td>
                        <td></td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="3"><b>Total</b></td>
                        <td><b>Rp {{ number_format($sumstr) }}</b></td>
                    </tr>
                    <tr>                        
                        <td colspan="4" style="background-color:#d3d3d3;"><b>ARSITEKTUR</b></td>
                    </tr>
                    @foreach($arsitektur as $unit)
                    <tr>
                        <td></td>
                        <td>{{ $unit->kategori }}</td>
                        <td>Rp {{ number_format($unit->jumlah) }}</td>
                        <td></td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="3"><b>Total</b></td>
                        <td><b>Rp {{ number_format($sumar) }}</b></td>
                    </tr>
                    <tr>                        
                        <td colspan="4" style="background-color:#d3d3d3;"><b>MECHANICAL, ELECTRICAL, & PLUMBING</b></td>
                    </tr>
                    @foreach($mep as $unit)
                    <tr>
                        <td></td>
                        <td>{{ $unit->kategori }}</td>
                        <td>Rp {{ number_format($unit->jumlah) }}</td>
                        <td></td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="3"><b>Total</b></td>
                        <td><b>Rp {{ number_format($summep) }}</b></td>
                    </tr>
                    <tr style="background-color:#808080;">
                        <td colspan="3" style="color:#fff;"><b>Grand Total</b></td>
                        <td style="color:#fff;"><b>Rp {{ number_format($sumper + $sumar + $sumstr + $summep) }}</b></td>
                    </tr>
                </tbody>
            </table>            
        </div>
    </div>
@endsection