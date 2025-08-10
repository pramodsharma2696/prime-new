@extends('master')
@section('content')
<style>
    /* Base Styles */
    .tool-image {
        width: 100%;
        max-width: 400px;
        height: auto;
        object-fit: contain;
        border-radius: 8px;
        transition: all 0.3s ease;
        margin: 0 auto 1.5rem;
        display: block;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    /* Breathing animation */
    .breathing {
        display: inline-block;
        background: linear-gradient(18deg, #25bec6, #1d498f, #1e5c98);
        color: #fff;
        border-radius: 25px;
        padding: 0.5rem 1.5rem;
        text-align: center;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        margin: 0.5rem;
        min-width: 120px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .breathing:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }

    @keyframes breathe {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
    }

    

    /* Hero section */
    #about_company {
        background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%);
        padding: 4rem 0;
    }

    /* List items */
    .list-item {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        font-size: 1rem;
    }

    .list-item img {
        width: 30px;
        margin-right: 15px;
    }

    /* Responsive adjustments */
    @media (max-width: 1199px) {
        .tool-image {
            max-width: 350px;
        }
    }

    @media (max-width: 991px) {
        .tool-image {
            max-width: 300px;
        }
    }

    @media (max-width: 767px) {
        .tool-image {
            max-width: 100%;
            margin-bottom: 2rem;
        }
        .breathing {
            width: 100%;
            max-width: 250px;
            margin: 0.5rem auto;
            display: block;
        }
    }

    @media (max-width: 575px) {
        .section__title {
            font-size: 1.8rem !important;
        }
        .feature-card {
            padding: 1rem !important;
        }
        .feature-card img {
            width: 150px !important;
            height: 150px !important;
        }
    }
</style>

<!-- about -->
<section id="about" class="about about--wave section--gradient" style="background: linear-gradient(135deg, #27145a 0%, #251258 100%); padding: 80px 0;">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12">
                <h2 class="section__title section__title--white section__title--margin" 
                style="font-size: 2.5rem; font-weight: 700; color: white; text-align: center; margin-bottom: 30px;">Trading Tools</h2>
            </div>
            <!-- end section title -->

            <div class="col-12">
                <!-- about text -->
                <div class="about__text" style="max-width: 800px; margin: 0 auto; color: rgba(255,255,255,0.9);" data-aos="fade-up" data-aos-duration="3000">
                    <p style="font-size: 1.1rem; line-height: 1.7;">
                    Recognizing the importance of having the right trading tools and identifying opportunities, The Prime Limited provides tailored solutions to meet every client's needs.
                    </p>
                </div>
                <!-- end about text -->
            </div>
        </div>
    </div>
</section>
<!-- end about -->

<!-- Tools Section -->
<section class="py-5" id="about_company">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="mb-4" style="font-weight: 700; color: #1a2980;">Essential Trading Tools</h1>
                <p class="mb-4" style="line-height: 1.6; color: #555;">Understanding the clients' need of knowing the right trading tools & then identifying opportunities, The Prime Limited offers all the solutions accordingly. Such a pattern helps manage the risk factor as they trade based on the market research.</p>
                <p style="line-height: 1.6; color: #555;">Just the right tool can create a huge difference to a trading strategy.</p>
            </div>
            <div class="col-lg-6">
                <img class="tool-image" src="{{ asset('images/1st-copy-2-1.png') }}" alt="Trading Tools" data-aos="fade-up" data-aos-duration="3000">
            </div>
        </div>
    </div>
</section>

<!-- Autochartist Section -->
<section class="py-5" style="background: #f9fafc;">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-6">
                <img class="tool-image" src="{{ asset('images/autochartist-image.png') }}" alt="Autochartist" data-aos="fade-up" data-aos-duration="3000">
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="mb-4" style="font-weight: 700; color: #1a2980;">Autochartist</h1>
                <p class="mb-4" style="line-height: 1.6; color: #555;">Autochartist, the world's leading chart pattern recognition software, simplifies and enhances the use of technical analysis tools. It automatically scans the markets to identify emerging patterns, providing you with actionable insights.</p>
                <div class="list-item"><img src="{{ asset('images/i2.png') }}"> Analyze a broad range of chart patterns</div>
                <div class="list-item"><img src="{{ asset('images/i2.png') }}"> Clear market direction with a user-friendly interface</div>
            </div>
        </div>
    </div>
</section>

<!-- VPS Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0 order-lg-1 order-2">
                <h1 class="mb-4" style="font-weight: 700; color: #1a2980;">VPS Service</h1>
                <p class="mb-4" style="line-height: 1.6; color: #555;">Beyond just connectivity, reliability plays a crucial role. At The Prime Limited, we've partnered with 4XSolutions to provide clients seamless access to robust VPS infrastructure.</p>
                <div class="list-item"><img src="{{ asset('images/ico4.png') }}"> Low Latency & Multi-Connection Support</div>
                <div class="list-item"><img src="{{ asset('images/ico5.png') }}"> Advanced Protection & Security</div>
                <div class="list-item"><img src="{{ asset('images/ico6.png') }}"> 24/7 Dedicated Support</div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <img class="tool-image" src="{{ asset('images/2nd-image-copy-3.png') }}" alt="VPS Service" data-aos="fade-up" data-aos-duration="3000">
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section id="why_choose" class="py-6" style="padding: 100px 0; background-color: #fff;">
    <div class="container">
        <div class="row justify-content-center mb-6 ourvalue">
            <div class="col-lg-8 text-center" style="margin-bottom: 25px;">
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
@endsection