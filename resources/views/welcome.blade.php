<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NRP Properti</title>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" media="all">
         <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" media="all">
          <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all">
          <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" type="text/css" media="all">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>
    <body>
       <div id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toogle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#header" class="navbar-brand">NRP Project</a>
      </div>
      
    </div>
  </div>

  <!-- end Navigation -->

  <!-- HEADER -->
  <div id="header" class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <h1>NRP Project</h1>
          <p>NRP Project merupakan situs properti di Jember, tempat terbaik untuk mencari rumah yang dijual. Jika Anda seorang investor,  agen properti, atau konsumen yang mencari properti untuk digunakan sendiri, disewakan, atau dibisniskan, maka Anda berada di situs properti yang tepat. Kami memberikan data lengkap sehingga Anda akan lebih mudah menentukan pilihan properti yang sesuai dengan kebutuhan Anda.</p>
          <a href="{{ route('login') }}"><button class="btn btn-lg-6 btn-primary"> Login</button></a>
          <a href="{{ route('register') }}"><button class="btn btn-lg-6 btn-primary"> Registrasi</button></a>
        </div>
        <!-- <div class="col-lg-6 col-md-6 ">
          <img src="image/comp3.png" alt="">
        </div> -->
      </div>
    </div>
  </div>

  <!--end Header -->

  
  <!-- GALLERY -->

  <div id="gallery" class="gallery">
    <div class="container">
      <div class="row">
        <h2 class="wow fadeInUp">Properti Dijual</h2>
        <p class="wow fadeInUp">Berikut beberapa properti yang terdaftar pada NRP Properti </p>
        <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="2s">
          <li><img src="image/rumah/rumah1.jpg" alt=""></li>
        </div>
        <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.6s">
          <li><img src="image/rumah/rumah2.jpg" alt=""></li>
        </div>
        <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.2s">
          <li><img src="image/rumah/rumah3.jpg" alt=""></li>
        </div>
        <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
          <li><img src="image/rumah/rumah4.jpg" alt=""></li>
        </div>
      </div>
      <div class="row">
        <div class="col">
        <a href="galeri.php">
          <button class="btn btn-success">Lainnya</button>
        </a>
        </div>
      </div>
    </div>
  </div>

  <!-- end Gallery -->

  <!-- TASK -->

  <div id="task" class="task">
    <div class="container">
      <div class="row">
        <h2 class="wow fadeInUp">Berita Properti</h2>
        
        <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="2s">
          <li><img src="image/rumah/rumah1.jpg" alt=""></li>
        </div>
        <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.6s">
          <li><img src="image/rumah/rumah2.jpg" alt=""></li>
        </div>
        <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.2s">
          <li><img src="image/rumah/rumah3.jpg" alt=""></li>
        </div>
        <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
          <li><img src="image/rumah/rumah4.jpg" alt=""></li>
        </div>
      </div>
      <div class="row">
        <div class="col">
        <a href="galeri.php">
          <button class="btn btn-success">Lainnya</button>
        </a>
        </div>
      </div>
    </div>
  </div>

  <!-- end TASK -->


  <!-- KONTAK -->

  <div id="contact" class="contact">
    <div class="container">
      <div class="row">
        <h2 class="wow fadeInUp">Kontak</h2>
        <p class="wow fadeInUp">Hubungi kami untuk info lebih lanjut</p>
        <div class="col-lg-6 col-md-6">
          <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="0.8s">
            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
            <input type="text" class="form-control" aria-describedby="sizing-addon1"></input>
          </div>
          <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.2s">
            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
            <input type="text" class="form-control" aria-describedby="sizing-addon1"></input>
          </div>
          <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.6s">
            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
            <input type="text" class="form-control" aria-describedby="sizing-addon1"></input>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
            <textarea name="" id="" cols="80" rows="6" class="form-control"></textarea>
          </div>
          <button class="btn btn-lg wow fadeInUp" data-wow-delay="1.6s">Kirim Pesan anda</button>
        </div>
      </div>
    </div>
  </div>

<!-- end Kontak -->

<!-- FOOTER -->

<div id="footer" class="footer">
     <div class="container">
         <div class="row">
             <div class="col-lg-4 col-md-4">
                 <h4 class="wow fadeInUp">Contact Us</h4>
                 <p><i class="fa fa-home" aria-hidden="true"></i> Jalan X No Y, Jawa Timur, 68222</p>
                 <p><i class="fa fa-envelope" aria-hidden="true"></i> nrpproject@gmail.com</p>
                 <p><i class="fa fa-phone" aria-hidden="true"></i> (0331) 222 2222</p>
                 <p><i class="fa fa-globe" aria-hidden="true"></i> www.nrpproject.com</p>
             </div>
             </div>
             </div>
 </div>

 <!-- end Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
