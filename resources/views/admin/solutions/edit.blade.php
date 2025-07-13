@extends('layouts.app')

@section('title', 'Edit Solution')

@section('content')
<div class="container py-5">
    <h1>Edit Solution</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('solutions.admin.solutions.update', $solution) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $solution->title) }}" required>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $solution->slug) }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $solution->description) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" class="form-control">{{ old('content', $solution->content) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            @if($solution->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $solution->image) }}" alt="Current Image" style="max-width: 200px;">
                </div>
            @endif
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" name="category" id="category" class="form-control" value="{{ old('category', $solution->category) }}">
        </div>
        <div class="mb-3">
            <label for="subcategory" class="form-label">Subcategory</label>
            <input type="text" name="subcategory" id="subcategory" class="form-control" value="{{ old('subcategory', $solution->subcategory) }}">
        </div>
        <div class="mb-3">
            <label for="order" class="form-label">Order</label>
            <input type="number" name="order" id="order" class="form-control" value="{{ old('order', $solution->order) }}">
        </div>
        <div class="form-check mb-3">
            <input type="hidden" name="active" value="0">
            <input type="checkbox" name="active" id="active" class="form-check-input" value="1" {{ old('active', $solution->active) ? 'checked' : '' }}>
            <label for="active" class="form-check-label">Active</label>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('solutions.admin.solutions.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection 