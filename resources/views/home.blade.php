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
                        <!-- <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br></p> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-pencil m-auto text-primary" data-bs-hover-animate="pulse"></i></div>
                        <h3>Desain</h3>
                        <!-- <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br></p> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon ion-hammer m-auto text-primary" data-bs-hover-animate="pulse"></i></div>
                        <h3>Renovasi</h3>
                        <!-- <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br></p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="margin-top:20px;">Our Portofolio</h2>
                <!-- <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br></p> -->
            </div>
            <div class="row photos">
                <!-- <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/0fbd7c61-a79d-45ff-ba0a-42f4f1d27747.jpg"><img class="img-fluid" src="assets/img/0fbd7c61-a79d-45ff-ba0a-42f4f1d27747.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/2e59551b-5639-48bb-986f-2a9c4bab36f1.jpg"><img class="img-fluid" src="assets/img/2e59551b-5639-48bb-986f-2a9c4bab36f1.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/5f653f39-ef80-4486-9a3f-95eb285b8604.jpg"><img class="img-fluid" src="assets/img/5f653f39-ef80-4486-9a3f-95eb285b8604.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/15f4897b-d295-4e08-8d2b-496f68db6ae8.jpg"><img class="img-fluid" src="assets/img/15f4897b-d295-4e08-8d2b-496f68db6ae8.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/31ec8515-6100-48d6-a27c-d2b37fcf5e3c.jpg"><img class="img-fluid" src="assets/img/31ec8515-6100-48d6-a27c-d2b37fcf5e3c.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/92c68b41-2aaf-4baa-8674-e35ea3f9459d.jpg"><img class="img-fluid" src="assets/img/92c68b41-2aaf-4baa-8674-e35ea3f9459d.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/45109bc5-2c6c-460e-8f5c-31ec7216d70b.jpg"><img class="img-fluid" src="assets/img/45109bc5-2c6c-460e-8f5c-31ec7216d70b.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/ada9087e-69c9-4c8f-9eed-263d9a2c6e26.jpg"><img class="img-fluid" src="assets/img/ada9087e-69c9-4c8f-9eed-263d9a2c6e26.jpg"></a></div> -->
                @foreach($gallery as $unit)
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="/{{ $unit->upload_foto }}"><img class="img-fluid" src="/{{ $unit->upload_foto }}"></a></div>
                @endforeach
            </div>
        </div>
    </div>
@endsection