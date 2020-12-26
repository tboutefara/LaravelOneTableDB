@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-2">
        <form class="form-horizontal" method="post" action="/saveupdate">
        @csrf
<fieldset>

<!-- Form Name -->
<legend>Update the Person with Id : {{ $person->id }}</legend>

<input name="id" type="hidden" value="{{ $person->id }}">

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="textinput">First Name</label>  
  <div class="col-md-12">
  <input name="first_name" type="text" placeholder="First name..." class="form-control input-md" value="{{ $person->first_name }}">
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="textinput">Last Name</label>  
  <div class="col-md-12">
  <input name="last_name" type="text" placeholder="Last name..." class="form-control input-md" value="{{ $person->last_name }}">  
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="textinput">City</label>  
  <div class="col-md-12">
  <input name="city" type="text" placeholder="City" class="form-control input-md" value="{{ $person->city }}"> 
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <div class="col-md-6 offset-3">
    <button id="singlebutton" name="save" class="btn btn-primary">Save</button>
  </div>
</div>

</fieldset>
</form>

        </div>
    </div>
</div>

@endsection