@extends('layouts.app')

@section('content')
    <div class="container">
         <div class="row">
            <div class="col-md-6 col-md-offset-3">
                   <h4>Profiles</h4><hr>
                   <table class="table table-hover">
                      <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                      </thead>
                      <tbody>
                         <tr>
                            <td>{{ $LoggedUserInfo['name'] }}</td>
                            <td>{{ $LoggedUserInfo['email'] }}</td>
                            <td><a href="{{ route('freelancer.logout') }}">Logout</a></td>
                         </tr>
                      </tbody>
                   </table>

                   <ul>
                       <li><a href="/freelancer/dashboard">Dashboard</a></li>
                       <li><a href="/freelancer/profile">Profile</a></li>
                       <li><a href="/freelancer/settings">Settings</a></li>
                       <li><a href="/freelancer/staff">Staff</a></li>
                   </ul>
            </div>
         </div>
    </div>
    @endsection