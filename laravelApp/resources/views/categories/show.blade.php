{{-- resources/views/customers/show.blade.php --}}

@extends('layouts.app') <!-- Extend your main layout -->

@section('content')
<div class="container">
    <h1>Customer Details</h1>

    <div class="card">
        <div class="card-header">
            <h2>{{ $customer->name }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $customer->email }}</p>
            <p><strong>Phone:</strong> {{ $customer->phone }}</p>
            <p><strong>Address:</strong> {{ $customer->address }}</p>
            <p><strong>Created At:</strong> {{ $customer->created_at }}</p>
            <p><strong>Updated At:</strong> {{ $customer->updated_at }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection

