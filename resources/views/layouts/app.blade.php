<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aradhya Infotech - @yield('title', 'Home')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/images/logo.png">
    <style>
        :root {
            --primary-color: #003366;
            --secondary-color: #0066cc;
            --accent-color: #ff6600;
            --dark-gray: #333333;
            --light-gray: #f8f9fa;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
        }

        /* Top Utility Bar */
        .utility-bar {
            background: var(--primary-color);
            color: white;
            padding: 8px 0;
            font-size: 14px;
        }

        .utility-bar a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        .utility-bar a:hover {
            color: var(--accent-color);
        }

        .region-selector {
            background: var(--secondary-color);
            color: white;
            padding: 5px 15px;
            border: none;
            border-radius: 3px;
            font-size: 12px;
        }

        /* Main Navigation */
        .main-navbar {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 15px 0;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 24px;
            color: var(--primary-color) !important;
        }

        .navbar-nav .nav-link {
            color: var(--dark-gray) !important;
            font-weight: 500;
            padding: 10px 15px !important;
            position: relative;
        }

        .navbar-nav .nav-link:hover {
            color: var(--secondary-color) !important;
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-radius: 8px;
            padding: 15px 0;
        }

        .dropdown-item {
            padding: 8px 25px;
            color: var(--dark-gray);
        }

        .dropdown-item:hover {
            background: var(--light-gray);
            color: var(--secondary-color);
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('/images/c.jpg') center/cover;
            opacity: 0.1;
            z-index: 1;
        }

        .hero-section .container {
            position: relative;
            z-index: 2;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero-section h2 {
            font-size: 1.8rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        /* Buttons */
        .btn-primary {
            background: var(--accent-color);
            border-color: var(--accent-color);
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background: #e55a00;
            border-color: #e55a00;
        }

        .btn-secondary {
            background: transparent;
            border: 2px solid white;
            color: white;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 5px;
        }

        .btn-secondary:hover {
            background: white;
            color: var(--primary-color);
        }

        /* Cards */
        .solution-card, .service-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #e9ecef;
        }

        .solution-card:hover, .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .resource-card {
            border: 1px solid #e9ecef;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .resource-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        /* Footer */
        .footer {
            background: var(--dark-gray);
            color: white;
            padding: 60px 0 30px;
        }

        .footer h5, .footer h6 {
            color: white;
            margin-bottom: 20px;
        }

        .footer a {
            color: #ccc;
            text-decoration: none;
        }

        .footer a:hover {
            color: var(--accent-color);
        }

        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: var(--secondary-color);
            color: white;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            transition: background 0.3s ease;
        }

        .social-links a:hover {
            background: var(--accent-color);
        }

        /* Contact Cards */
        .contact-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
        }

        .contact-icon {
            color: var(--primary-color);
        }

        /* Office Cards */
        .office-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid var(--accent-color);
            margin-bottom: 15px;
        }

        /* Team Cards */
        .team-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
        }

        .team-avatar {
            color: var(--primary-color);
        }

        /* Stats */
        .stat-item h3 {
            font-size: 3rem;
            font-weight: 700;
        }

        /* Process Steps */
        .process-step {
            padding: 20px;
        }

        .process-icon {
            color: var(--primary-color);
        }

        /* Contact Options */
        .contact-option {
            padding: 30px 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .hero-section h2 {
                font-size: 1.4rem;
            }
        }
    </style>
