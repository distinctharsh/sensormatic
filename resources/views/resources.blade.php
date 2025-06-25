@extends('layouts.app')

@section('title', 'Resources')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Resources</h1>
                    <h2>Insights, Knowledge, and Best Practices</h2>
                    <p class="lead">Access our comprehensive library of resources to help you maximize the value of your retail technology investments.</p>
                </div>
                <div class="col-md-6">
                    <img src="/images/c.jpg" alt="Resources Library" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Resource Categories -->
    <section class="py-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills justify-content-center" id="resourcesTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="all-resources-tab" data-bs-toggle="pill" data-bs-target="#all-resources" type="button" role="tab">
                                <i class="fas fa-th-large me-2"></i>All Resources
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="case-studies-tab" data-bs-toggle="pill" data-bs-target="#case-studies" type="button" role="tab">
                                <i class="fas fa-chart-line me-2"></i>Case Studies
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="articles-tab" data-bs-toggle="pill" data-bs-target="#articles" type="button" role="tab">
                                <i class="fas fa-newspaper me-2"></i>Articles
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="ebooks-tab" data-bs-toggle="pill" data-bs-target="#ebooks" type="button" role="tab">
                                <i class="fas fa-book me-2"></i>eBooks
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="videos-tab" data-bs-toggle="pill" data-bs-target="#videos" type="button" role="tab">
                                <i class="fas fa-video me-2"></i>Videos
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="webinars-tab" data-bs-toggle="pill" data-bs-target="#webinars" type="button" role="tab">
                                <i class="fas fa-play-circle me-2"></i>Webinars
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Content -->
    <section class="py-5">
        <div class="container">
            <div class="tab-content" id="resourcesTabContent">
                <!-- All Resources -->
                <div class="tab-pane fade show active" id="all-resources" role="tabpanel">
                    <div class="row">
                        <div class="col-12 text-center mb-5">
                            <h2>All Resources</h2>
                            <p class="lead">Comprehensive collection of insights, case studies, and educational content</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        @forelse($resources as $resource)
                            <div class="col-md-4 mb-4">
                                <div class="resource-card">
                                    <img src="/images/c.jpg" alt="{{ $resource->title }}" class="img-fluid" style="height: 200px; object-fit: cover; width: 100%;">
                                    <div class="p-3">
                                        <span class="badge bg-primary mb-2">{{ $resource->type }}</span>
                                        <h5>{{ $resource->title }}</h5>
                                        <p class="text-muted">{{ Str::limit($resource->description, 100) }}</p>
                                        <a href="{{ route('resource.show', $resource->slug) }}" class="btn btn-outline-primary btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center">
                                <h3>No resources available</h3>
                                <p>Check back soon for new content!</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- Case Studies -->
                <div class="tab-pane fade" id="case-studies" role="tabpanel">
                    <div class="row">
                        <div class="col-12 text-center mb-5">
                            <h2>Case Studies</h2>
                            <p class="lead">Real-world examples of how retailers are achieving success with Sensormatic solutions</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        @forelse($resources->where('type', 'Case Study') as $resource)
                            <div class="col-md-6 mb-4">
                                <div class="resource-card">
                                    <img src="/images/c.jpg" alt="{{ $resource->title }}" class="img-fluid" style="height: 250px; object-fit: cover; width: 100%;">
                                    <div class="p-4">
                                        <span class="badge bg-primary mb-2">{{ $resource->type }}</span>
                                        <h4>{{ $resource->title }}</h4>
                                        <p>{{ $resource->description }}</p>
                                        <a href="{{ route('resource.show', $resource->slug) }}" class="btn btn-primary">Read Case Study</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-md-6 mb-4">
                                <div class="resource-card">
                                    <img src="/images/c.jpg" alt="Case Study" class="img-fluid" style="height: 250px; object-fit: cover; width: 100%;">
                                    <div class="p-4">
                                        <span class="badge bg-primary mb-2">Case Study</span>
                                        <h4>Case Study: Prime Communications</h4>
                                        <p>How Prime Communications improved their retail operations with Sensormatic solutions.</p>
                                        <a href="#" class="btn btn-primary">Read Case Study</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="resource-card">
                                    <img src="/images/c.jpg" alt="Case Study" class="img-fluid" style="height: 250px; object-fit: cover; width: 100%;">
                                    <div class="p-4">
                                        <span class="badge bg-primary mb-2">Case Study</span>
                                        <h4>Case Study: Macy's RFID Retail Revolution</h4>
                                        <p>How Macy's implemented RFID technology to transform their inventory management.</p>
                                        <a href="#" class="btn btn-primary">Read Case Study</a>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- Articles -->
                <div class="tab-pane fade" id="articles" role="tabpanel">
                    <div class="row">
                        <div class="col-12 text-center mb-5">
                            <h2>Articles</h2>
                            <p class="lead">Latest insights and trends in retail technology and loss prevention</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        @forelse($resources->where('type', 'Article') as $resource)
                            <div class="col-md-4 mb-4">
                                <div class="resource-card">
                                    <img src="/images/c.jpg" alt="{{ $resource->title }}" class="img-fluid" style="height: 200px; object-fit: cover; width: 100%;">
                                    <div class="p-3">
                                        <span class="badge bg-info mb-2">{{ $resource->type }}</span>
                                        <h5>{{ $resource->title }}</h5>
                                        <p class="text-muted">{{ Str::limit($resource->description, 100) }}</p>
                                        <a href="{{ route('resource.show', $resource->slug) }}" class="btn btn-outline-primary btn-sm">Read Article</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-md-4 mb-4">
                                <div class="resource-card">
                                    <img src="/images/c.jpg" alt="Article" class="img-fluid" style="height: 200px; object-fit: cover; width: 100%;">
                                    <div class="p-3">
                                        <span class="badge bg-info mb-2">Article</span>
                                        <h5>The Future of Retail Technology</h5>
                                        <p class="text-muted">Exploring emerging trends and technologies shaping the retail industry.</p>
                                        <a href="#" class="btn btn-outline-primary btn-sm">Read Article</a>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- eBooks -->
                <div class="tab-pane fade" id="ebooks" role="tabpanel">
                    <div class="row">
                        <div class="col-12 text-center mb-5">
                            <h2>eBooks</h2>
                            <p class="lead">Comprehensive guides and educational content for retail professionals</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        @forelse($resources->where('type', 'eBook') as $resource)
                            <div class="col-md-4 mb-4">
                                <div class="resource-card">
                                    <img src="/images/c.jpg" alt="{{ $resource->title }}" class="img-fluid" style="height: 200px; object-fit: cover; width: 100%;">
                                    <div class="p-3">
                                        <span class="badge bg-warning mb-2">{{ $resource->type }}</span>
                                        <h5>{{ $resource->title }}</h5>
                                        <p class="text-muted">{{ Str::limit($resource->description, 100) }}</p>
                                        <a href="{{ route('resource.show', $resource->slug) }}" class="btn btn-outline-primary btn-sm">Download eBook</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-md-4 mb-4">
                                <div class="resource-card">
                                    <img src="/images/c.jpg" alt="eBook" class="img-fluid" style="height: 200px; object-fit: cover; width: 100%;">
                                    <div class="p-3">
                                        <span class="badge bg-warning mb-2">eBook</span>
                                        <h5>Complete Guide to Loss Prevention</h5>
                                        <p class="text-muted">A comprehensive guide to implementing effective loss prevention strategies.</p>
                                        <a href="#" class="btn btn-outline-primary btn-sm">Download eBook</a>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- Videos -->
                <div class="tab-pane fade" id="videos" role="tabpanel">
                    <div class="row">
                        <div class="col-12 text-center mb-5">
                            <h2>Videos</h2>
                            <p class="lead">Visual content and demonstrations of our solutions in action</p>
                        </div>
                    </div>
                    
                    <div class="row">
            <div class="row">
                @forelse($resources as $resource)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 resource-card">
                            @if($resource->image)
                                <img src="{{ asset('storage/' . $resource->image) }}" class="card-img-top" alt="{{ $resource->title }}">
                            @else
                                <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                                    @switch($resource->type)
                                        @case('Case Study')
                                            <i class="fas fa-file-alt fa-3x text-primary"></i>
                                            @break
                                        @case('Article')
                                            <i class="fas fa-newspaper fa-3x text-primary"></i>
                                            @break
                                        @case('eBook')
                                            <i class="fas fa-book fa-3x text-primary"></i>
                                            @break
                                        @case('Video')
                                            <i class="fas fa-video fa-3x text-primary"></i>
                                            @break
                                        @case('White Paper')
                                            <i class="fas fa-file-pdf fa-3x text-primary"></i>
                                            @break
                                        @case('Webinar')
                                            <i class="fas fa-play-circle fa-3x text-primary"></i>
                                            @break
                                        @default
                                            <i class="fas fa-file fa-3x text-primary"></i>
                                    @endswitch
                                </div>
                            @endif
                            <div class="card-body">
                                <div class="mb-2">
                                    <span class="badge bg-secondary">{{ $resource->type }}</span>
                                    @if($resource->published_date)
                                        <small class="text-muted ms-2">{{ $resource->published_date->format('M d, Y') }}</small>
                                    @endif
                                </div>
                                <h5 class="card-title">{{ $resource->title }}</h5>
                                <p class="card-text">{{ $resource->description }}</p>
                                @if($resource->author)
                                    <small class="text-muted">By {{ $resource->author }}</small>
                                @endif
                            </div>
                            <div class="card-footer bg-transparent">
                                <a href="{{ route('resource.show', $resource->slug) }}" class="btn btn-outline-primary btn-sm">Read More</a>
                                @if($resource->file)
                                    <a href="{{ asset('storage/' . $resource->file) }}" class="btn btn-outline-secondary btn-sm ms-2" target="_blank">
                                        <i class="fas fa-download"></i> Download
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <h3>No resources found</h3>
                        <p>Check back soon for new content!</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($resources->hasPages())
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Resources pagination">
                            {{ $resources->links() }}
                        </nav>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Stay Updated</h2>
                    <p class="lead">Subscribe to our newsletter for the latest insights and resources</p>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="Enter your email">
                                <button class="btn btn-primary" type="button">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 