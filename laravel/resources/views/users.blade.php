@extends('layouts.layout')
@section('title')
 List - User
@endsection
@section('content')

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
          <h1 class="display-4">List of User</h1>
        </div>
        <div class="container">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Email Email</th>
                    <th scope="col">Password</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $item)
                  <tr>
                    <td>{!! $item->user_name !!}</td>
                    <td>{!! $item->user_email !!}</td>
                    <td>{!! $item->user_password !!}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
@endsection
