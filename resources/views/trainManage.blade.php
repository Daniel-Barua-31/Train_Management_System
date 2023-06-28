@extends('layout.adminmaster')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Add Train's details : 
                    </h4>
                </div>
                <div class="card-body">
                    <form action="trainManage" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group mb-3">
                            <label for=""> Trains Name  : </label>
                            <input type="text" name="Trains_name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Avaiable_seats  : </label>
                            <input type="number" name="Available_seats" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> price : </label>
                            <input type="number" name="price" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Trains Destination : </label>
                            <input type="text" name="Trains_Destination" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> leaving Time : </label>
                            <input type="datetime-local" name="Leaving_time" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save Info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection