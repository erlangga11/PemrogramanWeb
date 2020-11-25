@extends('master')
  @section('content')
      <!-- Page Content -->
  <div class="container">
  <br><br><br>
<div class="row">

  <!-- Blog Entries Column -->
  
  <div class="col-md-8">
    
    <h1 class="my-4">MANAGE USER <br>
      <small>Mau Diganti Apa Gaes</small>
    </h1>
    <div class = "card">
    <a href="homecc" class="btn btn-primary" size>Manage Article</a>
    <br>
    <a href="/user/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
    </div>
    
    <!-- Blog Post -->
    
    <!-- Blog Post -->
    <table class="table table-bordered table-striped" >
    <thead>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Picture</th>
        <th>Opsi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $u)
    <tr>
        <td>{{$u->id}}</td>
        <td>{{$u->name}}</td>
        <td>{{$u->email}}</td>
        <td>
        <img width="120px" src="{{asset('storage/'.$u->profil_pict)}}">
        </td>
        <td>
        <a href="{{ '/user/edit/'.$u->id }}" class="btn btn-primary">Edit &rarr;</a>
        <a href="/user/delete/{{ $u->id }}" class="btn btn-primary">Hapus&rarr;</a>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
      <div class="card-footer text-muted">
        Posted on January 1, 2020 by
        <a href="#">Start Bootstrap</a>
      </div>
    </div>

    <!-- Pagination -->
  </div>

  <!-- Sidebar Widgets Column -->

  </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->
  @endsection