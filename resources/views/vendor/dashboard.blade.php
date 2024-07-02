@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Vendor Dashboard</h1>
    <a href="{{ route('items.index') }}">Manage Items</a>
    <a href="{{ url('vendor/orders') }}">View Orders</a>
</div>
@endsection