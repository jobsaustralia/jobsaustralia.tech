@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div id="profile" class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }}'s Profile</div>

                <div class="panel-body">
                    <p>Name: {{ Auth::user()->name }}</p>
                    <p>Email: {{ Auth::user()->email }}</p>
                    <p>Location: {{ Auth::user()->location }}</p>
                    <p>Sector: {{ Auth::user()->sector }}</p>
                    <p>Job Title: {{ Auth::user()->title }}</p>
                    <p>Experience: {{ Auth::user()->experience }} Year(s)</p>

                    <hr>
					
					<form class="form-horizontal" method="POST" action="{{ route('upload') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Resume:</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control" name="file">

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Upload resume.
                                </button>
                            </div>
                        </div>
                    </form>
					<hr>
                    <p>
                        <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('edit-form').submit();">
                            Edit profile and skills.
                        </button>
                    </p>

                    <p>
                        <button id="change-password" class="btn btn-primary">
                            Change password.
                        </button>
                    </p>

                    <p id="change-password-content" style="display: none;">
                        To change your password, Logout and select "Forgot Your Password".
                    </p>

                    <p>
                        <button id="confirm-delete" class="btn btn-primary">
                            Delete account.
                        </button>
                    </p>

                    <p id="confirm-delete-content" style="display: none;">
                        Confirm deletion: <a href="{{ route('delete') }}" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">I really want to delete my account.</a>
                    </p>

                    <form id="delete-form" action="{{ route('delete') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                    <form id="edit-form" action="{{ route('edit') }}" method="GET" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
