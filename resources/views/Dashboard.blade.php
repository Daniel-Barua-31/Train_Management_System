!<!doctype html>
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
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Brand/logo -->
      <a class="navbar-brand" href="#">Logo</a>
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="trainView">Trains View</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ticketBooking">Book a ticket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="foodOrdering">Order Food</a>
        </li>
        <li class="nav navbar-nav navbar-right">
          <a class="nav-link" href="logout">logout</a>
        </li>
      </ul>
    </nav>   
  <div class="row justify-content-center">
    <div class="card" style="width:400px">
      <img class="card-img-top" src="{{ asset('uploads/passengers/'.$data->image) }}" alt="Card image" style="width:100%"  width="100px" heigth="70px" >
      <div class="card-body">
        <h4 class="card-title">Name   : {{$data->Passenger_name}}</h4>
        <h5 class="card-title">Email  : {{$data->email}}</h5>
        <h5 class="card-title">Address: {{$data->Address}}</h5>
        <h5 class="card-title">Gender: {{$data->gender}}</h5>
        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
        <a href="{{url('edit-passenger/'.$data->Passenger_id)}}" class="btn btn-primary">Edit Profile</a>
      </div>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>