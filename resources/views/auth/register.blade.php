@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    You're using JobsAustralia.tech as a <em>Job Seeker</em>. <a href="https://employ.jobsaustralia.tech/register">Change to Employer</a>.
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
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

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
						
                        <!-- Job Title -->
						<div class="form-group{{ $errors->has('job-title') ? ' has-error' : '' }}">
                            <label for="job-title" class="col-md-4 control-label">Job Title</label>

                            <div class="col-md-6">
                                <input id="job-title" type="text" class="form-control" name="job-title" value="{{ old('job-title') }}" required autofocus>

                                @if ($errors->has('job-title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job-title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<!-- Sector -->
						<div class="form-group{{ $errors->has('sector') ? ' has-error' : '' }}">
                            <label for="sector" class="col-md-4 control-label">Sector</label>

                            <div class="col-md-6">
                                <input id="sector" type="text" class="form-control" name="sector" value="{{ old('sector') }}" required autofocus>

                                @if ($errors->has('sector'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sector') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <!-- Experience -->
						<div class="form-group{{ $errors->has('overall-exp') ? ' has-error' : '' }}">
                            <label for="overall-exp" class="col-md-4 control-label">Overall Experience (in years)</label>

                            <div class="col-md-6">
                                <input id="overall-exp" type="text" class="form-control" name="overall-exp" value="{{ old('overall-exp') }}" required autofocus>

                                @if ($errors->has('overall-exp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('overall-exp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <!-- Location -->
						<div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label for="location" class="col-md-4 control-label">Location</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}" required autofocus>

                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr>

						<h2 align="center">Skills</h2>

                        <!-- Skill: Java -->
						<div class="form-group{{ $errors->has('java') ? ' has-error' : '' }}">
                            <label for="java" class="col-md-4 control-label">Java</label>

                            <div class="col-md-1">
                                <input id="java" type="checkbox" class="form-control" name="java" value="{{ old('java') }}" autofocus>
							
                                @if ($errors->has('java'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('java') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>

                        <!-- Skill: Python -->
						<div class="form-group{{ $errors->has('python') ? ' has-error' : '' }}">
                            <label for="python" class="col-md-4 control-label">Python</label>

                            <div class="col-md-1">
                                <input id="python" type="checkbox" class="form-control" name="python" value="{{ old('python') }}" autofocus>
							
                                @if ($errors->has('python'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('python') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>

                        <!-- Skill: C -->
						<div class="form-group{{ $errors->has('c') ? ' has-error' : '' }}">
                            <label for="c" class="col-md-4 control-label">C</label>

                            <div class="col-md-1">
                                <input id="c" type="checkbox" class="form-control" name="c" value="{{ old('c') }}" autofocus>
							
                                @if ($errors->has('c'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>

                        <!-- Skill: C# -->
						<div class="form-group{{ $errors->has('c-sharp') ? ' has-error' : '' }}">
                            <label for="c-sharp" class="col-md-4 control-label">C#</label>

                            <div class="col-md-1">
                                <input id="c-sharp" type="checkbox" class="form-control" name="c-sharp" value="{{ old('c-sharp') }}" autofocus>
							
                                @if ($errors->has('c-sharp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c-sharp') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
							
                        <!-- Skill: C++ -->
						<div class="form-group{{ $errors->has('c-plus') ? ' has-error' : '' }}">
                            <label for="c-plus" class="col-md-4 control-label">C++</label>

                            <div class="col-md-1">
                                <input id="c-plus" type="checkbox" class="form-control" name="c-plus" value="{{ old('c-plus') }}" autofocus>
							
                                @if ($errors->has('c-plus'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c-plus') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
                        <!-- Skill: PHP -->
						<div class="form-group{{ $errors->has('php') ? ' has-error' : '' }}">
                            <label for="php" class="col-md-4 control-label">PHP</label>

                            <div class="col-md-1">
                                <input id="php" type="checkbox" class="form-control" name="php" value="{{ old('php') }}" autofocus>
							
                                @if ($errors->has('php'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('php') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
                        <!-- Skill: HTML -->
						<div class="form-group{{ $errors->has('html') ? ' has-error' : '' }}">
                            <label for="html" class="col-md-4 control-label">HTML</label>

                            <div class="col-md-1">
                                <input id="html" type="checkbox" class="form-control" name="html" value="{{ old('html') }}" autofocus>
							
                                @if ($errors->has('html'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('html') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
                        <!-- Skill: CSS -->
						<div class="form-group{{ $errors->has('css') ? ' has-error' : '' }}">
                            <label for="css" class="col-md-4 control-label">CSS</label>

                            <div class="col-md-1">
                                <input id="css" type="checkbox" class="form-control" name="css" value="{{ old('css') }}" autofocus>
							
                                @if ($errors->has('css'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('css') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
                        <!-- Skill: JavaScript -->
						<div class="form-group{{ $errors->has('javascript') ? ' has-error' : '' }}">
                            <label for="javascript" class="col-md-4 control-label">JavaScript</label>

                            <div class="col-md-1">
                                <input id="javascript" type="checkbox" class="form-control" name="javascript" value="{{ old('javascript') }}" autofocus>
							
                                @if ($errors->has('javascript'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('javascript') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>

                        <!-- Skill: SQL -->							
						<div class="form-group{{ $errors->has('sql') ? ' has-error' : '' }}">
                            <label for="sql" class="col-md-4 control-label">SQL</label>

                            <div class="col-md-1">
                                <input id="sql" type="checkbox" class="form-control" name="sql" value="{{ old('sql') }}" autofocus>
							
                                @if ($errors->has('sql'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sql') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
                        <!-- Skill: Unix -->
						<div class="form-group{{ $errors->has('unix') ? ' has-error' : '' }}">
                            <label for="unix" class="col-md-4 control-label">Unix</label>

                            <div class="col-md-1">
                                <input id="unix" type="checkbox" class="form-control" name="unix" value="{{ old('unix') }}" autofocus>
							
                                @if ($errors->has('unix'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('unix') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
					   
                        <!-- Skill: Windows Server -->
						<div class="form-group{{ $errors->has('win-server') ? ' has-error' : '' }}">
                            <label for="win-server" class="col-md-4 control-label">Windows Server</label>

                            <div class="col-md-1">
                                <input id="win-server" type="checkbox" class="form-control" name="win-server" value="{{ old('win-server') }}" autofocus>
							
                                @if ($errors->has('win-server'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('win-server') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
                        <!-- Skill: Windows Desktop -->
						<div class="form-group{{ $errors->has('win-desktop') ? ' has-error' : '' }}">
                            <label for="win-desktop" class="col-md-4 control-label">Windows Desktop</label>

                            <div class="col-md-1">
                                <input id="win-desktop" type="checkbox" class="form-control" name="win-desktop" value="{{ old('win-desktop') }}" autofocus>
							
                                @if ($errors->has('win-desktop'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('win-desktop') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
                        <!-- Skill: Linux Desktop -->
						<div class="form-group{{ $errors->has('linux-desktop') ? ' has-error' : '' }}">
                            <label for="linux-desktop" class="col-md-4 control-label">Linux Desktop</label>

                            <div class="col-md-1">
                                <input id="linux-desktop" type="checkbox" class="form-control" name="linux-desktop" value="{{ old('linux-desktop') }}" autofocus>
							
                                @if ($errors->has('linus-desktop'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('linux-desktop') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
                        <!-- Skill: MacOS Desktop -->
						<div class="form-group{{ $errors->has('macos-desktop') ? ' has-error' : '' }}">
                            <label for="macos-desktop" class="col-md-4 control-label">MacOS Desktop</label>

                            <div class="col-md-1">
                                <input id="macos-desktop" type="checkbox" class="form-control" name="macos-desktop" value="{{ old('macos-desktop') }}" autofocus>
							
                                @if ($errors->has('macos-desktop'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('macos-desktop') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
                        <!-- Skill: Pearl -->
						<div class="form-group{{ $errors->has('pearl') ? ' has-error' : '' }}">
                            <label for="pearl" class="col-md-4 control-label">Pearl</label>

                            <div class="col-md-1">
                                <input id="pearl" type="checkbox" class="form-control" name="pearl" value="{{ old('pearl') }}" autofocus>
							
                                @if ($errors->has('pearl'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pearl') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
                        <!-- Skill: Bash -->
						<div class="form-group{{ $errors->has('bash') ? ' has-error' : '' }}">
                            <label for="bash" class="col-md-4 control-label">Bash</label>

                            <div class="col-md-1">
                                <input id="bash" type="checkbox" class="form-control" name="bash" value="{{ old('bash') }}" autofocus>
							
                                @if ($errors->has('bash'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bash') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>

                        <!-- Skill: Batch -->
						<div class="form-group{{ $errors->has('batch') ? ' has-error' : '' }}">
                            <label for="batch" class="col-md-4 control-label">Batch</label>

                            <div class="col-md-1">
                                <input id="batch" type="checkbox" class="form-control" name="batch" value="{{ old('batch') }}" autofocus>
							
                                @if ($errors->has('batch'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('batch') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
                        <!-- Skill: Cisco Networking -->
						<div class="form-group{{ $errors->has('cisco') ? ' has-error' : '' }}">
                            <label for="cisco" class="col-md-4 control-label">Cisco Networking</label>

                            <div class="col-md-1">
                                <input id="cisco" type="checkbox" class="form-control" name="cisco" value="{{ old('cisco') }}" autofocus>
							
                                @if ($errors->has('cisco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cisco') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
                        <!-- Skill: Microsoft Office -->
						<div class="form-group{{ $errors->has('microsoft-office') ? ' has-error' : '' }}">
                            <label for="microsoft-office" class="col-md-4 control-label">Microsoft Office</label>

                            <div class="col-md-1">
                                <input id="microsoft-office" type="checkbox" class="form-control" name="microsoft-office" value="{{ old('microsoft-office') }}" autofocus>
							
                                @if ($errors->has('microsoft-office'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('microsoft-office') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
                        <!-- Skill: R -->
						<div class="form-group{{ $errors->has('r') ? ' has-error' : '' }}">
                            <label for="r" class="col-md-4 control-label">R</label>

                            <div class="col-md-1">
                                <input id="r" type="checkbox" class="form-control" name="r" value="{{ old('r') }}" autofocus>
							
                                @if ($errors->has('r'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
                        <!-- Skill: Go -->
						<div class="form-group{{ $errors->has('go') ? ' has-error' : '' }}">
                            <label for="go" class="col-md-4 control-label">Go</label>

                            <div class="col-md-1">
                                <input id="go" type="checkbox" class="form-control" name="go" value="{{ old('go') }}" autofocus>
							
                                @if ($errors->has('go'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('go') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
                        <!-- Skill: Ruby -->
						<div class="form-group{{ $errors->has('ruby') ? ' has-error' : '' }}">
                            <label for="ruby" class="col-md-4 control-label">Ruby</label>

                            <div class="col-md-1">
                                <input id="ruby" type="checkbox" class="form-control" name="ruby" value="{{ old('ruby') }}" autofocus>
							
                                @if ($errors->has('ruby'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ruby') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
                        <!-- Skill: ASP.NET -->
						<div class="form-group{{ $errors->has('asp') ? ' has-error' : '' }}">
                            <label for="asp" class="col-md-4 control-label">ASP.NET</label>

                            <div class="col-md-1">
                                <input id="asp" type="checkbox" class="form-control" name="asp" value="{{ old('asp') }}" autofocus>
							
                                @if ($errors->has('asp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asp') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
                        <!-- Skill: Scala -->
						<div class="form-group{{ $errors->has('scala') ? ' has-error' : '' }}">
                            <label for="scala" class="col-md-4 control-label">Scala</label>

                            <div class="col-md-1">
                                <input id="scala" type="checkbox" class="form-control" name="scala" value="{{ old('scala') }}" autofocus>
							
                                @if ($errors->has('scala'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('scala') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>

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
