@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }}'s Profile</div>

                <div class="panel-body">
                    <p>Name: {{ Auth::user()->name }}</p>
                    <p>Email: {{ Auth::user()->email }}</p>
                    <p>
                        <a href="#">Change password.</a>
                    </p>
                    <p>
                        <a href="#">Delete account.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
