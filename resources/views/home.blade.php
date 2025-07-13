@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Carousel -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>Secure Your Premises with Smart Access Control & Automated Gates</h1>
                <h2>Advanced EAS Solutions for Seamless Security</h2>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>
            <div class="col-md-6">
                <img src="/images/c.jpg" alt="Retail Technology" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Solutions Overview -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2>Smart Security Solutions for Unmatched Access Control</h2>
                <p class="lead">Our advanced suite of EAS (Electronic Access Security) solutions transforms real-time data into actionable insights, ensuring seamless and foolproof security for your premises.</p>
                <a href="{{ route('solutions') }}" class="btn btn-primary">Explore Our Security Solutions</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="solution-card text-center">
                    <img src="/images/c2.jpg" alt="Loss Prevention" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                    <h4>Unauthorized Entry Prevention</h4>
                    <p>Our cutting-edge AI-powered gates and turnstiles are designed to detect, deter, and prevent unauthorized access—while ensuring a smooth experience for authorized personnel.</p>
                    <a href="{{ route('solutions') }}" class="btn btn-outline-primary">Explore Access Control Solutions</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="solution-card text-center">
                    <img src="/images/c3.jpg" alt="Inventory Intelligence" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                    <h4>Automated Surveillance & Monitoring</h4>
                    <p>Gain complete visibility over your facility with smart gates integrated with 24/7 surveillance. Our system provides:</p>
                    <a href="{{ route('solutions') }}" class="btn btn-outline-primary">Explore Surveillance Solutions</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="solution-card text-center">
                    <img src="/images/c4.jpg" alt="Traffic Insights" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                    <h4>Traffic & Crowd Analytics</h4>
                    <p>Optimize security deployment by analyzing entry/exit patterns, peak hours, and suspicious movements using AI-driven insights.</p><br>
                    <a href="{{ route('solutions') }}" class="btn btn-outline-primary">Explore Traffic Insights</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Content Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="featured-content">
                    <img src="/images/s1.jpg" alt="Getting Started With Smart Access Control" class="img-fluid rounded mb-3">
                    <h3>Getting Started With Smart Access Control</h3>
                    <p>What is Electronic Access Security? [Find out here], plus discover how automated gates and turnstiles can enhance security while streamlining entry points across your facility.</p>
                    <a href="#" class="btn btn-outline-primary">Learn more</a>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="featured-content">
                    <img src="/images/c6.jpg" alt="A New Era of Perimeter Security" class="img-fluid rounded mb-3">
                    <h3>A New Era of Perimeter Security</h3>
                    <p>EAS Security Systems is pioneering AI-powered surveillance to transform physical security. Our smart gate solutions combine facial recognition, motion detection, and real-time alerts for unparalleled protection.</p>
                    <a href="#" class="btn btn-outline-primary">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Innovation Experience Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>EAS Security Innovation Experience</h2>
                <p class="lead">Discover our cutting-edge Security Innovation Lab. Select your facility type and explore next-gen access control solutions to future-proof your security infrastructure.</p>
                <a href="#" class="btn btn-primary">Click here to register and start exploring</a>
            </div>
            <div class="col-md-6">
                <img src="/images/ee.jpg" alt="Innovation Experience" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Case Studies Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2>Trusted by Leading Enterprises</h2>
                <p class="lead">Explore case studies to see how our AI-powered gates and access control systems deliver measurable security ROI for high-profile facilities worldwide.</p>
                <a href="{{ route('resources', ['type' => 'Case Study']) }}" class="btn btn-outline-primary">View Success Stories</a>
            </div>
        </div>
        <div class="row">
            @forelse($featuredResources->where('type', 'Case Study')->take(2) as $resource)
            <div class="col-md-6 mb-4">
                <div class="case-study-card">
                    <img src="/images/c8.jpg" alt="{{ $resource->title }}" class="img-fluid rounded mb-3" style="height: 250px; object-fit: cover; width: 100%;">
                    <div class="case-study-content">
                        <span class="badge bg-primary mb-2">{{ $resource->type }}</span>
                        <h4>{{ $resource->title }}</h4>
                        <p>{{ $resource->description }}</p>
                        <a href="{{ route('resource.show', $resource->slug) }}" class="btn btn-outline-primary">Read Case Study</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-md-6 mb-4">
                <div class="case-study-card">
                    <img src="/images/c9.jpg" alt="Case Study" class="img-fluid rounded mb-3" style="height: 250px; object-fit: cover; width: 100%;">
                    <div class="case-study-content">
                        <span class="badge bg-primary mb-2">Case Study</span>
                        <h4>Case Study: SmartGate Deployment at Delhi Metro</h4>
                        <p>How India’s busiest metro network reduced unauthorized entry by 92% using our AI-driven turnstiles and facial recognition system.</p>
                        <a href="#" class="btn btn-outline-primary">Read Case Study</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="case-study-card">
                    <img src="/images/c9.jpg" alt="Case Study" class="img-fluid rounded mb-3" style="height: 250px; object-fit: cover; width: 100%;">
                    <div class="case-study-content">
                        <span class="badge bg-primary mb-2">Case Study</span>
                        <h4>Case Study: SmartGate Deployment at Delhi Metro</h4>
                        <p>How India’s busiest metro network reduced unauthorized entry by 92% using our AI-driven turnstiles and facial recognition system.</p>
                        <a href="#" class="btn btn-outline-primary">Read Case Study</a>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Contact Section -->

@endsection