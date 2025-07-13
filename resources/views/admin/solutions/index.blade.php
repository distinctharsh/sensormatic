@extends('layouts.app')

@section('title', 'Manage Solutions')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Solutions</h1>
        <a href="{{ route('solutions.admin.solutions.create') }}" class="btn btn-primary">Add New Solution</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Slug</th>
                <th>Category</th>
                <th>Order</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($solutions as $solution)
                <tr>
                    <td>{{ $solution->title }}</td>
                    <td>{{ $solution->slug }}</td>
                    <td>{{ $solution->category }}</td>
                    <td>{{ $solution->order }}</td>
                    <td>{{ $solution->active ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('solutions.admin.solutions.edit', $solution) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('solutions.admin.solutions.destroy', $solution) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this solution?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 