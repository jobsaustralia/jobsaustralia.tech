@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div id="employer" class="col-md-8 col-md-offset-2">
            <h3><i class="fa fa-life-ring" aria-hidden="true"></i> Employer - {{ $name }}</h3><br>
            <p>{{ $name }} is an employer in {{ $city }}, @if ($state == "vic") Victoria. @elseif ($state == "nsw") New South Wales. @elseif ($state == "qld") Queensland. @elseif ($state == "wa") Western Australia. @elseif ($state == "sa") South Australia. @elseif ($state == "tas") Tasmania. @elseif ($state == "act") the Australian Capital Territory. @elseif ($state == "nt") the Northern Territory. @elseif ($state == "oth") an Other Australian Region. @endif</p>

            <hr>

            <input type="hidden" id="employerid" value="{{ $id }}" />

            <!-- NoScript div. Used to display message about JavaScript being disabled, or not working. -->
            <div id="noscript" align="center">
                <br><br>
                <p><i style="font-size: 200px" class="fa fa-exclamation-triangle" aria-hidden="true"></i></p>
                <br>
                <h2>Please enable JavaScript.</h2>
                <p>JobsAustralia.tech requires JavaScirpt to perform matchmaking.</p>
                <br><br>
            </div>
            <!-- Loading div. Used to display loading animation until first match is loaded to page. -->
            <div id="loading" style="display: none" align="center">
                <br><br>
                <p><i style="font-size: 200px" class="fa fa-cog fa-spin fa-3x fa-fw"></i></p>
                <br>
                <h2>Loading Matches.</h2>
                <br><br>
            </div>
            <!-- No matches div. Used to display message when no matches are found. -->
            <div id="nomatches" style="display: none" align="center">
                <br><br>
                <p><i style="font-size: 200px" class="fa fa-exclamation-triangle" aria-hidden="true"></i></p>
                <br>
                <h2>No Matches Found.</h2>
                <p>Try again later.</p>
                <br><br>
            </div>
            <!-- Error div. Used to display message when no matches are found. -->
            <div id="error" style="display: none" align="center">
                <br><br>
                <p><i style="font-size: 200px" class="fa fa-exclamation-triangle" aria-hidden="true"></i></p>
                <br>
                <h2>Error.</h2>
                <p>An error occurred. Please try again later, and <a href="{{ route('contact') }}">report it to us</a> if this error reoccurs</p>
                <br><br>
            </div>
            <!-- Matches are printed to this div via match.js -->
            <div id="jobs"></div>
        </div>
    </div>
</div>
@endsection
