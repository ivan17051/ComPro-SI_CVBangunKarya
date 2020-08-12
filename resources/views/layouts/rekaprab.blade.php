@yield('content')

<div class="row" style="margin-top:40px;">
    <div class="col-5 card-deck" style="margin-left:5px;">
        <div class="card" style="width: 100%; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15)">
            <div class="card-header">
                <h3 class="card-title text-center">Detail Proyek</h3>
            </div>
            <div class="card-body">
                
                <p class="card-text"><b>Nama Proyek:</b></p>
                <p class="card-text" style="margin-top:-10px;">{{ $proyek->nama_proyek }}</p>
                <p class="card-text" ><b>Lokasi Proyek:</b></p>
                <p class="card-text" style="margin-top:-10px;">{{ $proyek->lokasi }}</p>
            </div>
            
            <div class="card-footer text-center">
                <a href="#" class="btn btn-primary" style="width:70%;">Lihat Kategori<i class="fa fa-eye" style="font-size: 13px; margin-left: 5px;"></i></a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card-deck" style="padding-right:15px;">        
        
            <div class="card text-center" style="width: 100%; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15)">
                <div class="card-body">
                    <h5 class="card-title">Persiapan</h5>
                    <p class="card-text"><b>Rp 182.900.000</b></p>
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
                    <p class="card-text"><b>Rp 182.900.000</b></p>
                </div>
                <div class="card-footer"><a href="#" class="btn btn-primary" style="width:100%;">Lihat<i class="fa fa-eye" style="font-size: 13px; margin-left: 5px;"></i></a></div>
            </div>        
        </div>
    </div>
</div>