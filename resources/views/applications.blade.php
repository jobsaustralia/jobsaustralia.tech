@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (count($applications) > 0)
                @foreach($applications as $application)
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>{{ $application->jobtitle }}</strong> by <a href="{{ asset('employer/' . $application->employerid) }}">{{ $application->employername }}</a></div>

                    <div class="panel-body">

                        <p>{{ $application->message }}</p>

                        <hr>

                         <p>{{ $application->resume }}</p>

                        <p>
                            <a href="#" class="btn btn-primary" action="{{ route('deleteApp') }}"  method="POST"> 
                                Delete application
                            </a>
                        </p>
                    </div>
                </div>
                @endforeach
            @else
                <!-- No applications div. Used to display message when user has no active applications. -->
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Notice</strong></div>
                    <div class="panel-body" align="center">
                        <p><i style="font-size: 200px" class="fa fa-ship " aria-hidden="true"></i></p>
                        <br>
                        <h2>No Applications Found.</h2>
                        <p>This page will display your active applications.</p>
                        <br>
                        <p>
                            <a href="{{ route('matches') }}" class="btn btn-primary">View matches</a>
                        </p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
