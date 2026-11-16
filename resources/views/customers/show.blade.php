@extends('layouts.app')

@section('title', 'Customer Details')

@section('content')
<h1 class="mb-3">Customer Details</h1>
<a href="{{ url('/customers') }}" class="btn btn-outline-secondary me-2">Back</a>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $customer->full_name }}</h5>
        <p class="card-text"><strong>Email:</strong> {{ $customer->email }}</p>
        <p class="card-text"><strong>Phone:</strong> {{ $customer->phone }}</p>
        <a href="{{ url('/customers/'.$customer->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ url('/customers/'.$customer->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Delete</button>
        </form>
    </div>
</div>
@endsection
