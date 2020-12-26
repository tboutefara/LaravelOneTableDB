@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-2">
        <form class="form-horizontal" method="post" action="/confirmdelete">
        @csrf
<fieldset>

<!-- Form Name -->
<legend>Confirm deletion (id : {{ $id }})</legend>

<!-- Button (Double) -->
<div class="form-group my-2">
  <div class="col-md-8">
    <input type="hidden" value="{{ $id }}" name="id" />
    <input type="submit" class="btn btn-danger" value="Yes" />
    <a href="/" class="btn btn-success">No</a>
  </div>
</div>

</fieldset>
</form>


        </div>
    </div>
</div>

@endsection