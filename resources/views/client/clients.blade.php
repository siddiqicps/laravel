@extends('layouts.app')

@section('content')
<!--breadcrumbs-->
  <!-- <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div> -->
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
          <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Clients</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Sno</th>
                  <th>Name</th>
                  <th>Address(s)</th>
                  <th>Phone</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($clients as $client)
                  <tr>
                    <th>{{ $loop->iteration }}</th>
                    <th>{{ $client->client_name }}</th>
                    <th>{{ $client->address }}</th>
                    <th>{{ $client->phone }}</th>
                    <th>{{ $client->email }}</th>
                  </tr>

                @empty
                  <p> No clients </p>

                @endforelse 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
