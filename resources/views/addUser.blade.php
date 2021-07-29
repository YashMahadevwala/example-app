<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel User Registration</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        
      <div class="container">

        @isset($data)
          <h2>Update Form</h2><br>
        @else
        <h2>Registration Form</h2><br>
        @endisset
        {{-- <h2>Registration Form</h2><br> --}}

      <form class="row g-3" action="@isset($data) /update @else /adduser @endisset" method="POST" enctype='multipart/form-data'>
        @csrf

        <div class="col-md-6"> 
          <label for="" class="form-label">Email</label>
          @isset($data)
            <input type="hidden" class="form-control" id="id" name="id" value="{{ $data[0]->id }}">
            <input type="email" class="form-control" id="email" name="email" value="{{ $data[0]->email }}">
          @else
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
          @endisset
          
          @error('email')
          <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
          @enderror

        </div>
        <div class="col-md-6">
          <label for="" class="form-label">Password</label>
          @isset($data)
            <input type="text" class="form-control" id="pass" name="pass" value="{{ $data[0]->password }}">
          @else
            <input type="password" class="form-control" id="pass" name="pass" value="{{ old('pass') }}">
          @endisset
            @error('pass')
          <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="col-md-6">
          <label for="" class="form-label">Create Date</label>
          @isset($data)
          <input type="date" class="form-control" id="createDate" name="createDate" value="{{ $data[0]->createDate }}">
          @else
            <input type="date" class="form-control" id="createDate" name="createDate" value="{{ old('createDate') }}">
          @endisset
          @error('createDate')
          <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="col-md-6">
          <label for="" class="form-label">Mobile Number</label>
          @isset($data)
          <input type="number" class="form-control" id="mobile" name="mobile" maxlength="10" value="{{ $data[0]->mobile }}">
          @else
            <input type="number" class="form-control" id="mobile" name="mobile" maxlength="10" value="{{ old('mobile') }}">
          @endisset
          @error('mobile')
          <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="col-12">
          <label for="" class="form-label">Address</label>
          @isset($data)
          <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" value="{{ $data[0]->address }}">
          @else
            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" value="{{ old('address') }}">
          @endisset
          @error('address')
          <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="col-12">
          <label for="" class="form-label">Address 2</label>
          @isset($data)
          <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment, studio, or floor" value="{{ $data[0]->address2 }}">
          @else
            <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment, studio, or floor" value="{{ old('address2') }}">
          @endisset
          @error('address2')
          <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="col-md-6">
          <label for="" class="form-label">City</label>
          @isset($data)
          <input type="text" class="form-control" id="city" name="city" value="{{ $data[0]->city }}">
          @else
            <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}">
          @endisset
          @error('city')
          <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="col-md-4">
          <label for="" class="form-label">State</label>
          {{-- @isset($data) --}}
          <select id="state" name="state" class="form-select" value="{{ old('state') }}">
            @isset($data)
              <option selected> {{ $data[0]->state }} </option>
            @else
            <option selected>Chose State</option>
            @endisset
            <option>Gujarat</option>
            <option>Maharastra</option>
            <option>Kerala</option>
            <option>Delhi</option>
          </select>
          @error('state')
          <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <div class="col-md-2">
          <label for="" class="form-label">Zip</label>
          @isset($data)
          <input type="text" class="form-control" id="zip" name="zip" value="{{ $data[0]->zip }}">
          @else
            <input type="text" class="form-control" id="zip" name="zip" value="{{ old('zip') }}">
          @endisset
          @error('zip')
          <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <div class="form-group">  
          @isset($data)
          <label for="">{{ $data[0]->avtar }}</label>
          <input type="hidden" class="form-control" id="avtarname" name="avtarname" value="{{ $data[0]->avtar }}">
          <img src="{{url('/images/'.$data[0]->avtar.'')}}" alt="Not" width="100px"> </td> 
            <input type="file" class="form-control-file" id="avtar" name="avtar">
          @else
          <label for="">Upload Your Avtar</label>
            <input type="file" class="form-control-file" id="avtar" name="avtar" value="{{ old('avtar') }}">
          @endisset
          @error('avtar')
          <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="col-12">
          @isset($data)
          <button type="submit" class="btn btn-outline-primary">Update</button>
          @else
            <button type="submit" class="btn btn-outline-success">Submit</button>
          @endisset
          <a class="btn btn-outline-secondary" href="/show" role="button">Cancel</a>
        </div>
      </form>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>