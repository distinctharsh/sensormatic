@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Carousel -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>Help Increase Revenue, Optimize Labor, Reduce Shrink</h1>
                <h2>Get started with services that connect source to store</h2>
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
                <h2>Solutions That Power Accurate Decision-Making Across the Retail Enterprise</h2>
                <p class="lead">Our suite of solutions is designed to turn data into insights and insights into strategic, impactful actions.</p>
                <a href="{{ route('solutions') }}" class="btn btn-primary">Explore the Problems We Solve</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="solution-card text-center">
                    <img src="/images/c2.jpg" alt="Loss Prevention" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                    <h4>Loss Prevention & Liability</h4>
                    <p>Our innovative solutions are designed to help retailers protect their merchandise, prevent shrink and fight the threats posed by retail crime—while still delivering a frictionless experience for shoppers.</p>
                    <a href="{{ route('solutions') }}" class="btn btn-outline-primary">Explore Loss Prevention Solutions</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="solution-card text-center">
                    <img src="/images/c3.jpg" alt="Inventory Intelligence" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                    <h4>Inventory Intelligence</h4>
                    <p>We provide inventory visibility that helps maximize revenue and enables a more personalized and enhanced customer experience. Our Inventory Intelligence solution gives you a heightened, item-level view of your inventory across the enterprise.</p>
                    <a href="{{ route('solutions') }}" class="btn btn-outline-primary">Explore Inventory Intelligence Solutions</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="solution-card text-center">
                    <img src="/images/c4.jpg" alt="Traffic Insights" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                    <h4>Traffic Insights</h4>
                    <p>When you understand shopper traffic patterns, you can predict and prepare for them, ultimately getting the most from marketing, merchandising and labor. ShopperTrak traffic analytics enable retailers to deliver stronger customer experiences.</p>
                    <a href="{{ route('solutions') }}" class="btn btn-outline-primary">Explore Traffic Insights Solutions</a>
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
                    <img src="/images/c5.jpg" alt="Getting Started With Source Tagging" class="img-fluid rounded mb-3">
                    <h3>Getting Started With Source Tagging</h3>
                    <p>What is Source Tagging? Find out here, plus discover how to leverage merchandise tags for retail while delivering value across your supply chain.</p>
                    <a href="#" class="btn btn-outline-primary">Learn more</a>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="featured-content">
                    <img src="/images/c6.jpg" alt="A New Vision for Retail" class="img-fluid rounded mb-3">
                    <h3>A New Vision for Retail</h3>
                    <p>Sensormatic Solutions is championing computer vision analytics to fast forward retail.</p>
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
                <h2>Sensormatic Innovation Experience</h2>
                <p class="lead">Explore our Sensormatic Innovation Experience. Select your retail segment and get ready to future-proof your daily operations.</p>
                <a href="#" class="btn btn-primary">Click here to register and start exploring</a>
            </div>
            <div class="col-md-6">
                <img src="/images/c7.jpg" alt="Innovation Experience" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Case Studies Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2>Our customers include:</h2>
                <p class="lead">Read our case studies to see how our solutions deliver real-world ROI for recognized retail leaders.</p>
                <a href="{{ route('resources', ['type' => 'Case Study']) }}" class="btn btn-outline-primary">See more</a>
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
                        <h4>Case Study: Prime Communications</h4>
                        <p>How Prime Communications improved their retail operations with Sensormatic solutions.</p>
                        <a href="#" class="btn btn-outline-primary">Read Case Study</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="case-study-card">
                    <img src="/images/c10.jpg" alt="Case Study" class="img-fluid rounded mb-3" style="height: 250px; object-fit: cover; width: 100%;">
                    <div class="case-study-content">
                        <span class="badge bg-primary mb-2">Case Study</span>
                        <h4>Case Study: Macy's RFID Retail Revolution</h4>
                        <p>How Macy's implemented RFID technology to transform their inventory management.</p>
                        <a href="#" class="btn btn-outline-primary">Read Case Study</a>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Connect</h2>
                <p class="lead">+1 800-642-7505 (US) Sales and general inquiries</p>
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Contact Us</a>
            </div>
        </div>
    </div>
</section>
@endsection