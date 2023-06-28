@extends('layout.master')
@section('content')
<div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">
              <h1>Ticket Booking</h1>
            </div>
        </div>
    <div class="container">
      <table class="table">
          <thead>
              <tr>
                  <th class="table-primary">Trains_name</th>
                  <th class="table-primary">Available_seats</th>
                  <th class="table-primary">Price</th>
                  <th class="table-primary">Trains_Destination</th>
                  <th class="table-primary">leaving Time</th>
                  <th class="table-primary">BUY</th>
                  <th class="table-primary">Number of Seat</th>
              </tr>
          </thead>
          <tbody>
              @foreach($ticketPricing as $ticket)
              <tr>
                  <td class="table-primary">{{$ticket->Trains_name}}</td>
                  <td class="table-primary">{{$ticket->Available_seats}}</td>
                  <td class="table-primary">{{$ticket->price}}</td>
                  <td class="table-primary">{{$ticket->Trains_Destination}}</td>
                  <td class="table-primary">{{$ticket->Time}}</td>
                  <td class="table-primary">
                    <a href={{"ticketBuy/".$ticket->Trains_id}}><button type="button" class="btn btn-success btn-lg">BUY</button>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
    </div>
  </div>
@endsection