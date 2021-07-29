<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel User Registration</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        
      <div class="container-fluid">

        <h2>List Of User</h2><br>
        <a class="btn btn-primary" href="/adduser" role="button">Add New</a><br><br>

        <table class="table table-hover table-light">
          <thead>
            <tr>
              <th scope="col">#ID</th>
              <th scope="col">Email</th>
              <th scope="col">Password</th>
              <th scope="col">Create Date</th>
              <th scope="col">Mobile Number</th>
              <th scope="col">Address</th>
              <th scope="col">Address 2</th>
              <th scope="col">City</th>
              <th scope="col">State</th>
              <th scope="col">Zip</th>
              <th scope="col">Avtar</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            
            @foreach ($datas as $data)
            <tr> 
              <td> {{ $data->id }} </td> 
              <td> {{ $data->email }} </td> 
              <td> {{ $data->password }} </td> 
              <td> {{ $data->createDate }} </td> 
              <td> {{ $data->mobile }} </td> 
              <td> {{ $data->address }} </td> 
              <td> {{ $data->address2 }} </td> 
              <td> {{ $data->city }} </td> 
              <td> {{ $data->state }} </td> 
              <td> {{ $data->zip }} </td> 
              <td> <img src="{{url('/images/'.$data->avtar.'')}}" alt="Not" width="75px"> </td> 
              {{-- $data->avtar --}}
              <td><a class="btn btn-outline-warning" href="edit/{{ $data->id }}" role="button">Edit</a>
                <a class="btn btn-outline-danger" href="delete/{{ $data->id }}" role="button">Delete</a></td>

            </tr>
            @endforeach
            {{-- <img src="" alt="" sizes="" srcset=""> --}}
{{-- <img src="{{url('/images/2903339.jpg')}}" alt="not">             --}}
          </tbody>
        </table>
      
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>