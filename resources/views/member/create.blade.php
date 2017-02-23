@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('') }}">{{ __('forum.home') }}</a></li>
    <li><a href="{{ url('member') }}">{{ __('forum.member') }}</a></li>
    <li class="active">{{ __('forum.create') }}</li>
</ol>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">{{ __('forum.member') }}</h3>
    </div>
    <div class="panel-body">
        
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/member') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <label for="first_name" class="col-md-4 control-label">{{ __('forum.first_name') }}</label>

                <div class="col-md-6">
                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                    @if ($errors->has('first_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                <label for="last_name" class="col-md-4 control-label">{{ __('forum.last_name') }}</label>

                <div class="col-md-6">
                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                    @if ($errors->has('last_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">{{ __('forum.email_address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('school') ? ' has-error' : '' }}">
                <label for="school" class="col-md-4 control-label">{{ __('forum.school') }}</label>

                <div class="col-md-6">
                    <select id="school" type="school" class="form-control" name="school">
                        @foreach ($schools as $school)
                            @if (old('school') && old('school') == $school->id)
                                <option selected="selected" value="{{ $school->id }}">{{ $school->name }}</option>
                            @else
                                <option value="{{ $school->id }}">{{ $school->name }}</option>
                            @endif
                        @endforeach
                    </select>

                    @if ($errors->has('school'))
                        <span class="help-block">
                            <strong>{{ $errors->first('school') }}</strong>
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