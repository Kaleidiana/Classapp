@extends('layouts.app')

@section('content')
    <h1>Edit Order</h1>

    <form action="{{ route('orders.update', $order) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="order_number">Order Number</label>
            <input type="text" name="order_number" class="form-control" value="{{ $order->order_number }}" required>
        </div>

        <div class="form-group">
            <label for="customer_name">Customer Name</label>
            <input type="text" name="customer_name" class="form-control" value="{{ $order->customer_name }}" required>
        </div>

        <div class="form-group">
            <label for="total_amount">Total Amount</label>
            <input type="number" name="total_amount" class="form-control" value="{{ $order->total_amount }}" required>
        </div>

        <button type="submit" class="btn btn-warning">Update Order</button>
    </form>
@endsection
