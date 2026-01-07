@extends('layouts.app')

@section('title', 'Testimonials | Al Aman Trust')

@section('content')
<section class="section">
    <div class="section-header animate-on-scroll">
        <span class="gold" style="text-transform: uppercase; letter-spacing: 2px; font-weight: 700;">Client Success</span>
        <h2 class="serif">Voice of <span class="gold">Experience</span></h2>
        <p>Discover how we've helped businesses and families achieve their goals while staying true to their values.</p>
    </div>

    <div class="grid animate-on-scroll">
        <div class="testimonial-card">
            <span class="quote-icon">“</span>
            <p class="testimonial-text">Al Aman Trust provided us with exceptional guidance on Shariah-compliant investments that truly aligned with our values. Their team's expertise made the process seamless and trustworthy.</p>
            <div class="testimonial-author">Brandon Vega</div>
            <div class="testimonial-company">Ethical Investments Co.</div>
        </div>

        <div class="testimonial-card">
            <span class="quote-icon">“</span>
            <p class="testimonial-text">I appreciate the tailored business solutions Al Aman Trust offered us. Their commitment to Shariah compliance gave us the confidence we needed to move forward with our expansion plans.</p>
            <div class="testimonial-author">Chris Wei</div>
            <div class="testimonial-company">Global Corp.</div>
        </div>

        <div class="testimonial-card">
            <span class="quote-icon">“</span>
            <p class="testimonial-text">The private client advisory service was a game-changer for our family. They provided personalized support and insights that made managing our wealth not only compliant but also effective.</p>
            <div class="testimonial-author">Karen Weiss</div>
            <div class="testimonial-company">Family Holdings Ltd.</div>
        </div>
    </div>
</section>

<section class="section dark-section" style="text-align: center;">
    <div class="animate-on-scroll">
        <h2 class="serif" style="margin-bottom: 2rem;">Join our <span class="gold">network</span> of successful clients</h2>
        <a href="{{ route('contact') }}" class="btn">Start Your Consultation</a>
    </div>
</section>
@endsection
