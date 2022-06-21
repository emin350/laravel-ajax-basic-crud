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
                <form method="POST">
                    @csrf()
                    @method('post')
                    <div class="form-group">
                        <label for="email"> Email  </label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password"> Password  </label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>  <br>
                    <button type="button" class="btn btn-primary" id="submit">Submit</button> 
                    <a href="/show" class="btn btn-secondary">Show</a>
                <form>
            </div>
        </div>
    </div>

<script>
$('#submit').click(function(){
  $.ajax({
  url:'formsubmit',
  data: $('form').serialize(),
  type:'post',
  success: function(result){
    alert(result);
    }
  });   
});





</script>

  
</body>
</html>