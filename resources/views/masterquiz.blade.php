<!doctype html>
<html lang="en">
  <head>
    <title>Selamat Datang di Web Erlangga</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Abril+Fatface:400,700" rel="stylesheet">
    
    <meta name="description" content="" />
    <meta name="keywords" content="free template, free bootstrap, free website template" />
    <meta name="author" content="" />

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    <link rel="stylesheet" href="css/animsition.min.css">
    

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">

    
  </head>
  <body>
    <div class="js-animsition animsition" id="site-wrap" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">
    
    <header class="site-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4 site-logo" data-aos="fade"><a href="/homequiz" class="animsition-link">ENPA</a></div>
          <div class="col-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-12 justify-content-center">
                      <ul class="list-unstyled menu">
                        @can('user-display')
                        <li class="active"><a href="/home" class="animsition-link">Home</a></li>
                        <li class="hover"><a href="/about" class="animsition-link">About Us</a></li>
                        <li class="hover"><a href="/gallery" class="animsition-link">Gallery</a></li>
                        @endcan
                        @can('manage-articles')
                        <li class="hover"><a href="/homecc" class="animsition-link"> Tampilan Blog</a></li>
                        @endcan
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                    <img width="120px" src="{{asset('storage/'.Auth::user()->profil_pict )}}">
                                </a>

                                <div class="list-unstyled menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->

    <div class="container">
    @yield ('content')

    <!-- FOOTER -->
    <footer class="section footer-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-3 mb-5">
            <h3>Quick Link</h3>
            <ul class="list-unstyled link">
              <li><a href="/about">About Us</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Support</h3>
            <p>Supported by jti.polinema.ac.id</p>
          </div>
          <div class="col-md-3 mb-5 pr-md-5 contact-info">
            <h3>Contact Info</h3>
            <p><span class="d-block">Address:</span> <span> Wisma Tengger 2/40</span></p>
            <p><span class="d-block">Phone:</span> <span> 081-2348-30328</span></p>
            <p><span class="d-block">Email:</span> <span> 1931710134@student.polinema.ac.id</span></p>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Subscribe</h3>
            <p>Sign up for our newsletter</p>
            <form action="#" class="footer-newsletter">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your email...">
                <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
              </div>
            </form>
          </div>
        </div>
        <div class="row bordertop text-center pt-5">
          <p class="col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="fa fa-heart"
                  aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  and edited by. Erlangga.
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </footer>
  </div> <!-- .animsition -->
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>