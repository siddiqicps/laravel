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
            <h5>Cases</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Sno</th>
                  <th>Case Number</th>
                  <th>Policy Number</th>
                  <th>Name of LA</th>
                  <th>Case Type</th>
                  <th>Assigned To</th>
                  <th>Investigator</th>
                  <th>Case Status</th>
                  <th>Case Result</th>
                  <th>Start Date</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($cases as $case)
                  <tr>
                    <th>{{ $loop->iteration }}</th>
                    <th>{{ $case->case_number }}</th>
                    <th>{{ $case->policy_number }}</th>
                    <th>{{ $case->case_title }}</th>
                    <th>{{ $case->case_type }}</th>
                    <th>
                    @foreach ($case->users as $user)
                      @if ($user->roles[0]->slug == 'user')
                        {{ $user->name or 'Default'}}
                      @endif  
                    @endforeach
                    </th>
                    <th>
                    @foreach ($case->users as $user)
                      @if ($user->roles[0]->slug == 'remote')
                        {{ $user->name or 'Default'}}
                      @endif  
                    @endforeach
                    </th>  
                    <th>{{ $case->case_status }}</th>
                    <th>{{ $case->case_result }}</th>
                    <th>{{ $case->received_date }}</th>
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
