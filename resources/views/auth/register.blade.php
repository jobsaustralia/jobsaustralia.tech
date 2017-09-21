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
                                <a href="javascript:void(0)" id="autofill-btn" class="btn btn-primary">
                                    Autofill skills from GitHub
                                </a>
                            </p>

                            <p id="github-error-generic" class="text-danger" style="display: none" align="center">Please check your GitHub username.</p>

                            <p id="github-error-username" class="text-danger" style="display: none" align="center">Please enter your GitHub username.</p>
                        </div>

                        <hr class="skill-divider">

                        <h5 align="center">Languages</h5>

                        <!-- Skill: ASP.NET -->
                        <div class="form-group{{ $errors->has('asp') ? ' has-error' : '' }}">
                            <label for="asp" class="col-md-4 control-label">ASP.NET</label>

                            <div class="col-md-1">
                                <input id="asp-hidden" type="hidden" class="form-control" name="asp" value="0">
                                <input id="asp" type="checkbox" class="form-control" name="asp" value="{{ old('asp', 1) }}">
                            
                                @if ($errors->has('asp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Batch -->
                        <div class="form-group{{ $errors->has('batch') ? ' has-error' : '' }}">
                            <label for="batch" class="col-md-4 control-label">Batch</label>

                            <div class="col-md-1">
                                <input id="batch-hidden" type="hidden" class="form-control" name="batch" value="0">
                                <input id="batch" type="checkbox" class="form-control" name="batch" value="{{ old('batch', 1) }}">
                            
                                @if ($errors->has('batch'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('batch') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Bash -->
                        <div class="form-group{{ $errors->has('bash') ? ' has-error' : '' }}">
                            <label for="bash" class="col-md-4 control-label">Bash</label>

                            <div class="col-md-1">
                                <input id="bash-hidden" type="hidden" class="form-control" name="bash" value="0">
                                <input id="bash" type="checkbox" class="form-control" name="bash" value="{{ old('bash', 1) }}">
                            
                                @if ($errors->has('bash'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bash') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: C -->
                        <div class="form-group{{ $errors->has('c') ? ' has-error' : '' }}">
                            <label for="c" class="col-md-4 control-label">C</label>

                            <div class="col-md-1">
                                <input id="c-hidden" type="hidden" class="form-control" name="c" value="0">
                                <input id="c" type="checkbox" class="form-control" name="c" value="{{ old('c', 1) }}">
                            
                                @if ($errors->has('c'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: C# -->
                        <div class="form-group{{ $errors->has('csharp') ? ' has-error' : '' }}">
                            <label for="csharp" class="col-md-4 control-label">C#</label>

                            <div class="col-md-1">
                                <input id="csharp-hidden" type="hidden" class="form-control" name="csharp" value="0">
                                <input id="csharp" type="checkbox" class="form-control" name="csharp" value="{{ old('csharp', 1) }}">
                            
                                @if ($errors->has('csharp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('csharp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            
                        <!-- Skill: C++ -->
                        <div class="form-group{{ $errors->has('cplus') ? ' has-error' : '' }}">
                            <label for="cplus" class="col-md-4 control-label">C++</label>

                            <div class="col-md-1">
                                <input id="cplus-hidden" type="hidden" class="form-control" name="cplus" value="0">
                                <input id="cplus" type="checkbox" class="form-control" name="cplus" value="{{ old('cplus', 1) }}">
                            
                                @if ($errors->has('cplus'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cplus') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: COW -->
                        <div class="form-group{{ $errors->has('cow') ? ' has-error' : '' }}">
                            <label for="cow" class="col-md-4 control-label">COW</label>

                            <div class="col-md-1">
                                <input id="cow-hidden" type="hidden" class="form-control" name="cow" value="0">
                                <input id="cow" type="checkbox" class="form-control" name="cow" value="{{ old('cow', 1) }}">
                            
                                @if ($errors->has('cow'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cow') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: CSS -->
                        <div class="form-group{{ $errors->has('css') ? ' has-error' : '' }}">
                            <label for="css" class="col-md-4 control-label">CSS</label>

                            <div class="col-md-1">
                                <input id="css-hidden" type="hidden" class="form-control" name="css" value="0">
                                <input id="css" type="checkbox" class="form-control" name="css" value="{{ old('css', 1) }}">
                            
                                @if ($errors->has('css'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('css') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Go -->
                        <div class="form-group{{ $errors->has('go') ? ' has-error' : '' }}">
                            <label for="go" class="col-md-4 control-label">Go</label>

                            <div class="col-md-1">
                                <input id="go-hidden" type="hidden" class="form-control" name="go" value="0">
                                <input id="go" type="checkbox" class="form-control" name="go" value="{{ old('go', 1) }}">
                            
                                @if ($errors->has('go'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('go') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: HTML -->
                        <div class="form-group{{ $errors->has('html') ? ' has-error' : '' }}">
                            <input id="html-hidden" type="hidden" class="form-control" name="html" value="0">
                            <label for="html" class="col-md-4 control-label">HTML</label>

                            <div class="col-md-1">
                                <input id="html" type="checkbox" class="form-control" name="html" value="{{ old('html', 1) }}">
                            
                                @if ($errors->has('html'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('html') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Java -->
                        <div class="form-group{{ $errors->has('java') ? ' has-error' : '' }}">
                            <label for="java" class="col-md-4 control-label">Java</label>

                            <div class="col-md-1">
                                <input id="java-hidden" type="hidden" class="form-control" name="java" value="0">
                                <input id="java" type="checkbox" class="form-control" name="java" value="{{ old('java', 1) }}">
                            
                                @if ($errors->has('java'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('java') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: JavaScript -->
                        <div class="form-group{{ $errors->has('javascript') ? ' has-error' : '' }}">
                            <label for="javascript" class="col-md-4 control-label">JavaScript</label>

                            <div class="col-md-1">
                                <input id="javascript-hidden" type="hidden" class="form-control" name="javascript" value="0">
                                <input id="javascript" type="checkbox" class="form-control" name="javascript" value="{{ old('javascript', 1) }}">
                            
                                @if ($errors->has('javascript'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('javascript') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Pearl -->
                        <div class="form-group{{ $errors->has('pearl') ? ' has-error' : '' }}">
                            <label for="pearl" class="col-md-4 control-label">Pearl</label>

                            <div class="col-md-1">
                                <input id="pearl-hidden" type="hidden" class="form-control" name="pearl" value="0">
                                <input id="pearl" type="checkbox" class="form-control" name="pearl" value="{{ old('pearl', 1) }}">
                            
                                @if ($errors->has('pearl'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pearl') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: PHP -->
                        <div class="form-group{{ $errors->has('php') ? ' has-error' : '' }}">
                            <label for="php" class="col-md-4 control-label">PHP</label>

                            <div class="col-md-1">
                                <input id="php-hidden" type="hidden" class="form-control" name="php" value="0">
                                <input id="php" type="checkbox" class="form-control" name="php" value="{{ old('php', 1) }}">
                            
                                @if ($errors->has('php'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('php') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Python -->
                        <div class="form-group{{ $errors->has('python') ? ' has-error' : '' }}">
                            <label for="python" class="col-md-4 control-label">Python</label>

                            <div class="col-md-1">
                                <input id="python-hidden" type="hidden" class="form-control" name="python" value="0">
                                <input id="python" type="checkbox" class="form-control" name="python" value="{{ old('python', 1) }}">

                                @if ($errors->has('python'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('python') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: R -->
                        <div class="form-group{{ $errors->has('r') ? ' has-error' : '' }}">
                            <label for="r" class="col-md-4 control-label">R</label>

                            <div class="col-md-1">
                                <input id="r-hidden" type="hidden" class="form-control" name="r" value="0">
                                <input id="r" type="checkbox" class="form-control" name="r" value="{{ old('r', 1) }}">
                            
                                @if ($errors->has('r'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        <!-- Skill: Ruby -->
                        <div class="form-group{{ $errors->has('ruby') ? ' has-error' : '' }}">
                            <label for="ruby" class="col-md-4 control-label">Ruby</label>

                            <div class="col-md-1">
                                <input id="ruby-hidden" type="hidden" class="form-control" name="ruby" value="0">
                                <input id="ruby" type="checkbox" class="form-control" name="ruby" value="{{ old('ruby', 1) }}">
                            
                                @if ($errors->has('ruby'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ruby') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Scala -->
                        <div class="form-group{{ $errors->has('scala') ? ' has-error' : '' }}">
                            <label for="scala" class="col-md-4 control-label">Scala</label>

                            <div class="col-md-1">
                                <input id="scala-hidden" type="hidden" class="form-control" name="scala" value="0">
                                <input id="scala" type="checkbox" class="form-control" name="scala" value="{{ old('scala', 1) }}">
                            
                                @if ($errors->has('scala'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('scala') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Skill: SQL -->                         
                        <div class="form-group{{ $errors->has('sql') ? ' has-error' : '' }}">
                            <label for="sql" class="col-md-4 control-label">SQL</label>

                            <div class="col-md-1">
                                <input id="sql-hidden" type="hidden" class="form-control" name="sql" value="0">
                                <input id="sql" type="checkbox" class="form-control" name="sql" value="{{ old('sql', 1) }}">
                            
                                @if ($errors->has('sql'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sql') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr class="skill-divider">

                        <h5 align="center">Operating Systems</h5>

                        <!-- Skill: Linux Desktop -->
                        <div class="form-group{{ $errors->has('linuxdesktop') ? ' has-error' : '' }}">
                            <label for="linuxdesktop" class="col-md-4 control-label">Linux Desktop</label>

                            <div class="col-md-1">
                                <input id="linuxdesktop-hidden" type="hidden" class="form-control" name="linuxdesktop" value="0">
                                <input id="linuxdesktop" type="checkbox" class="form-control" name="linuxdesktop" value="{{ old('linuxdesktop', 1) }}">
                            
                                @if ($errors->has('linuxdesktop'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('linuxdesktop') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: MacOS Desktop -->
                        <div class="form-group{{ $errors->has('macosdesktop') ? ' has-error' : '' }}">
                            <label for="macosdesktop" class="col-md-4 control-label">MacOS Desktop</label>

                            <div class="col-md-1">
                                <input id="macosdesktop-hidden" type="hidden" class="form-control" name="macosdesktop" value="0">
                                <input id="macosdesktop" type="checkbox" class="form-control" name="macosdesktop" value="{{ old('macosdesktop', 1) }}">
                            
                                @if ($errors->has('macosdesktop'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('macosdesktop') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Unix -->
                        <div class="form-group{{ $errors->has('unix') ? ' has-error' : '' }}">
                            <label for="unix" class="col-md-4 control-label">Unix</label>

                            <div class="col-md-1">
                                <input id="unix-hidden" type="hidden" class="form-control" name="unix" value="0">
                                <input id="unix" type="checkbox" class="form-control" name="unix" value="{{ old('unix', 1) }}">
                            
                                @if ($errors->has('unix'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('unix') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Windows Desktop -->
                        <div class="form-group{{ $errors->has('windesktop') ? ' has-error' : '' }}">
                            <label for="windesktop" class="col-md-4 control-label">Windows Desktop</label>

                            <div class="col-md-1">
                                <input id="windesktop-hidden" type="hidden" class="form-control" name="windesktop" value="0">
                                <input id="windesktop" type="checkbox" class="form-control" name="windesktop" value="{{ old('windesktop', 1) }}">
                            
                                @if ($errors->has('windesktop'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('windesktop') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        <!-- Skill: Windows Server -->
                        <div class="form-group{{ $errors->has('winserver') ? ' has-error' : '' }}">
                            <label for="winserver" class="col-md-4 control-label">Windows Server</label>

                            <div class="col-md-1">
                                <input id="winserver-hidden" type="hidden" class="form-control" name="winserver" value="0">
                                <input id="winserver" type="checkbox" class="form-control" name="winserver" value="{{ old('winserver', 1) }}">
                            
                                @if ($errors->has('winserver'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('winserver') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr class="skill-divider">

                        <h5 align="center">Networking</h5>

                        <!-- Skill: Cisco Networking -->
                        <div class="form-group{{ $errors->has('cisco') ? ' has-error' : '' }}">
                            <label for="cisco" class="col-md-4 control-label">Cisco Networking</label>

                            <div class="col-md-1">
                                <input id="cisco-hidden" type="hidden" class="form-control" name="cisco" value="0">
                                <input id="cisco" type="checkbox" class="form-control" name="cisco" value="{{ old('cisco', 1) }}">
                            
                                @if ($errors->has('cisco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cisco') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr class="skill-divider">

                        <h5 align="center">Others</h5>
                        <!-- Skill: Microsoft Office -->
                        <div class="form-group{{ $errors->has('office') ? ' has-error' : '' }}">
                            <label for="office" class="col-md-4 control-label">Microsoft Office</label>

                            <div class="col-md-1">
                                <input id="office-hidden" type="hidden" class="form-control" name="office" value="0">
                                <input id="office" type="checkbox" class="form-control" name="office" value="{{ old('office', 1) }}">
                            
                                @if ($errors->has('office'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('office') }}</strong>
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
