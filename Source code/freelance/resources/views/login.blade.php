
    @extends('layout')
    @section('contant')
    <form  class="col-lg-6 mx-auto">
      <div class="card-body card-header mt-5 pb-4">
        <h1 class="text-center">login</h1>
        <hr />
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" v-model="email" />
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" v-model="password" />
        </div>
        <button class="btn btn-success form-control btn-lg d-block mb-3 ">login</button>
        <a class="text-decoration-none  float-right " href="../forget/">forget Password?</a>
      
      </div>
    </form>
    @endsection