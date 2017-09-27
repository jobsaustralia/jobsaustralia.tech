@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div id="profile" class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }}'s Profile</div>

                <div class="panel-body">
                    <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                    <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                    <p><strong>Job Title:</strong> {{ Auth::user()->title }}</p>
                    <p><strong>Sector:</strong> {{ Auth::user()->sector }}</p>
                    <p><strong>Experience:</strong> {{ Auth::user()->experience }} @if (Auth::user()->experience == 1) year @else years @endif</p>
                    <p><strong>Location:</strong> {{ Auth::user()->city }}, @if (Auth::user()->state == "vic") Victoria @elseif (Auth::user()->state == "nsw") New South Wales @elseif (Auth::user()->state == "qld") Queensland @elseif (Auth::user()->state == "wa") Western Australia @elseif (Auth::user()->state == "sa") South Australia @elseif (Auth::user()->state == "tas") Tasmania @elseif (Auth::user()->state == "act") Australian Capital Territory @elseif (Auth::user()->state == "nt") Northern Territory @elseif (Auth::user()->state == "oth") Other Australian Region @endif</p>

                    @if (Auth::user()->github !== null) 
                        <p><strong><i class="fa fa-github" aria-hidden="true"></i> GitHub: <a href="https://github.com/{{ Auth::user()->github }}">{{ Auth::user()->github }}</a></strong></p>
                    @endif

                    <hr>

                    <p>
                        <a href="{{ route('editProfile') }}" class="btn btn-primary">
                            Edit profile and skills
                        </a>
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
                        <button id="confirm-delete" class="btn btn-danger">
                            Delete account
                        </button>
                    </p>

                    <div id="confirm-delete-content" style="display: none;">
                        <p>
                            Confirm deletion: <a id="really-confirm-delete" class="text-danger" href="#">I really want to delete my account.</a>
                        </p>

                        <div id="really-confirm-delete-content" style="display: none;">
                            <p>
                                <strong>Deleting your account will delete your current active job applications, and your resume.</strong>
                            </p>
                            <p>
                                <strong>It is impossible to recover an account, or its data, after deletion!</strong>
                            </p>
                            <p>
                                <a id="delete" class="text-danger" title="Clicking this will delete your account without further prompt." href="{{ route('delete') }}">I am <strong>positively certain</strong> I want to delete my account.</a>
                            </p>
                        </div>
                    </div>

                    <form id="delete-form" action="{{ route('delete') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Notifications</div>

                <div class="panel-body">
                    <p>Please select the email notifications you would like to receive.</p>

                    <hr>

                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('uploadResume') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('asp') ? ' has-error' : '' }}">
                            <label for="accepted" class="col-md-4 control-label">Notify me when I am accepted</label>

                            <div class="col-md-1">
                                <input id="accepted-hidden" type="hidden" class="form-control" name="accepted" value="0">
                                <input id="accepted" type="checkbox" class="form-control" name="accepted" value="{{ old('accepted', 1) }}">

                                @if ($errors->has('accepted'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('accepted') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rejected') ? ' has-error' : '' }}">
                            <label for="rejected" class="col-md-4 control-label">Notify me when I am rejected</label>

                            <div class="col-md-1">
                                <input id="rejected-hidden" type="hidden" class="form-control" name="rejected" value="0">
                                <input id="rejected" type="checkbox" class="form-control" name="rejected" value="{{ old('rejected', 1) }}">

                                @if ($errors->has('rejected'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rejected') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('newjob') ? ' has-error' : '' }}">
                            <label for="newjob" class="col-md-4 control-label">Notify me when a new job appears</label>

                            <div class="col-md-1">
                                <input id="newjob-hidden" type="hidden" class="form-control" name="newjob" value="0">
                                <input id="newjob" type="checkbox" class="form-control" name="newjob" value="{{ old('newjob', 1) }}">

                                @if ($errors->has('newjob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('newjob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('marketing') ? ' has-error' : '' }}">
                            <label for="marketing" class="col-md-4 control-label">Send me occasional marketing emails</label>

                            <div class="col-md-1">
                                <input id="marketing-hidden" type="hidden" class="form-control" name="marketing" value="0">
                                <input id="marketing" type="checkbox" class="form-control" name="marketing" value="{{ old('marketing', 1) }}">

                                @if ($errors->has('marketing'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('marketing') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save Changes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Upload Resume</div>

                <div class="panel-body">
                    <p>Uploading a resume is optional.</p>
                    <p><strong>Current resume: </strong>@if (File::exists(storage_path('app/public/resumes/' . 'resume-' . Auth::user()->id . '.pdf'))) <a href="{{ route('resume') }}">Preview</a> &bull; <a id="delete-resume" class="text-danger" href="{{ route('deleteResume') }}">Delete</a> @else None. @endif</p>

                    <form id="delete-resume-form" action="{{ route('deleteResume') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                    <hr>

                    <p><strong>@if (File::exists(storage_path('app/public/resumes/' . 'resume-' . Auth::user()->id . '.pdf'))) Replace your current resume. @else Upload your resume. @endif</strong></p>

                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('uploadResume') }}">
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
