@extends('master')
  @section('content')
      <!-- Page Content -->
  <div class="container">
  <br><br><br>
<div class="row">

  <!-- Blog Entries Column -->
  
  <div class="col-md-8">
    
    <h1 class="my-4">Bismillah ini bisa <br>
      <small>Yuk Teman-teman Kita Hijrah</small>
    </h1>
    <div class = "card">
    <a href="article/add" class="btn btn-primary" size>Tambah Data</a>
    <a href="/article/cetak_pdf" class="btn btn-primary"
target="_blank">CETAK PDF</a>
    </div>
    <!-- Blog Post -->
    @foreach($articleAll as $art)
    <!-- Blog Post -->
    <div class="card mb-4">
    <img class="card-img-top" src="{{asset('storage/'.$art->featured_image)}}" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">{{$art->title}}</h2>
        <p class="card-text">{{ Str::limit($art->content, 100,'...') }}</p>
        <a href="{{ '/articles/'.$art->id }}" class="btn btn-primary">Gali Lebih Dalam &rarr;</a>
        <a href="article/edit/{{ $art->id }}" class="badge badgewarning">Edit</a>
        <a href="article/delete/{{ $art->id }}" class="btn btn-primary">Hapus&rarr;</a>

      </div>
    </div>
    @endforeach


    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
      <li class="page-item">
        <a class="page-link" href="#">&larr; Older</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">Newer &rarr;</a>
      </li>
    </ul>

  </div>

  <!-- Sidebar Widgets Column -->
  <div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
      <h5 class="card-header">User manage</h5>
        <div class = "card">
    <a href="user" class="btn btn-primary" size>Ubah data User</a>
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
      <h5 class="card-header">Side Widget</h5>
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
<!-- /.row -->

</div>
<!-- /.container -->
  @endsection