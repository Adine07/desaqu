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

    <!-- Jumbotron/Carosel -->
    <div id="jumbosel" class="carousel carousel1 slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#jumbosel" data-slide-to="0" class="active"></li>
            <li data-target="#jumbosel" data-slide-to="1"></li>
            <li data-target="#jumbosel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1492095664363-4ca82097ec8a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1054&q=80" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4 font-weight-bold">DESA TUNJUNGSARI</h1>
                    <p class="ket">Kec. Siwalan Kab. Pekalongan Prov. Jawa Tengah</p>
                    <a class="btn btn-outline-light btn-lg" href="#" role="button">Jelajahi</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1575471356301-3a0beb5e0ccb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1593667385606-5a91c5e4a4a3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#jumbosel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#jumbosel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- InfoPanel -->
    <div class="info">
        <div class="container">
            
            <!-- panel -->
            <div class="row justify-content-center">
                <div class="col info-panel">
                    <div class="row">
                        <div class="col-lg panel">
                            <i class="fa fa-vcard-o icon float-left"></i>
                            <h4>Profile</h4>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="col-lg panel">
                            <i class="fa fa-info-circle icon float-left"></i>
                            <h4>Info Publick</h4>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="col-lg panel">
                            <i class="fa fa-cubes icon float-left"></i>
                            <h4>Produk Desa</h4>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="col-lg panel">
                            <i class="fa fa-phone icon float-left"></i>
                            <h4>Kontak</h4>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- caption -->
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-6 mt-3 pt-5">
                <p class="caption text-center">#MariLawanKorona <span id="textdekor">Laukdaun</span></p>
            </div>
        </div>
    </div>

    <!-- Mukadimah Lurah -->
    <div class="mukadimah container">
        <div class="row">
            <div class="col-4">
                <img src="https://i.ya-webdesign.com/images/ssj-vegeta-png.png" alt="" class="img-fluid">
            </div>
            <div class="col-8">
                <i class="fa fa-quote-left d-block py-4"></i>
                <p class="text-muka py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non minus nobis nisi tempora. Dicta suscipit, reprehenderit at, sit illo autem consequatur quae commodi nesciunt quidem vel nihil consequuntur ipsam hic.</p>
                <p class="name-kd">Prince Vegeta</p>
                <p class="name-ket">Prince of The Saiyan </p>
            </div>
        </div>
    </div>

    <!-- InfoKependudukan -->
    <div class="container-fluid info-des text-center text-white">
        <div class="container upper">
            <div class="row">
                <div class="col">
                    <h3 class="display-4 pb-3 pt-3">Info Desa</h3>
                </div>
            </div>
            <div class="row py-3">
                <div class="col">
                    <i class="fa fa-group"></i>
                    <h4 class="nomer">12.768</h4>
                    <p>Penduduk</p>
                </div>
                <div class="col">
                    <i class="fa fa-user-circle-o"></i>
                    <h4 class="nomer">4.768</h4>
                    <p>Kepala Kluarga</p>
                </div>
                <div class="col">
                    <i class="fa fa-user-plus"></i>
                    <h4 class="nomer">7.768</h4>
                    <p>Anggota Kluarga</p>
                </div>
                <div class="col">
                    <i class="fa fa-mars"></i>
                    <h4 class="nomer">5.768</h4>
                    <p>Laki-laki</p>
                </div>
                <div class="col">
                    <i class="fa fa-venus"></i>
                    <h4 class="nomer">4.768</h4>
                    <p>Perempuan</p>
                </div>
            </div>
        </div>
    </div>

    <!-- data -->
    <!-- <div class="container accordion my-5" id="data">
        <div class="row">
            <div class="col">
                <a href="#demografi" class="btn btn-primary btn-block" data-toggle="collapse" role="button" data-target="#demografi" aria-expanded="true" aria-controls="demografi">Demografi</a>
            </div>
            <div class="col">
                <a href="#datapen" class="btn btn-primary btn-block" data-toggle="collapse" role="button" data-target="#datapen" aria-expanded="true" aria-controls="datapen">Data Penduduk</a>
            </div>
        </div>
        <div class="row collapse multi-collapse accordion my-5 mx-0 p-2" id="demografi" data-parent="#data">
            <div class="col-4 px-0">
                <a href="#lokasi1" class="btn btn-block m-0 py-3" data-toggle="collapse" role="button" data-target="#lokasi1" aria-expanded="true" aria-controls="lokasi1">Lokasi</a>
                <a href="#lokasi2" class="btn btn-block m-0 py-3" data-toggle="collapse" role="button" data-target="#lokasi2" aria-expanded="false" aria-controls="lokasi2">Lokasi</a>
                <a href="#lokasi3" class="btn btn-block m-0 py-3" data-toggle="collapse" role="button" data-target="#lokasi3" aria-expanded="true" aria-controls="lokasi3">Lokasi</a>
                <a href="#lokasi4" class="btn btn-block m-0 py-3" data-toggle="collapse" role="button" data-target="#lokasi4" aria-expanded="true" aria-controls="lokasi1">Lokasi</a>
                <a href="#lokasi5" class="btn btn-block m-0 py-3" data-toggle="collapse" role="button" data-target="#lokasi5" aria-expanded="true" aria-controls="lokasi1">Lokasi</a>
            </div>
            <div class="col-8 ">
                <div id="lokasi1" class="collapse show" aria-labelledby="headingOne" data-parent="#demografi">
                    <div class="col">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed veniam pariatur cum dolorem vel provident saepe sequi quia, corporis rem numquam quidem deserunt consequuntur qui quasi alias doloribus. Expedita ipsa ea repudiandae officiis numquam at ratione dolores hic quos temporibus natus in doloribus nam dolor pariatur, iure adipisci officia ex!</p>
                    </div>
                </div>
                <div id="lokasi2" class="collapse" aria-labelledby="headingTwo" data-parent="#demografi">
                    <div class="col">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam culpa facere, ullam voluptatem iure sunt a laborum dolore natus ad amet molestias sed nulla accusantium, impedit dolores, quo soluta iusto quae molestiae asperiores quasi. Vel veritatis similique consequatur, nulla, accusamus temporibus debitis iusto blanditiis, amet molestias nostrum libero culpa.</p>
                    </div>
                </div>
                <div id="lokasi3" class="collapse" aria-labelledby="headingTwo" data-parent="#demografi">
                    <div class="col">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, inventore excepturi itaque omnis odit magni, accusamus ea provident architecto possimus veritatis praesentium minus quae magnam numquam sit harum rem distinctio eius esse dolorum alias ex consequuntur! Pariatur obcaecati impedit dolorum cupiditate eveniet nulla doloribus, blanditiis modi, at asperiores sed nisi quibusdam, est?</p>
                    </div>
                </div>
                <div id="lokasi4" class="collapse" aria-labelledby="headingTwo" data-parent="#demografi">
                    <div class="col">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium a aliquid distinctio explicabo voluptate, molestiae assumenda facilis tempore sequi, itaque dolorum. Modi tenetur fugiat magnam, doloremque, quos nostrum, vitae cupiditate totam autem temporibus saepe vel quia veniam tempore. Eveniet id reprehenderit voluptatem, culpa corporis tempora quos, ad, vitae itaque debitis perferendis.</p>
                    </div>
                </div>
                <div id="lokasi5" class="collapse" aria-labelledby="headingTwo" data-parent="#demografi">
                    <div class="col">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex culpa, cupiditate laborum sequi at autem, pariatur qui sit architecto quibusdam ea facilis numquam aspernatur accusantium repudiandae! Minima officia numquam ut ipsa iure blanditiis nemo quam. Voluptatum quos alias accusantium sunt eaque, nisi quas autem itaque eligendi labore excepturi repellat consequatur distinctio dolorum magni illum, eius?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row collapse multi-collapse my-5 mx-0" id="datapen" data-parent="#data">
            <div class="col">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis aspernatur quos dolor cum numquam vero dolores quidem libero magnam, unde, repellat et vel. Quis vel blanditiis dolores laborum amet, iusto deleniti optio voluptates eos atque, expedita illum sint, doloribus, molestias esse et quaerat recusandae quisquam sapiente dolor similique facere est tempore. Corporis quam eum, maiores iure excepturi deserunt, explicabo accusamus, numquam laborum similique possimus adipisci. Dolores veniam quidem pariatur facilis perspiciatis, itaque accusantium reiciendis, harum tempore velit, ad illo nobis.
            </div>
        </div>
    </div> -->

    <!-- STOK -->
    <div class="container pb-5 stok">
        <div class="row py-5 my-3 text-center">
            <div class="col">
                <h3>struktur pemerintahan</h3>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3 m-auto">
                <div class="card">
                  <img src="https://www.screenja.com/static/img/thumbs/majin-vegeta-normal-636.png" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title">H. Vegeta, Ssj.M</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Kepala Desa</h6>
                  </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 my-3">
                <div class="card">
                  <img src="https://www.screenja.com/static/img/thumbs/majin-vegeta-normal-636.png" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <p class="card-subtitle mb-2 text-muted">Sekdes</p>
                  </div>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="card">
                  <img src="https://www.screenja.com/static/img/thumbs/majin-vegeta-normal-636.png" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <p class="card-subtitle mb-2 text-muted">Kadus</p>
                  </div>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="card">
                  <img src="https://www.screenja.com/static/img/thumbs/majin-vegeta-normal-636.png" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <p class="card-subtitle mb-2 text-muted">Jonjang</p>
                  </div>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="card">
                  <img src="https://www.screenja.com/static/img/thumbs/majin-vegeta-normal-636.png" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <p class="card-subtitle mb-2 text-muted">Jonjang</p>
                  </div>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="card">
                  <img src="https://www.screenja.com/static/img/thumbs/majin-vegeta-normal-636.png" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <p class="card-subtitle mb-2 text-muted">Jonjang</p>
                  </div>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="card">
                  <img src="https://www.screenja.com/static/img/thumbs/majin-vegeta-normal-636.png" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <p class="card-subtitle mb-2 text-muted">Jonjang</p>
                  </div>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="card">
                  <img src="https://www.screenja.com/static/img/thumbs/majin-vegeta-normal-636.png" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <p class="card-subtitle mb-2 text-muted">Jonjang</p>
                  </div>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="card">
                  <img src="https://www.screenja.com/static/img/thumbs/majin-vegeta-normal-636.png" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <p class="card-subtitle mb-2 text-muted">Jonjang</p>
                  </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Berita Desa -->
    
    <div class="berita mt-5 pt-5">
        <div class="slider">
            <h4 class="display-4 text-center pb-3">Berita Desa</h4>
            <div class="slide owl-carousel owl-theme">
        <div class="berita-item">
          <div class="berita-post">
            <h1 class="berita-judul">
              <a href="#">
                Lockdown | Warga dilarang Mudik.
              </a>
            </h1>
            <span class="berita-icon">
              <span><i class="fa fa-comments"></i> <a href="#">Tidak ada komentar</a></span>
              <span><i class="fa fa-calendar"></i> Jul 24, 2020</span>
              <span><i class="fa fa-clock-o"></i> 09:00 PM </span>
            </span>
            <span class="berita-social-icon">
              <span><a href="#"><i class="fa fa-facebook"></i></a></span>
              <span><a href="#"><i class="fa fa-twitter"></i></a></span>
              <span><a href="#"><i class="fa fa-instagram"></i></a></span>
            </span>
          </div>
          <img src="https://ponorogo.go.id/wp-content/uploads/2020/04/Baliho-Sampai-Instagram-Digencarkan-Untuk-Imbauan-Tunda-Mudik-ke-Ponorogo-1.jpeg" alt="Why Palladio is the world's favourite 16th-century architect" class="">        
        </div>
        <div class="berita-item">
          <div class="berita-post">
            <h1 class="berita-judul">
              <a href="#">
                Daftar zona hijau corona..
              </a>
            </h1>
            <span class="berita-icon">
              <span><i class="fa fa-comments"></i> <a href="#">Tidak ada komentar</a></span>
              <span><i class="fa fa-calendar"></i> Jul 24, 2020</span>
              <span><i class="fa fa-clock-o"></i> 09:00 PM </span>
            </span>
            <span class="berita-social-icon">
              <span><a href="#"><i class="fa fa-facebook"></i></a></span>
              <span><a href="#"><i class="fa fa-twitter"></i></a></span>
              <span><a href="#"><i class="fa fa-instagram"></i></a></span>
            </span>
          </div>
          <img src="https://img.okezone.com/content/2020/07/07/337/2242603/berita-baik-9-provinsi-ini-miliki-tingkat-kesembuhan-corona-melebihi-80-persen-8RXYwMQL7h.jpg" class="">        
        </div>
        <div class="berita-item">
          <div class="berita-post">
            <h1 class="berita-judul">
              <a href="#">
                Pasien corona melunjak.
              </a>
            </h1>
            <span class="berita-icon">
              <span><i class="fa fa-comments"></i> <a href="#">Tidak ada komentar</a></span>
              <span><i class="fa fa-calendar"></i> Jul 24, 2020</span>
              <span><i class="fa fa-clock-o"></i> 09:00 PM </span>
            </span>
            <span class="berita-social-icon">
              <span><a href="#"><i class="fa fa-facebook"></i></a></span>
              <span><a href="#"><i class="fa fa-twitter"></i></a></span>
              <span><a href="#"><i class="fa fa-instagram"></i></a></span>
            </span>
          </div>
          <img src="https://statik.tempo.co/data/2020/02/19/id_916483/916483_720.jpg" class="">        
        </div>
        <div class="berita-item">
          <div class="berita-post">
            <h1 class="berita-judul">
              <a href="#">
                Lockdown | Warga dilarang Mudik.
              </a>
            </h1>
            <span class="berita-icon">
              <span><i class="fa fa-comments"></i> <a href="#">Tidak ada komentar</a></span>
              <span><i class="fa fa-calendar"></i> Jul 24, 2020</span>
              <span><i class="fa fa-clock-o"></i> 09:00 PM </span>
            </span>
            <span class="berita-social-icon">
              <span><a href="#"><i class="fa fa-facebook"></i></a></span>
              <span><a href="#"><i class="fa fa-twitter"></i></a></span>
              <span><a href="#"><i class="fa fa-instagram"></i></a></span>
            </span>
          </div>
          <img src="https://ponorogo.go.id/wp-content/uploads/2020/04/Baliho-Sampai-Instagram-Digencarkan-Untuk-Imbauan-Tunda-Mudik-ke-Ponorogo-1.jpeg" alt="Why Palladio is the world's favourite 16th-century architect" class="">        
        </div>
            </div>
        </div>
    </div>

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