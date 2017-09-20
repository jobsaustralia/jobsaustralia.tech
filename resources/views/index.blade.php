@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Welcome</strong></div>

                <div class="panel-body" align="center">
                    <p><i class="fa fa-briefcase" aria-hidden="true" style="font-size: 100px"></i></p>
                    <p>JobsAustralia.tech is a job matchmaking website based in Melbourne, Australia focusing in the fields of <strong>Information Technology</strong>, <strong>Computer Science</strong>, and <strong>Software Engineering</strong>.</p><br>
                    <p><a class="btn btn-primary" @if (Auth::guest()) href="{{ route('register') }}">Register now @else href="{{ route('matches') }}">View matches @endif</a></p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><strong>Algorithmic matchmaking</strong></div>

                <div class="panel-body" align="center">
                    <p><i class="fa fa-calculator" aria-hidden="true" style="font-size: 100px"></i></p>
                    <p>We use an advanced matchmaking algorithm to match jobs to your skillset.</p>
                    <p>After you register, matching jobs are listed in order by a <strong>0% to 100%</strong> match depending on the requirements of the job and your self-reported skillset.</p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><strong>GitHub integration</strong></div>

                <div class="panel-body" align="center">
                    <p><i class="fa fa-github" aria-hidden="true" style="font-size: 100px"></i></p>
                    <p>JobsAustralia.tech optionally integrates with GitHub to detect your programming skillset.</p>
                    <p>We then report any relevant repositories to employers when you apply for their job.</p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><strong>We're here for you</strong></div>

                <div class="panel-body" align="center">
                    <p><i class="fa fa-users" aria-hidden="true" style="font-size: 100px"></i></p>
                    <p>&bull; Match your skills and strengths with current job vacancies.</p>
                    <p>&bull; Connect you with employers and jobs that complement your abilities.</p>
                    <p>&bull; Market you to employers or work environment that is the most suitable for you.</p>
                    <p>&bull; Help you to find a job in the field that you're passionate about.</p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><strong>The guideline</strong></div>
                <div class="panel-body" align="center">
                    <p><i class="fa fa-compass" aria-hidden="true" style="font-size: 100px"></i></p>
                    <p><strong>Step 1:</strong> Register yourself with JobsAustralia.tech</p>
                    <p><strong>Step 2:</strong> Create your own profile without having to submit your resume or cover letter. However, it is recommended that you pay high attention to listing your IT skills.</p>
                    <p><strong>Step 3:</strong> Wait for your notifications whenever we find you a great match with an employer!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 