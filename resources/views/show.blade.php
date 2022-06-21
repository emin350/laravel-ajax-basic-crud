<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap5.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="{{ asset('frontend/css/bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <br>  <br>  <br>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <table class="table table-bordered">
                    <thead>
                       <th>ID</th>
                       <th>Email</th>
                       <th>Password</th>
                       <th>Action</th>
                    </thead>

                    <tbody>

                    @foreach ($Data as $row)
                        
                    <tr> 
                       <th>{{$row->id}}</th>
                       <th>{{$row->email}}</th>
                       <th>{{$row->password}}</th>
                       <th>
                         <a href="{{url('/edit/'.$row->id)}}" target="_blank" class="btn btn-secondary">Edit </a>
                         <a href="{{url('/delete/'.$row->id)}}" target="_blank" class="btn btn-danger">Delete </a>
                        </th>
                    </tr> 

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>