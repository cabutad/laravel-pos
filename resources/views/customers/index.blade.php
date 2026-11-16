@extends('layouts.app')

@section('title', 'Customers')

@section('content')
<h1 class="mb-3">Customers</h1>
<a href="{{ url('/customers/create') }}" class="btn btn-primary me-2">Add Customer</a>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th width="180">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->full_name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone }}</td>
            <td>
                <a href="{{ url('/customers/'.$customer->id) }}" class="btn btn-sm btn-info">View</a>
                <a href="{{ url('/customers/'.$customer->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ url('/customers/'.$customer->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center text-muted">No customers yet.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
