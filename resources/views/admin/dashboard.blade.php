@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Admin Dashboard</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <a href="{{ route('services.index') }}" class="text-decoration-none">
                <div class="card shadow h-100 admin-card">
                    <div class="card-body text-center">
                        <h4 class="card-title">Services</h4>
                        <p class="card-text">Manage all services offered.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('solutions.admin.solutions.index') }}" class="text-decoration-none">
                <div class="card shadow h-100 admin-card">
                    <div class="card-body text-center">
                        <h4 class="card-title">Solutions</h4>
                        <p class="card-text">Manage all solutions provided.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('admin.contact-info.edit') }}" class="text-decoration-none">
                <div class="card shadow h-100 admin-card">
                    <div class="card-body text-center">
                        <h4 class="card-title">Contact Info</h4>
                        <p class="card-text">Edit company contact information.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection 