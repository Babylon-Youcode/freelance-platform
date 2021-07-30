@extends('layout')
@section('contant')
{{-- <form
  class="col-lg-6 mx-auto"
  method="get" 
>   @csrf
  <div class="card-body card-header mt-5">
    <h1 class="text-center">Register</h1>
    <hr />
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" name="name" class="form-control" v-model="name" />
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" v-model="email" />
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" v-model="password" />
    </div>
    <div class="form-group text-right">
      <button type="submit" class="btn btn-success btn-lg d-block form-control">
        Register
      </button>
      <p class="my-3 " >
        <small class="text-muted">Already Registered</small>
        <a class="text-decoration-none"href="login/">login In?</a>
      </p>
    </div>
  </div>
</form> --}}
<main class="signup-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-4">
              <div class="card">
                  <h3 class="card-header text-center">Register User</h3>
                  <div class="card-body">

                      <form action="{{ route('register.custom') }}" method="POST">
                          @csrf
                          <div class="form-group mb-3">
                              <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                  required autofocus>
                              @if ($errors->has('name'))
                              <span class="text-danger">{{ $errors->first('name') }}</span>
                              @endif
                          </div>

                          <div class="form-group mb-3">
                              <input type="text" placeholder="Email" id="email_address" class="form-control"
                                  name="email" required autofocus>
                              @if ($errors->has('email'))
                              <span class="text-danger">{{ $errors->first('email') }}</span>
                              @endif
                          </div>

                          <div class="form-group mb-3">
                              <input type="password" placeholder="Password" id="password" class="form-control"
                                  name="password" required>
                              @if ($errors->has('password'))
                              <span class="text-danger">{{ $errors->first('password') }}</span>
                              @endif
                          </div>

                          <div class="form-group mb-3">
                              <div class="checkbox">
                                  <label><input type="checkbox" name="remember"> Remember Me</label>
                              </div>
                          </div>

                          <div class="d-grid mx-auto">
                              <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                          </div>
                      </form>

                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection