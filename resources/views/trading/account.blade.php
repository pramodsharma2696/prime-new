@extends('master')
@section('content')
<style>
    /* Custom CSS with enhanced design */
    :root {
        --primary-color: #2c3e50;
        --secondary-color: #cd853f;
        --accent-color: #1a2980;
        --gradient-start: #1a2980;
        --gradient-end: #26d0ce;
        --text-dark: #2c3e50;
        --text-light: #f8f9fa;
        --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
    }
    
    /* Hero Section */
    .accounts-hero {
        background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
        padding: 100px 0 80px;
        position: relative;
        overflow: hidden;
        color: white;
    }
    
    .accounts-hero::before {
        content: '';
        position: absolute;
        bottom: -50px;
        left: 0;
        width: 100%;
        height: 100px;
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23ffffff' fill-opacity='1' d='M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E") no-repeat center/cover;
        z-index: 1;
    }
    
    .hero-title {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 1.5rem;
        text-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    
    .hero-subtitle {
        font-size: 1.25rem;
        line-height: 1.6;
        max-width: 700px;
        margin: 0 auto 2rem;
        opacity: 0.9;
    }
    
    /* Account Cards Section */
    .account-section {
        padding: 80px 0;
        background-color: #f9fbfd;
    }
    
    .section-header {
        text-align: center;
        margin-bottom: 60px;
    }
    
    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 1rem;
        position: relative;
        display: inline-block;
    }
    

    
    .section-subtitle {
        color: #6c757d;
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto;
    }
    
    .account-card {
        background: white;
        border-radius: 12px;
        box-shadow: var(--card-shadow);
        overflow: hidden;
        transition: var(--transition);
        margin-bottom: 30px;
        height: 100%;
        border: none;
    }
    
    .account-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }
    
    .account-card-header {
        background: var(--primary-color);
        color: white;
        padding: 25px;
        text-align: center;
        position: relative;
    }
    
    .account-type {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }
    
    .account-description {
        font-size: 1rem;
        opacity: 0.9;
    }
    
    .account-icon {
        width: 80px;
        height: 80px;
        margin: -40px auto 20px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 2;
    }
    
    .account-icon img {
        width: 50px;
        height: 50px;
    }
    
    .account-card-body {
        padding: 30px;
    }
    
    .feature-list {
        list-style: none;
        padding: 0;
        margin: 0 0 25px;
    }
    
    .feature-list li {
        padding: 8px 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        display: flex;
        align-items: center;
    }
    
    .feature-list li:last-child {
        border-bottom: none;
    }
    
    .feature-icon {
        color: var(--secondary-color);
        margin-right: 10px;
        font-size: 1.1rem;
    }
    
    .btn-account {
        background: var(--secondary-color);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        display: inline-block;
        transition: var(--transition);
        width: 100%;
        text-align: center;
    }
    
    .btn-account:hover {
        background: #e67e22;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(243, 156, 18, 0.3);
    }
   
    
    /* CTA Section */
    .cta-section {
        padding: 80px 0;
        background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
        color: white;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    
    .cta-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
    }
    
    .cta-text {
        font-size: 1.2rem;
        max-width: 700px;
        margin: 0 auto 2.5rem;
        opacity: 0.9;
    }
    
    .btn-cta {
        background: white;
        color: var(--primary-color);
        border: none;
        padding: 15px 40px;
        border-radius: 50px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: var(--transition);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }
    
    .btn-cta:hover {
        background: var(--secondary-color);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }
    
    /* Responsive Adjustments */
    @media (max-width: 991.98px) {
        .hero-title {
            font-size: 2.5rem;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .account-type {
            font-size: 1.5rem;
        }
    }
    
    @media (max-width: 767.98px) {
        .accounts-hero {
            padding: 80px 0 60px;
        }
        
        .hero-title {
            font-size: 2rem;
        }
        
        .hero-subtitle {
            font-size: 1.1rem;
        }
        
        .account-section, .features-section {
            padding: 60px 0;
        }
        
        .section-title {
            font-size: 1.8rem;
        }
        
        .account-card-body {
            padding: 20px;
        }
    }
    
    @media (max-width: 575.98px) {
        .hero-title {
            font-size: 1.8rem;
        }
        
        .account-icon {
            width: 70px;
            height: 70px;
            margin: -35px auto 15px;
        }
        
        .account-icon img {
            width: 40px;
            height: 40px;
        }
        
        .btn-account, .btn-cta {
            padding: 10px 25px;
        }
    }
</style>
<!-- Font Awesome for icons --->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<section id="about" class="about about--wave section--gradient" style="background: linear-gradient(135deg, #27145a 0%, #251258 100%); padding: 80px 0;">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12">
                <h2 class="section__title section__title--white section__title--margin" 
                style="font-size: 2.5rem; font-weight: 700; color: white; text-align: center; margin-bottom: 30px;">Trading Accounts</h2>
            </div>
            <!-- end section title -->

            <div class="col-12">
                <!-- about text -->
                <div class="about__text" style="max-width: 800px; margin: 0 auto; color: rgba(255,255,255,0.9);" data-aos="fade-up" data-aos-duration="3000">
                    <p style="font-size: 1.1rem; line-height: 1.7;">
                    At The Prime Limited, our account types are designed to deliver unmatched flexibility and a premium trading experience. Whether you're a beginner or an experienced trader, enjoy deep liquidity, lightning-fast execution, and advanced tools tailored to elevate every trade.
                    </p>
                </div>
                <!-- end about text -->
            </div>
        </div>
    </div>
</section>
<!-- Account Types Section -->
<section class="account-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Discover Our Account Types</h2>
            <p class="section-subtitle">Choose the perfect account that matches your trading style and goals</p>
        </div>
        
        <div class="row">
            <!-- Standard Account -->
            <div class="col-lg-6 mb-4" id="std_account">
                <div class="account-card">
                    <div class="account-card-header">
                        <h3 class="account-type">Standard Account</h3>
                        <p class="account-description">Ideal for traders who value versatility and flexibility</p>
                    </div>
                    <div class="account-icon">
                        <img src="{{ asset('acc/sa.png') }}" alt="Standard Account">
                    </div>
                    <div class="account-card-body">
                        <p class="text-center mb-4">Designed for both beginners and seasoned professionals, it empowers you to implement a wide range of strategies with confidence—backed by advanced tools and access to deep liquidity.</p>
                        
                        <ul class="feature-list">
                            <li><i class="fas fa-check feature-icon"></i> Leverage up to 500:1</li>
                            <li><i class="fas fa-check feature-icon"></i> 200+ currency pairs</li>
                            <li><i class="fas fa-check feature-icon"></i> Major indices</li>
                            <li><i class="fas fa-check feature-icon"></i> One-click Trading</li>
                            <li><i class="fas fa-check feature-icon"></i> All trading styles</li>
                            <li><i class="fas fa-check feature-icon"></i> Expert advisors allowed</li>
                            <li><i class="fas fa-check feature-icon"></i> Hedging allowed</li>
                        </ul>
                        
                        <a href="https://cp.theprimelimited.com/register" class="btn btn-account">Open Standard Account</a>
                    </div>
                </div>
            </div>
            
            <!-- Prime Account -->
            <div class="col-lg-6 mb-4" id="prime_account">
                <div class="account-card">
                    <div class="account-card-header">
                        <h3 class="account-type">Prime Account</h3>
                        <p class="account-description">For traders seeking enhanced stability and precision</p>
                    </div>
                    <div class="account-icon">
                        <img src="{{ asset('acc/pa.jpg') }}" alt="Prime Account">
                    </div>
                    <div class="account-card-body">
                        <p class="text-center mb-4">The Prime Account provides a refined trading environment with premium features designed to support advanced strategies, offering an enriched trading experience ideal for high performance.</p>
                        
                        <ul class="feature-list">
                            <li><i class="fas fa-check feature-icon"></i> Leverage up to 200:1</li>
                            <li><i class="fas fa-check feature-icon"></i> 200+ currency pairs</li>
                            <li><i class="fas fa-check feature-icon"></i> Major indices</li>
                            <li><i class="fas fa-check feature-icon"></i> One-click Trading</li>
                            <li><i class="fas fa-check feature-icon"></i> All trading styles</li>
                            <li><i class="fas fa-check feature-icon"></i> Expert advisors allowed</li>
                            <li><i class="fas fa-check feature-icon"></i> Hedging allowed</li>
                        </ul>
                        
                        <a href="https://cp.theprimelimited.com/register" class="btn btn-account">Open Prime Account</a>
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

<!-- CTA Section -->


@endsection