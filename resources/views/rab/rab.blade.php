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
            <h2 style="margin:30px;">Rekap Rencana Anggaran Belanja</h2>
        </div>
    </div>
    
    <div class="row" style="margin-top:40px;">
        <div class="col-5 card-deck" style="margin-left:5px;">
            <div class="card" style="width: 100%; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15)">
                <div class="card-header">
                    <h3 class="card-title text-center">Detail Proyek</h3>
                </div>
                <div class="card-body">
                    
                    <p class="card-text" style="margin-top:-5px;"><b>Nama Proyek:</b></p>
                    <p class="card-text" style="margin-top:-15px;">{{ $proyek->nama_proyek }}</p>
                    <p class="card-text" ><b>Lokasi Proyek:</b></p>
                    <p class="card-text" style="margin-top:-15px;">{{ $proyek->lokasi }}</p>
                    <p class="card-text" ><b>Grand Total:</b></p>
                    <p class="card-text" style="margin-top:-15px; margin-bottom:-5px;">Rp {{ number_format($sumall) }}</p>
                </div>
                
                <div class="card-footer text-center">
                    <a href="/rab/{{ $proyek->id }}/kategori" class="btn btn-primary" style="width:70%;">Lihat Kategori<i class="fa fa-eye" style="font-size: 13px; margin-left: 5px;"></i></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card-deck" style="padding-right:15px;">        
            
                <div class="card text-center" style="width: 100%; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15)">
                    <div class="card-body">
                        <h5 class="card-title">Persiapan</h5>
                        <p class="card-text"><b>Rp {{ number_format($sumper) }}</b></p>
                    </div>
                    <div class="card-footer"><a href="/rab/{{ $proyek->id }}/persiapan" class="btn btn-primary" style="width:100%;">Lihat<i class="fa fa-eye" style="font-size: 13px; margin-left: 5px;"></i></a></div>
                </div>
        
                <div class="card text-center" style="width: 100%; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15)">
                    <div class="card-body">
                        <h5 class="card-title">Struktur</h5>
                        <p class="card-text"><b>Rp 182.900.000</b></p>
                    </div>
                    <div class="card-footer"><a href="#" class="btn btn-primary" style="width:100%;">Lihat<i class="fa fa-eye" style="font-size: 13px; margin-left: 5px;"></i></a></div>
                </div>                  
            
            </div>

            <div class="card-deck" style="padding-right:15px; margin-top:20px;">
                        
                <div class="card text-center" style="width: 100%; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15)">
                    <div class="card-body">
                        <h5 class="card-title">Arsitektur</h5>
                        <p class="card-text"><b>Rp 182.900.000</b></p>
                    </div>
                    <div class="card-footer"><a href="#" class="btn btn-primary" style="width:100%;">Lihat<i class="fa fa-eye" style="font-size: 13px; margin-left: 5px;"></i></a></div>
                </div>
            
                <div class="card text-center" style="width: 100%; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15)">
                    <div class="card-body">
                        <h5 class="card-title">MEP</h5>
                        <p class="card-text"><b>Rp {{ number_format($sumep) }}</b></p>
                    </div>
                    <div class="card-footer"><a href="#" class="btn btn-primary" style="width:100%;">Lihat<i class="fa fa-eye" style="font-size: 13px; margin-left: 5px;"></i></a></div>
                </div>        
            </div>
        </div>
    </div>
    
    
    <div class="col-md-12" style="margin-top:40px;">
        
        <div class="table-responsive table-bordered table table-hover table-bordered">
            <table class="table table-bordered table-hover">
                <thead class="bill-header cs">
                    <tr>
                        <th id="trs-hd" class="col" style="width: 2%;">No.</th>
                        <th id="trs-hd" class="col" style="width: 38%;">Uraian</th>
                        <th id="trs-hd" class="col" style="width: 10%;">Volume</th>
                        <th id="trs-hd" class="col" style="width: 25%;">Harga Satuan</th>
                        <th id="trs-hd" class="col" style="width: 25%;">Jumlah</th>
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
                        <td colspan="5"><b>PERSIAPAN</b></td>
                    </tr>
                    @foreach($persiapan as $unit)
                    <tr>
                        <td></td>
                        <td>{{ $unit->kategori }}</td>
                        <td>1 ls</td>
                        <td>Rp 21,200,000</td>
                        <td>Rp {{ number_format($unit->jum) }}</td>
                    </tr>
                    @endforeach
                    
                    <tr>                                                
                        <td colspan="5"><b>STRUKTUR</b></td>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Persiapan + Bongkar</td>
                        <td>1 ls</td>
                        <td>Rp 21,200,000</td>
                        <td>Rp 21,200,000</td>
                    </tr>
                    <tr>                        
                        <td colspan="5"><b>ARSITEKTUR</b></td>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Persiapan + Bongkar</td>
                        <td>1 ls</td>
                        <td>Rp 21,200,000</td>
                        <td>Rp 21,200,000</td>
                    </tr>
                    <tr>                        
                        <td colspan="5"><b>MECHANICAL, ELECTRICAL, & PLUMBING</b></td>
                    </tr>
                    @foreach($mep as $unit)
                    <tr>
                        <td>1.</td>
                        <td>{{ $unit->kategori }}</td>
                        <td>1 ls</td>
                        <td>Rp 21,200,000</td>
                        <td>Rp {{ number_format($unit->jum) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>            
        </div>
    </div>
@endsection