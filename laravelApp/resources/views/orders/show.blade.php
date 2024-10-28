@extends('layouts.app')

@section('content')
    <h1>Order Details</h1>

    <p><strong>Order Number:</strong> {{ $order->order_number }}</p>
    <p><strong>Customer Name:</strong> {{ $order->customer_name }}</p>
    <p><strong>Total Amount:</strong> {{ $order->total_amount }}</p>

    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back to Orders</a>
@endsection
