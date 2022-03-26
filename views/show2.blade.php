<!DOCTYPE html>
<html>
<head>
	<title>View All Details</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<table border="1px" class="table table-bordered table-hover">

	<tr>
		<th>Name</th>
		<th>RegNo</th>
		<th>CGPA</th>
		<th>Specialization</th>
		<th>View</th>
		<th>Download</th>
	</tr>

	@foreach($data as $data)

	<tr>
		<td>{{$data->name}}</td>
		<td>{{$data->regno}}</td>
		<td>{{$data->cgpa}}</td>
		<td>{{$data->specialization}}</td>
		<td><a href="{{url('/view',$data->id)}}">View</a></td>
		<td><a href="{{url('/download',$data->file)}}">Download</a></td>


	</tr>
	@endforeach

	</table>
	</div>
</body>
</html>


