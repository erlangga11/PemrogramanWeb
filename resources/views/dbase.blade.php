<html>
<h1>Database Output</h1>
<h1>Bismillah Bisa</h1>
<table border="1">
    <tr>
    <th>id</th>
    <th>Title</th>
    <th>Content</th>
    <th>Image</th>
    </tr>
@foreach($article as $art)
	<tr>
    <td>{{$art->id}}</td>
    <td>{{$art->title}}</td>
    <td>{{$art->content}}</td>
    <td>{{$art->featured_image}}</td>
    </tr>
@endforeach
</table>
</html>