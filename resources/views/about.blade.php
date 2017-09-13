@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div id="team" class="col-md-8 col-md-offset-2">
            <h3><i class="fa fa-info-circle" aria-hidden="true"></i> About Us - The Team</h3>
            <p>JobsAustralia.tech is a project for Programming Project 1 at RMIT University, in Semester Two of 2017.</p>
            <p>Read about our five team members below, using the buttons to cycle through.</p><br>

            <div class="panel panel-default">
                <div id="names" class="panel-heading" align="center"></div>
                <div id="aaron-content" style="display: none" class="panel-body">
                    <div align="center">
                        <p>
                            <img src="img/aaron.png"></img>
                        </p>
                        <hr>
                        <p>Aaron is in their final semester of the <strong>Bachelor of Information Technology</strong>.</p>
                        <p><i class="fa fa-globe" aria-hidden="true"></i> <a href="https://aaronhorler.com">Personal website</a> &bull; <i class="fa fa-github" aria-hidden="true"></i> <a href="https://github.com/aghorler">GitHub</a> &bull; <i class="fa fa-linkedin" aria-hidden="true"></i> <a href="https://www.linkedin.com/in/aghorler">LinkedIn</a></p>
                    </div>
                </div>
                <div id="ozlem-content" style="display: none" class="panel-body">
                    <div align="center">
                        <p>
                            <img src="img/ozlem.png"></img>
                        </p>
                        <hr>
                        <p>Ozlem is in their final semester of the <strong>Bachelor of Information Technology</strong>.</p>
                        <p><i class="fa fa-github" aria-hidden="true"></i> <a href="https://github.com/rmit-s3491115-ozlem-kirmizi">GitHub</a></p>
                    </div>
                </div>
                <div id="kim-content" style="display: none" class="panel-body">
                    <div align="center">
                        <p>
                            <img src="img/kim.png"></img>
                        </p>
                        <hr>
                        <p>Kim is in their second last semester of the <strong>Bachelor of Information Technology</strong>.</p>
                        <p><i class="fa fa-github" aria-hidden="true"></i> <a href="https://github.com/kimluu1701">GitHub</a></p>
                    </div>
                </div>
                <div id="melissa-content" style="display: none" class="panel-body">
                    <div align="center">
                        <p>
                            <img src="img/melissa.png"></img>
                        </p>
                        <hr>
                        <p>Melissa is in their penultimate year of the <strong>Bachelor of Engineering (Computer and Network Engineering)/Bachelor of Computer Science</strong>.</p>
                        <p><i class="fa fa-github" aria-hidden="true"></i> <a href="https://github.com/rmit-s3476694-melissa-nguyen">GitHub</a></p>
                    </div>
                </div>
                <div id="dennis-content" style="display: none" class="panel-body">
                    <div align="center">
                        <p>
                            <img src="img/dennis.png"></img>
                        </p>
                        <hr>
                        <p>Dennis is in their last semester of the <strong>Bachelor of Information Technology</strong>.</p>
                        <p><i class="fa fa-github" aria-hidden="true"></i> <a href="https://github.com/d473">GitHub</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
