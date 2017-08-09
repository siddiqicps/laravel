@extends('layouts.app')

@section('content')
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
          <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Roles</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($roles as $role)
                  <tr>
                    <th>{{ $loop->iteration }}</th>
                    <th>{{ $role->name }}</th>
                    <th>{{ $role->slug }}</th>
                    <th>{{ $role->description }}</th>
                  </tr>

                @empty
                  <p> No roles </p>

                @endforelse 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
