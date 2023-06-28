@extends('layout.adminmaster')
@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="row justify-content-center">
          <h1>List of User </h1>
          <br>
          <button type="button" class="btn btn-success btn-lg">Print</button>
        </div>
      </div>
    <div class="container">
      <table class="table">
          <thead>
              <tr>
                  <th class="table-primary">Passenger Name</th>
                  <th class="table-primary">email</th>
                  <th class="table-primary">gender</th>
                  <th class="table-primary">Address</th>
                  <th class="table-primary">Action</th>
              </tr>
          </thead>
          <tbody>
              @foreach($passData as $pass)
              <tr>
                  <td class="table-primary">{{$pass->Passenger_name}}</td>
                  <td class="table-primary">{{$pass->email}}</td>
                  <td class="table-primary">{{$pass->gender}}</td>
                  <td class="table-primary">{{$pass->Address}}</td>
                  <td class="table-primary">
                    <a href={{"delete/".$pass['Passenger_id']}}><button type="button" class="btn btn-danger">Delete</button>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
    </div>
  </div>
@endsection