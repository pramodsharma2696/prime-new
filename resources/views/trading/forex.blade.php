@extends('master')
@section('content')
<style>
    /* Base Styles */
    .currency-image {
        width: 100%;
        max-width: 180px;
        height: 180px;
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

    .breathe-img-animation {
        animation: breathe 1.5s ease-in-out infinite;
        box-shadow: 0 6px 12px rgba(0,0,0,0.2);
    }

   

    /* Hero section */
    #about_company {
        background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%);
        padding: 4rem 0;
    }

    /* Smooth transitions */
    .transition-all {
        transition: all 0.3s ease;
    }

    /* Responsive adjustments */
    @media (max-width: 1199px) {
        .currency-image {
            height: 160px;
        }
    }

    @media (max-width: 991px) {
        .currency-image {
            max-height: 140px;
        }
    }

    @media (max-width: 767px) {
        .currency-image {
            max-height: 120px;
        }
        .breathing {
            width: 100%;
            max-width: 250px;
            margin: 0.5rem auto;
            display: block;
        }
    }

    @media (max-width: 575px) {
        .currency-image {
            max-height: 100px;
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
                style="font-size: 2.5rem; font-weight: 700; color: white; text-align: center; margin-bottom: 30px;">Forex Trading</h2>
            </div>
            <!-- end section title -->

            <div class="col-12">
                <!-- about text -->
                <div class="about__text" style="max-width: 800px; margin: 0 auto; color: rgba(255,255,255,0.9);" data-aos="fade-up" data-aos-duration="3000">
                    <p style="font-size: 1.1rem; line-height: 1.7;">
                       Experience seamless Forex trading with The Prime Limited — your gateway to the world's largest financial market. Our advanced platform equips you with powerful tools, real-time insights, and the flexibility to trade with confidence.
                    </p>
                </div>
                <!-- end about text -->
            </div>
        </div>
    </div>
</section>
<!-- end about -->

<!-- Forex Trading Section -->
<section class="py-5" id="about_company">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="mb-4" style="font-weight: 700; color: #1a2980;">Forex Trading Solutions</h1>
                <p class="lead mb-4" style="line-height: 1.6; color: #555;">Trade Forex seamlessly with The Prime Limited, where our advanced platform provides the tools, insights, and flexibility needed to capitalize on the world's largest financial market.</p>
                <h5 class="mb-3" style="color: #1a2980;">Trade with Major Currencies:</h5>
                <div class="d-flex flex-wrap currency-buttons">
                    <button type="button" class="btn breathing transition-all" id="button-euro">Euro (EUR)</button>
                    <button type="button" class="btn breathing transition-all" id="button-pound">Pound (GBP)</button>
                    <button type="button" class="btn breathing transition-all" id="button-dollar">Dollar (USD)</button>
                    <button type="button" class="btn breathing transition-all" id="button-yen">Yen (JPY)</button>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-6 col-md-3 mb-4 text-center">
                        <img src="{{ asset('') }}images/symbol/9.png" alt="Euro" id="image-euro" class="currency-image transition-all">
                    </div>
                    <div class="col-6 col-md-3 mb-4 text-center">
                        <img src="{{ asset('') }}images/symbol/11.png" alt="Pound" id="image-pound" class="currency-image transition-all">
                    </div>
                    <div class="col-6 col-md-3 mb-4 text-center">
                        <img src="{{ asset('') }}images/symbol/12.png" alt="Dollar" id="image-dollar" class="currency-image transition-all">
                    </div>
                    <div class="col-6 col-md-3 mb-4 text-center">
                        <img src="{{ asset('') }}images/symbol/10.png" alt="Yen" id="image-yen" class="currency-image transition-all">
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
    // Enhanced currency button hover effects with smoother transitions
    document.addEventListener('DOMContentLoaded', function() {
        const buttonImagePairs = {
            'button-euro': 'image-euro',
            'button-pound': 'image-pound',
            'button-dollar': 'image-dollar',
            'button-yen': 'image-yen'
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
        document.querySelectorAll('.currency-image').forEach(img => {
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