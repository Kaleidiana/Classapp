<!-- resources/views/customers/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Customer</h1>

    <form action="{{ route('customers.update', $customer) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $customer->name }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $customer->email }}" required>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="{{ $customer->phone }}">

        <button type="submit">Update Customer</button>
    </form>
@endsection
