@extends('master')
@section('content')
<style>
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .equity-image {
            margin-bottom: 1.5rem !important;
            height: auto !important;
        }
        .equity-buttons .btn {
            margin: 0.5rem !important;
            width: 100%;
        }
        #button-microsoft {
            margin-left: 0.5rem !important;
        }
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
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        min-width: 120px;
    }

    .breathing:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }

    @keyframes breathe {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
    }

    /* Equity images */
    .equity-image {
        width: 100%;
        max-width: 140px;
        height: 140px;
        object-fit: contain;
        border-radius: 8px;
        transition: all 0.3s ease;
        margin: 0 auto 1rem;
        display: block;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .equity-image:hover {
        transform: translateY(-5px);
    }

    .breathe-img-animation {
        animation: breathe 1.5s ease-in-out infinite;
        box-shadow: 0 6px 12px rgba(0,0,0,0.2);
    }

    /* Steps section */
    .step-card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        padding: 2rem;
        text-align: center;
        height: 100%;
    }

    .step-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .step-icon {
        width: 120px;
        height: 120px;
        object-fit: contain;
        margin: 0 auto 1.5rem;
    }
    
    .divider {
        background: linear-gradient(to right, #DCBA62, #F5D97E);
        height: 3px;
        width: 80px;
        margin: 1rem auto;
    }

    /* Hero section */
    #about_company {
        background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%);
        padding: 4rem 0;
    }

    /* Equity grid */
    .equity-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.5rem;
    }

    /* Smooth transitions */
    .transition-all {
        transition: all 0.3s ease;
    }
</style>


 
<!-- about -->
<section id="about" class="about about--wave section--gradient" style="background: linear-gradient(135deg, #27145a 0%, #251258 100%); padding: 80px 0;">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12">
                <h2 class="section__title section__title--white section__title--margin" 
                style="font-size: 2.5rem; font-weight: 700; color: white; text-align: center; margin-bottom: 30px;">Equities</h2>
            </div>
            <!-- end section title -->

            <div class="col-12">
                <!-- about text -->
                <div class="about__text" style="max-width: 800px; margin: 0 auto; color: rgba(255,255,255,0.9);" data-aos="fade-up" data-aos-duration="3000">
                    <p style="font-size: 1.1rem; line-height: 1.7;">
                        Access a wide array of global equities on our platform, featuring top stocks from the world's leading technology, financial, and consumer sectors.
                    </p>
                </div>
                <!-- end about text -->
            </div>
        </div>
    </div>
</section>
<!-- end about -->
<!-- Equity Trading Section -->
<section class="py-5" id="about_company">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <h1 class="mb-4" style="font-weight: 700; color: #1a2980;">Equity Trading</h1>
                <p class="lead mb-4" style="line-height: 1.6; color: #555;">Trade a diverse range of global equities on our platform, with access to top stocks from leading technology, financial, and consumer companies. Invest in major markets and diversify your portfolio with some of the world's most sought-after equities.</p>
                <h5 class="mb-3" style="color: #1a2980;">Popular Equities:</h5>
                <div class="equity-buttons d-flex flex-wrap">
                    <button type="button" class="btn breathing transition-all" id="button-apple">Apple</button>
                    <button type="button" class="btn breathing transition-all" id="button-meta">Meta</button>
                    <button type="button" class="btn breathing transition-all" id="button-nike">Nike</button>
                    <button type="button" class="btn breathing transition-all" id="button-microsoft">Microsoft</button>
                    <button type="button" class="btn breathing transition-all" id="button-tesla">Tesla</button>
                    <button type="button" class="btn breathing transition-all" id="button-amazon">Amazon</button>
                    <button type="button" class="btn breathing transition-all" id="button-nvidia">Nvidia</button>
                    <button type="button" class="btn breathing transition-all" id="button-google">Google</button>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-6 col-md-3 mb-4 text-center">
                        <img src="{{ asset('') }}images/symbol/6.png" alt="Apple" id="image-apple" class="equity-image transition-all">
                    </div>
                    <div class="col-6 col-md-3 mb-4 text-center">
                        <img src="{{ asset('') }}images/symbol/3.png" alt="Meta" id="image-meta" class="equity-image transition-all">
                    </div>
                    <div class="col-6 col-md-3 mb-4 text-center">
                        <img src="{{ asset('') }}images/symbol/7.png" alt="Nike" id="image-nike" class="equity-image transition-all">
                    </div>
                    <div class="col-6 col-md-3 mb-4 text-center">
                        <img src="{{ asset('') }}images/symbol/4.png" alt="Microsoft" id="image-microsoft" class="equity-image transition-all">
                    </div>
                    <div class="col-6 col-md-3 mb-4 text-center">
                        <img src="{{ asset('') }}images/symbol/1.png" alt="Tesla" id="image-tesla" class="equity-image transition-all">
                    </div>
                    <div class="col-6 col-md-3 mb-4 text-center">
                        <img src="{{ asset('') }}images/symbol/2.png" alt="Amazon" id="image-amazon" class="equity-image transition-all">
                    </div>
                    <div class="col-6 col-md-3 mb-4 text-center">
                        <img src="{{ asset('') }}images/symbol/8.png" alt="Nvidia" id="image-nvidia" class="equity-image transition-all">
                    </div>
                    <div class="col-6 col-md-3 mb-4 text-center">
                        <img src="{{ asset('') }}images/symbol/5.png" alt="Google" id="image-google" class="equity-image transition-all">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
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


<script>
    // Enhanced hover effects for equity buttons with smoother transitions
    document.addEventListener('DOMContentLoaded', function() {
        const buttonImagePairs = {
            'button-apple': 'image-apple',
            'button-meta': 'image-meta',
            'button-nike': 'image-nike',
            'button-microsoft': 'image-microsoft',
            'button-tesla': 'image-tesla',
            'button-amazon': 'image-amazon',
            'button-nvidia': 'image-nvidia',
            'button-google': 'image-google'
        };

        // Add event listeners for each button
        Object.keys(buttonImagePairs).forEach(buttonId => {
            const button = document.getElementById(buttonId);
            const image = document.getElementById(buttonImagePairs[buttonId]);

            if (button && image) {
                button.addEventListener('mouseover', function() {
                    image.classList.add('breathe-img-animation');
                    image.style.transform = 'translateY(-5px)';
                });
                
                button.addEventListener('mouseout', function() {
                    image.classList.remove('breathe-img-animation');
                    image.style.transform = '';
                });
            }
        });

        // Add hover effects for images directly
        document.querySelectorAll('.equity-image').forEach(img => {
            img.addEventListener('mouseover', function() {
                this.classList.add('breathe-img-animation');
            });
            
            img.addEventListener('mouseout', function() {
                this.classList.remove('breathe-img-animation');
            });
        });
    });
</script>
@endsection