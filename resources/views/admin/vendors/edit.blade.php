@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Vendor</h1>
    <form action="{{ route('vendors.update', $vendor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $vendor->name }}">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $vendor->email }}">
        <button type="submit">Update Vendor</button>
    </form>
</div>
@endsection