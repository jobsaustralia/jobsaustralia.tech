@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div id="team" class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p class="page-heading"><strong><i class="fa fa-info-circle" aria-hidden="true"></i> About Us - The Team</strong></p>
                    <p>JobsAustralia.tech is a project for <a href="https://www.rmit.edu.au/courses/039985">Programming Project 1</a> at RMIT University, in Semester Two of 2017.</p>
                    <p>Read about our five team members below, using the buttons to cycle through.</p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><strong>The team</strong></div>
                <br>
                <p id="names" align="center"></p>
                <hr>
                <div id="aaron-content" class="panel-body default-hide">
                    <div align="center">
                        <p>
                            <img src="{{ asset('img/aaron.png') }}"></img>
                        </p>
                        <hr>
                        <p>Aaron is in their final semester of the <strong>Bachelor of Information Technology</strong>.</p>
                        <p><i class="fa fa-globe" aria-hidden="true"></i> <a href="https://aaronhorler.com">Personal website</a> &bull; <i class="fa fa-github" aria-hidden="true"></i> <a href="https://github.com/aghorler">GitHub</a> &bull; <i class="fa fa-linkedin" aria-hidden="true"></i> <a href="https://www.linkedin.com/in/aghorler">LinkedIn</a></p>
                    </div>
                </div>
                <div id="ozlem-content" class="panel-body default-hide">
                    <div align="center">
                        <p>
                            <img src="{{ asset('img/ozlem.png') }}"></img>
                        </p>
                        <hr>
                        <p>Ozlem is in their final semester of the <strong>Bachelor of Information Technology</strong>.</p>
                        <p><i class="fa fa-github" aria-hidden="true"></i> <a href="https://github.com/rmit-s3491115-ozlem-kirmizi">GitHub</a></p>
                    </div>
                </div>
                <div id="kim-content" class="panel-body default-hide">
                    <div align="center">
                        <p>
                            <img src="{{ asset('img/kim.png') }}"></img>
                        </p>
                        <hr>
                        <p>Kim is in their second last semester of the <strong>Bachelor of Information Technology</strong>.</p>
                        <p><i class="fa fa-github" aria-hidden="true"></i> <a href="https://github.com/kimluu1701">GitHub</a></p>
                    </div>
                </div>
                <div id="melissa-content" class="panel-body default-hide">
                    <div align="center">
                        <p>
                            <img src="{{ asset('img/melissa.png') }}"></img>
                        </p>
                        <hr>
                        <p>Melissa is in their penultimate year of the <strong>Bachelor of Engineering (Computer and Network Engineering)/Bachelor of Computer Science</strong>.</p>
                        <p><i class="fa fa-github" aria-hidden="true"></i> <a href="https://github.com/rmit-s3476694-melissa-nguyen">GitHub</a></p>
                    </div>
                </div>
                <div id="redacted-content" class="panel-body default-hide">
                    <div align="center">
                        <p>
                            <img src="{{ asset('img/redacted.png') }}"></img>
                        </p>
                        <hr>
                        <p>Redacted is in their last semester of the <strong>Bachelor of Information Technology</strong>.</p>
                        <p><i class="fa fa-github" aria-hidden="true"></i> <a href="https://github.com/d473">GitHub</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
