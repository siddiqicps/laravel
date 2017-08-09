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
            <h5>References</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Sno</th>
                  <th>Reference Name</th>
                  <th>Client</th>
                  <th>Phone</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($references as $reference)
                  <tr>
                    <th>{{ $loop->iteration }}</th>
                    <th>{{ $reference->reference_name }}</th>
                    <th>{{ $reference->client->client_name or 'Default' }}</th>
                    <th>{{ $reference->contact_number }}</th>
                    <th>{{ $reference->email_id }}</th>
                  </tr>

                @empty
                  <p> No references </p>

                @endforelse 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
