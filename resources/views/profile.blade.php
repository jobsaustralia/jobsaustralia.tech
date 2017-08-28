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
                    <p>Skills: 1 Means Selected, 0 means not selected </p>
                    <p>Java: {{Auth::user()->java }}</p>
                    <p>Python: {{Auth::user()->python }}</p>
                    <p>C: {{Auth::user()->c }}</p>
                    <p>C#: {{Auth::user()->csharp }}</p>
                    <p>C++: {{Auth::user()->cplus }}</p>
                    <p>PHP: {{Auth::user()->php }}</p>
                    <p>HTML: {{Auth::user()->html }}</p>
                    <p>CSS: {{Auth::user()->css }}</p>
                    <p>JavaScript: {{Auth::user()->javascript }}</p>
                    <p>SQL: {{Auth::user()->sql }}</p>
                    <p>UNIX: {{Auth::user()->unix }}</p>
                    <p>Windows Server: {{Auth::user()->winserver }}</p>
                    <p>Windows Desktop: {{Auth::user()->windesktop }}</p>
                    <p>Linux Desktop: {{Auth::user()->linuxdesktop }}</p>
                    <p>Mac OS Desktop: {{Auth::user()->macosdesktop }}</p>
                    <p>Pearl: {{Auth::user()->pearl }}</p>
                    <p>Bash: {{Auth::user()->bash }}</p>
                    <p>Batch: {{Auth::user()->batch }}</p>
                    <p>Cisco: {{Auth::user()->cisco }}</p>
                    <p>Office: {{Auth::user()->office }}</p>
                    <p>R: {{Auth::user()->r }}</p>
                    <p>Go: {{Auth::user()->go }}</p>
                    <p>Ruby: {{Auth::user()->ruby }}</p>
                    <p>ASP: {{Auth::user()->asp }}</p>
                    <p>Scala: {{Auth::user()->scala }}</p>
                    <p>
                        <button id="change-password">
                            Change password
                        </button>

                        <p id="change-password-content" style="display: none;">To change your password, Logout and select "Forgot Your Password".</p>
                    </p>
                    <a href='edit'>Edit your profile</a>
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
