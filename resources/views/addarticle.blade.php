@extends('master')
  @section('content')
<form action="/article/create" method="post">
 @csrf
 <div class="form-group">
 <br><br>
 <label for="title">Judul</label>
 <input type="text" class="form-control"
required="required" name="title"></br>
 </div>
 <div class="form-group">
 <label for="content">Content</label>
 <input type="text" class="form-control"
required="required" name="content"></br>
 </div>
 <div class="form-group">
 <label for="image">Feature Image</label>
 <input type="text" class="form-control"
required="required" name="image"></br>
 </div>
 <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
 </form>
 <br><br>
@endsection