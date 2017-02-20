@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('') }}">Home</a></li>
    <li class="active">Member</li>
</ol>

@if (session('status'))
    <div class="alert alert-{{ session('status') }} alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ session('message') }}
    </div>
@endif

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"> Members</h3>
    </div>
    <div class="panel-body">
        
        <a href="{{ url('member/create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create Member</a>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($members as $member)

                    <tr>
                        <td>{{ $member->id }}</td>
                        <td>{{ $member->first_name }}</td>
                        <td>{{ $member->last_name }}</td>
                        <td>{{ $member->email }}</td>
                        <td>{{ $member->created_at->format('d M Y - H:i:s')}}</td>
                        <td>
                            <form action="{{ url('member/'.$member->id) }}" method="POST">
                            <a href="{{ url('member/'.$member->id.'/edit') }}" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            </a>
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true">
                                </button>
                            </form>
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>

        {{ $members->links() }}

    </div>
</div>

@endsection