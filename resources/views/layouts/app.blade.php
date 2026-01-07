<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Al Aman Trust')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Embedding some critical styles here to ensure they load immediately if needed, 
           but most will be in style.css */
    </style>
</head>
<body>
    <div class="app-container">
        <aside class="sidebar">
            <a href="{{ route('home') }}" class="logo">
                <span class="gold">AL AMAN</span> TRUST
            </a>
            <nav>
                <ul class="nav-links">
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                    <li><a href="{{ route('testimonials') }}" class="{{ request()->routeIs('testimonials') ? 'active' : '' }}">Testimonials</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>
            </nav>
            <div class="sidebar-footer">
                <p>&copy; {{ date('Y') }} Al Aman Trust</p>
                <div class="social-links">
                    <!-- Social icons could go here -->
                </div>
            </div>
        </aside>

        <main class="main-content">
            @yield('content')
            
            <footer class="site-footer">
                <div class="footer-grid">
                    <div>
                        <h3>Al Aman Trust</h3>
                        <p>Excellence in ethical consulting.</p>
                    </div>
                    <div>
                        <h3>Contact</h3>
                        <p>Riyadh, Saudi Arabia</p>
                        <p>+6087452100</p>
                    </div>
                </div>
            </footer>
        </main>
    </div>

    <script>
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('reveal');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach((el) => {
            observer.observe(el);
        });
    </script>
</body>
</html>
