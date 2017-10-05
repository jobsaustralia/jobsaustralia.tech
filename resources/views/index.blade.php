@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Welcome</strong></div>

                <div class="panel-body" align="center">
                    <p class="index-ad-panel"><span class="icon-jobsaustralia-logo"></span></p>
                    <p>JobsAustralia.tech is a job matchmaking website based in Melbourne, Australia focusing in the fields of <strong>Information Technology</strong>, <strong>Computer Science</strong>, and <strong>Software Engineering</strong>.</p><br>
                    <p><a class="btn btn-primary" @if (Auth::guest()) href="{{ route('register') }}">Register now @else href="{{ route('matches') }}">View matches @endif</a></p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><strong>Algorithmic matchmaking</strong></div>

                <div class="panel-body" align="center">
                    <p class="index-ad-panel"><i class="fa fa-calculator" aria-hidden="true"></i></p>
                    <p>We use an advanced matchmaking algorithm to match jobs to your skillset.</p>
                    <p>After you register, matching jobs are listed in order by a <strong>0% to 100%</strong> match depending on the requirements of the job and your self-reported skillset.</p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><strong>GitHub integration</strong></div>

                <div class="panel-body" align="center">
                    <p class="index-ad-panel"><i class="fa fa-github" aria-hidden="true"></i></p>
                    <p>JobsAustralia.tech optionally integrates with GitHub to detect your programming skillset.</p>
                    <p>We then report any relevant repositories to employers when you apply for their job.</p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><strong>We're here for you</strong></div>

                <div class="panel-body" align="center">
                    <p class="index-ad-panel"><i class="fa fa-users" aria-hidden="true"></i></p>
                    <p>&bull; Match your skills and strengths with current job vacancies.</p>
                    <p>&bull; Connect you with employers and jobs that complement your abilities.</p>
                    <p>&bull; Market youself to employers or work environments that are the most suitable for you.</p>
                    <p>&bull; Help you to find a job in the field that you're most passionate about.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 