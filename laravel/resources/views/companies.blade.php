@extends('layout')
@section('title')
 List - Companies
@endsection
@section('content')
{{-- content --}}
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
          <h1 class="display-4">List of companies</h1>
        </div>
        <div class="container">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Company Web</th>
                    <th scope="col">Company Address</th>
                    <th scope="col">Company Code</th>
                    <th scope="col">Company Phone</th>
                    <th scope="col">Trainer Name</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($companies as $item)

                  <tr>
                    <th scope="row">{!! $item->company_id !!}</th>
                    <td>{!! $item->company_name !!}</td>
                    <td>{!! $item->company_web !!}</td>
                    <td>{!! $item->company_address !!}</td>
                    <td>{!! $item->company_code !!}</td>
                    <td>{!! $item->company_phone !!}</td>
                    <td>{!! $item->getCompaniesRelation->trainer_name!!}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{-- pagination control --}}
              {!! $companies->render() !!}

          <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
              <div class="col-12 col-md">
                <img class="mb-2" src="/docs/4.6/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                <small class="d-block mb-3 text-muted">© 2017-2021</small>
              </div>
              <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Cool stuff</a></li>
                  <li><a class="text-muted" href="#">Random feature</a></li>
                  <li><a class="text-muted" href="#">Team feature</a></li>
                  <li><a class="text-muted" href="#">Stuff for developers</a></li>
                  <li><a class="text-muted" href="#">Another one</a></li>
                  <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
              </div>
              <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Resource</a></li>
                  <li><a class="text-muted" href="#">Resource name</a></li>
                  <li><a class="text-muted" href="#">Another resource</a></li>
                  <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
              </div>
              <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Team</a></li>
                  <li><a class="text-muted" href="#">Locations</a></li>
                  <li><a class="text-muted" href="#">Privacy</a></li>
                  <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
              </div>
            </div>
          </footer>
        </div>

@endsection
