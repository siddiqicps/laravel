@if(session('warning'))
<div class="alert">
  <button class="close" data-dismiss="alert">×</button>
  <strong>Warning!</strong> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 
</div>
@endif

@if(session('success'))
<div class="alert alert-success">
  <button class="close" data-dismiss="alert">×</button>
  <strong>{{session('success')}} </strong>
</div>
@endif

@if(session('info'))
<div class="alert alert-info">
  <button class="close" data-dismiss="alert">×</button>
  <strong>Info!</strong> you're not looking too good. 
</div>
@endif

@if(session('error'))
<div class="alert alert-error">
  <button class="close" data-dismiss="alert">×</button>
  <strong>{{session('error')}} 
</div>
@endif