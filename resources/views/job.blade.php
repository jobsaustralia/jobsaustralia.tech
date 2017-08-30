@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div id="profile" class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    <p>Job Title: {{ Auth::user()->title }}</p>
                    <p>Description: {{ Auth::user()->description }}</p>
                    <p>Hours: {{ Auth::user()->hours }}</p>
                    <p>Salary: {{ Auth::user()->salary }}</p>
                    <p>Available From: {{ Auth::user()->availablefrom }}</p>
					<p>Location: {{ Auth::user()->location }}</p>
					<p>Start Date: {{ Auth::user()->startdate }}</p>
                    <p>Percentage Match: {{ Auth::user()->match }}</p>

                    <hr>
					
                    <p>
                        <button id="apply" class="btn btn-primary">
                            Apply.
                        </button>
                    </p>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
