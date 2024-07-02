@section('content')
<div class="container">
    <h1>Add New Item</h1>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="category_id">Category:</label>
        <select id="category_id" name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price">
        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="quantity">
        <button type="submit">Add Item</button>
    </form>
</div>
@endsection