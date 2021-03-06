<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CV Bangun Karya - SI</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="/assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="/assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="/assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="/assets/css/Table-With-Search.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean">
        <div class="container"><a class="navbar-brand" href="/">CV Bangun Karya Sejahtera</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/aboutus">Tentang Kami</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/portofolio">Portofolio</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Menu Admin</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="/proyek">List Proyek</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" role="presentation" href="/portofolio/pengalaman">Pengalaman</a>
                            <a class="dropdown-item" role="presentation" href="/portofolio/gallery">Gallery</a>
                            <!-- <a class="dropdown-item" role="presentation" href="/pemasukan">Pemasukan</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" role="presentation" href="/rab">RAB</a> -->
                        </div>
                    </li>
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="/proyek">Proyek</a> -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    @yield('content2')

    <div class="footer-basic" style="background-color: #25282b">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="/">Beranda</a></li>
                <li class="list-inline-item"><a href="/aboutus">Tentang Kami</a></li>
                <li class="list-inline-item"><a href="/portofolio">Portofolio</a></li>
            </ul>
            <p class="copyright">CV Bangun Karya Sejahtera © 2020</p>
        </footer>
    </div>
    <script>
        $(".custom-file-input").on("change", function() {
  		var fileName = $(this).val().split("\\").pop();
  		$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	    });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="/assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <script src="/assets/js/Table-With-Search.js"></script>
    <script src="/assets/js/Auto-Sum.js"></script>
    @include('sweetalert::alert')
</body>

</html>