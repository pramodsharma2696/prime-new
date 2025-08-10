@extends('master')
@section('content')
<style>
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .commodity-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        .commodity-image {
            height: 150px;
        }
        .commodity-buttons .btn {
            margin: 0.5rem 0.25rem;
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }
    }

    /* Breathing animation */
    .breathing {
        display: inline-block;
        background: linear-gradient(18deg, #25bec6, #1d498f, #1e5c98);
        color: #fff;
        border-radius: 25px;
        padding: 0.75rem 2rem;
        font-size: 1rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        margin: 0.5rem;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        font-weight: 600;
    }

    .breathing:hover {
        animation: breathe 1.5s ease-in-out infinite;
        box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        transform: translateY(-2px);
    }
      .breathe-img-animation {
    animation: breathe-img 1.5s ease-in-out infinite;
}

    @keyframes breathe {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    /* Commodity images grid */
    .commodity-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
        margin-top: 2rem;
    }

    .commodity-image-container {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        transition: all 0.3s ease;
        aspect-ratio: 1/1;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .commodity-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.3s ease;
    }

    .commodity-image-container:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    }

    .commodity-image-container:hover .commodity-image {
        animation: breathe 1.5s ease-in-out infinite;
        transform: scale(1.05);
    }

    /* Feature cards */
    .feature-card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        padding: 1.5rem;
        height: 100%;
        background: white;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        /* box-shadow: 0 10px 25px rgba(0,0,0,0.1); */
    }

    .feature-icon {
        width: 80px;
        height: 80px;
        object-fit: contain;
        margin: 0 auto 1.5rem;
        display: block;
    }

    .gold-text {
        color: #DCBA62;
    }

    .section-header {
        position: relative;
        margin-bottom: 3rem;
        text-align: center;
    }

    .section-header:after {
        content: '';
        display: block;
        width: 60px;
        height: 3px;
        background: linear-gradient(to right, #e5be4e, #a98726);
        margin: 1rem auto 0;
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
        background: white;
    }

    .step-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .step-icon {
        width: 100px;
        height: 100px;
        object-fit: contain;
        margin: 0 auto 1.5rem;
    }

    /* Hero section */
    .hero-section {
        background: linear-gradient(135deg, #27145a 0%, #251258 100%);
        padding: 80px 0;
        color: white;
        text-align: center;
    }

    .hero-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .hero-subtitle {
        font-size: 1.2rem;
        max-width: 800px;
        margin: 0 auto;
        opacity: 0.9;
        line-height: 1.6;
    }
</style>


<!-- about -->
<section id="about" class="about about--wave section--gradient" style="background: linear-gradient(135deg, #27145a 0%, #251258 100%); padding: 80px 0;">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12">
                <h2 class="section__title section__title--white section__title--margin" 
                style="font-size: 2.5rem; font-weight: 700; color: white; text-align: center; margin-bottom: 30px;">Commodities</h2>
            </div>
            <!-- end section title -->

            <div class="col-12">
                <!-- about text -->
                <div class="about__text" style="max-width: 800px; margin: 0 auto; color: rgba(255,255,255,0.9);" data-aos="fade-up" data-aos-duration="3000">
                    <p style="font-size: 1.1rem; line-height: 1.7;">
                       Trade a wide variety of commodities, from precious metals and energy resources to agricultural goods.
Diversify your investments with access to global commodity markets.
                    </p>
                </div>
                <!-- end about text -->
            </div>
        </div>
    </div>
</section>
<!-- end about -->

<!-- Commodities Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="mb-4" style="color: #1a2980;">Global Commodities Market</h1>
                <p class="lead mb-4" style="line-height: 1.6;">Access opportunities in popular markets and diversify your portfolio with essential commodities CFDs. Trade with confidence on our advanced platform.</p>
                <h5 class="mb-3" style="color: #1a2980;">Popular Commodities:</h5>
                <div class="commodity-buttons">
                    <button type="button" class="btn breathing" id="button-gold">Gold</button>
                    <button type="button" class="btn breathing" id="button-silver">Silver</button>
                    <button type="button" class="btn breathing" id="button-wheat">Wheat</button>
                    <button type="button" class="btn breathing" id="button-crude-oil">Crude Oil</button>
                    <button type="button" class="btn breathing" id="button-palladium">Palladium</button>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="commodity-grid">
                    <div class="commodity-image-container">
                        <img src="{{ asset('') }}images/symbol/13.png" alt="Gold" id="image-gold" class="commodity-image">
                    </div>
                    <div class="commodity-image-container">
                        <img src="{{ asset('') }}images/symbol/16.png" alt="Silver" id="image-silver" class="commodity-image">
                    </div>
                    <div class="commodity-image-container">
                        <img src="{{ asset('') }}images/symbol/17.png" alt="Wheat" id="image-wheat" class="commodity-image">
                    </div>
                    <div class="commodity-image-container">
                        <img src="{{ asset('') }}images/symbol/14.png" alt="Crude Oil" id="image-crude-oil" class="commodity-image">
                    </div>
                    <div class="commodity-image-container">
                        <img src="{{ asset('') }}images/symbol/15.png" alt="Palladium" id="image-palladium" class="commodity-image">
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
    // Add hover effects for commodity buttons
    document.querySelectorAll('.btn.breathing').forEach(button => {
        const commodityId = button.id.replace('button-', '');
        const image = document.getElementById(`image-${commodityId}`);
        
        if (image) {
            button.addEventListener('mouseover', () => {
                const container = image.closest('.commodity-image-container');
                container.style.transform = 'translateY(-5px)';
                // container.style.boxShadow = '0 8px 16px rgba(0,0,0,0.2)';
            });
            button.addEventListener('mouseout', () => {
                const container = image.closest('.commodity-image-container');
                container.style.transform = '';
                // container.style.boxShadow = '0 4px 8px rgba(0,0,0,0.1)';
            });
        }
    });
</script>
@endsection