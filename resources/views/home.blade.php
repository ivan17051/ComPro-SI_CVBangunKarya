@extends('layouts.header_footer')

@section('content2')
    <header class="masthead text-white text-center" style="background:url('https://images.pexels.com/photos/373912/pexels-photo-373912.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')no-repeat center center;background-size:cover;margin-top: 3rem;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Kami Siap Membantu Anda</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="features-icons bg-light text-center">
        <h1 style="padding-bottom: 50px;">Our Service</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-home m-auto text-primary" data-bs-hover-animate="pulse"></i></div>
                        <h3>Pembangunan</h3>
                        <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-pencil m-auto text-primary" data-bs-hover-animate="pulse"></i></div>
                        <h3>Desain</h3>
                        <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon ion-hammer m-auto text-primary" data-bs-hover-animate="pulse"></i></div>
                        <h3>Renovasi</h3>
                        <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Our Portofolio</h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br></p>
            </div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/desk.jpg"><img class="img-fluid" src="assets/img/desk.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/building.jpg"><img class="img-fluid" src="assets/img/building.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/loft.jpg"><img class="img-fluid" src="assets/img/loft.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/building.jpg"><img class="img-fluid" src="assets/img/building.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/loft.jpg"><img class="img-fluid" src="assets/img/loft.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/desk.jpg"><img class="img-fluid" src="assets/img/desk.jpg"></a></div>
            </div>
        </div>
    </div>
@endsection