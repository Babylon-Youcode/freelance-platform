@extends('layouts.app')

@section('content')
    <div class="container">
         <div class="row">
            <div class="col-md-6 col-md-offset-3">
                   <h4>Staff</h4><hr>
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
                            <td><a href="{{ route('client.logout') }}">Logout</a></td>
                         </tr>
                      </tbody>
                   </table>

                   <ul>
                       <li><a href="/client/dashboard">Dashboard</a></li>
                       <li><a href="/client/profile">Profile</a></li>
                       <li><a href="/client/settings">Settings</a></li>
                       <li><a href="/client/staff">Staff</a></li>
                   </ul>
            </div>
         </div>
    </div>
    @endsection