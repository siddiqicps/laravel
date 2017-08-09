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
            <h5>Users</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Sno</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Role</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($users as $user1)
                  <tr>
                    <th>{{ $loop->iteration }}</th>
                    <th>{{ $user1->name }}</th>
                    <th>{{ $user1->username }}</th>
                    <th>{{ $user1->email }}</th>
                    <th>{{ $user1->roles[0]->name }}</th>
                  </tr>

                @empty
                  <p> No users </p>

                @endforelse 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
