@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('') }}">Home</a></li>
    <li><a href="{{ url('school') }}">School</a></li>
    <li class="active">Edit</li>
</ol>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">School</h3>
    </div>
    <div class="panel-body">
        
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/school').'/'.$school->id }}">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">School Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') ? old('name') : $school->name }}" required autofocus>

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
                        <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Update
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>

@endsection