<!doctype html>
<html lang="en">
@extends('masterquiz')
  @section('content')

    <section class="site-hero overlay page-inside" style="background-image: url(images/hero_2.jpg)">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <h1 class="heading" data-aos="fade-up">Gallery</h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">
              Selamat Datang <a href="#" target="_blank">ENPA</a> Website
            </p>
          </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->
    

    <section class="section">
      <div class="container">
        <div class="row">
        @foreach($articleAll as $art)
          <div class="col-md-6 col-lg-3 mb-4">
            <a href={{$art->featured_image}} data-fancybox="gallery"><img src={{$art->featured_image}} alt="Image" class="img-fluid"></a>
          </div>
          @endforeach
         
        </div>
      </div>
    </section>
    
@endsection