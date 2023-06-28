@extends('layout.master')
@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="row justify-content-center">
          <h1>E-Canteen</h1>
        </div>
      </div>
    <div class="container">
      <table class="table">
          <thead>
              <tr>
                  <th class="table-primary">Food_name</th>
                  <th class="table-primary">Available_Food</th>
                  <th class="table-primary">Price</th>
                  <th class="table-primary">BUY</th>
              </tr>
          </thead>
          <tbody>
              @foreach($foodOrder as $food)
              <tr>
                  <td class="table-primary">{{$food->Food_name}}</td>
                  <td class="table-primary">{{$food->Available_Food}}</td>
                  <td class="table-primary">{{$food->price}}</td>
                  <td class="table-primary">
                    <a href={{"foodBuy/".$food->Food_id}}><button type="button" class="btn btn-success btn-lg">BUY</button>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
    </div>
  </div>
@endsection