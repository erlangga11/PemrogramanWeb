<html>
<table class="table table-bordered table-striped">
 <thead>
 <tr>
 <th>No</th>
 <th>Judul</th>
 <th>Tanggal</th>
 </tr>
 </thead>
 <tbody>
 @foreach($articles as $a)
 <tr>
 <td>{{$a->id}} <a href="article/add" class="btn btn-primary">Tambah Data</a></td>
 <td>{{$a->title}}</td>
 <td>{{$a->created_at}}</td>
 </tr>
 @endforeach
 </tbody>
</table>
</html>