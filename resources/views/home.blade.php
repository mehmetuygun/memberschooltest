@extends('layouts.app')

@section('content')

<a href="{{ url('member') }}" class="btn btn-primary">
	<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Member
</a>

<a href="{{ url('school') }}" class="btn btn-primary">
	<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> School
</a>

@endsection