@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('') }}">{{ __('forum.home') }}</a></li>
    <li class="active">{{ __('forum.school') }}</li>
</ol>

@if (session('status'))
    <div class="alert alert-{{ session('status') }} alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ session('message') }}
    </div>
@endif

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> {{ __('forum.school') }}</h3>
    </div>
    <div class="panel-body">
        
        <a href="{{ url('school/create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{ __('forum.create_school') }}</a>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('forum.school') }}</th>
                    <th>{{ __('forum.created_at') }}</th>
                    <th>{{ __('forum.action') }}</th>
                </tr>
            </thead>
            <tbody>

                @if ($schools->isEmpty())
                    <tr>  
                        <td colspan="4" style="text-align: center;font-weight: bold">
                            {{ __('forum.no_data') }}
                        </td> 
                    </tr>
                @endif

                @foreach ($schools as $school)

                    <tr>
                        <td>{{ $school->id }}</td>
                        <td>{{ $school->name }}</td>
                        <td>{{ $school->created_at->format('d M Y - H:i:s')}}</td>
                        <td>
                            <form action="{{ url('school/'.$school->id) }}" method="POST">
                            <a href="{{ url('school/'.$school->id.'/edit') }}" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            </a>
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="No turning back">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true">
                                </button>
                            </form>
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>

        {{ $schools->links() }}

    </div>
</div>

@endsection