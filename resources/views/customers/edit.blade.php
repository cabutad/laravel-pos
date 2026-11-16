@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')
<h1 class="mb-3">Edit Customer</h1>
<a href="{{ url('/customers') }}" class="btn btn-outline-secondary me-2">Back</a>
<form action="{{ url('/customers/'.$customer->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" name="full_name" class="form-control" value="{{ $customer->full_name }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ $customer->email }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" value="{{ $customer->phone }}">
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection
