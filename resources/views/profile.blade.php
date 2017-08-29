@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div id="profile" class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }}'s Profile</div>

                <div class="panel-body">
                    <form class="form-horizontal">
                    <p>Name: {{ Auth::user()->name }}</p>
                    <p>Email: {{ Auth::user()->email }}</p>
					          <p>Location: {{ Auth::user()->location }}</p>
                    <p>Sector: {{ Auth::user()->sector }}</p>
                    <p>Job Title: {{ Auth::user()->title }}</p>
                    <p>Experience: {{ Auth::user()->experience }} Year(s)</p>

                    <h4 align="center">Your Selected Skills</h4>
                    <p align="center">These can be changed by clicking the edit profile link.</p>
      <hr>
                    <!-- Selected Skill: Java -->
          <div class="form-group{{ $errors->has('java') ? ' has-error' : '' }}">
                        <label for="java" class="col-md-4 control-label">Java</label>

                        <div class="col-md-1">
                            <input type="checkbox" name="java" value="1" class="form-control" disabled autofocus {{ old('java', Auth::user()->java) == '1' ? 'checked="checked"' : '' }}>

                            @if ($errors->has('java'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('java') }}</strong>
                                </span>
                            @endif
                        </div>
          </div>

                <!-- Selected Skill: Python -->
          <div class="form-group{{ $errors->has('python') ? ' has-error' : '' }}">
                        <label for="python" class="col-md-4 control-label">Python</label>

                        <div class="col-md-1">
                            <input type="checkbox" name="python" value="1" class="form-control" disabled autofocus {{ old('python', Auth::user()->python) == '1' ? 'checked="checked"' : '' }}>

                            @if ($errors->has('python'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('python') }}</strong>
                                </span>
                            @endif
                        </div>
          </div>


                  <!-- Selected Skill: C -->
          <div class="form-group{{ $errors->has('c') ? ' has-error' : '' }}">
                        <label for="c" class="col-md-4 control-label">C</label>

                        <div class="col-md-1">
                            <input type="checkbox" name="c" value="1" class="form-control" disabled autofocus {{ old('c', Auth::user()->c) == '1' ? 'checked="checked"' : '' }}>

                            @if ($errors->has('c'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('c') }}</strong>
                                </span>
                            @endif
                        </div>
          </div>

                    <!-- Selected Skill: CSharp -->
          <div class="form-group{{ $errors->has('csharp') ? ' has-error' : '' }}">
                        <label for="csharp" class="col-md-4 control-label">C#</label>

                        <div class="col-md-1">
                            <input type="checkbox" name="csharp" value="1" class="form-control" disabled autofocus {{ old('csharp', Auth::user()->csharp) == '1' ? 'checked="checked"' : '' }}>

                            @if ($errors->has('csharp'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('csharp') }}</strong>
                                </span>
                            @endif
                        </div>
          </div>

                  <!-- Selected Skill: c++ -->
          <div class="form-group{{ $errors->has('cplus') ? ' has-error' : '' }}">
                        <label for="cplus" class="col-md-4 control-label">C++</label>

                        <div class="col-md-1">
                            <input type="checkbox" name="cplus" value="1" class="form-control" disabled autofocus {{ old('cplus', Auth::user()->cplus) == '1' ? 'checked="checked"' : '' }}>

                            @if ($errors->has('cplus'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cplus') }}</strong>
                                </span>
                            @endif
                        </div>
          </div>

                      <!-- Selected Skill: PHP -->
          <div class="form-group{{ $errors->has('php') ? ' has-error' : '' }}">
                        <label for="php" class="col-md-4 control-label">PHP</label>

                        <div class="col-md-1">
                            <input type="checkbox" name="php" value="1" class="form-control" disabled autofocus {{ old('php', Auth::user()->php) == '1' ? 'checked="checked"' : '' }}>

                            @if ($errors->has('java'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('php') }}</strong>
                                </span>
                            @endif
                        </div>
          </div>


                 <!-- Selected Skill: HTML -->
           <div class="form-group{{ $errors->has('html') ? ' has-error' : '' }}">
                  <label for="html" class="col-md-4 control-label">HTML</label>

                <div class="col-md-1">
                  <input type="checkbox" name="html" value="1" class="form-control" disabled autofocus {{ old('html', Auth::user()->html) == '1' ? 'checked="checked"' : '' }}>

                @if ($errors->has('html'))
                <span class="help-block">
              <strong>{{ $errors->first('html') }}</strong>
               </span>
               @endif
              </div>
       </div>


           <!-- Selected Skill: CSS -->
       <div class="form-group{{ $errors->has('css') ? ' has-error' : '' }}">
           <label for="css" class="col-md-4 control-label">CSS</label>

          <div class="col-md-1">
          <input type="checkbox" name="css" value="1" class="form-control" disabled autofocus {{ old('css', Auth::user()->css) == '1' ? 'checked="checked"' : '' }}>

           @if ($errors->has('css'))
          <span class="help-block">
              <strong>{{ $errors->first('css') }}</strong>
          </span>
          @endif
        </div>
</div>

             <!-- Selected Skill: javascript -->
        <div class="form-group{{ $errors->has('javascript') ? ' has-error' : '' }}">
       <label for="javascript" class="col-md-4 control-label">JavaScript</label>

        <div class="col-md-1">
      <input type="checkbox" name="javascript" value="1" class="form-control" disabled autofocus {{ old('javascript', Auth::user()->javascript) == '1' ? 'checked="checked"' : '' }}>

        @if ($errors->has('javascript'))
          <span class="help-block">
              <strong>{{ $errors->first('javascript') }}</strong>
          </span>
       @endif
     </div>
   </div>

                <!-- Selected Skill: SQL -->
             <div class="form-group{{ $errors->has('sql') ? ' has-error' : '' }}">
         <label for="javascript" class="col-md-4 control-label">SQL</label>

          <div class="col-md-1">
        <input type="checkbox" name="sql" value="1" class="form-control" disabled autofocus {{ old('sql', Auth::user()->javascript) == '1' ? 'checked="checked"' : '' }}>

         @if ($errors->has('sql'))
       <span class="help-block">
       <strong>{{ $errors->first('sql') }}</strong>
      </span>
      @endif
     </div>
     </div>

             <!-- Selected Skill: unix -->
         <div class="form-group{{ $errors->has('unix') ? ' has-error' : '' }}">
      <label for="javascript" class="col-md-4 control-label">UNIX</label>

      <div class="col-md-1">
      <input type="checkbox" name="unix" value="1" class="form-control" disabled autofocus {{ old('unix', Auth::user()->unix) == '1' ? 'checked="checked"' : '' }}>

       @if ($errors->has('unix'))
        <span class="help-block">
      <strong>{{ $errors->first('unix') }}</strong>
       </span>
         @endif
          </div>
           </div>

           <!-- Selected Skill: windows server -->
       <div class="form-group{{ $errors->has('winserver') ? ' has-error' : '' }}">
    <label for="winserver" class="col-md-4 control-label">Windows Server</label>

    <div class="col-md-1">
    <input type="checkbox" name="winserver" value="1" class="form-control" disabled autofocus {{ old('winserver', Auth::user()->winserver) == '1' ? 'checked="checked"' : '' }}>

     @if ($errors->has('winserver'))
      <span class="help-block">
    <strong>{{ $errors->first('winserver') }}</strong>
     </span>
       @endif
        </div>
         </div>

         <!-- Selected Skill: Windows Desktop -->
     <div class="form-group{{ $errors->has('windesktop') ? ' has-error' : '' }}">
  <label for="windesktop" class="col-md-4 control-label">Windows Desktop</label>

  <div class="col-md-1">
  <input type="checkbox" name="windesktop" value="1" class="form-control" disabled autofocus {{ old('windesktop', Auth::user()->windesktop) == '1' ? 'checked="checked"' : '' }}>

   @if ($errors->has('windesktop'))
    <span class="help-block">
  <strong>{{ $errors->first('windesktop') }}</strong>
   </span>
     @endif
      </div>
       </div>

       <!-- Selected Skill: Linux Desktop -->
   <div class="form-group{{ $errors->has('linuxdesktop') ? ' has-error' : '' }}">
<label for="linuxdesktop" class="col-md-4 control-label">Linux Desktop</label>

<div class="col-md-1">
<input type="checkbox" name="linuxdesktop" value="1" class="form-control" disabled autofocus {{ old('linuxdesktop', Auth::user()->linuxdesktop) == '1' ? 'checked="checked"' : '' }}>

 @if ($errors->has('linuxdesktop'))
  <span class="help-block">
<strong>{{ $errors->first('linuxdesktop') }}</strong>
 </span>
   @endif
    </div>
     </div>

     <!-- Selected Skill: Mac OS Desktop -->
 <div class="form-group{{ $errors->has('macosdesktop') ? ' has-error' : '' }}">
<label for="macosdesktop" class="col-md-4 control-label">Mac OS Desktop</label>

<div class="col-md-1">
<input type="checkbox" name="macosdesktop" value="1" class="form-control" disabled autofocus {{ old('macosdesktop', Auth::user()->macosdesktop) == '1' ? 'checked="checked"' : '' }}>

@if ($errors->has('macosdesktop'))
<span class="help-block">
<strong>{{ $errors->first('macosdesktop') }}</strong>
</span>
 @endif
  </div>
   </div>

   <!-- Selected Skill: Pearl -->
<div class="form-group{{ $errors->has('pearl') ? ' has-error' : '' }}">
<label for="pearl" class="col-md-4 control-label">Pearl</label>

<div class="col-md-1">
<input type="checkbox" name="pearl" value="1" class="form-control" disabled autofocus {{ old('macosdesktop', Auth::user()->pearl) == '1' ? 'checked="checked"' : '' }}>

@if ($errors->has('pearl'))
<span class="help-block">
<strong>{{ $errors->first('pearl') }}</strong>
</span>
@endif
</div>
 </div>

 <!-- Selected Skill: Bash -->
<div class="form-group{{ $errors->has('bash') ? ' has-error' : '' }}">
<label for="bash" class="col-md-4 control-label">Bash</label>

<div class="col-md-1">
<input type="checkbox" name="bash" value="1" class="form-control" disabled autofocus {{ old('bash', Auth::user()->bash) == '1' ? 'checked="checked"' : '' }}>

@if ($errors->has('bash'))
<span class="help-block">
<strong>{{ $errors->first('bash') }}</strong>
</span>
@endif
</div>
</div>

<!-- Selected Skill: Batch -->
<div class="form-group{{ $errors->has('batch') ? ' has-error' : '' }}">
<label for="batch" class="col-md-4 control-label">Batch</label>

<div class="col-md-1">
<input type="checkbox" name="batch" value="1" class="form-control" disabled autofocus {{ old('batch', Auth::user()->batch) == '1' ? 'checked="checked"' : '' }}>

@if ($errors->has('batch'))
<span class="help-block">
<strong>{{ $errors->first('batch') }}</strong>
</span>
@endif
</div>
</div>

<!-- Selected Skill: Cisco -->
<div class="form-group{{ $errors->has('cisco') ? ' has-error' : '' }}">
<label for="batch" class="col-md-4 control-label">Cisco</label>

<div class="col-md-1">
<input type="checkbox" name="cisco" value="1" class="form-control" disabled autofocus {{ old('cisco', Auth::user()->cisco) == '1' ? 'checked="checked"' : '' }}>

@if ($errors->has('cisco'))
<span class="help-block">
<strong>{{ $errors->first('cisco') }}</strong>
</span>
@endif
</div>
</div>

<!-- Selected Skill: Office -->
<div class="form-group{{ $errors->has('office') ? ' has-error' : '' }}">
<label for="office" class="col-md-4 control-label">Office</label>

<div class="col-md-1">
<input type="checkbox" name="office" value="1" class="form-control" disabled autofocus {{ old('office', Auth::user()->office) == '1' ? 'checked="checked"' : '' }}>

@if ($errors->has('office'))
<span class="help-block">
<strong>{{ $errors->first('office') }}</strong>
</span>
@endif
</div>
</div>

<!-- Selected Skill: R -->
<div class="form-group{{ $errors->has('r') ? ' has-error' : '' }}">
<label for="r" class="col-md-4 control-label">R</label>

<div class="col-md-1">
<input type="checkbox" name="r" value="1" class="form-control" disabled autofocus {{ old('r', Auth::user()->r) == '1' ? 'checked="checked"' : '' }}>

@if ($errors->has('r'))
<span class="help-block">
<strong>{{ $errors->first('r') }}</strong>
</span>
@endif
</div>
</div>

<!-- Selected Skill: Go -->
<div class="form-group{{ $errors->has('go') ? ' has-error' : '' }}">
<label for="go" class="col-md-4 control-label">Go</label>

<div class="col-md-1">
<input type="checkbox" name="go" value="1" class="form-control" disabled autofocus {{ old('go', Auth::user()->go) == '1' ? 'checked="checked"' : '' }}>

@if ($errors->has('go'))
<span class="help-block">
<strong>{{ $errors->first('go') }}</strong>
</span>
@endif
</div>
</div>

<!-- Selected Skill: Ruby -->
<div class="form-group{{ $errors->has('ruby') ? ' has-error' : '' }}">
<label for="ruby" class="col-md-4 control-label">Ruby</label>

<div class="col-md-1">
<input type="checkbox" name="ruby" value="1" class="form-control" disabled autofocus {{ old('ruby', Auth::user()->ruby) == '1' ? 'checked="checked"' : '' }}>

@if ($errors->has('ruby'))
<span class="help-block">
<strong>{{ $errors->first('ruby') }}</strong>
</span>
@endif
</div>
</div>

<!-- Selected Skill: ASP.NET -->
<div class="form-group{{ $errors->has('asp') ? ' has-error' : '' }}">
<label for="asp" class="col-md-4 control-label">ASP.NET</label>

<div class="col-md-1">
<input type="checkbox" name="asp" value="1" class="form-control" disabled autofocus {{ old('asp', Auth::user()->asp) == '1' ? 'checked="checked"' : '' }}>

@if ($errors->has('asp'))
<span class="help-block">
<strong>{{ $errors->first('asp') }}</strong>
</span>
@endif
</div>
</div>

<!-- Selected Skill: Scala -->
<div class="form-group{{ $errors->has('scala') ? ' has-error' : '' }}">
<label for="scala" class="col-md-4 control-label">Scala</label>

<div class="col-md-1">
<input type="checkbox" name="scala" value="1" class="form-control" disabled autofocus {{ old('scala', Auth::user()->scala) == '1' ? 'checked="checked"' : '' }}>

@if ($errors->has('scala'))
<span class="help-block">
<strong>{{ $errors->first('scala') }}</strong>
</span>
@endif
</div>
</div>

                    <p>
                        <button id="change-password">
                            Change password
                        </button>

                        <p id="change-password-content" style="display: none;">To change your password, Logout and select "Forgot Your Password".</p>
                    </p>

                  <p>
                       <button type="button" onclick="window.location='{{ url('edit') }}'">Edit your profile</button>
                    </p>

                    <p>
                        <button id="confirm-delete">
                            Delete account.
                        </button>

                        <p id="confirm-delete-content" style="display: none;">Confirm deletion: <a href="{{ route('delete') }}" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">I really want to delete my account.</a></p>

                        <form id="delete-form" action="{{ route('delete') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </p>
                </div>
            </div>
        </div>
      </div>
    </div>
@endsection
