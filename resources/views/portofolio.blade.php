@extends('layouts.header_footer')

@section('content2')
<div class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center" data-bs-parallax-bg="true" style="height: 50vh;background-image: url(https://images.pexels.com/photos/373912/pexels-photo-373912.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);background-position: center;background-size: cover;margin-top: 3rem;">
        <h1 class="text-center" style="color: rgb(255,255,255);">Portofolio</h1>
    </div>
    <div class="photo-gallery" style="background-color: #f8f9fa">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Gallery</h2>
            </div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/0fbd7c61-a79d-45ff-ba0a-42f4f1d27747.jpg"><img class="img-fluid" src="assets/img/0fbd7c61-a79d-45ff-ba0a-42f4f1d27747.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/2e59551b-5639-48bb-986f-2a9c4bab36f1.jpg"><img class="img-fluid" src="assets/img/2e59551b-5639-48bb-986f-2a9c4bab36f1.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/5f653f39-ef80-4486-9a3f-95eb285b8604.jpg"><img class="img-fluid" src="assets/img/5f653f39-ef80-4486-9a3f-95eb285b8604.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/15f4897b-d295-4e08-8d2b-496f68db6ae8.jpg"><img class="img-fluid" src="assets/img/15f4897b-d295-4e08-8d2b-496f68db6ae8.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/31ec8515-6100-48d6-a27c-d2b37fcf5e3c.jpg"><img class="img-fluid" src="assets/img/31ec8515-6100-48d6-a27c-d2b37fcf5e3c.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/92c68b41-2aaf-4baa-8674-e35ea3f9459d.jpg"><img class="img-fluid" src="assets/img/92c68b41-2aaf-4baa-8674-e35ea3f9459d.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/45109bc5-2c6c-460e-8f5c-31ec7216d70b.jpg"><img class="img-fluid" src="assets/img/45109bc5-2c6c-460e-8f5c-31ec7216d70b.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/ada9087e-69c9-4c8f-9eed-263d9a2c6e26.jpg"><img class="img-fluid" src="assets/img/ada9087e-69c9-4c8f-9eed-263d9a2c6e26.jpg"></a></div>
            </div>
        </div>
    </div>
    <!-- <div class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Pengalaman Kerja</h2>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-home icon"></i>
                        <h3 class="name" style="font-size: 20px;">2012</h3>
                        <p class="description" style="font-size: 18px;">Pembangunan Rumah Tinggal Tahap 1 Type Celestite, Citraland Bali</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="height: 288px;"><i class="fa fa-home icon"></i>
                        <h3 class="name" style="font-size: 20px;">2012</h3>
                        <p class="description" style="font-size: 18px;">Rumah/Villa Kembar, Denpasar Bali</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="height: 288px;"><i class="fa fa-pencil icon" style="color: rgb(238,138,20);"></i>
                        <h3 class="name">2013</h3>
                        <p class="description" style="font-size: 18px;">Desain Rumah Hunian</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="height: 288px;"><i class="fas fa-hammer icon" style="color: rgb(33,200,18);"></i>
                        <h3 class="name" style="font-size: 20px;">2013</h3>
                        <p class="description" style="font-size: 18px;">Renovasi Rumah Kos</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="height: 288px;"><i class="fa fa-home icon"></i>
                        <h3 class="name" style="font-size: 20px;">2013-2014</h3>
                        <p class="description" style="font-size: 18px;">Rumah/Villa Kembar, Denpasar Bali</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="height: 288px;"><i class="fa fa-home icon"></i>
                        <h3 class="name" style="font-size: 20px;">2014</h3>
                        <p class="description" style="font-size: 18px;">Rumah/Villa Kembar, Denpasar Bali</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="height: 288px;"><i class="fas fa-hammer icon" style="color: rgb(33,200,18);"></i>
                        <h3 class="name" style="font-size: 20px;">2015</h3>
                        <p class="description" style="font-size: 18px;">Renovasi Rumah Kos</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="height: 288px;"><i class="fa fa-pencil icon" style="color: rgb(238,138,20);"></i>
                        <h3 class="name" style="font-size: 20px;">2015</h3>
                        <p class="description" style="font-size: 18px;">Desain Rumah Hunian</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="height: 288px;"><i class="fa fa-home icon"></i>
                        <h3 class="name" style="font-size: 20px;">2015</h3>
                        <p class="description" style="font-size: 18px;">Rumah/Villa Kembar, Denpasar Bali</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="photo-gallery">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Pengalaman Kerja</h2>
        </div>
      <ul class="timeline">
        <li>
            <div class="timeline-badge pembangunan"><i class="fa fa-home icon m-auto"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">2015</h4>
                </div>
                <div class="timeline-body">
                    <p>Pembangunan Rumah/Villa Kembar, Denpasar Bali</p>
                </div>
            </div>
        </li>
        <li class="timeline-inverted">
            <div class="timeline-badge desain"><i class="fa fa-pencil icon m-auto"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">2015</h4>
                </div>
                <div class="timeline-body">
                    <p>Desain Rumah Hunian</p>
                </div>
            </div>
        </li>
        <li>
            <div class="timeline-badge renovasi"><i class="fas fa-hammer icon m-auto"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">2015</h4>
                </div>
                <div class="timeline-body">
                    <p>Renovasi Rumah Kos</p>
                </div>
            </div>
        </li>
        <li class="timeline-inverted">
            <div class="timeline-badge pembangunan"><i class="fas fa-home icon m-auto"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">2014</h4>
                </div>
                <div class="timeline-body">
                    <p>Pembangunan Rumah/Villa Kembar, Denpasar Bali</p>
                </div>
            </div>
        </li>
        <li>
            <div class="timeline-badge pembangunan"><i class="fa fa-home icon m-auto"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">2013-2014</h4>
                </div>
                <div class="timeline-body">
                    <p>Pembangunan Rumah/Villa Kembar, Denpasar Bali</p>
                </div>
            </div>
        </li>
        <li class="timeline-inverted">
            <div class="timeline-badge renovasi"><i class="fas fa-hammer icon m-auto"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">2013</h4>
                </div>
                <div class="timeline-body">
                    <p>Renovasi Rumah Hunian</p>
                </div>
            </div>
        </li>
        <li>
            <div class="timeline-badge desain"><i class="fa fa-pencil icon m-auto"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">2013</h4>
                </div>
                <div class="timeline-body">
                    <p>Desain Rumah Hunian</p>
                </div>
            </div>
        </li>
        <li class="timeline-inverted">
              <div class="timeline-badge pembangunan"><i class="fa fa-home icon m-auto"></i></div>
              <div class="timeline-panel">
                  <div class="timeline-heading">
                      <h4 class="timeline-title">2012</h4>
                  </div>
                  <div class="timeline-body">
                      <p>Pembangunan Rumah Tinggal Tahap 1 Type Celestite, Citraland Bali</p>
                  </div>
              </div>
          </li>
          <li>
              <div class="timeline-badge pembangunan"><i class="fa fa-home icon m-auto"></i></div>
              <div class="timeline-panel">
                  <div class="timeline-heading">
                      <h4 class="timeline-title">2012</h4>
                      <!-- <p><small class="text-muted"><i class="icon-home m-auto text-primary"></i> 11 hours ago via Twitter</small></p> -->
                  </div>
                  <div class="timeline-body">
                      <p>Pembangunan Rumah/Villa Kembar Denpasar, Bali</p>
                  </div>
              </div>
          </li>
      </ul>
  </div>
</div> 
    
  
  
@endsection