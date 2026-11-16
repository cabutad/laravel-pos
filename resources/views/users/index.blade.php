@extends('layouts.app')

@section('title', 'Users')

@section('content')
<h1 class="mb-3">Users</h1>
<a href="{{ url('/users/create') }}" class="btn btn-primary me-2">Add User</a>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Email</th>
            <th width="180">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->full_name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ url('/users/'.$user->id) }}" class="btn btn-sm btn-info">View</a>
                <a href="{{ url('/users/'.$user->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ url('/users/'.$user->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center text-muted">No users yet.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
