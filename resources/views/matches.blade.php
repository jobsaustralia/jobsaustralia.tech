@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
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
