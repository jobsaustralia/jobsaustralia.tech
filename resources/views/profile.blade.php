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

                    <p>
                        <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('edit-form').submit();">
                            Edit profile and skills
                        </button>
                    </p>

                    <p>
                        <button id="change-password" class="btn btn-primary">
                            Change password
                        </button>
                    </p>

                    <p id="change-password-content" style="display: none;">
                        To change your password, Logout and select "Forgot Your Password".
                    </p>

                    <p>
                        <button id="confirm-delete" class="btn btn-primary">
                            Delete account
                        </button>
                    </p>

                    <p id="confirm-delete-content" style="display: none;">
                        Confirm deletion: <a class="text-warning" href="{{ route('delete') }}" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">I really want to delete my account.</a>
                    </p>

                    <form id="delete-form" action="{{ route('delete') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                    <form id="edit-form" action="{{ route('edit') }}" method="GET" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Upload Resume</div>

                <div class="panel-body">
                    <p>Uploading a resume is optional.</p>

                    <form class="form-horizontal" method="POST" action="{{ route('upload') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('resume') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="resume" type="file" class="form-control" name="resume" required>

                                @if ($errors->has('resume'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('resume') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Upload
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
