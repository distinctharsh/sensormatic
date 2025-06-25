@extends('layouts.app')

@section('title', $resource->title)

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <span class="badge bg-primary">{{ $resource->type }}</span>
                        @if($resource->published_date)
                            <small class="text-white ms-3">{{ $resource->published_date->format('M d, Y') }}</small>
                        @endif
                    </div>
                    <h1>{{ $resource->title }}</h1>
                    <p class="lead">{{ $resource->description }}</p>
                    @if($resource->author)
                        <p class="text-white-50">By {{ $resource->author }}</p>
                    @endif
                </div>
                <div class="col-md-4">
                    @if($resource->image)
                        <img src="{{ asset('storage/' . $resource->image) }}" alt="{{ $resource->title }}" class="img-fluid rounded">
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Resource Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Video Resource -->
                    @if($resource->type === 'Video' && $resource->video_url)
                        <div class="mb-4">
                            <div class="ratio ratio-16x9">
                                <iframe src="{{ $resource->video_url }}" allowfullscreen></iframe>
                            </div>
                        </div>
                    @endif

                    <!-- Resource Content -->
                    @if($resource->content)
                        <div class="resource-content">
                            {!! $resource->content !!}
                        </div>
                    @endif

                    <!-- Download Section -->
                    @if($resource->file)
                        <div class="card mt-4">
                            <div class="card-body">
                                <h5><i class="fas fa-download"></i> Download Resource</h5>
                                <p>Get the full {{ strtolower($resource->type) }} for offline reading.</p>
                                <a href="{{ asset('storage/' . $resource->file) }}" class="btn btn-primary" target="_blank">
                                    <i class="fas fa-download"></i> Download {{ $resource->type }}
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-md-4">
                    <!-- Resource Details -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Resource Details</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>Type:</strong> {{ $resource->type }}</p>
                            @if($resource->author)
                                <p><strong>Author:</strong> {{ $resource->author }}</p>
                            @endif
                            @if($resource->published_date)
                                <p><strong>Published:</strong> {{ $resource->published_date->format('M d, Y') }}</p>
                            @endif
                            <p><strong>Last Updated:</strong> {{ $resource->updated_at->format('M d, Y') }}</p>
                        </div>
                    </div>

                    <!-- Related Resources -->
                    @if($relatedResources->count() > 0)
                        <div class="card">
                            <div class="card-header">
                                <h5>Related Resources</h5>
                            </div>
                            <div class="card-body">
                                @foreach($relatedResources as $related)
                                    <div class="mb-3">
                                        <h6><a href="{{ route('resource.show', $related->slug) }}">{{ $related->title }}</a></h6>
                                        <small class="text-muted">{{ $related->type }} • {{ $related->published_date ? $related->published_date->format('M d, Y') : 'N/A' }}</small>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Share Section -->
                    <div class="card mt-4">
                        <div class="card-header">
                            <h5>Share This Resource</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex gap-2">
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}" 
                                   class="btn btn-outline-primary btn-sm" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($resource->title) }}" 
                                   class="btn btn-outline-primary btn-sm" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="mailto:?subject={{ urlencode($resource->title) }}&body={{ urlencode(request()->url()) }}" 
                                   class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-envelope"></i>
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
                    <h2>Explore More Resources</h2>
                    <p class="lead">Discover more insights and case studies to help optimize your retail operations</p>
                    <a href="{{ route('resources') }}" class="btn btn-primary btn-lg">View All Resources</a>
                </div>
            </div>
        </div>
    </section>
@endsection 