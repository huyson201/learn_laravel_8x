@extends('layouts.layout')
@section('title')
 List - Trainers
@endsection
@section('content')

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
          <h1 class="display-4">List of Trainer</h1>
        </div>
        <div class="container">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Trainer Name</th>
                    <th scope="col">Trainer Email</th>
                    <th scope="col">Trainer Phone</th>
                    <th scope="col">Company Id</th>
                    <th scope="col">Company Name</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($trainers as $item)
                  <tr>
                    <th scope="row">{!! $item->trainer_id !!}</th>
                    <td>{!! $item->trainer_name !!}</td>
                    <td>{!! $item->trainer_email !!}</td>
                    <td>{!! $item->trainer_phone !!}</td>
                    <td>{!! $item->company_id !!}</td>
                    <td>{!! $item->companyRelation->company_name!!}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              @if(method_exists($trainers,'render'))
                {!! $trainers->render() !!}
              @endisset
@endsection