</head>
<body>
    <!-- Top Utility Bar -->
    <div class="utility-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <a href="{{ route('contact') }}">How to Buy</a>
                    <a href="{{ route('contact') }}">Support and Service</a>
                    <a href="{{ route('contact') }}">Media Center</a>
                    <a href="{{ route('contact') }}">Become a Partner</a>
                </div>
                <div class="col-md-6 text-end">
                    <span class="me-3">IN | EN</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg main-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/images/logo.png" alt="Aradhya Infotech Logo" style="height: 40px; width: auto;" class="align-middle">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Solutions
                        </a>
                        <ul class="dropdown-menu">
                            <li><h6 class="dropdown-header">Loss Prevention & Liability</h6></li>
                            <li><a class="dropdown-item" href="{{ route('solutions') }}#overview">Overview</a></li>
                            <li><a class="dropdown-item" href="{{ route('solutions') }}#electronic-surveillance">Electronic Article Surveillance</a></li>
                            <li><a class="dropdown-item" href="{{ route('solutions') }}#store-compliance">Store Compliance</a></li>
                            <li><a class="dropdown-item" href="{{ route('solutions') }}#merchandise-protection">Merchandise Protection</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><h6 class="dropdown-header">Inventory Intelligence</h6></li>
                            <li><a class="dropdown-item" href="{{ route('solutions') }}#inventory-visibility">Inventory Visibility</a></li>
                            <li><a class="dropdown-item" href="{{ route('solutions') }}#storefront-visibility">Storefront Visibility</a></li>
                            <li><a class="dropdown-item" href="{{ route('solutions') }}#supply-chain">Supply Chain Intelligence</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><h6 class="dropdown-header">Traffic Insights</h6></li>
                            <li><a class="dropdown-item" href="{{ route('solutions') }}#shopper-journey">Shopper Journey</a></li>
                            <li><a class="dropdown-item" href="{{ route('solutions') }}#analytics">ShopperTrak Analytics</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Resources
                        </a>
                        <ul class="dropdown-menu">
                            <li><h6 class="dropdown-header">Media</h6></li>
                            <li><a class="dropdown-item" href="{{ route('resources') }}">All Resources</a></li>
                            <li><a class="dropdown-item" href="{{ route('resources', ['type' => 'Case Study']) }}">Case Studies</a></li>
                            <li><a class="dropdown-item" href="{{ route('resources', ['type' => 'Article']) }}">Articles</a></li>
                            <li><a class="dropdown-item" href="{{ route('resources', ['type' => 'eBook']) }}">eBooks</a></li>
                            <li><a class="dropdown-item" href="{{ route('resources', ['type' => 'Video']) }}">Videos</a></li>
                            <li><a class="dropdown-item" href="{{ route('resources', ['type' => 'White Paper']) }}">White Papers</a></li>
                            <li><a class="dropdown-item" href="{{ route('resources', ['type' => 'Webinar']) }}">Webinars</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            About Us
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('about') }}">Overview</a></li>
                            <li><a class="dropdown-item" href="{{ route('about') }}#leadership">Leadership Team</a></li>
                            <li><a class="dropdown-item" href="{{ route('about') }}#partnerships">Partnerships & Alliances</a></li>
                            <li><a class="dropdown-item" href="{{ route('about') }}#customers">Our Customers</a></li>
                            <li><a class="dropdown-item" href="{{ route('about') }}#sustainability">Sustainability</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="footer mt-5 pt-5 pb-3 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center mb-4">
                <div class="col-md-3 text-center text-md-start mb-3 mb-md-0">
                    <img src="/images/logo.png" alt="Aradhya Infotech Logo" style="height:48px;">
                    <h5 class="mt-2 mb-0 fw-bold">Aradhya Infotech</h5>
                </div>
                <div class="col-md-3 text-center text-md-start mb-3 mb-md-0">
                    <h6 class="fw-bold">Contact</h6>
                    <p class="mb-1"><i class="fas fa-phone-alt me-2"></i>+91-9999881758</p>
                    <p class="mb-1"><i class="fas fa-envelope me-2"></i>info@aradhyainfotech.com</p>
                    <p class="mb-1"><i class="fas fa-map-marker-alt me-2"></i>198 A BASEMENT, SANT NAGAR EAST OF KAILASH, NEW DELHI, DL 110065</p>
                </div>
                <div class="col-md-3 text-center text-md-start mb-3 mb-md-0">
                    <h6 class="fw-bold">Quick Links</h6>
                    <ul class="list-unstyled mb-0">
                        <li><a href="/" class="text-white-50 text-decoration-none">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-white-50 text-decoration-none">About</a></li>
                        <li><a href="{{ route('services') }}" class="text-white-50 text-decoration-none">Services</a></li>
                        <li><a href="{{ route('solutions') }}" class="text-white-50 text-decoration-none">Solutions</a></li>
                        <li><a href="{{ route('resources') }}" class="text-white-50 text-decoration-none">Resources</a></li>
                        <li><a href="{{ route('contact') }}" class="text-white-50 text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3 text-center text-md-start">
                    <h6 class="fw-bold">Follow Us</h6>
                    <div class="d-flex justify-content-center justify-content-md-start gap-2">
                        <a href="https://wa.me/919999881758" class="btn btn-outline-light btn-sm rounded-circle" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.linkedin.com/company/aradhyainfotech/" class="btn btn-outline-light btn-sm rounded-circle" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://facebook.com/aradhyainfotech" class="btn btn-outline-light btn-sm rounded-circle" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/aradhyainfotech" class="btn btn-outline-light btn-sm rounded-circle" target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <hr class="border-secondary">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                    <small>&copy; 2025 Aradhya Infotech. All Rights Reserved.</small>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="{{ route('about') }}#privacy" class="text-white-50 text-decoration-none me-3">Privacy Policy</a>
                    <a href="{{ route('about') }}#terms" class="text-white-50 text-decoration-none">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 