@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">	FAQs</div>
                <div class="panel-body">
                    <h3> Setting An Account </h3>
                    <p><b>I forgot my password. What could I do ?</b></p>
                    <p> Don't worry, it happens to everyone. Click the ‘Forgot Your Password ?’ link at the sign in section to enter your email and we'll send you a link to reset your password.</p>
                    <p><b>How do I update my information ?</b></p>
                    <p> Once you have logged in to your account, click on the drop down arrow next to your name in the top right of the page, and select Settings.</p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-body">
                    <h3> Applying For A Job </h3>
                    <p><b>What does JobsAustralia.tech do with my application ?</b></p>
                    <p>We send your application directly to the employer. Unfortunately, we don’t 
					take any part in the recruitment process so if you want to check your application or ask 
					further questions, it's best to contact the employer directly.</p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-body">
                    <h3> Technical Issues </h3>
                    <p><b>Getting an error message or having trouble loading a page ?</b></p>
                    <p> Try clearing your browsing history following these instructions -> http://www.refreshyourcache.com/en/home/</p>
                    <p><b>Tried everything and still having trouble ?</b></p>
                    <p> Fill in the form to let us know what is going on. Be sure to include as much information about the issue as you can, including: your operating system, web browser and version, anti-virus software you have installed and the page that you encountered the error on.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
