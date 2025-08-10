@extends('master')
@section('content')


<section id="about" class="about about--wave section--gradient" style="background: linear-gradient(135deg, #27145a 0%, #251258 100%); padding: 80px 0;">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12">
                <h2 class="section__title section__title--white section__title--margin" style="font-size: 2.5rem; font-weight: 700; color: white; text-align: center; margin-bottom: 30px;">Contact us</h2>
            </div>
            <!-- end section title -->

            <div class="col-12">
                <!-- about text -->
                <div class="about__text" style="max-width: 800px; margin: 0 auto; color: rgba(255,255,255,0.9);" data-aos="fade-up" data-aos-duration="3000">
                    <p style="font-size: 1.1rem; line-height: 1.7;">
                        We’re here to help and answer any questions you may have. Feel free to reach out to us anytime using the contact information below, or send us a message through the form—we’d love to hear from you.
                    </p>
                </div>
                <!-- end about text -->
            </div>
        </div>
    </div>
</section>
<!-- Contact Section -->
<section id="contacts" class="section">
    <div class="container">
        <div class="row">
            <!-- Section Title -->
            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                <h2 class="section__title" data-aos="fade-up" data-aos-duration="3000">Get in Touch</h2>
               
            </div>

            <!-- Contact Information -->
            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-duration="3000">
                <div class="contacts">
                    <ul class="contacts__list">
                        <li>
                            <span>
                                <!-- Address Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="..."/>
                                </svg>
                            </span>
                            <p>The Prime Limited <br>32 Barnard St. #145, GA 80634</p>
                        </li>
                        <li>
                            <span>
                                <!-- Hours Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="..."/>
                                </svg>
                            </span>
                            <p>Working Hours: <br>Monday – Friday, 08:00 – 19:00</p>
                        </li>
                        <li>
                            <span>
                                <!-- Email Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="..."/>
                                </svg>
                            </span>
                            <a href="mailto:support@theprimelimited.com">support@theprimelimited.com</a>
                        </li>
                        <li>
                            <span>
                                <!-- Phone Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="..."/>
                                </svg>
                            </span>
                            <a href="tel:+18002345678">+1 800 234-5678</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-duration="3000">
                <form action="#" method="POST" class="form form--contacts">
                    @csrf
                    <input type="text" name="name" class="form__input" placeholder="Your Name" required>
                    <input type="email" name="email" class="form__input" placeholder="Your Email" required>
                    <input type="text" name="subject" class="form__input" placeholder="Subject">
                    <textarea name="message" class="form__textarea" rows="5" placeholder="Your Message" required></textarea>
                    <button type="submit" class="form__btn"><span>Send Message</span></button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
