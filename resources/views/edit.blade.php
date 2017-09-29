@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div id="edit-profile" class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Your Profile</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('updateProfile') }}">
                        {{ csrf_field() }}

                        <!-- Name -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" pattern="[a-zA-Z ]+" value="{{ Auth::user()->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <!-- Education Level -->
                        <div class="form-group{{ $errors->has('education') ? ' has-error' : '' }}">
                            <label for="education" class="col-md-4 control-label">Education Level</label>

                            <div class="col-md-6">
                                <select id="education" name="education" class="form-control" value="{{ old('education') }}" required>
                                    <option disabled selected value>Please select an option</option>
                                    <option value="0" @if (Auth::user()->education == "0") selected @endif >TAFE</option>
                                    <option value="1" @if (Auth::user()->education == "1") selected @endif >Diploma</option>
                                    <option value="2" @if (Auth::user()->education == "2") selected @endif >Associate degree</option>
                                    <option value="3" @if (Auth::user()->education == "3") selected @endif >Bachelor degree</option>
                                    <option value="4" @if (Auth::user()->education == "4") selected @endif >Masters degree</option>
                                    <option value="5" @if (Auth::user()->education == "5") selected @endif >PhD</option>
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
                                <input id="title" type="text" class="form-control" name="title" pattern="[a-zA-Z ]+" value="{{ Auth::user()->title }}" required autofocus>

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
                                <input id="sector" type="text" class="form-control" name="sector" pattern="[a-zA-Z ]+" value="{{ Auth::user()->sector }}" required autofocus>

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
                                <input id="experience" type="number" min="0" max="100" class="form-control" name="experience" value="{{ Auth::user()->experience }}" required autofocus>

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
                                    <option disabled value>Please select an option</option>
                                    <option value="vic" @if (Auth::user()->state == "vic") selected @endif >Victoria</option>
                                    <option value="nsw" @if (Auth::user()->state == "nsw") selected @endif >New South Wales</option>
                                    <option value="qld" @if (Auth::user()->state == "qld") selected @endif >Queensland</option>
                                    <option value="wa" @if (Auth::user()->state == "wa") selected @endif >Western Australia</option>
                                    <option value="sa" @if (Auth::user()->state == "sa") selected @endif >South Australia</option>
                                    <option value="tas" @if (Auth::user()->state == "tas") selected @endif >Tasmania</option>
                                    <option value="act" @if (Auth::user()->state == "act") selected @endif >Australian Capital Territory</option>
                                    <option value="nt" @if (Auth::user()->state == "nt") selected @endif >Northern Teritory</option>
                                    <option value="oth" @if (Auth::user()->state == "oth") selected @endif >Other Australian Region</option>
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
                            <label for="city" class="col-md-4 control-label">Location</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" pattern="[a-zA-Z ]+" value="{{ Auth::user()->city }}" required autofocus>

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
                                <input id="github" type="text" class="form-control" name="github" pattern="[a-zA-Z0-9\- ]+" value="{{ Auth::user()->github }}" placeholder="Optional">

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

                        <!-- Skill: ActionScript -->
                        <div class="form-group{{ $errors->has('actionscript') ? ' has-error' : '' }}">
                            <label for="actionscript" class="col-md-4 control-label">ActionScript</label>

                            <div class="col-md-1">
                                <input id="actionscript-hidden" type="hidden" class="form-control" name="actionscript" value="0">
                                <input id="actionscript" type="checkbox" class="form-control" name="actionscript" value="{{ old('actionscript', 1) }}" @if (Auth::user()->actionscript) checked @endif >

                                @if ($errors->has('actionscript'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('actionscript') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Assembly -->
                        <div class="form-group{{ $errors->has('assembly') ? ' has-error' : '' }}">
                            <label for="assembly" class="col-md-4 control-label">Assembly</label>

                            <div class="col-md-1">
                                <input id="assembly-hidden" type="hidden" class="form-control" name="assembly" value="0">
                                <input id="assembly" type="checkbox" class="form-control" name="assembly" value="{{ old('assembly', 1) }}" @if (Auth::user()->assembly) checked @endif >

                                @if ($errors->has('assembly'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('assembly') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Auto HotKey -->
                        <div class="form-group{{ $errors->has('autohotkey') ? ' has-error' : '' }}">
                            <label for="autohotkey" class="col-md-4 control-label">Auto HotKey</label>

                            <div class="col-md-1">
                                <input id="autohotkey-hidden" type="hidden" class="form-control" name="autohotkey" value="0">
                                <input id="autohotkey" type="checkbox" class="form-control" name="autohotkey" value="{{ old('autohotkey', 1) }}" @if (Auth::user()->autohotkey) checked @endif >

                                @if ($errors->has('autohotkey'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('autohotkey') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <!-- Skill: ASP.NET -->
                        <div class="form-group{{ $errors->has('asp') ? ' has-error' : '' }}">
                            <label for="asp" class="col-md-4 control-label">ASP.NET</label>

                            <div class="col-md-1">
                                <input id="asp-hidden" type="hidden" class="form-control" name="asp" value="0">
                                <input id="asp" type="checkbox" class="form-control" name="asp" value="{{ old('asp', 1) }}" @if (Auth::user()->asp) checked @endif >

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
                                <input id="batch" type="checkbox" class="form-control" name="batch" value="{{ old('batch', 1) }}" @if (Auth::user()->batch) checked @endif >

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
                                <input id="bash" type="checkbox" class="form-control" name="bash" value="{{ old('bash', 1) }}" @if (Auth::user()->bash) checked @endif >

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
                                <input id="c" type="checkbox" class="form-control" name="c" value="{{ old('c', 1) }}" @if (Auth::user()->c) checked @endif >

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
                                <input id="csharp" type="checkbox" class="form-control" name="csharp" value="{{ old('csharp', 1) }}" @if (Auth::user()->csharp) checked @endif >

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
                                <input id="cplus" type="checkbox" class="form-control" name="cplus" value="{{ old('cplus', 1) }}" @if (Auth::user()->cplus) checked @endif >

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
                                <input id="cow" type="checkbox" class="form-control" name="cow" value="{{ old('cow', 1) }}" @if (Auth::user()->cow) checked @endif >
                            
                                @if ($errors->has('cow'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cow') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Coffee Script -->
                        <div class="form-group{{ $errors->has('coffeescript') ? ' has-error' : '' }}">
                            <label for="coffeescript" class="col-md-4 control-label">Coffee Script</label>

                            <div class="col-md-1">
                                <input id="coffeescript-hidden" type="hidden" class="form-control" name="coffeescript" value="0">
                                <input id="coffeescript" type="checkbox" class="form-control" name="coffeescript" value="{{ old('coffeescript', 1) }}" @if (Auth::user()->coffeescript) checked @endif >
                            
                                @if ($errors->has('coffeescript'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coffeescript') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <!-- Skill: CSS -->
                        <div class="form-group{{ $errors->has('css') ? ' has-error' : '' }}">
                            <label for="css" class="col-md-4 control-label">CSS</label>

                            <div class="col-md-1">
                                <input id="css-hidden" type="hidden" class="form-control" name="css" value="0">
                                <input id="css" type="checkbox" class="form-control" name="css" value="{{ old('css', 1) }}" @if (Auth::user()->css) checked @endif >

                                @if ($errors->has('css'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('css') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: D -->
                        <div class="form-group{{ $errors->has('d') ? ' has-error' : '' }}">
                            <label for="d" class="col-md-4 control-label">D</label>

                            <div class="col-md-1">
                                <input id="d-hidden" type="hidden" class="form-control" name="d" value="0">
                                <input id="d" type="checkbox" class="form-control" name="d" value="{{ old('d', 1) }}" @if (Auth::user()->d) checked @endif >
                            
                                @if ($errors->has('d'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('d') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: F# -->
                        <div class="form-group{{ $errors->has('fsharp') ? ' has-error' : '' }}">
                            <label for="fsharp" class="col-md-4 control-label">F#</label>

                            <div class="col-md-1">
                                <input id="fsharp-hidden" type="hidden" class="form-control" name="fsharp" value="0">
                                <input id="fsharp" type="checkbox" class="form-control" name="fsharp" value="{{ old('f#', 1) }}" @if (Auth::user()->fsharp) checked @endif >
                            
                                @if ($errors->has('fsharp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fsharp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Go -->
                        <div class="form-group{{ $errors->has('go') ? ' has-error' : '' }}">
                            <label for="go" class="col-md-4 control-label">Go</label>

                            <div class="col-md-1">
                                <input id="go-hidden" type="hidden" class="form-control" name="go" value="0">
                                <input id="go" type="checkbox" class="form-control" name="go" value="{{ old('go', 1) }}" @if (Auth::user()->go) checked @endif >

                                @if ($errors->has('go'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('go') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Haskell -->
                        <div class="form-group{{ $errors->has('haskell') ? ' has-error' : '' }}">
                            <label for="haskell" class="col-md-4 control-label">Haskell</label>

                            <div class="col-md-1">
                                <input id="haskell-hidden" type="hidden" class="form-control" name="haskell" value="0">
                                <input id="haskell" type="checkbox" class="form-control" name="haskell" value="{{ old('haskell', 1) }}" @if (Auth::user()->haskell) checked @endif >
                            
                                @if ($errors->has('haskell'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('haskell') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: HTML -->
                        <div class="form-group{{ $errors->has('html') ? ' has-error' : '' }}">
                            <input id="html-hidden" type="hidden" class="form-control" name="html" value="0">
                            <label for="html" class="col-md-4 control-label">HTML</label>

                            <div class="col-md-1">
                                <input id="html" type="checkbox" class="form-control" name="html" value="{{ old('html', 1) }}" @if (Auth::user()->html) checked @endif >

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
                                <input id="java" type="checkbox" class="form-control" name="java" value="{{ old('java', 1) }}" @if (Auth::user()->java) checked @endif >

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
                                <input id="javascript" type="checkbox" class="form-control" name="javascript" value="{{ old('javascript', 1) }}" @if (Auth::user()->javascript) checked @endif >

                                @if ($errors->has('javascript'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('javascript') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Matlab -->
                        <div class="form-group{{ $errors->has('matlab') ? ' has-error' : '' }}">
                            <label for="matlab" class="col-md-4 control-label">Matlab</label>

                            <div class="col-md-1">
                                <input id="matlab-hidden" type="hidden" class="form-control" name="matlab" value="0">
                                <input id="matlab" type="checkbox" class="form-control" name="matlab" value="{{ old('matlab', 1) }}" @if (Auth::user()->matlab) checked @endif >
                            
                                @if ($errors->has('matlab'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('matlab') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Objective-C -->
                        <div class="form-group{{ $errors->has('objectivec') ? ' has-error' : '' }}">
                            <label for="objectivec" class="col-md-4 control-label">Objective-C</label>

                            <div class="col-md-1">
                                <input id="objectivec-hidden" type="hidden" class="form-control" name="objectivec" value="0">
                                <input id="objectivec" type="checkbox" class="form-control" name="objectivec" value="{{ old('objectivec', 1) }}" @if (Auth::user()->objectivec) checked @endif >
                            
                                @if ($errors->has('objectivec'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('objectivec') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Objective-C++ -->
                        <div class="form-group{{ $errors->has('objectivecplus') ? ' has-error' : '' }}">
                            <label for="objectivecplus" class="col-md-4 control-label">Objective-C++</label>

                            <div class="col-md-1">
                                <input id="objectivecplus-hidden" type="hidden" class="form-control" name="objectivecplus" value="0">
                                <input id="objectivecplus" type="checkbox" class="form-control" name="objectivecplus" value="{{ old('objectivecplus', 1) }}" @if (Auth::user()->objectivecplus) checked @endif >
                            
                                @if ($errors->has('objectivecplus'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('objectivecplus') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Pascal -->
                        <div class="form-group{{ $errors->has('pascal') ? ' has-error' : '' }}">
                            <label for="pascal" class="col-md-4 control-label">Pascal</label>

                            <div class="col-md-1">
                                <input id="pascal-hidden" type="hidden" class="form-control" name="pascal" value="0">
                                <input id="pascal" type="checkbox" class="form-control" name="pascal" value="{{ old('pascal', 1) }}" @if (Auth::user()->pascal) checked @endif >
                            
                                @if ($errors->has('pascal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pascal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Perl -->
                        <div class="form-group{{ $errors->has('perl') ? ' has-error' : '' }}">
                            <label for="perl" class="col-md-4 control-label">Perl</label>

                            <div class="col-md-1">
                                <input id="perl-hidden" type="hidden" class="form-control" name="perl" value="0">
                                <input id="perl" type="checkbox" class="form-control" name="perl" value="{{ old('perl', 1) }}" @if (Auth::user()->perl) checked @endif >

                                @if ($errors->has('perl'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('perl') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: PowerShell -->
                        <div class="form-group{{ $errors->has('powershell') ? ' has-error' : '' }}">
                            <label for="powershell" class="col-md-4 control-label">PowerShell</label>

                            <div class="col-md-1">
                                <input id="powershell-hidden" type="hidden" class="form-control" name="powershell" value="0">
                                <input id="powershell" type="checkbox" class="form-control" name="powershell" value="{{ old('powershell', 1) }}" @if (Auth::user()->powershell) checked @endif >
                            
                                @if ($errors->has('powershell'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('powershell') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: PHP -->
                        <div class="form-group{{ $errors->has('php') ? ' has-error' : '' }}">
                            <label for="php" class="col-md-4 control-label">PHP</label>

                            <div class="col-md-1">
                                <input id="php-hidden" type="hidden" class="form-control" name="php" value="0">
                                <input id="php" type="checkbox" class="form-control" name="php" value="{{ old('php', 1) }}" @if (Auth::user()->php) checked @endif >

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
                                <input id="python" type="checkbox" class="form-control" name="python" value="{{ old('python', 1) }}" @if (Auth::user()->python) checked @endif >

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
                                <input id="r" type="checkbox" class="form-control" name="r" value="{{ old('r', 1) }}" @if (Auth::user()->r) checked @endif >

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
                                <input id="ruby" type="checkbox" class="form-control" name="ruby" value="{{ old('ruby', 1) }}" @if (Auth::user()->ruby) checked @endif >

                                @if ($errors->has('ruby'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ruby') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Rust -->
                        <div class="form-group{{ $errors->has('rust') ? ' has-error' : '' }}">
                            <label for="rust" class="col-md-4 control-label">Rust</label>

                            <div class="col-md-1">
                                <input id="rust-hidden" type="hidden" class="form-control" name="rust" value="0">
                                <input id="rust" type="checkbox" class="form-control" name="rust" value="{{ old('rust', 1) }}" @if (Auth::user()->rust) checked @endif >

                                @if ($errors->has('rust'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rust') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <!-- Skill: Scala -->
                        <div class="form-group{{ $errors->has('scala') ? ' has-error' : '' }}">
                            <label for="scala" class="col-md-4 control-label">Scala</label>

                            <div class="col-md-1">
                                <input id="scala-hidden" type="hidden" class="form-control" name="scala" value="0">
                                <input id="scala" type="checkbox" class="form-control" name="scala" value="{{ old('scala', 1) }}" @if (Auth::user()->scala) checked @endif >

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
                                <input id="sql" type="checkbox" class="form-control" name="sql" value="{{ old('sql', 1) }}" @if (Auth::user()->sql) checked @endif >

                                @if ($errors->has('sql'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sql') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Swift -->
                        <div class="form-group{{ $errors->has('swift') ? ' has-error' : '' }}">
                            <label for="swift" class="col-md-4 control-label">Swift</label>

                            <div class="col-md-1">
                                <input id="swift-hidden" type="hidden" class="form-control" name="swift" value="0">
                                <input id="swift" type="checkbox" class="form-control" name="swift" value="{{ old('swift', 1) }}" @if (Auth::user()->swift) checked @endif >

                                @if ($errors->has('swift'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('swift') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: TypeScript -->
                        <div class="form-group{{ $errors->has('typescript') ? ' has-error' : '' }}">
                            <label for="typescript" class="col-md-4 control-label">TypeScript</label>

                            <div class="col-md-1">
                                <input id="typescript-hidden" type="hidden" class="form-control" name="typescript" value="0">
                                <input id="typescript" type="checkbox" class="form-control" name="typescript" value="{{ old('typescript', 1) }}" @if (Auth::user()->typescript) checked @endif >

                                @if ($errors->has('typescript'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('typescript') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Vue -->
                        <div class="form-group{{ $errors->has('vue') ? ' has-error' : '' }}">
                            <label for="vue" class="col-md-4 control-label">Vue</label>

                            <div class="col-md-1">
                                <input id="vue-hidden" type="hidden" class="form-control" name="vue" value="0">
                                <input id="vue" type="checkbox" class="form-control" name="vue" value="{{ old('ruby', 1) }}" @if (Auth::user()->vue) checked @endif >

                                @if ($errors->has('vue'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vue') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: WebAssembly -->
                        <div class="form-group{{ $errors->has('webassmbly') ? ' has-error' : '' }}">
                            <label for="webassmbly" class="col-md-4 control-label">WebAssembly</label>

                            <div class="col-md-1">
                                <input id="webassmbly-hidden" type="hidden" class="form-control" name="webassmbly" value="0">
                                <input id="webassmbly" type="checkbox" class="form-control" name="webassmbly" value="{{ old('webassmbly-hidden', 1) }}" @if (Auth::user()->webassembly) checked @endif >

                                @if ($errors->has('webassemblh'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('webassembly') }}</strong>
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
                                <input id="linuxdesktop" type="checkbox" class="form-control" name="linuxdesktop" value="{{ old('linuxdesktop', 1) }}" @if (Auth::user()->linuxdesktop) checked @endif >

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
                                <input id="macosdesktop" type="checkbox" class="form-control" name="macosdesktop" value="{{ old('macosdesktop', 1) }}" @if (Auth::user()->macosdesktop) checked @endif >

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
                                <input id="unix" type="checkbox" class="form-control" name="unix" value="{{ old('unix', 1) }}" @if (Auth::user()->unix) checked @endif >

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
                                <input id="windesktop" type="checkbox" class="form-control" name="windesktop" value="{{ old('windesktop', 1) }}" @if (Auth::user()->windesktop) checked @endif >

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
                                <input id="winserver" type="checkbox" class="form-control" name="winserver" value="{{ old('winserver', 1) }}" @if (Auth::user()->winserver) checked @endif >

                                @if ($errors->has('winserver'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('winserver') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr class="skill-divider">

                        <h5 align="center">Networking</h5>

                        <!-- Skill: DNS -->
                        <div class="form-group{{ $errors->has('dns') ? ' has-error' : '' }}">
                            <label for="dns" class="col-md-4 control-label">DNS</label>

                            <div class="col-md-1">
                                <input id="dns-hidden" type="hidden" class="form-control" name="dns" value="0">
                                <input id="dns" type="checkbox" class="form-control" name="dns" value="{{ old('ipv4', 1) }}" @if (Auth::user()->dns) checked @endif >

                                @if ($errors->has('dns'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dns') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Cisco Networking -->
                        <div class="form-group{{ $errors->has('cisco') ? ' has-error' : '' }}">
                            <label for="cisco" class="col-md-4 control-label">Cisco Networking</label>

                            <div class="col-md-1">
                                <input id="cisco-hidden" type="hidden" class="form-control" name="cisco" value="0">
                                <input id="cisco" type="checkbox" class="form-control" name="cisco" value="{{ old('cisco', 1) }}" @if (Auth::user()->cisco) checked @endif >

                                @if ($errors->has('cisco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cisco') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: General Networking (IPv4) -->
                        <div class="form-group{{ $errors->has('ipv4') ? ' has-error' : '' }}">
                            <label for="ipv4" class="col-md-4 control-label">General Networking (IPv4)</label>

                            <div class="col-md-1">
                                <input id="ipv4-hidden" type="hidden" class="form-control" name="ipv4" value="0">
                                <input id="ipv4" type="checkbox" class="form-control" name="ipv4" value="{{ old('ipv4', 1) }}" @if (Auth::user()->ipv4) checked @endif >

                                @if ($errors->has('ipv4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ipv4') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: General Networking (IPv6) -->
                        <div class="form-group{{ $errors->has('ipv6') ? ' has-error' : '' }}">
                            <label for="ipv6" class="col-md-4 control-label">General Networking (IPv6)</label>

                            <div class="col-md-1">
                                <input id="ipv6-hidden" type="hidden" class="form-control" name="ipv6" value="0">
                                <input id="ipv6" type="checkbox" class="form-control" name="ipv6" value="{{ old('ipv6', 1) }}" @if (Auth::user()->ipv6) checked @endif >

                                @if ($errors->has('ipv6'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ipv6') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <hr class="skill-divider">
                        
                        <h5 align="center">Software</h5>

                        <!-- Skill: Apache -->
                        <div class="form-group{{ $errors->has('apache') ? ' has-error' : '' }}">
                            <label for="apache" class="col-md-4 control-label">Apache</label>

                            <div class="col-md-1">
                                <input id="apache-hidden" type="hidden" class="form-control" name="apache" value="0">
                                <input id="apache" type="checkbox" class="form-control" name="apache" value="{{ old('apache', 1) }}" @if (Auth::user()->apache) checked @endif >

                                @if ($errors->has('apache'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apache') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: AWS -->
                        <div class="form-group{{ $errors->has('aws') ? ' has-error' : '' }}">
                            <label for="aws" class="col-md-4 control-label">AWS</label>

                            <div class="col-md-1">
                                <input id="aws-hidden" type="hidden" class="form-control" name="aws" value="0">
                                <input id="aws" type="checkbox" class="form-control" name="aws" value="{{ old('aws', 1) }}" @if (Auth::user()->aws) checked @endif >

                                @if ($errors->has('aws'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('aws') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Docker -->
                        <div class="form-group{{ $errors->has('docker') ? ' has-error' : '' }}">
                            <label for="docker" class="col-md-4 control-label">Docker</label>

                            <div class="col-md-1">
                                <input id="docker-hidden" type="hidden" class="form-control" name="docker" value="0">
                                <input id="docker" type="checkbox" class="form-control" name="docker" value="{{ old('apache', 1) }}" @if (Auth::user()->docker) checked @endif >

                                @if ($errors->has('docker'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('docker') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Nginx -->
                        <div class="form-group{{ $errors->has('nginx') ? ' has-error' : '' }}">
                            <label for="nginx" class="col-md-4 control-label">Nginx</label>

                            <div class="col-md-1">
                                <input id="nginx-hidden" type="hidden" class="form-control" name="nginx" value="0">
                                <input id="nginx" type="checkbox" class="form-control" name="nginx" value="{{ old('nginx', 1) }}" @if (Auth::user()->nginx) checked @endif >

                                @if ($errors->has('nginx'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nginx') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: SaaS -->
                        <div class="form-group{{ $errors->has('saas') ? ' has-error' : '' }}">
                            <label for="saas" class="col-md-4 control-label">SaaS</label>

                            <div class="col-md-1">
                                <input id="saas-hidden" type="hidden" class="form-control" name="saas" value="0">
                                <input id="saas" type="checkbox" class="form-control" name="saas" value="{{ old('saas', 1) }}" @if (Auth::user()->saas) checked @endif >

                                @if ($errors->has('saas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('saas') }}</strong>
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
                                <input id="office" type="checkbox" class="form-control" name="office" value="{{ old('office', 1) }}" @if (Auth::user()->office) checked @endif >

                                @if ($errors->has('office'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('office') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr>

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
        </div>
    </div>
</div>
@endsection
