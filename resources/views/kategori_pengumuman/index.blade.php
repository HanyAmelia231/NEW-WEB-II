<!DOCTYPE html>
<html>
<head>
	<title>Kategori Pengumuman</title>
</head>
<body>

<table border="2">
	<tr>
		<td>ID</td>
		<td>Nama</td>
		<td>Users ID</td>
	</tr>

@foreach($kategori_pengumuman as $item)
<tr>
	<td>{!! $item->id !!}</td>
	<td>{!! $item->nama !!}</td>
	<td>{!! $item->users_id !!}</td>
</tr>

@endforeach

</table>
</body>
</html>