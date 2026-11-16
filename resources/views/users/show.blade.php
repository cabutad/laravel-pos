@extends('layouts.app')

@section('title', 'User Details')

@section('content')
<h1 class="mb-3">User Details</h1>
<a href="{{ url('/users') }}" class="btn btn-outline-secondary me-2">Back</a>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $user->full_name }}</h5>
        <p class="card-text"><strong>Username:</strong> {{ $user->username }}</p>
        <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
        <a href="{{ url('/users/'.$user->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ url('/users/'.$user->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Delete</button>
        </form>
    </div>
</div>
@endsection
