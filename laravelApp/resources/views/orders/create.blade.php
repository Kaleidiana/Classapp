@extends('layouts.app')

@section('content')
    <h1>Create Order</h1>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="order_number">Order Number</label>
            <input type="text" name="order_number" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="customer_name">Customer Name</label>
            <input type="text" name="customer_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="total_amount">Total Amount</label>
            <input type="number" name="total_amount" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Order</button>
    </form>
@endsection
