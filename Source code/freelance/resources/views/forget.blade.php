@extends('layout')
@section('contant')
<form  class="col-lg-6 mx-auto mt-5 ">
    <div class="card-body card-header mt-5">
    <h1 class="text-center">Forget Password?</h1>
    <hr />
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" v-model="email" />
    </div>
    <button class="btn btn-success mb-3 d-block w-100">Reset</button>
</div>
  </form>
@endsection