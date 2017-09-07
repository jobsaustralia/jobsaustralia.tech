@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Filter Matches</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="state" class="col-md-4 control-label">State/Territory</label>

                        <div class="col-md-6">
                            <select id="state" class="form-control">
                                <option value="vic" @if (Auth::user()->state == "vic") selected @endif >Victoria</option>
                                <option value="nsw" @if (Auth::user()->state == "nsw") selected @endif >New South Wales</option>
                                <option value="qld" @if (Auth::user()->state == "qld") selected @endif >Queensland</option>
                                <option value="wa" @if (Auth::user()->state == "wa") selected @endif >Western Australia</option>
                                <option value="sa" @if (Auth::user()->state == "sa") selected @endif >South Australia</option>
                                <option value="tas" @if (Auth::user()->state == "tas") selected @endif >Tasmania</option>
                                <option value="act" @if (Auth::user()->state == "act") selected @endif >Australian Capital Territory</option>
                                <option value="nt" @if (Auth::user()->state == "nt") selected @endif >Northern Teritory</option>
                                <option value="oth" @if (Auth::user()->state == "oth") selected @endif >Other Australian Region</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

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
