@extends('layouts.app')

@section('content')
<form method="POST" action="">
  <input type="hidden" name="_token" value="">
  <input type="hidden" name="_method" value="PUT">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="" class="form-control">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" value="" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fa fa-btn fa-sign-in"></i>Update
  </button>
</form>

@endsection
