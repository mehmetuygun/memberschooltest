@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('') }}">{{ __('forum.home') }}</a></li>
    <li><a href="{{ url('member') }}">{{ __('forum.school') }}</a></li>
    <li class="active">{{ __('forum.create') }}</li>
</ol>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">{{ __('forum.school') }}</h3>
    </div>
    <div class="panel-body">
        
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/school') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">{{ __('forum.school_name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> {{ __('forum.create') }}
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>

@endsection