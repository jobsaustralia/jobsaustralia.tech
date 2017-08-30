@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div id="filter" class="col-md-8 col-md-offset-2">
            <select>
                <option value="vic">Victoria</option>
                <option value="nsw">New South Wales</option>
                <option value="tas">Tasmania</option>
                <option value="wa">Western Australia</option>
                <option value="sa">South Australia</option>
                <option value="qld">Queensland</option>
                <option value="act">Australian Capital Territory</option>
                <option value="nt">Northern Territory</option>
            </select>
        </div>
    	<!-- Matches are printed to this div via match.js -->
        <div id="jobs" class="col-md-8 col-md-offset-2">
            <div id="loading">
            	<br><br><br>
            	<p align="center"><i style="font-size: 200px" class="fa fa-cog fa-spin fa-3x fa-fw"></i></p>
            	<br>
            	<h2 align="center">Loading Matches</h2>
            </div>
        </div>
    </div>
</div>
@endsection
