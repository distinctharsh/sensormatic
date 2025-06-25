@extends('layouts.app')

@section('title', $solution->title)

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>{{ $solution->title }}</h1>
                    <p class="lead">{{ $solution->description }}</p>
                    <span class="badge bg-primary">{{ $solution->category }}</span>
                </div>
                <div class="col-md-4">
                    @if($solution->image)
                        <img src="{{ asset('storage/' . $solution->image) }}" alt="{{ $solution->title }}" class="img-fluid rounded">
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="solution-content">
                        {!! $solution->content !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Sidebar -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Solution Details</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>Category:</strong> {{ $solution->category }}</p>
                            @if($solution->subcategory)
                                <p><strong>Subcategory:</strong> {{ $solution->subcategory }}</p>
                            @endif
                            <p><strong>Last Updated:</strong> {{ $solution->updated_at->format('M d, Y') }}</p>
                        </div>
                    </div>

                    <!-- Related Solutions -->
                    @if($relatedSolutions->count() > 0)
                        <div class="card">
                            <div class="card-header">
                                <h5>Related Solutions</h5>
                            </div>
                            <div class="card-body">
                                @foreach($relatedSolutions as $related)
                                    <div class="mb-3">
                                        <h6><a href="{{ route('solution.show', $related->slug) }}">{{ $related->title }}</a></h6>
                                        <small class="text-muted">{{ $related->description }}</small>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
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
                    <p class="lead">Learn more about how {{ $solution->title }} can help your business</p>
                    <a href="#" class="btn btn-primary btn-lg">Contact Sales</a>
                    <a href="{{ route('solutions') }}" class="btn btn-outline-primary btn-lg ms-2">View All Solutions</a>
                </div>
            </div>
        </div>
    </section>
@endsection 