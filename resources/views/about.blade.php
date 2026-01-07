@extends('layouts.app')

@section('title', 'About | Al Aman Trust')

@section('content')
<section class="section">
    <div class="section-header animate-on-scroll">
        <span class="gold" style="text-transform: uppercase; letter-spacing: 2px; font-weight: 700;">Our Purpose</span>
        <h2 class="serif">Commitment to <span class="gold">Trust</span></h2>
        <p>Tailored Corporate & Private Wealth Solutions to meet your aspirations & faith.</p>
    </div>

    <div class="grid" style="grid-template-columns: 1fr 1fr; gap: 6rem; align-items: center;">
        <div class="animate-on-scroll">
            <img src="{{ asset('images/hero.png') }}" alt="About Al Aman Trust" style="width: 100%; border-radius: 20px; box-shadow: 20px 20px 0 var(--primary-gold);">
        </div>
        <div class="animate-on-scroll">
            <h3 class="serif" style="font-size: 2rem; margin-bottom: 1.5rem;">Building lasting success <span class="gold">Guided by values</span></h3>
            <p>At Al Aman Trust, we recognize the challenges of today’s dynamic business environment and deliver customized solutions to address your unique needs.</p>
            <p style="margin-top: 1.5rem;">Our mission is to empower businesses and clients with ethical, compliant options while fostering a culture of trust and integrity. With a team of experts passionate about Shariah compliance, we focus on understanding your unique needs and delivering exceptional support.</p>
            <div style="margin-top: 3rem; padding: 2rem; background: var(--bg-dark); color: white; border-radius: 12px;">
                <h4 class="serif" style="margin-bottom: 1rem;">Secure Your Family's Legacy</h4>
                <p style="font-size: 0.95rem; opacity: 0.8;">We pave the way for sustainable growth and success in a rapidly changing business landscape through faith-based excellence.</p>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background: white;">
    <div style="max-width: 800px; margin: 0 auto; text-align: center;" class="animate-on-scroll">
        <h2 class="serif">Our Fundamental <span class="gold">Values</span></h2>
        <div class="grid" style="grid-template-columns: repeat(3, 1fr); gap: 2rem; margin-top: 4rem;">
            <div>
                <h3 class="gold">Integrity</h3>
                <p>Upholding the highest ethical standards in every transaction.</p>
            </div>
            <div>
                <h3 class="gold">Excellence</h3>
                <p>Delivering superior quality in consulting and fund management.</p>
            </div>
            <div>
                <h3 class="gold">Faith</h3>
                <p>Ensuring every decision is guided by Shariah principles.</p>
            </div>
        </div>
    </div>
</section>
@endsection
