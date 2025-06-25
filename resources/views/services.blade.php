@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Professional Services</h1>
                    <h2>Expert Support for Your Retail Success</h2>
                    <p class="lead">From implementation to ongoing support, our team of experts ensures your Sensormatic solutions deliver maximum value and ROI.</p>
                </div>
                <div class="col-md-6">
                    <img src="/images/c.jpg" alt="Professional Services" class="img-fluid rounded">
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
                <div class="col-md-4 mb-4">
                    <div class="service-card text-center">
                        <img src="/images/c.jpg" alt="Implementation Services" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                        <h4>Implementation Services</h4>
                        <p>Expert installation and configuration of your Sensormatic solutions with minimal disruption to your operations.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-success me-2"></i>Site Assessment & Planning</li>
                            <li><i class="fas fa-check text-success me-2"></i>Professional Installation</li>
                            <li><i class="fas fa-check text-success me-2"></i>System Configuration</li>
                            <li><i class="fas fa-check text-success me-2"></i>Testing & Validation</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="service-card text-center">
                        <img src="/images/c.jpg" alt="Training & Education" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                        <h4>Training & Education</h4>
                        <p>Comprehensive training programs to ensure your team maximizes the value of your Sensormatic solutions.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-success me-2"></i>User Training Programs</li>
                            <li><i class="fas fa-check text-success me-2"></i>Administrator Training</li>
                            <li><i class="fas fa-check text-success me-2"></i>Best Practices Workshops</li>
                            <li><i class="fas fa-check text-success me-2"></i>Ongoing Education</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="service-card text-center">
                        <img src="/images/c.jpg" alt="Support & Maintenance" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                        <h4>Support & Maintenance</h4>
                        <p>24/7 technical support and proactive maintenance to keep your systems running at peak performance.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-success me-2"></i>24/7 Technical Support</li>
                            <li><i class="fas fa-check text-success me-2"></i>Preventive Maintenance</li>
                            <li><i class="fas fa-check text-success me-2"></i>Remote Monitoring</li>
                            <li><i class="fas fa-check text-success me-2"></i>Performance Optimization</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
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
    <section class="py-5 bg-light">
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
    </section>

    <!-- Support Options -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Support Options</h2>
                    <p class="lead">Choose the support level that best fits your business needs</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="contact-option text-center">
                        <i class="fas fa-phone fa-3x contact-icon mb-3"></i>
                        <h4>Basic Support</h4>
                        <p>Standard support during business hours with email and phone assistance.</p>
                        <ul class="list-unstyled">
                            <li>Business Hours Support</li>
                            <li>Email & Phone Support</li>
                            <li>Online Knowledge Base</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="contact-option text-center">
                        <i class="fas fa-headset fa-3x contact-icon mb-3"></i>
                        <h4>Premium Support</h4>
                        <p>Enhanced support with extended hours and priority response times.</p>
                        <ul class="list-unstyled">
                            <li>Extended Hours Support</li>
                            <li>Priority Response</li>
                            <li>Dedicated Support Team</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="contact-option text-center">
                        <i class="fas fa-shield-alt fa-3x contact-icon mb-3"></i>
                        <h4>Enterprise Support</h4>
                        <p>Comprehensive support with 24/7 availability and dedicated account management.</p>
                        <ul class="list-unstyled">
                            <li>24/7 Support</li>
                            <li>Dedicated Account Manager</li>
                            <li>Custom SLA</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary">Learn More</a>
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
                    <h2>Ready to Get Started?</h2>
                    <p class="lead">Contact our services team to discuss your specific needs and get a customized service plan</p>
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg me-3">Contact Services Team</a>
                    <a href="#" class="btn btn-outline-light btn-lg">Download Service Catalog</a>
                </div>
            </div>
        </div>
    </section>
@endsection 