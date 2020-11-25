<!DOCTYPE html>
<html>
<head>
<title>Laporan PDF Article</title>
</head>
<body>
<style type="text/css">
table tr td{
font-size: 10pt;
color : #000;
background : #e8e8e8;
border : 2pt;
padding : 2px 4px;
border : 2px;
outline: 1.3px solid #ffa62b;
},
table tr th{
font-size: 10pt;
color : #000;
background : #f9f7cf;
padding : 2px 4px;
outline: 1.3px solid #ffa62b;
},
.container{
    max-width: 1000px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 10px;
    padding-right: 10px;
}
body {
  font-family: 'lato', sans-serif;
}
</style>
<center>
<h5>Laporan Artikel</h4>
</center>
<div class='container'>
<table class='table table-bordered'>
<thead>
<tr>
<th>No</th>
<th>Judul</th>
<th>Isi</th>
<th>Gambar</th>
</tr>
</thead>
<tbody>
@php $i=1 @endphp
@foreach($article as $a)
<tr>
<td>{{ $i++ }}</td>
<td>{{$a->title}}</td>
<td>{{$a->content}}</td>
<td>
<img width="90px" src = "{{public_path('storage/'.$a->featured_image)}}"
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</body>
</html>