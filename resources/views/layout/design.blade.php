<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FontLink -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@600;700&family=Kaushan+Script&family=Montserrat:wght@300;400;500;600;700&family=Oswald:wght@500&display=swap" rel="stylesheet"> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- OwlCarousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

    <!-- Icon -->
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- MyStyle -->
    <link rel="stylesheet" href="css/style.css">

    <title>@yield('title') | DesaQu</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DesaQu</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link nav-line js-scroll-trigger" href="#">home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-line" href="#berita">berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-line" href="#profile">profile</a>
                    </li>
                    <li class="nav-item nav-line2 dropdown">
                        <a class="nav-link dropdown-toggle" href="#data" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#anggaran">anggaran</a>
                            <a class="dropdown-item" href="#danadesa">dana desa</a>
                            <a class="dropdown-item" href="#dll">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-line" href="#produkhukum">produk hukum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-line" href="#ppdi">ppdi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-line" href="#galeri">galeri</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    
    <!-- footer -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row text-white p-3 justify-content-between">
                <div class="col p-3">
                    <h4>TUNJUNGSARI</h4>
                    <br>
                    <p class="desk">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum id natus repudiandae, consequuntur temporibus at sit quos ipsam! Ut, voluptates?</p>
                    
                </div>
                <!-- <div class="col p-3"></div> -->
                <div class="col p-3">
                    <div class="row ml-auto">
                        <div class="col">
                            <h4>Temukan Kami</h4>
                            <br>
                            <span><a href="#"><i class="fa fa-facebook"></i></a></span>
              <span><a href="#"><i class="fa fa-twitter"></i></a></span>
              <span><a href="#"><i class="fa fa-instagram"></i></a></span>
                        </div>
                        <div class="col ml-auto">
                            <div class="mapouter"><div class="gmap_canvas"><iframe width="280" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=tunjungsari%20siwalan&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:200px;width:280px;}.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:280px;}</style></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="end pt-3 pb-1">
        <p class="text-center text-white">&copy; tunjungsari 2020</p>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- OwlCarousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

    <!-- MyOptional JavaScript -->
    <script src="js/script.js"></script>
</body>

</html>