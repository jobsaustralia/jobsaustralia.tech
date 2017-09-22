@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div id="delete-application" class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Delete application to <strong>{{ $application->jobtitle }}</strong></div>
                <div class="panel-body">
                    <p align="center">
                        <strong>Deleting an application will remove the application from your application page, and the employer's application page.</strong>
                    </p>

                    <p align="center">
                        <strong>It is impossible to recover an application after deletion!</strong>
                    </p>

                    <br>

                    <p align="center">
                        <button id="delete-application-button" class="btn btn-danger">
                            Delete application
                        </button>
                    </p>

                    <br>

                    <p id="delete-application-button-content" style="display: none;" align="center">
                        Confirm deletion: <a id="delete-application-confirm" class="text-danger" href="{{ route('deleteApplication') }}">I really want to delete this job.</a>
                    </p>

                    <form id="delete-application-confirm-form" action="{{ route('deleteApplication') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}

                        <input type="hidden" name="id" value="{{ $application->id }}" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
