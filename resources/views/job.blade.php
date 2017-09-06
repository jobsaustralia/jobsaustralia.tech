@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div id="job" class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>{{ Auth::user()->title }}</strong></div>

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
                        <button id="apply" class="btn btn-primary">Apply</button>
                    </p>
                </div>
            </div>

            <div id="apply-content" class="panel panel-default" style="display: none;">
                <div class="panel-heading"><strong>Apply:</strong> Write Your Cover Letter</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('apply') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="jobid" value="{{ $id }}" />

                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label for="cover-letter" class="col-md-4 control-label">Cover Letter</label>

                            <div class="col-md-6">
                                    <textarea id="message" name="message" rows="5" cols="30" class="form-control" value="{{ old('message') }}" required autofocus>
                                    </textarea>
                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Apply
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
