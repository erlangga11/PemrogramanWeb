@extends('master')
  @section('content')
<br><br>
<form action="/article/update/{{$article->id}}" method="post" enctype="multipart/form-data">
 {{csrf_field()}}
 <input type="hidden" name="id" value="{{$article->id}}"></br>
 <div class="form-group">
 <label for="title">Judul</label>
 <input type="text" class="form-control"required="required" name="title" value="{{$article->title}}"></br>
 </div>
 <div class="form-group">
 <label for="content">Content</label>
 <input type="text" class="form-control"required="required" name="content" value="{{$article->content}}"></br>
 </div>
 <div class="form-group">
 <label for="image">Feature Image</label>
 <input type="file" class="form-control"required="required" name="image" value="{{$article->featured_image}}"></br>
 <img width="150px" src="{{asset('storage/'.$article->featured_image)}}">
 </div>
 <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
 </form>
 <br><br>
 @endsection