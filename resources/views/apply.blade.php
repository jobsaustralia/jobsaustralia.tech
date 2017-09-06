@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Write Your Cover Letter</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('enquire') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="cover-letter" class="col-md-4 control-label">Cover Letter</label>

                            <div class="col-md-6">
									<textarea id="cover-letter" name="cover-letter" rows="5" cols="30" class="form-control" value="{{ old('cover-letter') }}" required autofocus>
									</textarea>
                                @if ($errors->has('cover-letter'))
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
