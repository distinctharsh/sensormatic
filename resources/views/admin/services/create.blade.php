@extends('layouts.app')

@section('title', 'Add Service')

@section('content')
<div class="container py-5">
    <h1>Add New Service</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="mb-3">
            <label for="order" class="form-label">Order</label>
            <input type="number" name="order" id="order" class="form-control">
        </div>
        <div class="form-check mb-3">
            <input type="hidden" name="active" value="0">
            <input type="checkbox" name="active" id="active" class="form-check-input" value="1" {{ old('active', true) ? 'checked' : '' }}>
            <label for="active" class="form-check-label">Active</label>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection 