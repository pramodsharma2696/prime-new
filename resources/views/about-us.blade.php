@extends('master')
@section('content')
<!-- Hero About Section -->

<section id="about" class="about about--wave section--gradient" style="background: linear-gradient(135deg, #27145a 0%, #251258 100%); padding: 80px 0;">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12">
                <h2 class="section__title section__title--white section__title--margin" 
                style="font-size: 2.5rem; font-weight: 700; color: white; text-align: center; margin-bottom: 30px;">About us</h2>
            </div>
            <!-- end section title -->

            <div class="col-12">
                <!-- about text -->
                <div class="about__text" style="max-width: 800px; margin: 0 auto; color: rgba(255,255,255,0.9);" data-aos="fade-up" data-aos-duration="3000">
                    <p style="font-size: 1.1rem; line-height: 1.7;">
                       Empowering traders worldwide with secure, innovative solutions and unparalleled market expertise.
                    </p>
                </div>
                <!-- end about text -->
            </div>
        </div>
    </div>
</section>

<!-- Main About Content -->
<section id="about_company" class="py-6" style="padding: 100px 0; background-color: #fff;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-up" data-aos-duration="600">
                <div class="about-image-wrapper" style="position: relative; border-radius: 12px; overflow: hidden; box-shadow: 0 30px 60px rgba(0,86,179,0.15);">
                    <img src="{{ asset('images/new/5.jpg') }}" class="img-fluid" alt="About The Prime Limited" style="width: 100%; transition: transform 0.5s ease;">
                    <div class="image-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, rgba(0,86,179,0.1) 0%, rgba(0,86,179,0.3) 100%);"></div>
                </div>
            </div>
            <div class="col-lg-6 pl-lg-5" data-aos="fade-up" data-aos-duration="600">
                <h2 class="section-title" style="font-size: 2.5rem; font-weight: 700; color: #1a2980; margin-bottom: 25px; position: relative; display: inline-block;">
                    <span style="position: relative;">Who We Are
                        <span style="position: absolute; bottom: -10px; left: 0; width: 60px; height: 4px; background: linear-gradient(to right, #26d0ce, #1a2980); border-radius: 2px;"></span>
                    </span>
                </h2>
                <p class="about-text" style="font-size: 1.1rem; color: #555; line-height: 1.8; margin-bottom: 25px;">
                The Prime Limited is globally recognized, delivers secure and intuitive trading solutions designed to empower traders at every level. Committed to loyalty, transparency, and consistency, we focus on timely and profitable outcomes while providing exceptional client service worldwide.    
                </p>
                <p class="about-text" style="font-size: 1.1rem; color: #555; line-height: 1.8; margin-bottom: 30px;">
                Expertly curated, our platform offers a seamless and professional trading experience. Through an open and educational approach, we share proven strategies and market insights to help traders navigate the global financial landscape with confidence.
    
            </p>
                
            </div>
        </div>
    </div>
</section>

<!-- Core Values Section -->
<section id="our_brand" class="py-6 bg-light-values" style="padding: 100px 0; background: linear-gradient(135deg, #f8faff 0%, #f0f7ff 100%);">
    <div class="container">
        <div class="row justify-content-center mb-6 ourvalue">
            <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-duration="600">
                <h2 class="section-title" style="font-size: 2.5rem; font-weight: 700; color: #1a2980; margin-bottom: 15px; position: relative; display: inline-block;">
                    <span style="position: relative;">Our Core Values
                        <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(to right, #26d0ce, #1a2980); border-radius: 2px;"></span>
                    </span>
                </h2>
                <p class="section-subtitle" style="font-size: 1.1rem; color: #666; max-width: 700px; margin: 0 auto;">
                    The principles that guide every decision we make and every interaction we have
                </p>
            </div>
        </div>
        <div class="row">
            <!-- Value 1 -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="600">
                <div class="value-card" style="background: white; border-radius: 12px; padding: 30px; height: 100%; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: all 0.3s ease; border-top: 4px solid #26d0ce;">
                    <div class="value-icon" style="width: 70px; height: 70px; background: rgba(38,208,206,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
                        <img src="{{ asset('images/i1.png') }}" alt="Empowerment" width="40">
                    </div>
                    <h3 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 15px; color: #1a2980;">Empowerment</h3>
                    <p style="color: #666; line-height: 1.7; margin-bottom: 0;">
                        We empower our clients with the insights, tools, and confidence needed to make informed trading decisions and reach their financial objectives.
                    </p>

                </div>
            </div>
            <!-- Value 2 -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                <div class="value-card" style="background: white; border-radius: 12px; padding: 30px; height: 100%; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: all 0.3s ease; border-top: 4px solid #1a2980;">
                    <div class="value-icon" style="width: 70px; height: 70px; background: rgba(26,41,128,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
                        <img src="{{ asset('images/i2.png') }}" alt="Integrity" width="40">
                    </div>
                    <h3 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 15px; color: #1a2980;">Integrity</h3>
                    <p style="color: #666; line-height: 1.7; margin-bottom: 0;">
                        We uphold the highest standards of honesty and transparency, fostering trust through ethical conduct and open, clear communication in every relationship.
                    </p>

                </div>
            </div>
            <!-- Value 3 -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                <div class="value-card" style="background: white; border-radius: 12px; padding: 30px; height: 100%; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: all 0.3s ease; border-top: 4px solid #0056b3;">
                    <div class="value-icon" style="width: 70px; height: 70px; background: rgba(0,86,179,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
                        <img src="{{ asset('images/i3.png') }}" alt="Excellence" width="40">
                    </div>
                    <h3 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 15px; color: #1a2980;">Excellence</h3>
                    <p style="color: #666; line-height: 1.7; margin-bottom: 0;">
                        We are committed to excellence in every aspect—from platform performance to client support—continuously innovating to surpass expectations and deliver superior value.
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section --->
<section id="why_choose" class="py-6" style="padding: 100px 0; background-color: #fff;">
    <div class="container">
        <div class="row justify-content-center mb-6 ourvalue">
            <div class="col-lg-8 text-center">
                <h2 class="section-title" style="font-size: 2.5rem; font-weight: 700; color: #1a2980; margin-bottom: 15px; position: relative; display: inline-block;">
                    <span style="position: relative;">Why Choose The Prime Limited
                        <span style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 120px; height: 4px; background: linear-gradient(to right, #26d0ce, #1a2980); border-radius: 2px;"></span>
                    </span>
                </h2>
                <p class="section-subtitle" style="font-size: 1.1rem; color: #666; max-width: 700px; margin: 0 auto;">
                    Discover the competitive advantages that set us apart in the financial services industry
                </p>
            </div>
        </div>
        <div class="row">
            <!-- Feature 1 -->
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-duration="600">
                <div class="feature-card media p-4" style="background-color: #f8f9fa; border-radius: 12px; transition: all 0.3s ease; height: 100%; border-left: 4px solid #26d0ce;">
                    <img src="{{ asset('images/icons/1.png') }}" class="mr-4 align-self-center" style="width: auto; height: 100px;" alt="Flexible Account">
                    <div class="media-body">
                        <h3 class="mt-0" style="color: #1a2980; font-weight: 600; margin-bottom: 15px;">Tailored Trading Solutions</h3>
                        <p style="color: #555; margin-bottom: 0; line-height: 1.7;">
                            Customizable account types and trading conditions designed to suit your individual strategy, experience level, and financial objectives.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                <div class="feature-card media p-4" style="background-color: #f8f9fa; border-radius: 12px; transition: all 0.3s ease; height: 100%; border-left: 4px solid #1a2980;">
                    <img src="{{ asset('images/icons/2.png') }}" class="mr-4 align-self-center" style="width: auto; height: 100px;" alt="Market Access">
                    <div class="media-body">
                        <h3 class="mt-0" style="color: #1a2980; font-weight: 600; margin-bottom: 15px;">Global Market Access</h3>
                        <p style="color: #555; margin-bottom: 0; line-height: 1.7;">
                            Trade across 6 asset classes with competitive pricing, including Forex, Commodities, Indices, Stocks, Cryptocurrencies, and Futures.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                <div class="feature-card media p-4" style="background-color: #f8f9fa; border-radius: 12px; transition: all 0.3s ease; height: 100%; border-left: 4px solid #0056b3;">
                    <img src="{{ asset('images/icons/3.png') }}" class="mr-4 align-self-center" style="width: auto; height: 100px;" alt="Expert Experience">
                    <div class="media-body">
                        <h3 class="mt-0" style="color: #1a2980; font-weight: 600; margin-bottom: 15px;">Advanced Trading Technology</h3>
                        <p style="color: #555; margin-bottom: 0; line-height: 1.7;">
                            State-of-the-art platforms with lightning-fast execution, advanced charting tools, and customizable interfaces for optimal performance.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Feature 4 -->
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                <div class="feature-card media p-4" style="background-color: #f8f9fa; border-radius: 12px; transition: all 0.3s ease; height: 100%; border-left: 4px solid #26d0ce;">
                    <img src="{{ asset('images/icons/4.png') }}" class="mr-4 align-self-center" style="width: auto; height: 100px;" alt="Security">
                    <div class="media-body">
                        <h3 class="mt-0" style="color: #1a2980; font-weight: 600; margin-bottom: 15px;">Robust Security</h3>
                        <p style="color: #555; margin-bottom: 0; line-height: 1.7;">
                            Your security is our priority. We employ bank-level encryption, segregated accounts, and strict regulatory compliance to protect your assets and data.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<style>
    /* Animation and hover effects */
    .ourvalue{
        text-align: center;
        margin-bottom: 32px;
    }
    .about-hero {
        position: relative;
        overflow: hidden;
    }
    
    .about-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('{{ asset("images/pattern.png") }}') repeat;
        opacity: 0.05;
        z-index: 0;
    }
    
    .btn-scroll-down {
        display: inline-block;
        animation: bounce 2s infinite;
        text-decoration: none;
    }
    
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-15px);
        }
        60% {
            transform: translateY(-7px);
        }
    }
    
    .value-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.1) !important;
    }
    
    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.08) !important;
    }
    
    .about-image-wrapper:hover img {
        transform: scale(1.05);
    }
    
    /* Responsive adjustments */
    @media (max-width: 992px) {
        .hero-title {
            font-size: 2.5rem !important;
        }
        
        .hero-subtitle {
            font-size: 1.1rem !important;
        }
        
        .section-title {
            font-size: 2rem !important;
        }
    }
    
    @media (max-width: 768px) {
        .about-hero {
            padding: 80px 0 100px !important;
        }
        
        .hero-title {
            font-size: 2rem !important;
        }
        
        .media {
            display: block !important;
            text-align: center;
        }
        
        .media img {
            margin-bottom: 20px;
            margin-right: 0 !important;
        }
    }
</style>

@endsection