@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">    Write Your Cover Letter</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('enquire') }}">
                        {{ csrf_field() }}

<<<<<<< HEAD
=======
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

>>>>>>> origin/master
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="cover-letter" class="col-md-4 control-label">Cover Letter</label>

                            <div class="col-md-6">
<<<<<<< HEAD
									<textarea id="cover-letter" name="cover-letter" rows="5" cols="30" class="form-control" value="{{ old('cover-letter') }}" required autofocus>
									</textarea>
                                @if ($errors->has('cover-letter'))
=======
                                    <textarea id="message" name="message" rows="5" cols="30" class="form-control" value="{{ old('message') }}" required autofocus>
                                    </textarea>
                                @if ($errors->has('message'))
>>>>>>> origin/master
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cover-letter') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Apply
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
