@extends('layouts.app')

@section('title', 'Manage Services')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Services</h1>
        <a href="{{ route('services.create') }}" class="btn btn-primary">Add New Service</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Slug</th>
                <th>Active</th>
                <th>Order</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{ $service->title }}</td>
                    <td>{{ $service->slug }}</td>
                    <td>{{ $service->active ? 'Yes' : 'No' }}</td>
                    <td>{{ $service->order }}</td>
                    <td>
                        <a href="{{ route('services.edit', $service) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('services.destroy', $service) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this service?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 