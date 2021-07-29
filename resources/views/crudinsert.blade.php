<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Crud</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        
        <div class="container">
        <h2>Login Form</h2>
        <form action="/crud" method="post" enctype='multipart/form-data'>
        @csrf
        <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
    </div>
  </div>

    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pass" name="pass" value="{{ old('pass') }}">
    </div>    
  </div> 

    @error('pass')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

  <!-- <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="img" name="img">
    </div>
  </div> -->
  <input type="submit" value="Login">
  </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>

<!-- <form action="/crud" method="post">
        @csrf
            <label for="">Name</label>
            <input type="text" name="name" id="name"><br><br>
            <label for="">Email</label>
            <input type="email" name="email" id="email"><br><br>
            <input type="submit" value="Submit">
        </form> -->