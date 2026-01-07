@extends('layouts.app')

@section('title', 'Home | Al Aman Trust')

@section('content')
<section class="hero">
    <div class="hero-content animate-on-scroll">
        <h1 class="serif">Trust in <span class="gold">Excellence</span></h1>
        <p>Business and Wealth solutions in line with your faith and ethics. Empirically grounded, ethically driven.</p>
        <a href="{{ route('services') }}" class="btn">Explore Services</a>
    </div>
</section>

<section class="section">
    <div class="section-header animate-on-scroll">
        <h2 class="serif">Our commitment to <span class="gold">ethics</span></h2>
        <p>Al Aman Trust is dedicated to providing tailored corporate solutions that align with Shariah law. Our mission is to empower businesses and clients with ethical, compliant options while fostering a culture of trust and integrity.</p>
    </div>
    <div class="grid">
        <div class="card animate-on-scroll">
            <img src="{{ asset('images/service-1.png') }}" alt="Business Solutions" class="card-image">
            <div class="card-body">
                <h3>Tailored Business Solutions</h3>
                <p>Customized strategies designed to empower your business growth while maintaining strict Shariah compliance.</p>
            </div>
        </div>
        <div class="card animate-on-scroll" style="transition-delay: 0.1s;">
            <img src="{{ asset('images/service-2.png') }}" alt="Fund Services" class="card-image">
            <div class="card-body">
                <h3>Fund Services</h3>
                <p>Manage your investments ethically and efficiently with our expert fund administration and compliance team.</p>
            </div>
        </div>
        <div class="card animate-on-scroll" style="transition-delay: 0.2s;">
            <img src="{{ asset('images/service-3.png') }}" alt="Private Client" class="card-image">
            <div class="card-body">
                <h3>Private Client Advisory</h3>
                <p>Personalized guidance for your financial journey, ensuring your wealth management aligns with your values.</p>
            </div>
        </div>
    </div>
</section>

<section class="section dark-section">
    <div class="animate-on-scroll text-center" style="text-align: center;">
        <h2 class="serif" style="font-size: 3rem; margin-bottom: 2rem;">Ready to align your business with <span class="gold">faith?</span></h2>
        <a href="{{ route('contact') }}" class="btn">Get Started Today</a>
    </div>
</section>
@endsection
