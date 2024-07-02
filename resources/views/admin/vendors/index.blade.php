@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Vendors</h1>
    <a href="{{ route('vendors.create') }}">Add New Vendor</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vendors as $vendor)
                <tr>
                    <td>{{ $vendor->name }}</td>
                    <td>{{ $vendor->email }}</td>
                    <td>
                        <a href="{{ route('vendors.edit', $vendor->id) }}">Edit</a>
                        <form action="{{ route('vendors.destroy', $vendor->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection