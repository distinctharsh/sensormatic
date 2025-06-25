@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>About Sensormatic</h1>
            <h2>Leading the Future of Retail Technology</h2>
            <p class="lead">For over 50 years, Sensormatic has been at the forefront of retail innovation, helping retailers protect their merchandise, optimize operations, and enhance customer experiences.</p>
        </div>
    </section>

    <!-- Company Overview -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Our Mission</h2>
                    <p class="lead">To help retailers increase revenue, optimize labor, and reduce shrink through innovative technology solutions.</p>
                    <p>We provide comprehensive retail solutions that combine loss prevention, inventory intelligence, and traffic insights to deliver measurable business outcomes for our customers.</p>
                </div>
                <div class="col-md-6">
                    <h2>Our Vision</h2>
                    <p class="lead">To be the global leader in retail technology solutions that drive business transformation.</p>
                    <p>We envision a future where retailers have complete visibility into their operations, enabling data-driven decisions that maximize profitability and customer satisfaction.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Stats -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <div class="stat-item">
                        <h3 class="text-primary">50+</h3>
                        <p>Years of Innovation</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="stat-item">
                        <h3 class="text-primary">1M+</h3>
                        <p>Retail Locations</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="stat-item">
                        <h3 class="text-primary">150+</h3>
                        <p>Countries Served</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="stat-item">
                        <h3 class="text-primary">24/7</h3>
                        <p>Global Support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Team -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Leadership Team</h2>
                    <p class="lead">Meet the executives driving our mission forward</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="team-card text-center">
                        <div class="team-avatar mb-3">
                            <i class="fas fa-user-circle fa-4x text-primary"></i>
                        </div>
                        <h5>John Smith</h5>
                        <p class="text-muted">Chief Executive Officer</p>
                        <p>Leading Sensormatic's global strategy and innovation initiatives.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="team-card text-center">
                        <div class="team-avatar mb-3">
                            <i class="fas fa-user-circle fa-4x text-primary"></i>
                        </div>
                        <h5>Sarah Johnson</h5>
                        <p class="text-muted">Chief Technology Officer</p>
                        <p>Driving technological innovation and product development.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="team-card text-center">
                        <div class="team-avatar mb-3">
                            <i class="fas fa-user-circle fa-4x text-primary"></i>
                        </div>
                        <h5>Michael Brown</h5>
                        <p class="text-muted">Chief Operations Officer</p>
                        <p>Overseeing global operations and customer success.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sustainability -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Sustainability</h2>
                    <p class="lead">Committed to environmental responsibility and sustainable business practices.</p>
                    <p>We are dedicated to reducing our environmental footprint through sustainable product design, energy-efficient solutions, and responsible business practices that benefit our customers and the planet.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-success me-2"></i>Sustainable product design</li>
                        <li><i class="fas fa-check text-success me-2"></i>Energy-efficient solutions</li>
                        <li><i class="fas fa-check text-success me-2"></i>Responsible manufacturing</li>
                        <li><i class="fas fa-check text-success me-2"></i>Green packaging initiatives</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2>Partnerships & Alliances</h2>
                    <p class="lead">Strategic partnerships that enhance our solution capabilities.</p>
                    <p>We collaborate with leading technology providers and industry experts to deliver comprehensive solutions that address the evolving needs of modern retail.</p>
                    <div class="row">
                        <div class="col-6">
                            <h6>Technology Partners</h6>
                            <ul class="list-unstyled">
                                <li>• Microsoft</li>
                                <li>• Intel</li>
                                <li>• Lenovo</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <h6>Industry Alliances</h6>
                            <ul class="list-unstyled">
                                <li>• NRF</li>
                                <li>• RILA</li>
                                <li>• ECR</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Join Our Mission</h2>
                    <p class="lead">Partner with us to transform your retail operations</p>
                    <a href="#" class="btn btn-primary btn-lg">Contact Us</a>
                    <a href="#" class="btn btn-outline-primary btn-lg ms-2">Careers</a>
                </div>
            </div>
        </div>
    </section>
@endsection 