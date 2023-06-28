@extends('layout.Adminmaster')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Add Food to the E-Canteen: 
                    </h4>
                </div>
                <div class="card-body">
                    <form action="foodManage" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for=""> Food Name  : </label>
                            <input type="text" name="Food_name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Avaiable_Food  : </label>
                            <input type="number" name="Available_Food" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> price : </label>
                            <input type="number" name="price" class="form-control">
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