@extends('client.sidebar')

@section('sidebar')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="m-2">
        <div class="row">
        <img src="/img/{!! $findProject->image !!}" style="height: 460px" class="col-6" alt="...">
  
          <form class="col" enctype="multipart/form-data" action="/client/editProject/{!! $findProject->id !!}" method="post">
                     
          
             @csrf
             <div class="form-group">
      
                   <label>Name</label>
                   <input type="text" class="form-control" name="name" value="{!! $findProject->name !!}" >
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" value="{{$LoggedUserInfo->image}}" >     
                 </div>
                <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category" id="">
                    <option value="{!! $findProject->category !!}">{!! $findProject->category !!}</option>
                    <option value="Websites, IT & Software">Websites, IT & Software</option>
                    <option value="Design, Media & Architecture">Design, Media & Architecture</option>
                    <option value="Data Entry & Admin">Data Entry & Admin</option>
                    <option value="Translation & Languages ">Translation & Languages </option>
                    <option value="Writing & Content">Writing & Content</option>
                    <option value="Other ">Other </option>
                  </select>
                </div>
                <div class="form-group">
                   <label>Description</label>
                   <textarea class="form-control" name="description" cols="30" rows="5">{!! $findProject->description !!}</textarea>
                </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Update</button>
                <a class="btn ml-5 btn-danger"  href="/client/deleteProject/{{ $findProject->id}}">Delete</a>
            </div>
            </form>   
        </div>
        </div>
        {{-- ------------------------ --}}


 

    </main>
            </div>
            


    </div>
@endsection