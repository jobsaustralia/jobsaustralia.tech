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
                                <a href="javascript:void(0)" id="autofill-btn" class="btn btn-primary">
                                    Autofill skills from GitHub
                                </a>
                            </p>
                        </div>

                        <!-- Skill: Java -->
                        <div class="form-group{{ $errors->has('java') ? ' has-error' : '' }}">
                            <label for="java" class="col-md-4 control-label">Java</label>

                            <div class="col-md-1">
                                <input id="java" type="checkbox" class="form-control" name="java" value="1" autofocus {{ old('java', Auth::user()->java) == '1' ? 'checked="checked"' : '' }}>

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
                                  <input id="python" type="checkbox" class="form-control" name="python" value="1" autofocus {{ old('python', Auth::user()->python) == '1' ? 'checked="checked"' : '' }}>

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
                                <input id="c" type="checkbox" class="form-control" name="c" value="1" autofocus {{ old('c', Auth::user()->c) == '1' ? 'checked="checked"' : '' }}>

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
                                <input id="csharp" type="checkbox" class="form-control" name="csharp" value="1" autofocus {{ old('csharp', Auth::user()->csharp) == '1' ? 'checked="checked"' : '' }}>

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
                                <input id="cplus" type="checkbox" class="form-control" name="cplus" value="1" autofocus {{ old('cplus', Auth::user()->cplus) == '1' ? 'checked="checked"' : '' }}>

                                @if ($errors->has('cplus'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cplus') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: PHP -->
                        <div class="form-group{{ $errors->has('php') ? ' has-error' : '' }}">
                            <label for="php" class="col-md-4 control-label">PHP</label>

                            <div class="col-md-1">
                          <input id="php" type="checkbox" class="form-control" name="php" value="1" autofocus {{ old('php', Auth::user()->php) == '1' ? 'checked="checked"' : '' }}>

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
                                <input id="html" type="checkbox" class="form-control" name="html" value="1" autofocus {{ old('html', Auth::user()->html) == '1' ? 'checked="checked"' : '' }}>

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
                              <input id="css" type="checkbox" class="form-control" name="css" value="1" autofocus {{ old('css', Auth::user()->css) == '1' ? 'checked="checked"' : '' }}>

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
                                <input id="javascript" type="checkbox" class="form-control" name="javascript" value="1" autofocus {{ old('javascript', Auth::user()->javascript) == '1' ? 'checked="checked"' : '' }}>

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
                                <input id="sql" type="checkbox" class="form-control" name="sql" value="1" autofocus {{ old('sql', Auth::user()->sql) == '1' ? 'checked="checked"' : '' }}>

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
                                <input id="unix" type="checkbox" class="form-control" name="unix" value="1" autofocus {{ old('unix', Auth::user()->unix) == '1' ? 'checked="checked"' : '' }}>

                                @if ($errors->has('unix'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('unix') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Windows Server -->
                        <div class="form-group{{ $errors->has('winserver') ? ' has-error' : '' }}">
                            <label for="winserver" class="col-md-4 control-label">Windows Server</label>

                            <div class="col-md-1">
                                <input id="winserver" type="checkbox" class="form-control" name="winserver" value="1" autofocus {{ old('winserver', Auth::user()->winserver) == '1' ? 'checked="checked"' : '' }}>

                                @if ($errors->has('winserver'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('winserver') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Windows Desktop -->
                        <div class="form-group{{ $errors->has('windesktop') ? ' has-error' : '' }}">
                            <label for="windesktop" class="col-md-4 control-label">Windows Desktop</label>

                            <div class="col-md-1">
                                <input id="windesktop" type="checkbox" class="form-control" name="windesktop" value="1" autofocus {{ old('windesktop', Auth::user()->windesktop) == '1' ? 'checked="checked"' : '' }}>

                                @if ($errors->has('windesktop'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('windesktop') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Linux Desktop -->
                        <div class="form-group{{ $errors->has('linuxdesktop') ? ' has-error' : '' }}">
                            <label for="linuxdesktop" class="col-md-4 control-label">Linux Desktop</label>

                            <div class="col-md-1">
                                <input id="linuxdesktop" type="checkbox" class="form-control" name="linuxdesktop" value="1" autofocus {{ old('linuxdesktop', Auth::user()->linuxdesktop) == '1' ? 'checked="checked"' : '' }}>

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
                                <input id="macosdesktop" type="checkbox" class="form-control" name="macosdesktop" value="1" autofocus {{ old('macosdesktop', Auth::user()->macosdesktop) == '1' ? 'checked="checked"' : '' }}>

                                @if ($errors->has('macosdesktop'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('macosdesktop') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Pearl -->
                        <div class="form-group{{ $errors->has('pearl') ? ' has-error' : '' }}">
                            <label for="pearl" class="col-md-4 control-label">Pearl</label>

                            <div class="col-md-1">
                                <input id="pearl" type="checkbox" class="form-control" name="pearl" value="1" autofocus {{ old('pearl', Auth::user()->pearl) == '1' ? 'checked="checked"' : '' }}>

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
                                <input id="bash" type="checkbox" class="form-control" name="bash" value="1" autofocus {{ old('bash', Auth::user()->bash) == '1' ? 'checked="checked"' : '' }}>

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
                                <input id="batch" type="checkbox" class="form-control" name="batch" value="1" autofocus {{ old('batch', Auth::user()->batch) == '1' ? 'checked="checked"' : '' }}>

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
                              <input id="cisco" type="checkbox" class="form-control" name="cisco" value="1" autofocus {{ old('cisco', Auth::user()->cisco) == '1' ? 'checked="checked"' : '' }}>

                                @if ($errors->has('cisco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cisco') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: Microsoft Office -->
                        <div class="form-group{{ $errors->has('office') ? ' has-error' : '' }}">
                            <label for="office" class="col-md-4 control-label">Microsoft Office</label>

                            <div class="col-md-1">
                                <input id="office" type="checkbox" class="form-control" name="office" value="1" autofocus {{ old('office', Auth::user()->office) == '1' ? 'checked="checked"' : '' }}>

                                @if ($errors->has('office'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('office') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Skill: R -->
                        <div class="form-group{{ $errors->has('r') ? ' has-error' : '' }}">
                            <label for="r" class="col-md-4 control-label">R</label>

                            <div class="col-md-1">
                              <input id="r" type="checkbox" class="form-control" name="r" value="1" autofocus {{ old('r', Auth::user()->r) == '1' ? 'checked="checked"' : '' }}>

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
                              <input id="go" type="checkbox" class="form-control" name="go" value="1" autofocus {{ old('go', Auth::user()->go) == '1' ? 'checked="checked"' : '' }}>

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
                              <input id="ruby" type="checkbox" class="form-control" name="ruby" value="1" autofocus {{ old('ruby', Auth::user()->ruby) == '1' ? 'checked="checked"' : '' }}>

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
                              <input id="asp" type="checkbox" class="form-control" name="asp" value="1" autofocus {{ old('asp', Auth::user()->asp) == '1' ? 'checked="checked"' : '' }}>

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
                              <input id="scala" type="checkbox" class="form-control" name="scala" value="1" autofocus {{ old('scala', Auth::user()->scala) == '1' ? 'checked="checked"' : '' }}>
                                @if ($errors->has('scala'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('scala') }}</strong>
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
        </div>
    </div>
</div>
@endsection
