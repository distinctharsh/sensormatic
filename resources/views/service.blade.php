@extends('layouts.app')

@section('title', $service->title)

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>{{ $service->title }}</h1>
                    <p class="lead">{{ $service->description }}</p>
                </div>
                <div class="col-md-4">
                    @if($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="img-fluid rounded">
                    @elseif($service->icon)
                        <div class="text-center">
                            <i class="{{ $service->icon }} fa-5x text-white"></i>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Service Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="service-content">
                        {!! $service->content !!}
                    </div>

                    <!-- Service Features -->
                    <div class="mt-5">
                        <h3>Key Benefits</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex mb-3">
                                    <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                    <div>
                                        <h6>Expert Implementation</h6>
                                        <small class="text-muted">Professional installation and configuration</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex mb-3">
                                    <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                    <div>
                                        <h6>Comprehensive Training</h6>
                                        <small class="text-muted">Staff training and certification</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex mb-3">
                                    <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                    <div>
                                        <h6>Ongoing Support</h6>
                                        <small class="text-muted">24/7 technical assistance</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex mb-3">
                                    <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                    <div>
                                        <h6>Performance Optimization</h6>
                                        <small class="text-muted">Continuous improvement and updates</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Service Details -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Service Details</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>Service Type:</strong> {{ $service->title }}</p>
                            <p><strong>Last Updated:</strong> {{ $service->updated_at->format('M d, Y') }}</p>
                            <p><strong>Availability:</strong> <span class="badge bg-success">Available</span></p>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Get Started</h5>
                        </div>
                        <div class="card-body">
                            <p>Ready to implement this service? Contact our team for a consultation.</p>
                            <a href="#" class="btn btn-primary w-100 mb-2">Request Quote</a>
                            <a href="tel:+18006427505" class="btn btn-outline-primary w-100">
                                <i class="fas fa-phone"></i> Call +1 800-642-7505
                            </a>
                        </div>
                    </div>

                    <!-- Related Services -->
                    <div class="card">
                        <div class="card-header">
                            <h5>Other Services</h5>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                <a href="{{ route('services') }}" class="list-group-item list-group-item-action">
                                    View All Services
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    Implementation Services
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    Support & Maintenance
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Ready to Get Started?</h2>
                    <p class="lead">Contact our services team to discuss your {{ $service->title }} needs</p>
                    <a href="#" class="btn btn-primary btn-lg">Contact Sales</a>
                    <a href="{{ route('services') }}" class="btn btn-outline-primary btn-lg ms-2">View All Services</a>
                </div>
            </div>
        </div>
    </section>
@endsection 