@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Contact Us</h1>
            <h2>Get in Touch</h2>
            <p class="lead">Ready to transform your retail operations? Our team is here to help you get started.</p>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="contact-card text-center">
                        <div class="contact-icon mb-3">
                            <i class="fas fa-phone fa-3x text-primary"></i>
                        </div>
                        <h5>Phone</h5>
                        <p class="mb-2">+91-9999881758</p>
                        <small class="text-muted">Sales and general inquiries</small>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="contact-card text-center">
                        <div class="contact-icon mb-3">
                            <i class="fas fa-envelope fa-3x text-primary"></i>
                        </div>
                        <h5>Email</h5>
                        <p class="mb-2">info@sensormatic.com</p>
                        <small class="text-muted">General inquiries</small>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="contact-card text-center">
                        <div class="contact-icon mb-3">
                            <i class="fas fa-headset fa-3x text-primary"></i>
                        </div>
                        <h5>Support</h5>
                        <p class="mb-2">24/7 Technical Support</p>
                        <small class="text-muted">Available worldwide</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form and Office Locations -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
               
                <div class="col-md-6">
                    <h3>Send us a Message</h3>
                    <p class="lead mb-4">Fill out the form below and we'll get back to you within 24 hours.</p>
                    
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label">First Name *</label>
                                <input type="text" class="form-control" id="firstName" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label">Last Name *</label>
                                <input type="text" class="form-control" id="lastName" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="company" class="form-label">Company</label>
                            <input type="text" class="form-control" id="company">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject *</label>
                            <select class="form-select" id="subject" required>
                                <option value="">Select a subject</option>
                                <option value="sales">Sales Inquiry</option>
                                <option value="support">Technical Support</option>
                                <option value="partnership">Partnership</option>
                                <option value="general">General Inquiry</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <section class="py-0">
                        <div class="container-fluid px-0">
                            <div style="width: 100%; height: 400px;">
                                <iframe src="https://www.google.com/maps?q=198+A+BASEMENT,+SANT+NAGAR+EAST+OF+KAILASH,+NEW+DELHI,+DL+110065&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Map Section -->
   

    <!-- Additional Contact Options -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Other Ways to Connect</h2>
                    <p class="lead">Choose the method that works best for you</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center mb-4">
                    <div class="contact-option">
                        <i class="fas fa-download fa-2x text-primary mb-3"></i>
                        <h5>Download Catalog</h5>
                        <p>Get our latest product catalog</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Download</a>
                    </div>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <div class="contact-option">
                        <i class="fas fa-calendar fa-2x text-primary mb-3"></i>
                        <h5>Schedule Demo</h5>
                        <p>Book a personalized demonstration</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Schedule</a>
                    </div>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <div class="contact-option">
                        <i class="fas fa-users fa-2x text-primary mb-3"></i>
                        <h5>Become a Partner</h5>
                        <p>Join our partner network</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
                    </div>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <div class="contact-option">
                        <i class="fas fa-briefcase fa-2x text-primary mb-3"></i>
                        <h5>Careers</h5>
                        <p>Join our growing team</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">View Jobs</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 