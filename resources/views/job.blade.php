@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div id="profile" class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->title }}</div>

                <div class="panel-body">
                    <p>{{ $description }}</p>

                    <hr>

                    <p><strong>Hours:</strong> {{ $hours }}</p>
                    <p><strong>Salary:</strong> {{ $salary }}</p>
                    <p><strong>Start Date:</strong> {{ $startdate }}</p>

                    <hr>

                    <p><strong>State/Territory:</strong> {{ $state }}</p>
                    <p><strong>City:</strong> {{ $city }}</p>

                    <hr>
                    
                    <p>
                        <button id="apply" class="btn btn-primary">
                            Apply
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
