@extends('layouts.app')

@section('title', 'Solutions')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Solutions That Power Accurate Decision-Making</h1>
                    <h2>Across the Retail Enterprise</h2>
                    <p class="lead">Our suite of solutions is designed to turn data into insights and insights into strategic, impactful actions.</p>
                </div>
                <div class="col-md-6">
                    <img src="/images/c.jpg" alt="Retail Solutions" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Navigation -->
    <section class="py-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills justify-content-center" id="solutionsTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="loss-prevention-tab" data-bs-toggle="pill" data-bs-target="#loss-prevention" type="button" role="tab">
                                <i class="fas fa-shield-alt me-2"></i>Loss Prevention & Liability
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="inventory-tab" data-bs-toggle="pill" data-bs-target="#inventory-intelligence" type="button" role="tab">
                                <i class="fas fa-chart-line me-2"></i>Inventory Intelligence
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="traffic-tab" data-bs-toggle="pill" data-bs-target="#traffic-insights" type="button" role="tab">
                                <i class="fas fa-users me-2"></i>Traffic Insights
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Content -->
    <section class="py-5">
        <div class="container">
            <div class="tab-content" id="solutionsTabContent">
                <!-- Loss Prevention & Liability -->
                <div class="tab-pane fade show active" id="loss-prevention" role="tabpanel">
                    <div class="row">
                        <div class="col-12 text-center mb-5">
                            <h2>Loss Prevention & Liability</h2>
                            <p class="lead">Our innovative solutions are designed to help retailers protect their merchandise, prevent shrink and fight the threats posed by retail crime—while still delivering a frictionless experience for shoppers.</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="solution-card">
                                <img src="/images/c.jpg" alt="Electronic Article Surveillance" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                                <h4>Electronic Article Surveillance</h4>
                                <p>Advanced detection systems that help prevent theft while maintaining a seamless shopping experience.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>Detachers and Deactivators</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Detection Systems</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Real-time Alerts</li>
                                </ul>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="solution-card">
                                <img src="/images/c.jpg" alt="Store Compliance" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                                <h4>Store Compliance</h4>
                                <p>Ensure your stores meet all regulatory requirements and maintain operational standards.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>Food Safety Monitoring</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Regulatory Compliance</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Audit Support</li>
                                </ul>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="solution-card">
                                <img src="/images/c.jpg" alt="Merchandise Protection" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                                <h4>Merchandise Protection</h4>
                                <p>Comprehensive protection solutions for your merchandise across the supply chain.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>Hard Tags</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Labels</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Safers and Wraps</li>
                                </ul>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="solution-card">
                                <img src="/images/c.jpg" alt="Shrink Visibility" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                                <h4>Shrink Visibility</h4>
                                <p>Advanced analytics to identify and prevent shrink before it impacts your bottom line.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>Shrink Analyzer</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Predictive Analytics</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Real-time Monitoring</li>
                                </ul>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Inventory Intelligence -->
                <div class="tab-pane fade" id="inventory-intelligence" role="tabpanel">
                    <div class="row">
                        <div class="col-12 text-center mb-5">
                            <h2>Inventory Intelligence</h2>
                            <p class="lead">We provide inventory visibility that helps maximize revenue and enables a more personalized and enhanced customer experience.</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="solution-card">
                                <img src="/images/c.jpg" alt="Inventory Visibility" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                                <h4>Inventory Visibility</h4>
                                <p>Get a heightened, item-level view of your inventory across the enterprise, helping to enable Unified Commerce.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>Real-time Inventory Tracking</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Multi-location Management</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Automated Replenishment</li>
                                </ul>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="solution-card">
                                <img src="/images/c.jpg" alt="Storefront Visibility" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                                <h4>Storefront Visibility</h4>
                                <p>Advanced RFID and sensor technology for complete storefront monitoring and management.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>AM/RFID Exit Systems</li>
                                    <li><i class="fas fa-check text-success me-2"></i>POS RFID Systems</li>
                                    <li><i class="fas fa-check text-success me-2"></i>RFID Sensors</li>
                                </ul>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="solution-card">
                                <img src="/images/c.jpg" alt="Fitting Room Visibility" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                                <h4>Fitting Room Visibility</h4>
                                <p>Track merchandise movement in fitting rooms to improve customer experience and reduce loss.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>Real-time Tracking</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Customer Analytics</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Inventory Management</li>
                                </ul>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="solution-card">
                                <img src="/images/c.jpg" alt="Supply Chain Intelligence" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                                <h4>Supply Chain Intelligence</h4>
                                <p>End-to-end visibility across your supply chain for better decision making and efficiency.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>RFID Service Bureau</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Supply Chain Analytics</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Performance Monitoring</li>
                                </ul>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Traffic Insights -->
                <div class="tab-pane fade" id="traffic-insights" role="tabpanel">
                    <div class="row">
                        <div class="col-12 text-center mb-5">
                            <h2>Traffic Insights</h2>
                            <p class="lead">When you understand shopper traffic patterns, you can predict and prepare for them, ultimately getting the most from marketing, merchandising and labor.</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="solution-card">
                                <img src="/images/c.jpg" alt="Shopper Journey" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                                <h4>Shopper Journey</h4>
                                <p>Understand and optimize the complete customer journey from entry to purchase.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>Shopper Mobility</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Shopper Views & Demographics</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Journey Mapping</li>
                                </ul>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="solution-card">
                                <img src="/images/c.jpg" alt="ShopperTrak Analytics" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                                <h4>ShopperTrak Analytics for Retailers</h4>
                                <p>Advanced analytics platform designed specifically for retail traffic and conversion optimization.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>Market Benchmarks</li>
                                    <li><i class="fas fa-check text-success me-2"></i>People Counting</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Brand Vitality Meter</li>
                                </ul>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="solution-card">
                                <img src="/images/c.jpg" alt="Occupancy Solutions" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                                <h4>Occupancy Solutions</h4>
                                <p>Manage store capacity and ensure compliance with occupancy regulations.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>Real-time Occupancy Monitoring</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Employee Exclusion</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Compliance Reporting</li>
                                </ul>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="solution-card">
                                <img src="/images/c.jpg" alt="Shopping Center Analytics" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                                <h4>ShopperTrak Analytics for Shopping Centers</h4>
                                <p>Comprehensive analytics for shopping center operators to optimize tenant performance.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>Center-wide Analytics</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Tenant Performance</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Occupancy Management</li>
                                </ul>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Ready to Transform Your Retail Operations?</h2>
                    <p class="lead">Connect with our experts to learn how our solutions can help your business</p>
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg me-3">Contact Us</a>
                    <a href="{{ route('resources') }}" class="btn btn-outline-light btn-lg">View Case Studies</a>
                </div>
            </div>
        </div>
    </section>
@endsection 