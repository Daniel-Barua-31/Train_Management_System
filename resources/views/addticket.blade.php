@extends('layout.master')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Create Passengers Account: 
                    </h4>
                </div>
                <div class="card-body">
                    <form action="addticket" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for=""> station Name  : </label>
                            <input type="text" name="station-name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> City Name  : </label>
                            <input type="text" name="city-name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> pricing  : </label>
                            <input type="number" name="pricing" class="form-control">
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