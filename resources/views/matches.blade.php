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
                                <option selected value="any">Any</option>
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

        	<!-- Matches are printed to this div via match.js -->
            <div id="jobs">
                <div id="loading">
                	<br><br><br>
                	<p align="center"><i style="font-size: 200px" class="fa fa-cog fa-spin fa-3x fa-fw"></i></p>
                	<br>
                	<h2 align="center">Loading Matches</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
