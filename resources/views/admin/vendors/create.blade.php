@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Vendor</h1>
    <form action="{{ route('vendors.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <button type="submit">Add Vendor</button>
    </form>
</div>
@endsection