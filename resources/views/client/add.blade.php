@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add New Client</h5>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="widget-content nopadding">
              <form class="form-horizontal" role="form" method="POST" action="{{ route('client.add') }}">
                {{ csrf_field() }}
                <div class="control-group">
                  <label class="control-label">Name</label>
                  <div class="controls">
                    <input id="client_name" type="text" class="form-control" name="client_email" value="{{ $client_name or old('client_name') }}" required autofocus>
                    @if ($errors->has('client_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('client_name') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Address</label>
                  <div class="controls">
                    <input id="address" type="text" class="form-control" name="address" value="{{ $address or old('address') }}" required autofocus>
                    @if ($errors->has('address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Phone</label>
                  <div class="controls">
                    <input id="phone" type="number" class="form-control" name="phone" value="{{ $phone or old('phone') }}" required autofocus>
                    @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Email</label>
                  <div class="controls">
                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="form-actions">
                  <input type="submit" value="Validate" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>          
@endsection
