@extends('layouts.layout')
@section('title')
 Search - Trainers
@endsection
@section('content')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Search</h1>
    </div>
    <div class="container ">
        <div class="mx-auto" style="width:50%">
            <form action="{{ route('search')}}" action='get'>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="k" aria-describedby="emailHelp" placeholder="Enter keyword..">
                </div>
                </form>
        </div>

        <div class="py-5">
            @isset($key)
                <h2> Search result for "{{ $key }}" </h2>
                <table class="table table-dark">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Trainer Name</th>
                    <th scope="col">Trainer Email</th>
                    <th scope="col">Trainer Phone</th>
                    <th scope="col">Company Id</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($result as $item)
                    <tr>
                    <th scope="row">{!! $item->trainer_id !!}</th>
                    <td>{!! $item->trainer_name !!}</td>
                    <td>{!! $item->trainer_email !!}</td>
                    <td>{!! $item->trainer_phone !!}</td>
                    <td>{!! $item->company_id !!}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                @if(method_exists($result,'render'))
                {!! $result->render() !!}
                @endisset
            @endisset
        </div>
    </div>
@endsection
