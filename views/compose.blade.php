
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Mail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <h4>Compose New mail</h4><hr>

                <form action="{{route('send.email')}}" method="POST">
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
                        @error('name')<span class="text-danger">{{$message}}</span>@enderror
                    </div><br>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email" value="{{old('email')}}">
                        @error('email')<span class="text-danger">{{$message}}</span>@enderror
                    </div><br>
                    <div class="form-group">
                        <label for="">Subject</label>
                        <input type="text" class="form-control" name="subject" placeholder="Enter subject" value="{{old('subject')}}">
                        @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                    </div><br>
                    <div class="form-group">
                        <label for="">Message</label>
                       <textarea name="message" class="form-control" cols="4" rows="4">{{old('message')}}</textarea>
                        @error('message')<span class="text-danger">{{$message}}</span>@enderror
                    </div><br>
                    <button class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
