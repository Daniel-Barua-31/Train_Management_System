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
  <h2 class="text-center text-danger" >Trains Scheduling time</h2>
      <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th class="table-primary">Trains_name</th>
                    <th class="table-primary">Available_seats</th>
                    <th class="table-primary">Trains_leaving</th>
                    <th class="table-primary">Trains_Destination</th>
                    <th class="table-primary">Time</th>
                    <th class="table-primary">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trains as $train)
                <tr>
                    <td class="table-primary">{{$train->Trains_name}}</td>
                    <td class="table-primary">{{$train->Available_seats}}</td>
                    <td class="table-primary">{{$train->Trains_leaving}}</td>
                    <td class="table-primary">{{$train->Trains_Destination}}</td>
                    <td class="table-primary">{{$train->Time}}</td>
                    <td class="table-primary">
                        <a href="{{url('trains/delete')}}/{{$train->Trains_id}}">
                        <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                        <a href="#">
                        <button type="button" class="btn btn-primary">Edit</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>