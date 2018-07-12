{{-- DELETE MESSAGE --}}
@if(session('ok_delete'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ session('ok_delete') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
{{-- INSERT MESSAGE --}}
@if(session('ok_insert'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('ok_insert') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
{{-- UPDATE MESSAGE --}}
@if(session('ok_update'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>{{ session('ok_update') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
{{-- ERROS MESSAGE --}}
@if(session('error_message'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{ session('error_message') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
{{-- ERROR MESSAGE FORM  --}}
@if($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <ul>
      @foreach($errors->all() as $error)
          <li>  {{$error}}</li>
      @endforeach
  </ul>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
