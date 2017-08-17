@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!-- Panel 1 -->
            <div class="panel panel-default">
                <div class="panel-heading">Welcome!</div>

                <div class="panel-body">
                    The quick brown fox jumps over the lazy dog.
                </div>
            </div>
            <!-- Panel 2 -->
            <div class="panel panel-default">
                <div class="panel-heading">Welcome!</div>

                <div class="panel-body">
                    <p>
                        <i class="fa fa-bath" aria-hidden="true" style="font-size: 30px"></i>
                    </p>

                    The quick brown dog jumps over the lazy fox.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
