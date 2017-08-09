@extends('layouts.login')

@section('content')
<form id="loginform" class="form-vertical"  method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    @include('flash.messages')
    @if ($errors->has('email') || $errors->has('password'))
        <div class="alert alert-error">
          <button class="close" data-dismiss="alert">×</button>
          <ul>
            @if ($errors->has('email'))
                <li> <strong>{{ $errors->first('email') }}</strong> </li>
            @endif
            @if ($errors->has('password'))    
                <li> <strong>{{ $errors->first('password') }}</strong> </li>
            @endif    
          </ul>   
        </div>
    @endif
    <div class="control-group normal_text"> <h3><!--<img src="img/logo.png" alt="Logo" />-->TTRANSPARENCY Admin</h3></div>
    <div class="control-group form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_lg"><i class="fa fa-user"> </i></span><input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email" autofocus>
            </div>
        </div>
    </div>
    <div class="control-group form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_ly"><i class="fa fa-lock"></i></span><input id="password" type="password" name="password">
            </div>
        </div>
    </div>
    <div class="form-actions">
        <span class="pull-right"><button type="submit" class="btn btn-success">Login</button></span>
        <!--<span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
        <span class="pull-right"><a type="submit" href="index.html" class="btn btn-success" /> Login</a></span>-->
    </div>
</form>
<form id="recoverform" action="#" class="form-vertical">
    <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
    
        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
            </div>
        </div>
   
    <div class="form-actions">
        <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
        <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
    </div>
</form>
@endsection
