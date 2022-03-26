<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <h4>Fill Details</h4><hr>

                <form action="{{url('/uploadproduct')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{Session::get('success')}}
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{old('name')}}">
                    </div><br>

                    <div class="form-group">
                        <label for="">RegNo.</label>
                        <input type="text" class="form-control" name="regno" placeholder="Enter RegNo." value="{{old('regno')}}">
                    </div><br>

                    <div class="form-group">
                        <label for="">CGPA</label>
                        <input type="text" class="form-control" name="cgpa" placeholder="Enter Current CGPA" value="{{old('cgpa')}}">
                    </div><br>

                    <div class="form-group">
                        <label for="">Specialization</label>
						<input type="text" class="form-control" name="specialization" placeholder="Enter Current Specialization" value="{{old('specialization')}}">
                    </div><br>

					<div class="form-group">
                        <label for="">Your Resume</label>
						<input type="file" class="form-control" name="file" value="{{old('file')}}">
                    </div><br>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
  