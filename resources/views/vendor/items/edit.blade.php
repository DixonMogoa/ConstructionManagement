@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Item</h1>
    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $item->name }}">
        <label for="category_id">Category:</label>
        <select id="category_id" name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="{{ $item->price }}">
        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="quantity" value="{{ $item->quantity }}">
        <button type="submit">Update Item</button>
    </form>
</div>
@endsection