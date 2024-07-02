@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Customer Dashboard</h1>
    <a href="{{ url('customer/items') }}">View Items</a>
    <a href="{{ url('customer/cart') }}">View Cart</a>
</div>
@endsection