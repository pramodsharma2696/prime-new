@extends('master')
@section('content')
<style>
    /* Common Styles */
    .breathing:hover {
        animation: breathe 1.5s ease-in-out infinite;
    }

    @keyframes breathe {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    .breathing {
        display: inline-block;
        background: linear-gradient(335deg, #e5be4e, #efdd95, #a98726);
        padding: 12px 45px;
        color: #000;
        border-radius: 30px;
        text-align: center;
        font-size: 18px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        box-shadow: 0 4px 15px rgba(233, 176, 27, 0.3);
    }

    /* Section Styles */
    .hero-section {
        background: linear-gradient(135deg, #27145a 0%, #251258 100%);
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100px;
        background: url("data:image/svg+xml,%3Csvg viewBox='0 0 1200 120' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z' opacity='.25' fill='%23ffffff'/%3E%3Cpath d='M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z' opacity='.5' fill='%23ffffff'/%3E%3Cpath d='M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z' fill='%23ffffff'/%3E%3C/svg%3E");
        background-size: cover;
        background-repeat: no-repeat;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1a2980;
        margin-bottom: 30px;
        position: relative;
        display: inline-block;
    }


    .section-subtitle {
        font-size: 1.1rem;
        color: rgba(255,255,255,0.9);
        max-width: 800px;
        margin: 0 auto 30px;
        line-height: 1.7;
    }

    /* Content Sections */
    .content-section {
        padding: 80px 0;
    }

    .content-section.dark-bg {
        background-color: #2c3e50;
        color: white;
    }

    .content-section.light-bg {
        background-color: #f8f9fa;
    }

    .content-card {
        background: white;
        border-radius: 12px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        height: 100%;
    }

    .dark-bg .content-card {
        background: #34495e;
        color: white;
    }

    .content-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    }

    .content-card h3 {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: #1a2980;
    }

    .dark-bg .content-card h3 {
        color: #f1c40f;
    }

    .content-card p {
        color: #555;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    .dark-bg .content-card p {
        color: rgba(255,255,255,0.8);
    }

    /* Feature Cards */
    .feature-card {
        background: white;
        border-radius: 12px;
        padding: 30px;
        /* text-align: center; */
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        height: 100%;
        margin-bottom: 20px;
        /* border-top: 4px solid #26d0ce; */
    }

    .feature-card img {
        max-width: 100px;
        height: auto;
        margin-bottom: 20px;
    }

    .feature-card h4 {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 15px;
        color: #1a2980;
    }

   

    /* Mobile Responsiveness Improvements */
    @media (max-width: 1199.98px) {
        .hero-section {
            padding: 80px 0;
        }
        
        .section-title {
            font-size: 2.2rem;
        }
        
        .content-section {
            padding: 70px 0;
        }
        
        .content-card {
            padding: 35px;
        }
    }

    @media (max-width: 991.98px) {
                img.img-1 {
            width: 400px;
        }
        .section-title {
            font-size: 2rem;
        }
        
        .content-card h3 {
            font-size: 1.6rem;
        }
        
        .feature-card, .why-choose-card {
            padding: 25px;
        }
        
        .why-choose-card img {
            width: 150px;
            height: 150px;
        }
    }

    @media (max-width: 767.98px) {
        .hero-section {
            padding: 70px 0;
        }
        
        .section-title {
            font-size: 1.8rem;
            margin-bottom: 20px;
        }
        
        .section-title::after {
            bottom: -8px;
            height: 3px;
            width: 60px;
        }
        
        .section-subtitle {
            font-size: 1rem;
            margin-bottom: 20px;
            padding: 0 15px;
        }
        
        .content-section {
            padding: 60px 0;
        }
        
        .content-card {
            padding: 30px;
            margin-bottom: 30px;
        }
        
        .content-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }
        
        .content-card p {
            font-size: 0.95rem;
            line-height: 1.7;
        }
        
        .feature-card, .why-choose-card {
            margin-bottom: 30px;
        }
        
        .feature-card h4, .why-choose-card h3 {
            font-size: 1.3rem;
        }
        
        .why-choose-card img {
            width: 120px;
            height: 120px;
        }
        
        /* Stack columns on mobile */
        .row.align-items-center {
            flex-direction: column;
        }
        
        .order-lg-1, .order-lg-2 {
            order: 0 !important;
        }
        
        .mb-5.mb-lg-0 {
            margin-bottom: 30px !important;
        }
    }

    @media (max-width: 575.98px) {
        .hero-section {
            padding: 60px 0;
        }
        
        .section-title {
            font-size: 1.6rem;
        }
        
        .content-section {
            padding: 50px 0;
        }
        
        .content-card {
            padding: 25px;
        }
        
        .content-card h3 {
            font-size: 1.4rem;
        }
        
        .feature-card, .why-choose-card {
            padding: 20px;
        }
        
        .feature-card img {
            max-width: 80px;
            margin-bottom: 15px;
        }
        
        .why-choose-card img {
            width: 100px;
            height: 100px;
        }
        
        .breathing {
            padding: 10px 30px;
            font-size: 16px;
        }
    }

    @media (max-width: 400px) {
        .section-title {
            font-size: 1.4rem;
        }
        
        .content-card {
            padding: 20px;
        }
        
        .feature-card h4, .why-choose-card h3 {
            font-size: 1.2rem;
        }
    }
</style>

<!-- Hero Section -->

<section id="about" class="about about--wave section--gradient" style="background: linear-gradient(135deg, #27145a 0%, #251258 100%); padding: 80px 0;">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12">
                <h2 class="section__title section__title--white section__title--margin" 
                style="font-size: 2.5rem; font-weight: 700; color: white; text-align: center; margin-bottom: 30px;">Trading Conditions</h2>
            </div>
            <!-- end section title -->

            <div class="col-12">
                <!-- about text -->
                <div class="about__text" style="max-width: 800px; margin: 0 auto; color: rgba(255,255,255,0.9);" data-aos="fade-up" data-aos-duration="3000">
                    <p style="font-size: 1.1rem; line-height: 1.7;">
                        The Prime Limited provides transparent trading conditions including product specifications, leverage, swaps, and market notifications to empower your trading decisions.
                    </p>
                </div>
                <!-- end about text -->
            </div>
        </div>
    </div>
</section>
<!-- Product Specifications Section -->
<section class="content-section" id="product">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 order-lg-1 order-2">
                <div class="content-card">
                    <h3>Product Specifications</h3>
                    <p>
                        Explore comprehensive details for all the trading instruments we offer. Full specifications are also available within the trading platform under each instrument's 'Specification' section.
                    </p>
                    <p>
                        Our product specifications include detailed information about trading hours, contract sizes, minimum/maximum trade sizes, and margin requirements for each instrument.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <img class="img-fluid rounded shadow-lg img-1" src="{{ asset('images/d4.jpg') }}" alt="Product Specifications" data-aos="fade-left">
            </div>
        </div>
    </div>
</section>

<!-- Leverage Section -->
<section class="content-section light-bg" id="leverage">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <img class="img-fluid rounded shadow-lg img-1" src="{{ asset('images/d3.png') }}" alt="Leverage" data-aos="fade-right">
            </div>
            <div class="col-lg-6">
                <div class="content-card">
                    <h3>Leverage</h3>
                    <p>
                        This concept allows you to open trades by depositing only a fraction of the trade's total value, known as the margin. Leverage can be a powerful tool, enabling clients to capitalize on market movements using relatively small amounts of capital.
                    </p>
                    <p>
                        However, it also carries risks that can amplify potential losses. Therefore, we recommend utilizing effective risk management strategies—such as stop-loss orders and proper money management—when trading with leverage to help minimize potential risks.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SWAPS Section -->
<section class="content-section" id="swaps">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 order-lg-1 order-2">
                <div class="content-card">
                    <h3>SWAPS</h3>
                    <p>
                        When you hold a position overnight, SWAP charges may apply. These charges reflect the cost of borrowing between the two currencies in a Forex pair or the financing cost of leveraged instruments.
                    </p>
                    <p>
                        Depending on market conditions, you may either pay or receive these overnight fees. You can view the overnight fees in the 'Product Specifications' section for each instrument within the trading platform.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <img class="img-fluid rounded shadow-lg img-1" src="{{ asset('images/d2.jpg') }}" alt="SWAPS" data-aos="fade-left">
            </div>
        </div>
    </div>
</section>

<!-- Dividends Section -->
<section class="content-section light-bg" id="dividends">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <img class="img-fluid rounded shadow-lg img-1" src="{{ asset('images/d1.jpg') }}" alt="Dividends & Corporate Actions" data-aos="fade-right">
            </div>
            <div class="col-lg-6">
                <div class="content-card">
                    <h3>Dividends & Corporate Actions</h3>
                    <p>
                        Equity-based instruments are influenced by various Corporate Actions and Dividend Adjustments. When a dividend is issued, the index price is adjusted accordingly to reflect the payout.
                    </p>
                    <p>
                        This revaluation ensures that clients are neither advantaged nor disadvantaged by the dividend. As a result, the dividend amount is reflected in the trade's P&L as an adjustment.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trading Equities Section -->
<section class="content-section dark-bg" id="trading">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title" style="color:#fff">Trading Equities (CFD) Includes</h2>
                <p class="section-subtitle">
                    Comprehensive coverage of all corporate actions affecting your equity positions
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up">
                <div class="feature-card">
                    <img src="{{ asset('images/ico1.png') }}" alt="Stock Split">
                    <h4>Stock Split</h4>
                    <p style="color:#000">Shareholders are issued new shares according to the ratio of their holding</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card">
                    <img src="{{ asset('images/ico2.png') }}" alt="Bonus Issue">
                    <h4>Bonus Issue</h4>
                    <p style="color:#000">The unlikely event that a company may issue free shares to shareholders</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card">
                    <img src="{{ asset('images/ico3.png') }}" alt="Rights Issue">
                    <h4>Rights Issue</h4>
                    <p style="color:#000">The option for existing shareholders to exercise an option to buy new shares on issue</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card">
                    <img src="{{ asset('images/ico4.png') }}" alt="Buy back">
                    <h4>Buy Back</h4>
                    <p style="color:#000">When a company decides to buy back its own shares from shareholders</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Rollovers Section -->
<section class="content-section" id="rollovers">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 order-lg-1 order-2">
                <div class="content-card">
                    <h3>Rollovers</h3>
                    <p>
                        A point where the contract expires and no delivery takes place of the asset is an expiry date which is set for all future contracts. At this point, The Prime Limited offers CFD Futures, which means our contracts don't expire but roll forward to the next period.
                    </p>
                    <p>
                        When a CFD Future contract is rolled, it is adjusted from the current month's expiry date to the next month's expiry date. To ensure that clients are not disadvantaged from these rollovers, the change in the two prices is adjusted to client accounts.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <img class="img-fluid rounded shadow-lg img-1" src="{{ asset('images/Rollovers.png') }}" alt="Rollovers" data-aos="fade-left">
            </div>
        </div>
    </div>
</section>

<!-- Market Notifications Section -->
<section class="content-section light-bg" id="market">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <img class="img-fluid rounded shadow-lg img-1" src="{{ asset('images/mn.png') }}" alt="Market Notifications" data-aos="fade-right">
            </div>
            <div class="col-lg-6">
                <div class="content-card">
                    <h3>Market Notifications</h3>
                    <p>
                        Financial Market Hours are often adjusted around Public Holidays and world events. The Prime Limited keeps you updated with market notifications that set out any changes to the 'normal market' hours.
                    </p>
                    <p>
                        Our notification system ensures you're always informed about special market conditions, holiday schedules, and important economic events that may affect your trading.
                    </p>
                </div>
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



<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true
    });
</script>

@endsection