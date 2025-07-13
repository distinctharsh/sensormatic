@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>About EAS Security Systems</h1>
            <h2>Pioneering Smarter Perimeter Protection</h2>
            <p class="lead">For over a decade, EAS Security Systems has been revolutionizing physical security through cutting-edge access control solutions. We specialize in AI-powered gates, biometric turnstiles, and intelligent surveillance systems that protect critical infrastructure while ensuring seamless authorized access.</p>
        </div>
    </section>

    <!-- Company Overview -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Our Mission</h2>
                    <p class="lead">To empower organizations with unbreachable perimeter security, optimized access control, and intelligent surveillance through cutting-edge EAS gate solutions.</p>
                    <p>We deliver comprehensive security ecosystems that integrate AI-powered gates, biometric verification, and real-time monitoring to create measurable safety outcomes for high-risk facilities.</p>
                </div>
                <div class="col-md-6">
                    <h2>Our Vision</h2>
                    <p class="lead">To redefine global security standards through next-generation access control technologies.</p>
                    <p>We envision a future where every critical facility operates with:</p>
                    ✔ Zero unauthorized entry <br>
                    ✔ Frictionless authorized access <br>
                    ✔ AI-driven threat prediction <br>
                    ✔ Seamless security-operations integration <br>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Stats -->
    {{-- <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center justify-content-center align-items-center">
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <div class="stat-item">
                        <div class="display-4 fw-bold text-primary mb-2">50+</div>
                        <div class="fs-5">Years of Innovation</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <div class="stat-item">
                        <div class="display-4 fw-bold text-primary mb-2">1M+</div>
                        <div class="fs-5">Retail Locations</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <div class="stat-item">
                        <div class="display-4 fw-bold text-primary mb-2">150+</div>
                        <div class="fs-5">Countries Served</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="display-4 fw-bold text-primary mb-2">24/7</div>
                        <div class="fs-5">Global Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Leadership Team -->
    {{-- <section class="py-5">
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
    </section> --}}

    <!-- Sustainability -->
    

    <!-- Call to Action -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Join Our Security Revolution</h2>
                    <p class="lead">Upgrade to Unbreakable Perimeter Protection</p>
                    <a href="#" class="btn btn-primary btn-lg">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- <img src="/images/logo.png" alt="Logo" style="height: 40px; width: auto;" class="align-middle" onerror="this.style.display='none'; this.insertAdjacentHTML('afterend', '<span class=\'fw-bold\' style=\'color:#003366;font-size:24px\'>Logo</span>')"> --}}
@endsection 