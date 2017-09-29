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

                        <label for="hours" class="col-md-4 control-label">Hours</label>

                        <div class="col-md-6">
                            <select id="hours" class="form-control">
                                <option value="fulltime" @if (Auth::user()->hours == "fulltime") selected @endif >Full-time</option>
                                <option value="parttime" @if (Auth::user()->state == "parttime") selected @endif >Part-time</option>
                            </select>
                        </div>

                        <label for="Term" class="col-md-4 control-label">Term</label>

                        <div class="col-md-6">
                            <select id="term" class="form-control">
                                <option value="fixed" @if (Auth::user()->term == "fixed") selected @endif >Fixed</option>
                                <option value="permanent" @if (Auth::user()->term == "permanent") selected @endif >Permanent</option>
                            </select>
                        </div>

                        <label for="salary" class="col-md-4 control-label">Salary</label>
                        <div class="col-md-6">
                           <input id="salary" type="number" min="18" max="200000" class="form-control" name="salary" value="{{ old('salary') }}">
                        </div>

                    </div>
                </div>
            </div>

            <!-- NoScript div. Used to display message about JavaScript being disabled, or not working. -->
            <div id="noscript" class="panel panel-default">
                <div class="panel-heading"><strong>Notice</strong></div>
                <div class="panel-body" align="center">
                    <br><br>
                    <p class="panel-notice-icon"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></p>
                    <br>
                    <h2>Please enable JavaScript.</h2>
                    <p>JobsAustralia.tech requires JavaScirpt to perform matchmaking.</p>
                    <br><br>
                </div>
            </div>
            <!-- Loading div. Used to display loading animation until first match is loaded to page. -->
            <div id="loading" class="panel panel-default default-hide">
                <div class="panel-heading"><strong>Notice</strong></div>
                <div class="panel-body" align="center">
                    <br><br>
                    <p class="panel-notice-icon"><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></p>
                    <br>
                    <h2>Loading Matches.</h2>
                    <br><br>
                </div>
            </div>
            <!-- No matches div. Used to display message when no matches are found. -->
            <div id="nomatches" class="panel panel-default default-hide">
                <div class="panel-heading"><strong>Notice</strong></div>
                <div class="panel-body" align="center">
                    <br><br>
                    <p class="panel-notice-icon"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></p>
                    <br>
                    <h2>No Matches Found.</h2>
                    <p>Try again later.</p>
                    <br><br>
                </div>
            </div>
            <!-- Error div. Used to display message when no matches are found. -->
            <div id="error" class="panel panel-default default-hide">
                <div class="panel-heading"><strong>Notice</strong></div>
                <div class="panel-body" align="center">
                    <br><br>
                    <p class="panel-notice-icon"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></p>
                    <br>
                    <h2>Error.</h2>
                    <p>An error occurred. Please try again later, and <a href="{{ route('contact') }}">report it to us</a> if this error reoccurs</p>
                    <br><br>
                </div>
            </div>
            <!-- Matches are printed to this div via match.js -->
            <div id="jobs"></div>
        </div>
    </div>
</div>
@endsection
