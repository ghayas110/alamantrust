@extends('layouts.app')

@section('title', 'Services | Al Aman Trust')

@section('content')
<section class="section">
    <div class="section-header animate-on-scroll">
        <span class="gold" style="text-transform: uppercase; letter-spacing: 2px; font-weight: 700;">Expertise</span>
        <h2 class="serif">Our specialized <span class="gold">solutions</span></h2>
        <p>Whether you are a startup or an established entity, our approach focuses on maximizing your growth potential while ensuring compliance with ethical standards.</p>
    </div>

    <div class="services-vertical">
        <div class="service-row animate-on-scroll">
            <div class="service-content">
                <h3 class="serif gold">Corporate Solutions</h3>
                <p>We recognize the challenges of today’s dynamic business environment and deliver customized solutions to address your unique needs. From incorporation to ongoing compliance, we are your partner in success.</p>
                <ul class="service-list">
                    <li>Company Formation</li>
                    <li>Regulatory Compliance</li>
                    <li>Strategic Consulting</li>
                </ul>
            </div>
            <div class="service-image-container">
                <img src="{{ asset('images/service-1.png') }}" alt="Corporate Solutions" class="service-img">
                <div class="img-overlay"></div>
            </div>
        </div>

        <div class="service-row animate-on-scroll reverse">
            <div class="service-content">
                <h3 class="serif gold">Fund Services</h3>
                <p>Rest assured that you are with a team that has deep expertise across a wide range of fund structures, with experience spanning fund setup, closings, investments, and realizations.</p>
                <ul class="service-list">
                    <li>Fund Setup & Structuring</li>
                    <li>Investment Realization</li>
                    <li>Shariah Board Coordination</li>
                </ul>
            </div>
            <div class="service-image-container">
                <img src="{{ asset('images/service-2.png') }}" alt="Fund Services" class="service-img">
                <div class="img-overlay"></div>
            </div>
        </div>

        <div class="service-row animate-on-scroll">
            <div class="service-content">
                <h3 class="serif gold">Private Client Advisory</h3>
                <p>Personalized support and insights that make managing your wealth not only compliant but also effective. We help you secure your family's legacy for generations to come.</p>
                <ul class="service-list">
                    <li>Succession Planning</li>
                    <li>Wealth Preservation</li>
                    <li>Ethical Philanthropy</li>
                </ul>
            </div>
            <div class="service-image-container">
                <img src="{{ asset('images/service-3.png') }}" alt="Private Client Advisory" class="service-img">
                <div class="img-overlay"></div>
            </div>
        </div>
    </div>
</section>

<style>
    .services-vertical {
        display: flex;
        flex-direction: column;
        gap: 6rem;
    }

    .service-row {
        display: flex;
        align-items: center;
        gap: 4rem;
        background: white;
        padding: 4rem;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.03);
        transition: all 0.5s ease;
        overflow: hidden;
    }

    .service-row:hover {
        transform: scale(1.02);
        box-shadow: 0 30px 60px rgba(0,0,0,0.06);
    }

    .service-row.reverse {
        flex-direction: row-reverse;
    }

    .service-content {
        flex: 1;
    }

    .service-content h3 {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
    }

    .service-content p {
        font-size: 1.1rem;
        color: #52525B;
        margin-bottom: 2rem;
    }

    .service-list {
        list-style: none;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
    }

    .service-list li::before {
        content: "•";
        color: var(--primary-gold);
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
    }

    .service-image-container {
        flex: 1;
        height: 400px;
        position: relative;
        border-radius: 12px;
        overflow: hidden;
    }

    .service-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 1s ease;
    }

    .service-row:hover .service-img {
        transform: scale(1.1);
    }

    .img-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom right, rgba(197, 164, 115, 0.2), transparent);
    }

    @media (max-width: 900px) {
        .service-row, .service-row.reverse {
            flex-direction: column;
            padding: 2rem;
        }
        .service-image-container {
            width: 100%;
            height: 250px;
        }
    }
</style>
@endsection
