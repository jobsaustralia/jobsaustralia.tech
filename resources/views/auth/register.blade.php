@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div id="register" class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    You're using JobsAustralia.tech as a <em>Job Seeker</em>. <a href="{{ explode('://', Request::url())[0] . '://' . 'employ.' . explode('://', Request::url())[1] }}">Change to Employer</a>.
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <!-- Name -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" pattern="[a-zA-Z ]+" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Student Check -->
                        <div class="form-group">
                            <label for="student" class="col-md-4 control-label">I'm a student</label>

                            <div class="col-md-1">
                                <input id="student" type="checkbox" class="form-control" value="1">
                            </div>
                        </div>
						
                        <!-- Education Level -->
                        <div class="form-group{{ $errors->has('education') ? ' has-error' : '' }}">
                            <label for="education" class="col-md-4 control-label">Education Level</label>

                            <div class="col-md-6">
                                <select id="education" name="education" class="form-control" value="{{ old('education') }}" required>
                                    <option disabled selected value>Please select an option</option>
                                    <option value="0">TAFE</option>
                                    <option value="1">Diploma</option>
                                    <option value="2">Associate degree</option>
                                    <option value="3">Bachelor degree</option>
                                    <option value="4">Masters degree</option>
                                    <option value="5">PhD</option>
                                </select>

                                @if ($errors->has('education'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('education') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <!-- Job Title -->
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Job Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" pattern="[a-zA-Z ]+" value="{{ old('title') }}" required>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Sector -->
                        <div class="form-group{{ $errors->has('sector') ? ' has-error' : '' }}">
                            <label for="sector" class="col-md-4 control-label">Sector</label>

                            <div class="col-md-6">
                                <input id="sector" type="text" class="form-control" name="sector" pattern="[a-zA-Z ]+" value="{{ old('sector') }}" required>

                                @if ($errors->has('sector'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sector') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Experience -->
                        <div class="form-group{{ $errors->has('experience') ? ' has-error' : '' }}">
                            <label for="experience" class="col-md-4 control-label">Overall Experience (in years)</label>

                            <div class="col-md-6">
                                <input id="experience" type="number" min="0" max="100" class="form-control" name="experience" value="{{ old('experience') }}" required>

                                @if ($errors->has('experience'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('experience') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr>
                        
                        <!-- Location: State -->
                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label for="state" class="col-md-4 control-label">State/Territory</label>

                            <div class="col-md-6">
                                <select id="state" name="state" class="form-control" value="{{ old('state') }}" required>
                                    <option disabled selected value>Please select an option</option>
                                    <option value="vic">Victoria</option>
                                    <option value="nsw">New South Wales</option>
                                    <option value="qld">Queensland</option>
                                    <option value="wa">Western Australia</option>
                                    <option value="sa">South Australia</option>
                                    <option value="tas">Tasmania</option>
                                    <option value="act">Australian Capital Territory</option>
                                    <option value="nt">Northern Teritory</option>
                                    <option value="oth">Other Australian Region</option>
                                </select>

                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Location: City -->
                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" pattern="[a-zA-Z ]+" value="{{ old('city') }}" required>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr>
                        
                        <!-- GitHub -->
                        <div class="form-group{{ $errors->has('github') ? ' has-error' : '' }}">
                            <label for="github" class="col-md-4 control-label"><i class="fa fa-github" aria-hidden="true"></i> GitHub Username</label>

                            <div class="col-md-6">
                                <input id="github" type="text" class="form-control" name="github" pattern="[a-zA-Z0-9\- ]+" value="{{ old('github') }}" placeholder="Optional">

                                @if ($errors->has('github'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('github') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <hr>

                        <h4 align="center">Skills</h4>

                        <p align="center">Please select any skills you have (by self assessment).</p>
                        
                        <div class="form-group">
                            <p align ="center">
                                <a id="autofill-btn" class="btn btn-primary">
                                    Autofill skills from GitHub
                                </a>
                            </p>

                            <p id="github-error-generic" class="text-danger default-hide" align="center">Please check your GitHub username.</p>

                            <p id="github-error-username" class="text-danger default-hide" align="center">Please enter your GitHub username.</p>
                        </div>

                        <hr class="skill-divider">

                        <h5 align="center">Languages</h5>

                        <div id="skills-languages"></div>

                        <hr class="skill-divider">

                        <h5 align="center">Operating Systems</h5>

                        <div id="skills-oses"></div>

                        <hr class="skill-divider">

                        <h5 align="center">Networking</h5>

                        <div id="skills-networking"></div>

                        <hr class="skill-divider">

                        <h5 align="center">Software</h5>

                        <div id="skills-software"></div>

                        <hr>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
