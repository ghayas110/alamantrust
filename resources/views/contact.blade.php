@extends('layouts.app')

@section('title', 'Contact | Al Aman Trust')

@section('content')
<section class="section">
    <div class="section-header animate-on-scroll">
        <span class="gold" style="text-transform: uppercase; letter-spacing: 2px; font-weight: 700;">Connect</span>
        <h2 class="serif">We're here to <span class="gold">assist you</span></h2>
        <p>Reach out to our expert team for a confidential consultation regarding your business or wealth management needs.</p>
    </div>

    <div class="grid" style="grid-template-columns: 1.5fr 1fr; gap: 6rem;">
        <div class="animate-on-scroll">
            <form action="#" class="contact-form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required placeholder="Your full name">
                </div>
                <div class="grid" style="grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" id="email" name="email" required placeholder="email@example.com">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone number</label>
                        <input type="tel" id="phone" name="phone" placeholder="+123 456 789">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="6" required placeholder="How can we help you?"></textarea>
                </div>
                <div style="display: flex; align-items: flex-start; gap: 0.5rem; margin-bottom: 1rem;">
                    <input type="checkbox" id="consent" style="width: auto; margin-top: 0.3rem;" required>
                    <label for="consent" style="font-size: 0.85rem; color: #71717A;">I allow this website to store my submission so they can respond to my inquiry.*</label>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>

        <div class="animate-on-scroll">
            <div style="margin-bottom: 3rem;">
                <h3 class="serif gold" style="margin-bottom: 1rem;">Our Office</h3>
                <p>Riyadh, 01, SA</p>
                <p>Saudi Arabia</p>
            </div>
            <div style="margin-bottom: 3rem;">
                <h3 class="serif gold" style="margin-bottom: 1rem;">Direct Contact</h3>
                <p>Email: <a href="mailto:rizwan@rusdbank.com" style="color: inherit; text-decoration: none;">rizwan@rusdbank.com</a></p>
                <p>Phone: +6087452100</p>
            </div>
            <div>
                <h3 class="serif gold" style="margin-bottom: 1rem;">Business Hours</h3>
                <table style="width: 100%; font-size: 0.95rem; border-collapse: collapse;">
                    <tr style="border-bottom: 1px solid #E4E4E7;">
                        <td style="padding: 0.5rem 0;">Mon – Fri</td>
                        <td style="text-align: right;">9:00am – 10:00pm</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #E4E4E7;">
                        <td style="padding: 0.5rem 0;">Sat</td>
                        <td style="text-align: right;">9:00am – 6:00pm</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #E4E4E7;">
                        <td style="padding: 0.5rem 0;">Sun</td>
                        <td style="text-align: right;">9:00am – 12:00pm</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
