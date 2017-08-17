@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }}'s Profile</div>

                <div class="panel-body">
                    <p>Name: {{ Auth::user()->name }}</p>
                    <p>Email: {{ Auth::user()->email }}</p>
					<p>Job Title: {{ Auth::user()->title }}</p>
					<p>Sector: {{ Auth::user()->sector }}</p>
					<p>Overall Experience (in years): {{ Auth::user()->experience }}</p>
					<p>Location: {{ Auth::user()->location }}</p>
                    <p>
                        <button id="change-password">
                            Change password
                        </button>
                    </p>
                    <p>
                        <button id="confirm-delete"> 
                            Delete account.
                        </button>

                        <p id="confirm-delete-prompt" style="display: none;">Confirm deletion: <a href="{{ route('delete') }}" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">I really want to delete my account.</a></p>

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
