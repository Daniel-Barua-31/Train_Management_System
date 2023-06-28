<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Create Passengers Account: 
                    </h4>
                </div>
                <div class="card-body">
                    <form action="admin" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for=""> Admin Name  : </label>
                            <input type="text" name="Admin_name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Password  : </label>
                            <input type="password" name="Password" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> email : </label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> gender : </label>
                            <input type="text" name="gender" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Address : </label>
                            <input type="text" name="Address" class="form-control">
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
@extends('layout.master')