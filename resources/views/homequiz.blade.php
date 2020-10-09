

@extends('masterquiz')
  @section('content')
<section class="site-hero overlay" style="background-image: url(images/hero_1.jpg)">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <h1 class="heading mb-4" data-aos="fade-up">Belajar &amp; Memahami</h1>
            <p class="pt-4" data-aos="fade-up" data-aos-delay="100">
              <a href="#/" target="_blank" class="btn uppercase btn-outline-light d-sm-inline d-block py-3">Visit my profile</a>
            </p>
          </div>
        </div>
        <p  data-aos="fade-up" data-aos-offset="-500"><a href="#next-section" class="scroll-down smoothscroll"> <span class="fa fa-play"></span> Scroll Down</a></p>
      </div>
    </section>
    <!-- END section -->

    
    <section class="section" id="next-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-4" data-aos="fade-up">
            <p><img src="images/img_1_long.jpg" alt="Image" class="img-fluid"></p>
          </div>
          <div class="col-lg-6 pl-lg-5" data-aos="fade-up">
            <h2 class="mb-4">Welcome To My Website</h2>
            <p>Selamat datang di web saya disini saya harap kalian akan belajar dari post blog yang saya sampaikan</p>
            <p>Sedikit banyak ilmu yang tercantum di web ini saya harap dapat bermanfaat bagi kita semua</p>
            <p class="pt-4">
              <a href="https://vimeo.com/channels/staffpicks/93951774"  data-fancybox class="btn-play d-flex">
                <span class="icon align-self-center mr-3"><span class="fa fa-play"></span></span>
                <span class="text align-self-center">Watch The Profile</span>
              </a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section slider-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Keutamaan Menuntut Ilmu.</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Ilmu pengetahuan adalah hal yang penting bagi kehidupan agar manusia dapat mencapai salah satu tujuan penciptaan manusia, yaitu menjadi khalifah dibumi. Oleh sebab itu seorang muslim diwajibkan untuk menuntut ilmu agar dapat memahami hakikat kehidupan dan isinya serta mengetahui bagaimana proses penciptaan manusia menurut Islam dan makhluk lainnya, 
            agar kita mengerti akan hakikat penciptaan manusia, sehingga bertambah keimanan mereka terhadap Allah SWT.
            Hukum menuntut ilmu dalam Islam adalah wajib karena ilmu berguna untuk manusia mencapai sukses dunia akhirat menurut Islam, seperti yang dikatakan dalam sebuah hadits Rasulullah SAW. berikut :
            “Barang siapa yang ingin mendapatkan kesuksesan hidup di dunia dituntut untuk menguasai ilmu pengetahuan, 
            dan barang siapa yang ingin mendapatkan kebahagiaan akhiratnya dituntut untuk menguasai ilmu pengetahuan, dan barang siapa yang ingin mendapatkan kesuksesan dan kebahagiaan keduanya juga dituntut untuk menguasai ilmu pengetahuan.”</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
            @foreach($articleAll as $art)
              <div class="slider-item">
                <img src={{$art->featured_image}} alt="Image placeholder" class="img-fluid">
              </div>
            @endforeach
            </div>
            <!-- END slider -->
          </div>
        
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="section blog-post-entry bg-light slant-top">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8 primary-bg-text">
            <h2 class="heading" data-aos="fade-up">Blog Penulis</h2>
            <p class="lead" data-aos="fade-up">Berikut adalah tulisan tulisan yang saya kutip dari internet, semoga bermanfaat selamat membaca..</p>
          </div>
        </div>
        <div class="row">
        @foreach($articleAll as $art)
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src={{$art->featured_image}} alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="{{ '/articles/'.$art->id }}">{{$art->title}}</a></h2>
                <p>{{ Str::limit($art->content, 100,'...') }} </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- END section -->
    @endsection