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
        <h2>File Uploading</h2><br>
        {{-- @if(session()->has('userEmail')) 
          <div class="alert alert-danger">{{ Session Expire }}</div>
        @endif --}}
        {{-- {{ error }} --}}
        <form action="/file" method="post" enctype='multipart/form-data'>
          @csrf
            <div class="form-group">
              <label for="exampleFormControlFile1">File Uploading example </label>
              <input type="file" class="form-control-file" id="file" name="file"><br>
              @error('file')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <br><input type="submit" value="Upload">
            </div>
          </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>