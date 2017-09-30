@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div @if ($count == 0) id="job" @endif class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>{{ $title }}</strong> by <a href="{{ asset('employer/' . $employerid) }}"> {{ $employername }}</a> &bull; <strong id="percentage-match"></strong></div>

                <div class="panel-body">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> <strong>{{ $city }}, @if ($state == "vic") Victoria @elseif ($state == "nsw") New South Wales @elseif ($state == "qld") Queensland @elseif ($state == "wa") Western Australia @elseif ($state == "sa") South Australia @elseif ($state == "tas") Tasmania @elseif ($state == "act") Australian Capital Territory @elseif ($state == "nt") Northern Territory @else Other Australian Region @endif</strong></p>

                    <p>{{ $description }}</p>

                    <hr>

                    <p><strong>Term:</strong> @if ($term == "fixed") Fixed @else Permanent @endif </p>
                    <p><strong>Hours:</strong> @if ($hours == "fulltime") Full time @elseif ($hours == "parttime") Part time @else Casual @endif</p>
                    <p><strong>Salary:</strong> &#36;{{ number_format($salary) }} @if ($rate == "hourly") per hour @elseif ($rate == "weekly") per week @elseif ($rate == "monthly") per month @else per annum @endif </p>
                    <p><strong>Start Date:</strong> {{ $startdate }}</p>

                    <hr>

                    <p><strong>Required Skills:</strong> @if ($java) <span @if (Auth::user()->c) class="skill-match" @endif > Java</span> @endif @if ($python) &bull; <span @if (Auth::user()->python) class="skill-match" @endif > Python</span> @endif @if ($c) &bull; <span @if (Auth::user()->c) class="skill-match" @endif > C</span> @endif @if ($csharp) &bull; <span @if (Auth::user()->csharp) class="skill-match" @endif > C Sharp</span> @endif @if ($cplus) &bull; <span @if (Auth::user()->python) class="skill-match" @endif > C++</span> @endif @if ($php) &bull; <span @if (Auth::user()->php) class="skill-match" @endif > PHP</span> @endif @if ($html) &bull; <span @if (Auth::user()->html) class="skill-match" @endif > HTML</span> @endif @if ($css) &bull; <span @if (Auth::user()->css) class="skill-match" @endif > CSS</span> @endif @if ($javascript) &bull; <span @if (Auth::user()->javascript) class="skill-match" @endif > JavaScript</span> @endif @if ($sql) &bull; <span @if (Auth::user()->sql) class="skill-match" @endif > SQL</span> @endif @if ($unix) &bull; <span @if (Auth::user()->unix) class="skill-match" @endif > Unix</span> @endif @if ($winserver) &bull; <span @if (Auth::user()->winserver) class="skill-match" @endif > Windows Server</span> @endif @if ($windesktop) &bull; <span @if (Auth::user()->windesktop) class="skill-match" @endif > Windows Desktop</span> @endif @if ($linuxdesktop) &bull; <span @if (Auth::user()->linuxdesktop) class="skill-match" @endif > Linux Desktop</span> @endif @if ($macosdesktop) &bull; <span @if (Auth::user()->macosdesktop) class="skill-match" @endif > MacOS Desktop</span> @endif @if ($perl) &bull; <span @if (Auth::user()->perl) class="skill-match" @endif > Perl</span> @endif @if ($bash) &bull; <span @if (Auth::user()->python) class="skill-match" @endif > Bash</span> @endif @if ($batch) &bull; <span @if (Auth::user()->batch) class="skill-match" @endif > Batch</span> @endif @if ($cisco) &bull; <span @if (Auth::user()->cisco) class="skill-match" @endif > Cisco</span> @endif @if ($office) &bull; <span @if (Auth::user()->office) class="skill-match" @endif > Office</span> @endif @if ($r) &bull; <span @if (Auth::user()->r) class="skill-match" @endif > R</span> @endif @if ($go) &bull; <span @if (Auth::user()->go) class="skill-match" @endif > Go</span> @endif @if ($ruby) &bull; <span @if (Auth::user()->ruby) class="skill-match" @endif > Ruby</span> @endif @if ($asp) &bull; <span @if (Auth::user()->asp) class="skill-match" @endif > ASP</span> @endif @if ($scala) &bull; <span @if (Auth::user()->scala) class="skill-match" @endif > Scala</span> @endif @if ($cow) &bull; <span @if (Auth::user()->cow) class="skill-match" @endif > COW</span> @endif @if ($actionscript) &bull; <span @if (Auth::user()->actionscript) class="skill-match" @endif > ActionScript</span> @endif @if ($assembly) &bull; <span @if (Auth::user()->assembly) class="skill-match" @endif > Assembly</span> @endif @if ($autohotkey) &bull; <span @if (Auth::user()->autohotkey) class="skill-match" @endif > AutoHotKey</span> @endif @if ($coffeescript) &bull; <span @if (Auth::user()->coffeescript) class="skill-match" @endif > CoffeeScript</span> @endif @if ($d) &bull; <span @if (Auth::user()->d) class="skill-match" @endif > D</span> @endif @if ($fsharp) &bull; <span @if (Auth::user()->fsharp) class="skill-match" @endif > F#</span> @endif @if ($haskell) &bull; <span @if (Auth::user()->haskell) class="skill-match" @endif > Haskell</span> @endif @if ($matlab) &bull; <span @if (Auth::user()->matlab) class="skill-match" @endif > Matlab</span> @endif @if ($objectivec) &bull; <span @if (Auth::user()->objectivec) class="skill-match" @endif > Objective-C</span> @endif @if ($objectivecplus) &bull; <span @if (Auth::user()->objectivecplus) class="skill-match" @endif > Objective-C++</span> @endif @if ($pascal) &bull; <span @if (Auth::user()->pascal) class="skill-match" @endif > Pascal</span> @endif @if ($powershell) &bull; <span @if (Auth::user()->powershell) class="skill-match" @endif > PowerShell</span> @endif @if ($rust) &bull; <span @if (Auth::user()->rust) class="skill-match" @endif > Rust</span> @endif @if ($swift) &bull; <span @if (Auth::user()->swift) class="skill-match" @endif > Swift</span> @endif @if ($typescript) &bull; <span @if (Auth::user()->typescript) class="skill-match" @endif > TypeScript</span> @endif @if ($vue) &bull; <span @if (Auth::user()->vue) class="skill-match" @endif > Vue</span> @endif @if ($webassembly) &bull; <span @if (Auth::user()->webassembly) class="skill-match" @endif > WebAssembly</span> @endif @if ($apache) &bull; <span @if (Auth::user()->apache) class="skill-match" @endif > Apache</span> @endif @if ($aws) &bull; <span @if (Auth::user()->aws) class="skill-match" @endif > AWS</span> @endif @if ($docker) &bull; <span @if (Auth::user()->docker) class="skill-match" @endif > Docket</span> @endif @if ($nginx) &bull; <span @if (Auth::user()->nginx) class="skill-match" @endif > Nginx</span> @endif @if ($saas) &bull; <span @if (Auth::user()->saas) class="skill-match" @endif > SaaS</span> @endif @if ($ipv4) &bull; <span @if (Auth::user()->ipv4) class="skill-match" @endif > Networking (IPv4)</span> @endif @if ($ipv6) &bull; <span @if (Auth::user()->ipv6) class="skill-match" @endif > Networking (IPv6)</span> @endif @if ($dns) &bull; <span @if (Auth::user()->dns) class="skill-match" @endif > DNS @endif</p>

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
                <div id="apply-content" class="panel panel-default default-hide">
                    <div class="panel-heading"><strong>Apply:</strong> Write a message to the employer</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('apply') }}">
                            {{ csrf_field() }}

                            <input id="jobid" type="hidden" name="jobid" value="{{ $id }}" />

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
