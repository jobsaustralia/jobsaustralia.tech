@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p class="page-heading"><strong><i class="fa fa-info-circle" aria-hidden="true"></i> Legal</strong></p>
                    <p>JobsAustralia.tech is published with a license, terms of use, and a privacy policy.</p>
                    <p>Please read this page before using the service.</p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">License</div>
                <div class="panel-body">
                    <p><strong><a href="{{ asset('LICENSE') }}">MIT License</a></strong></p>

                    <p>Copyright (c) 2017 Aaron Horler, Dennis Mihalache, Kim Luu, Melissa Nguyen, and Ozlem Kirmizi (as JobsAustralia.tech at RMIT University).</p>

                    <p>Permission is hereby granted, free of charge, to any person obtaining a copy
                    of this software and associated documentation files (the "Software"), to deal
                    in the Software without restriction, including without limitation the rights
                    to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                    copies of the Software, and to permit persons to whom the Software is
                    furnished to do so, subject to the following conditions:</p>

                    <p>The above copyright notice and this permission notice shall be included in all
                    copies or substantial portions of the Software.</p>

                    <p>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                    IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                    FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                    AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                    LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                    OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
                    SOFTWARE.</p>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Terms of Use</div>
                <div class="panel-body">
                    <p>JobsAustralia.tech is a University project. It is not intended to be used by any party for any reason other than development by the members of the development team, and assessment by University staff.</p>
                    <p>Do not use JobsAustralia.tech if you are not a member of the teaching staff at RMIT University and you are not performing formal or informal assessment, or a member of the development team.</p>
                    <p>JobsAustralia.tech reserves the right to teminate any account at any time without notice or explanation.</p>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Privacy Policy</div>
                <div class="panel-body">
                    <p>Certain user information is collected by JobsAustralia.tech in order to deliver the service.</p>
                    <p>On account deletion, your information is removed permanently. Your information includes your profile, your job applications, and your resume.</p>
                    <p>Employers may independently collect user information. Information not stored on JobsAustralia.tech servers is not deleted on account deletion.</p>
                    <p>For GitHub integration, your GitHub username is sent to GitHub's remote API. This is performed over a secure connection.</p>
                    <p><i class="fa fa-twitter" aria-hidden="true"></i> JobsAustralia.tech has not received any request from any external party for user information. An external party is any party outside of the development team.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
