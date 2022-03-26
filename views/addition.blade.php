<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Sum</title>
 
</head>
<body>
<h1>Find Sum</h1>
<form action="/sum" method="POST">
    @csrf
  
    <b>1st Number:</b>
       <input type="text" name="firstnumber" />
       @error('firstnumber')<span class="text-danger">{{$message}}</span>@enderror
    
    <br>
   
    <b>2nd Number:</b>
   <input type="text" name="secondnumber"/>
   @error('secondnumber')<span class="text-danger">{{$message}}</span>@enderror
 
   <br>
    <button type="submit">Add</button>
   
</form>

</body>
</html>