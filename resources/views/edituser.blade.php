@extends('master')
  @section('content')
<form action="/user/update/{{$users->id}}" method="post" enctype="multipart/form-data">
 {{csrf_field()}}
 <input type="hidden" name="id" value="{{$users->id}}"></br>
 <div class="form-group">
 <img width="120px" src="{{asset('storage/'.$users->profil_pict)}}">
 <label for="image">Profil Image</label>
 <input type="file" class="form-control"required="required" name="image" value="{{$users->profil_pict}}"></br>
 </div>
 <div class="form-group">
 <label for="title">Nama</label>
 <input type="text" class="form-control"required="required" name="name" value="{{$users->name}}"></br>
 </div>
 <div class="form-group">
 <label for="content">Email</label>
 <input type="text" class="form-control"required="required" name="email" value="{{$users->email}}"></br>
 </div>
 <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
 </form>
 <br><br>
 @endsection