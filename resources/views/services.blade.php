@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Security Integration Services</h1>
                    <h2>Expert Support for Uncompromising Protection</h2>
                    <p class="lead">From custom installation to 24/7 system monitoring, our certified security specialists ensure your EAS gates and access control solutions deliver maximum safety and operational efficiency.</p>
                </div>
                <div class="col-md-6">
                    <img src="/images/s1.jpg" alt="Professional Services" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Comprehensive Service Portfolio</h2>
                    <p class="lead">We provide end-to-end support to ensure your retail technology investments deliver optimal performance and value.</p>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-md-4 mb-4">
                        <div class="service-card text-center">
                            @if($service->image)
                                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                            @endif
                            <h4>{{ $service->title }}</h4>
                            <p>{{ $service->description }}</p>
                            <a href="{{ route('service.show', $service->slug) }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Service Process -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Our Service Delivery Process</h2>
                    <p class="lead">A proven methodology that ensures successful implementation and ongoing success</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="process-step text-center">
                        <div class="process-icon mb-3">
                            <i class="fas fa-search fa-3x"></i>
                        </div>
                        <h5>1. Assessment</h5>
                        <p>Comprehensive evaluation of your current systems and business requirements</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="process-step text-center">
                        <div class="process-icon mb-3">
                            <i class="fas fa-cogs fa-3x"></i>
                        </div>
                        <h5>2. Planning</h5>
                        <p>Detailed project planning and timeline development</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="process-step text-center">
                        <div class="process-icon mb-3">
                            <i class="fas fa-tools fa-3x"></i>
                        </div>
                        <h5>3. Implementation</h5>
                        <p>Professional installation and configuration with minimal disruption</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="process-step text-center">
                        <div class="process-icon mb-3">
                            <i class="fas fa-headset fa-3x"></i>
                        </div>
                        <h5>4. Support</h5>
                        <p>Ongoing support and optimization to maximize ROI</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Categories -->
    {{-- <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Service Categories</h2>
                    <p class="lead">Specialized services tailored to your specific needs</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="service-card">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="/images/c.jpg" alt="Loss Prevention Services" class="img-fluid rounded" style="height: 150px; object-fit: cover; width: 100%;">
                            </div>
                            <div class="col-md-8">
                                <h4>Loss Prevention Services</h4>
                                <p>Specialized services for implementing and optimizing loss prevention solutions.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>EAS System Installation</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Video Analytics Setup</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Shrink Analysis</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="service-card">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="/images/c.jpg" alt="Inventory Management Services" class="img-fluid rounded" style="height: 150px; object-fit: cover; width: 100%;">
                            </div>
                            <div class="col-md-8">
                                <h4>Inventory Management Services</h4>
                                <p>Expert services for RFID and inventory intelligence solutions.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>RFID Implementation</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Inventory Optimization</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Supply Chain Integration</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="service-card">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="/images/c.jpg" alt="Analytics Services" class="img-fluid rounded" style="height: 150px; object-fit: cover; width: 100%;">
                            </div>
                            <div class="col-md-8">
                                <h4>Analytics Services</h4>
                                <p>Data analytics and business intelligence services to maximize insights.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>Traffic Analytics Setup</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Performance Reporting</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Business Intelligence</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="service-card">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="/images/c.jpg" alt="Consulting Services" class="img-fluid rounded" style="height: 150px; object-fit: cover; width: 100%;">
                            </div>
                            <div class="col-md-8">
                                <h4>Consulting Services</h4>
                                <p>Strategic consulting to optimize your retail technology investments.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>Technology Assessment</li>
                                    <li><i class="fas fa-check text-success me-2"></i>ROI Analysis</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Best Practices</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Call to Action -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Ready to Secure Your Premises?</h2>
                    <p class="lead">Consult with our security specialists to design a customized access control solution tailored to your facility's unique requirements.</p>
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg me-3">Get a Free Security Audit</a>
                    {{-- <a href="#" class="btn btn-outline-light btn-lg">Download Service Catalog</a> --}}
                </div>
            </div>
        </div>
    </section>
@endsection 