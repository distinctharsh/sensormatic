@extends('layouts.app')

@section('title', 'Edit Contact Info')

@section('content')
<div class="container py-5">
    <h1>Edit Contact Info</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.contact-info.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ old('address', $contact->address) }}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $contact->phone) }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $contact->email) }}">
        </div>
        <div class="mb-3">
            <label for="map_embed" class="form-label">Google Map Embed Code</label>
            <textarea name="map_embed" id="map_embed" class="form-control" rows="3">{{ old('map_embed', $contact->map_embed) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="whatsapp" class="form-label">WhatsApp</label>
            <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="{{ old('whatsapp', $contact->whatsapp) }}">
        </div>
        <div class="mb-3">
            <label for="facebook" class="form-label">Facebook</label>
            <input type="text" name="facebook" id="facebook" class="form-control" value="{{ old('facebook', $contact->facebook) }}">
        </div>
        <div class="mb-3">
            <label for="twitter" class="form-label">Twitter</label>
            <input type="text" name="twitter" id="twitter" class="form-control" value="{{ old('twitter', $contact->twitter) }}">
        </div>
        <div class="mb-3">
            <label for="linkedin" class="form-label">LinkedIn</label>
            <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{ old('linkedin', $contact->linkedin) }}">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection 