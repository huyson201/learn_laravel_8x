@extends('dashboard')
@section('content')
<h2 class="text-center">Admin info</h2>
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">User Name</th>
            <th scope="col">User Email</th>
            <th scope="col">User Password</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{Auth::user()->user_id}}</th>
            <td>{{Auth::user()->user_name}}</td>
            <td>{{Auth::user()->user_email}}</td>
            <td>{{Auth::user()->user_password}}</td>
          </tr>
        </tbody>
      </table>
</div>
@endsection
