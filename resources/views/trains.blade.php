<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center text-success">{{$title}}</h2>
  <form action="{{$url}}" class="m-2 p-3 border border-primary" method="post" >
  @csrf
  <div class="container">
<div class="mb-3 form-group">
<label for="trains_name">Trains_name</label>
<input type="text" class="form-control" name ="trains_name" id="trains_name" value="{{old('trains_name')}}" placeholder="Enter the trains_name" />
</div>
<div class="mb-3 form-group">
<label for="Available_seats">Available_seats</label>
<input type="number" class="form-control" name ="Available_seats" id="Available_seats"  value="{{old('Available_seats')}}" placeholder="Enter the Available_seats" />
</div>
<div class="mb-3 form-group">
<label for="Trains_leaving">Trains_leaving</label>
<input type="text" class="form-control" name ="Trains_leaving" id="Trains_leaving" value="{{old('Trains_leaving')}}" placeholder="Enter the Trains_leaving">
</div>
<div class="mb-3 form-group">
<label for="Trains_Destination">Trains_Destination</label>
<input type="text" class="form-control" name ="Trains_Destination" id="Trains_Destination" value="{{old('Trains_Destination')}}" placeholder="Enter the Trains_Destination">
</div>
<div class="mb-3 form-group">
<label for="Time">Time</label>
<input type="datetime-local" class="form-control" name ="Time" id="Time" value="{{old('Time')}}">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>