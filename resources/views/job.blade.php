@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div @if ($count == 0) id="job" @endif class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>{{ $title }}</strong> by <a href="{{ asset('employer/' . $employerid) }}"> {{ $employername }}</a></div>

                <div class="panel-body">
					<p><i class="fa fa-map-marker" aria-hidden="true"></i> <strong>{{ $city }}, @if ($state == "vic") Victoria @elseif ($state == "nsw") New South Wales @elseif ($state == "qld") Queensland @elseif ($state == "wa") Western Australia @elseif ($state == "sa") South Australia @elseif ($state == "tas") Tasmania @elseif ($state == "act") Australian Capital Territory @elseif ($state == "nt") Northern Territory @else Other Australian Region @endif</strong></p>
					
                    <p>{{ $description }}</p>

                    <hr>
					
                    <p><strong>Term:</strong> @if ($term == "fixed") Fixed @else Permanent @endif </p>
                    <p><strong>Hours:</strong> @if ($hours == "fulltime") Full time @elseif ($hours == "parttime") Part time @else Casual @endif</p>
                    <p><strong>Salary:</strong> &#36;{{ number_format($salary) }} @if ($rate == "hourly") per hour @elseif ($rate == "weekly") per week @elseif ($rate == "monthly") per month @else per annum @endif </p>
                    <p><strong>Start Date:</strong> {{ $startdate }}</p>
					
					<hr>
					
					<p><strong>Required Skills:</strong> @if ($java) Java @endif @if ($python) &bull; Python @endif @if ($c) &bull; C @endif @if ($csharp) &bull; C Sharp @endif @if ($cplus) &bull; C++ @endif @if ($php) &bull; PHP @endif @if ($html) &bull; HTML @endif @if ($css) &bull; CSS @endif @if ($javascript) &bull; JavaScript @endif @if ($sql) &bull; SQL @endif @if ($unix) &bull; Unix @endif @if ($winserver) &bull; Windows Server @endif @if ($windesktop) &bull; Windows Server @endif @if ($linuxdesktop) &bull; Linux Desktop @endif @if ($macosdesktop) &bull; MacOS Desktop @endif @if ($pearl) &bull; Pearl @endif @if ($bash) &bull; Bash @endif @if ($batch) &bull; Batch @endif @if ($cisco) &bull; Cisco @endif @if ($office) &bull; Office @endif @if ($r) &bull; R @endif @if ($go) &bull; Go @endif @if ($ruby) &bull; Ruby @endif @if ($asp) &bull; ASP @endif @if ($scala) &bull; Scala @endif @if ($cow) &bull; COW @endif</p>
					
                    <hr>

                    <p>
                        @if ($count == 0)
                            <button id="apply" class="btn btn-primary">Apply</button>
                        @else
                            <strong>You have applied for this job.</strong>
                        @endif
                    </p>
                </div>
            </div>

            @if ($count == 0)
                <div id="apply-content" class="panel panel-default" style="display: none;">
                    <div class="panel-heading"><strong>Apply:</strong> Write a message to the employer</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('apply') }}">
                            {{ csrf_field() }}

                            <input type="hidden" name="jobid" value="{{ $id }}" />

                            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                <label for="cover-letter" class="col-md-4 control-label">Message</label>

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
            @endif
        </div>
    </div>
</div>
@endsection
