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
            --accent-color: #ff6600;
            --sidebar-bg: #f8f9fa;
            --sidebar-border: #e5e7eb;
            --sidebar-icon: #6c757d;
            --sidebar-text: #222;
            --sidebar-active-bg: #eaf1fb;
            --sidebar-active-text: var(--primary-color);
            --sidebar-hover-bg: #f1f3f7;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            /* background: linear-gradient(135deg, #f6f8fa 0%, #eaf1fb 100%); */
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

        /* Multi-level dropdown styles */
        .multi-level-dropdown .dropdown-menu {
            left: 100%;
            top: 0;
            margin-top: -1px;
            display: none;
            position: absolute;
            min-width: 220px;
            z-index: 9999;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .multi-level-dropdown .dropdown-submenu:hover > .dropdown-menu {
            display: block;
            right: auto;
            left: 100%;
        }
        .multi-level-dropdown .dropdown-submenu {
            position: relative;
        }
        /* If submenu would go off the right edge, show to the left */
        .multi-level-dropdown .dropdown-menu {
            right: auto;
        }
        @media (max-width: 991.98px) {
            .multi-level-dropdown .dropdown-menu {
                position: static !important;
                left: 0 !important;
                top: 100% !important;
                box-shadow: none;
                min-width: 100%;
            }
        }

        /* Remove margin-left from dropdown-menu for correct submenu alignment */
        /* .navbar-expand-lg .navbar-nav .dropdown-menu {
            margin-left: 53%;
        } */

        .navbar-nav .dropdown-menu {
            min-width: 220px;
        }
        .admin-content-bg {
            background: linear-gradient(120deg, #f6f8fa 60%, #eaf1fb 100%);
            min-height: 100vh;
        }
        /* Admin Sidebar Styles */
        .admin-sidebar {
            background: var(--sidebar-bg);
            color: var(--sidebar-text);
            min-height: 100vh;
            width: 230px;
            box-shadow: 2px 0 16px 0 #0001;
            border-right: 1.5px solid var(--sidebar-border);
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            border-radius: 0;
            position: relative;
        }
        .admin-sidebar .navbar-brand {
            color: var(--primary-color) !important;
            font-size: 1.5rem;
            letter-spacing: 1px;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        .admin-sidebar .nav-link {
            color: var(--sidebar-text);
            font-weight: 500;
            border-radius: 8px;
            margin-bottom: 4px;
            transition: background 0.18s, color 0.18s;
            padding: 10px 18px;
            display: flex;
            align-items: center;
            font-size: 1.05rem;
        }
        .admin-sidebar .nav-link.active, .admin-sidebar .nav-link:focus {
            background: var(--sidebar-active-bg);
            color: var(--sidebar-active-text) !important;
            font-weight: 700;
        }
        .admin-sidebar .nav-link:hover {
            background: var(--sidebar-hover-bg);
            color: var(--primary-color) !important;
        }
        .admin-sidebar .nav-link i {
            margin-right: 14px;
            font-size: 1.18rem;
            color: var(--sidebar-icon);
        }
        .admin-sidebar .logout-section {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            margin-top: 0;
        }
        .admin-sidebar .btn-danger {
            border-radius: 0 0 12px 12px;
            margin: 0;
            font-weight: 600;
            font-size: 1.05rem;
            box-shadow: none;
            padding: 16px 0;
            background: #d43c2c;
            color: #fff;
            border: none;
            transition: background 0.18s, color 0.18s;
        }
        .admin-sidebar .btn-danger:hover {
            background: #b92d1f;
            color: #fff;
        }
        /* Admin Topbar */
        .admin-topbar {
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            height: 64px;
            display: flex;
            align-items: center;
        }
        .admin-topbar .navbar-brand {
            font-size: 1.2rem;
            color: var(--primary-color);
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        .admin-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--accent-color);
            margin-left: 10px;
            background: #fff;
        }
        .admin-topbar .nav-link {
            font-weight: 600;
            font-size: 1.05rem;
            color: #222;
        }
        /* Admin Card Styles */
        .admin-card {
            border-radius: 14px;
            box-shadow: 0 4px 18px rgba(24,28,47,0.10);
            border-left: 4px solid var(--accent-color);
            background: #fff;
            transition: box-shadow 0.18s, transform 0.18s;
        }
        .admin-card:hover {
            box-shadow: 0 8px 32px rgba(24,28,47,0.13);
            transform: translateY(-2px) scale(1.01);
        }
        @media (max-width: 991px) {
            .admin-sidebar {
                border-radius: 0;
            }
        }
    </style>
</head>
<body>
@if (request()->is('admin*'))
    <div class="d-flex" style="min-height: 100vh;">
        <!-- Sidebar -->
        <nav class="admin-sidebar shadow-sm p-0">
            <div>
                <div class="p-4 border-bottom border-0">
                    <a href="{{ route('admin.dashboard') }}" class="navbar-brand d-block mb-3">Admin Panel</a>
                </div>
                <ul class="nav flex-column px-2">
                    <li class="nav-item mb-1">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active fw-bold' : '' }}">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a href="{{ route('services.index') }}" class="nav-link {{ request()->routeIs('services.*') ? 'active fw-bold' : '' }}">
                            <i class="fas fa-cogs"></i> Services
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a href="{{ route('solutions.admin.solutions.index') }}" class="nav-link {{ request()->routeIs('solutions.admin.solutions.*') ? 'active fw-bold' : '' }}">
                            <i class="fas fa-lightbulb"></i> Solutions
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a href="{{ route('admin.contact-info.edit') }}" class="nav-link {{ request()->routeIs('admin.contact-info.edit') ? 'active fw-bold' : '' }}">
                            <i class="fas fa-address-book"></i> Contact Info
                        </a>
                    </li>
                </ul>
            </div>
            <div class="logout-section">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100"><i class="fas fa-sign-out-alt me-2"></i>Logout</button>
                </form>
            </div>
        </nav>
        <!-- Main Content -->
        <div class="flex-grow-1 admin-content-bg">
            <!-- Topbar -->
            <nav class="admin-topbar navbar navbar-expand navbar-light px-4">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h4">@yield('title', 'Dashboard')</span>
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <span class="nav-link d-flex align-items-center">
                                <i class="fas fa-user-circle fa-lg me-1"></i> <span style="font-weight:700;letter-spacing:0.5px;">Admin</span>
                                <img src="https://ui-avatars.com/api/?name=Admin&background=ff6600&color=fff" class="admin-avatar ms-2" alt="Admin Avatar">
                            </span>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="p-4">
                @yield('content')
            </main>
        </div>
    </div>
@else
    <!-- Original layout for non-admin pages -->
    <!-- Top Utility Bar -->
    <div class="utility-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <a href="{{ route('contact') }}">How to Buy</a>
                    <a href="{{ route('contact') }}">Support and Service</a>
                   
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
                        <ul class="dropdown-menu multi-level-dropdown">
                            @foreach($navbarSolutions as $category => $subcats)
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">{{ $category }}</a>
                                    <ul class="dropdown-menu">
                                        @foreach($subcats as $subcategory => $solutions)
                                            @if($subcategory && $subcategory !== '')
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item dropdown-toggle" href="#">{{ $subcategory }}</a>
                                                    <ul class="dropdown-menu">
                                                        @foreach($solutions as $solution)
                                                            <li><a class="dropdown-item" href="{{ route('solution.show', $solution->slug) }}">{{ $solution->title }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @else
                                                @foreach($solutions as $solution)
                                                    <li><a class="dropdown-item" href="{{ route('solution.show', $solution->slug) }}">{{ $solution->title }}</a></li>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
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
                        <li><a href="{{ route('blog') }}" class="text-white-50 text-decoration-none">Blogs</a></li>
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
@endif
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 