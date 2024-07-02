@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <a href="{{ route('vendors.index') }}">Manage Vendors</a>
    <a href="{{ route('categories.index') }}">Manage Categories</a>
    <a href="{{ url('admin/orders') }}">View Orders</a>
    <a href="{{ url('admin/users') }}">View Users</a>
    <a href="{{ url('admin/feedback') }}">View Feedback</a>
</div>
@endsection