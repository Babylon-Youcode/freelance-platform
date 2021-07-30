@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h2>welcome to my platform </h2>
                    <a href="freelancer/login"><button class="btn btn-danger">freelancer</button></a>
                    <a href="client/login"><button class="btn btn-light">client</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
