<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<h1>Registration Form</h1>
<form action="{{url('/')}}/register" method="post">
  @csrf
  </pre>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" name ="name" id="name" placeholder="Your Name" value="{{old('name')}}">
      <span class="text-danger">
        @error('name')
            {{$message}}
        @enderror
      </span>
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="{{old('email')}}">
      <span class="text-danger">
      @error('email')
            {{$message}}
        @enderror
      </span>
    </div>
    <div class="form-group col-md-6">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
      <span class="text-danger">
      @error('password')
            {{$message}}
        @enderror
      </span>
    </div>
  </div>
  </div>
    <div class="form-group col-md-6">
      <label for="password_confirmation">Confirm Password</label>
      <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password">
      <span class="text-danger">
      @error('password_confirmation')
            {{$message}}
        @enderror
      </span>
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="gender">Gender</label>
      <select name="gender" id="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
        <span class="text-danger">
        @error('gender')
            {{$message}}
        @enderror
        </span>
      </select>
    </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control"  name="address" id="address" placeholder="Your Address" value="{{old('address')}}">
    <span class="text-danger">
    @error('address')
            {{$message}}
        @enderror
    </span>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</body>
</html>