@extends('master')
@section('Home','Halaman Home')
<h1>Selamat datang, Nama saya {{ $name }}</h1>
<h2>Anda berada di halaman {{$page}}</h2>
@section('konten')
		<table border="2" cellpadding="20">
			<tr>
			<td>
            <h5> 1. Terus perkaya dirimu dengan ilmu, jangan puas dengan satu ilmu </h5>
	<br>
	<p> Ada banyak ilmu yang harud mulai kamu gali. 
    Tak melulu dari datu sumber buku atau situs di 
    internet. Bahkan tak melulu harus dari datu guru 
    dan satu sumber. Berpikir secara universal akan 
    membantumu menjadi lebih tahu banyak hal. 
    Bahkan yang belum kamu tahu sebelumnya. 
    Selain itu, memiliki banyak ilmu membuatmu akan 
    lebih mudah berpikir secara objektif.</p>
        <h5>2. Carilah teman yang membantumu istiqomah, yang menemani di kala kamu bersusah payah</h5>
	<br>
	<p>Selain ilmu, teman akan menjadi pendamping saat 
    kamu berhijrah. Mereka yang mau menerima perubahanmu, 
    menemanimu menggali ilmu baru dan bahkan tidak meninggalkanmu 
    di kala kamu mulai susah adalah yang harusnyabkamu 
    pertahankan. Kamu berhak kendapatkan teman yang sama-sama 
    mau belajar dan membantumu istiqomah.</p>
    @endsection