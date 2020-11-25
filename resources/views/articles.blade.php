@extends('master')
@section('title')
    {{$articles->title}}
@endsection    
@section('content')
<br><br>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{ $articles->title }}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="instagram.com/erlangga.raka">Erlangga Natanegara</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on {{$articles->created_at}}</p>

        <hr>

        <!-- Preview Image -->
        <p class="lead"> Bismillahirahmanirrahim</p>
        <img class="card-img-top" src="{{asset('storage/'.$articles->featured_image)}}" alt="Card image cap">
        
        
        <hr>

        <!-- Post Content -->
        {{$articles->content}}
   

        <hr>
        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Manusia Biasa</h5>
            {{$articles->commenter}}
          </div>
        </div>
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Cari Apa Aja Wes</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Cari Apa Hayo">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Gas!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
      <h5 class="card-header">Categories</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#">Cara Cepat Tobat</a>
              </li>
              <li>
                <a href="#">Beasiswa Akhirat</a>
              </li>
              <li>
                <a href="#">Sertifikasi Ibadah</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#">Yasinan Onlen</a>
              </li>
              <li>
                <a href="#">Jastip Pahala</a>
              </li>
              <li>
                <a href="#">Undian Pahala</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

        <!-- Side Widget -->
        <div class="card my-4">
      <h5 class="card-header">Sedikit Informasi</h5>
      <div class="card-body">
	  Selain ilmu, teman akan menjadi pendamping saat 
    kamu berhijrah. Mereka yang mau menerima perubahanmu, 
    menemanimu menggali ilmu baru dan bahkan tidak meninggalkanmu 
    di kala kamu mulai susah adalah yang harusnyabkamu 
    pertahankan. Kamu berhak kendapatkan teman yang sama-sama 
    mau belajar dan membantumu istiqomah.
      </div>
    </div>

  </div>

</div>

      </div>

    </div>

 </div>
@endsection