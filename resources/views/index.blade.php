@extends('master')
@section('content')
<div class="homebanner">
      <div class="container">
        <div class="banner-content">
          <h1>Make Every Trade Count with <br /><strong>The Prime Limited</strong></h1>
          <p>
           Whether you are into Forex, Commodities, Stocks, Indices or Digital Assets, we've got you covered.
          </p>
        </div>

      </div>
      <img src="{{ asset('') }}images/banner-img.png" alt="img" />
    </div>

    <div class="start-trading">
      <div class="container">
        <ul>
          <li>
            <div class="tradingbox">
              <a href="https://cp.theprimelimited.com/login">
                <strong
                  >Start<br />
                  trading</strong
                >
              </a>
            </div>
          </li>
          <li>
            <div class="tradingbox">
              <strong>0.0</strong>
              <span>Spreads from</span>
            </div>
          </li>
          <li>
            <div class="tradingbox">
              <strong>500+</strong>
              <span>Instruments</span>
            </div>
          </li>
          <li>
            <div class="tradingbox">
              <strong>1:400</strong>
              <span>Leverage upto</span>
            </div>
          </li>
          <li>
            <div class="tradingbox">
              <strong>Ultra-fast</strong>
              <span>Executions</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="invest-section">
      <div class="container">
       <div class="heading">
        <h2>
            Invest in the Assets<br />
           You Trust Most
        </h2>
        <p>
            Access thousands of financial assets across multiple classes with just one trading account. Trade Forex, Commodities, Metals, and stocks from the world’s leading companies — all at highly competitive terms.
        </p>
        </div>

        <div class="invest-listing">
          <ul>
            <li>
              <a class="apple" href="#"
                ><img src="{{ asset('') }}images/company-icon1.svg" alt="img" />$AAPL</a
              >
            </li>
            <li>
              <a class="nasdaq" href="#"
                ><img src="{{ asset('') }}images/company-icon2.svg" alt="img" />NASDAQ</a
              >
            </li>
            <li>
              <a class="btc" href="#"
                ><img src="{{ asset('') }}images/company-icon3.svg" alt="img" />BTC/USD</a
              >
            </li>
            <li>
              <a class="usoil" href="#"
                ><img src="{{ asset('') }}images/company-icon4.svg" alt="img" />USOIL</a
              >
            </li>
            <li>
              <a class="euro" href="#"
                ><img src="{{ asset('') }}images/company-icon5.svg" alt="img" />EUR/USD</a
              >
            </li>
            <li>
              <a class="xau" href="#"
                ><img src="{{ asset('') }}images/company-icon6.svg" alt="img" />XAU/USD</a
              >
            </li>
          </ul>
          <div class="morelink"><a href="#">&amp; much more</a></div>
        </div>
        <div class="invest-condition">
          <ul>
            <li>
              <a href="#"
                ><img src="{{ asset('') }}images/blue-tick-icon.svg" alt="img" />Transparent
                trading conditions</a
              >
            </li>
            <li>
              <a href="#"
                ><img src="{{ asset('') }}images/blue-tick-icon.svg" alt="img" />Free
                Educational Materials</a
              >
            </li>
            <li>
              <a href="#"
                ><img src="{{ asset('') }}images/blue-tick-icon.svg" alt="img" />Zero deposit
                fees</a
              >
            </li>
          </ul>
        </div>
      </div>
    </div>

   <div class="container">
  <div class="trading-condition">
    <div class="tradingcondition-img">
      <figure>
        <img src="{{ asset('') }}images/trading-img.png" alt="Trading Conditions" />
      </figure>
    </div>
    <div class="tradingcondition-content">
      <div class="heading">
        <h2>Unmatched Trading Conditions</h2>
        <p>
          Experience our most favorable terms yet — featuring some of the
          industry’s tightest spreads and fastest execution speeds.
        </p>
      </div>
      <ul class="tickmark-listing">
        <li>
          <img src="{{ asset('') }}images/purple-tick-icon.svg" alt="icon" />
          Advanced platforms designed for every type of investor
        </li>
        <li>
          <img src="{{ asset('') }}images/purple-tick-icon.svg" alt="icon" />
          Lightning-fast execution — up to 2,000 orders per second
        </li>
        <li>
          <img src="{{ asset('') }}images/purple-tick-icon.svg" alt="icon" />
          Free, real-time charts and market updates
        </li>
        <li>
          <img src="{{ asset('') }}images/purple-tick-icon.svg" alt="icon" />
          Expert analytical insights and guidance
        </li>
        <li>
          <img src="{{ asset('') }}images/purple-tick-icon.svg" alt="icon" />
          Licensed and trusted liquidity providers
        </li>
        <li>
          <img src="{{ asset('') }}images/purple-tick-icon.svg" alt="icon" />
          Leverage of up to 1:400
        </li>
        <li>
          <img src="{{ asset('') }}images/purple-tick-icon.svg" alt="icon" />
          Dedicated customer support, available 24/5
        </li>
      </ul>
    </div>
  </div>
</div>


    <div class="global-market">
      <div class="container">
        <div class="heading">
        <h2>Global Financial Markets</h2>
        <p>
            Access a diverse portfolio of over 500 trading instruments, including Forex pairs, cryptocurrencies, stock indices, equities, and commodities.
        </p>
        </div>

        <ul>
          <li>
            <div class="finanialbox">
              <figure><img src="{{ asset('') }}images/stocks-img.svg" alt="img" /></figure>
              <h3>Stocks</h3>
              <p>
                Offers CFD's of world's leading stocks across Global markets.
              </p>
            </div>
          </li>
          <li>
            <div class="finanialbox">
              <figure><img src="{{ asset('') }}images/crypto-img.svg" alt="img" /></figure>
              <h3>Crypto</h3>
              <p>
                Access the world's leading digital assets, including Bitcoin,
                Ethereum, Tether, and other altcoins.
              </p>
            </div>
          </li>
          <li>
            <div class="finanialbox">
              <figure><img src="{{ asset('') }}images/forex-img.svg" alt="img" /></figure>
              <h3>Forex</h3>
              <p>
                The market has vast trading opportunities and includes
                significant and exotic currency pairs.
              </p>
            </div>
          </li>
          <li>
            <div class="finanialbox">
              <figure><img src="{{ asset('') }}images/indices-img.svg" alt="img" /></figure>
              <h3>Indices</h3>
              <p>
                The advantage of trading indices over individual stocks is that
                they offer exposure to an entire industry.
              </p>
            </div>
          </li>
          <li>
            <div class="finanialbox">
              <figure><img src="{{ asset('') }}images/metals-img.png" alt="img" /></figure>
              <h3>Metals</h3>
              <p>
                Gold and silver have been exchanged for goods throughout time
                and continue to be a popular choice for many traders today.
              </p>
            </div>
          </li>
          <li>
            <div class="finanialbox">
              <figure>
                <img src="{{ asset('') }}images/commodities-img.svg" alt="img" />
              </figure>
              <h3>Commodities</h3>
              <p>
                Trade CFDs on energy commodities to access some of the world's
                biggest oil and natural gas markets.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="container">
      <div class="platform-section">
        <div class="platform-left">
         <div class="heading">
        <h2>Choose Your Platform</h2>
        <p>
            Enhance your trading experience with our powerful platforms — 
            execute trades from any browser or operating system and access 
            global markets with ease.
        </p>
        </div>

         <ul class="tickmark-listing">
            <li>
                <img src="{{ asset('') }}images/purple-tick-icon.svg" alt="icon" />
                Over 50 built-in technical indicators charting features
            </li>
            <li>
                <img src="{{ asset('') }}images/purple-tick-icon.svg" alt="icon" />
                Clean, user-friendly interface for effortless navigation
            </li>
            <li>
                <img src="{{ asset('') }}images/purple-tick-icon.svg" alt="icon" />
                Six distinct chart styles with 15 customizable timeframes
            </li>
            <li>
                <img src="{{ asset('') }}images/purple-tick-icon.svg" alt="icon" />
                Precision one-click trading for faster order execution
            </li>
            </ul>

          <div class="platform-btn">
            <a
              class="btn fillbtn"
              href="https://dashboard.mazifinance.com/register"
              >Create account</a
            >
            <a
              class="btn borderbtn"
              href="https://cp.theprimelimited.com/login"
              >Sign-in</a
            >
          </div>
        </div>
        <div class="platform-right">
         
          <figure><img src="{{ asset('') }}images/platform-img.png" alt="img" /></figure>
        </div>
      </div>
    </div>


    <div class="why-finance">
      <div class="container">
        <div class="heading">
          <h2>Why The Prime Limited</h2>
        </div>
        <ul class="financelist">
          <li>
            <div class="financebox">
              <figure><img src="{{ asset('') }}images/finance-icon1.svg" alt="img" /></figure>
              <strong>Variety of trading platforms</strong>
            </div>
          </li>
          <li>
            <div class="financebox">
              <figure><img src="{{ asset('') }}images/finance-icon2.svg" alt="img" /></figure>
              <strong>Free Trading Ideas &amp; Analytics</strong>
            </div>
          </li>
          <li>
            <div class="financebox">
              <figure><img src="{{ asset('') }}images/finance-icon3.svg" alt="img" /></figure>
              <strong>24/5 Customer Support</strong>
            </div>
          </li>
          <li>
            <div class="financebox">
              <figure><img src="{{ asset('') }}images/finance-icon4.svg" alt="img" /></figure>
              <strong>Economic Calendar</strong>
            </div>
          </li>
          <li>
            <div class="financebox">
              <figure><img src="{{ asset('') }}images/finance-icon5.svg" alt="img" /></figure>
              <strong>Educational Rescources</strong>
            </div>
          </li>
          <li>
            <div class="financebox">
              <figure><img src="{{ asset('') }}images/finance-icon6.svg" alt="img" /></figure>
              <strong>Data Protection</strong>
            </div>
          </li>
          <li>
            <div class="financebox">
              <figure><img src="{{ asset('') }}images/finance-icon7.svg" alt="img" /></figure>
              <strong>Partner Program</strong>
            </div>
          </li>
          <li>
            <div class="financebox">
              <figure><img src="{{ asset('') }}images/finance-icon8.svg" alt="img" /></figure>
              <strong>Secure Accounts</strong>
            </div>
          </li>
        </ul>

        <div class="get-started">
          <div class="heading">
            <h2>How to get started</h2>
            <p>
              Elevate your Financial Journey and start trading with us today.
            </p>
          </div>
          <ul>
            <li>
              <div class="startbox">
                <span>1</span>
                <h3>Register</h3>
                <p>
                  Fill in the requested fields regarding your personal
                  information to complete registration
                </p>
              </div>
            </li>
            <li>
              <div class="startbox">
                <span>2</span>
                <h3>Fund</h3>
                <p>
                  Make a deposit wth one of the systems available in the client
                  area
                </p>
              </div>
            </li>
            <li>
              <div class="startbox">
                <span>3</span>
                <h3>Start trading</h3>
                <p>
                  Log in and Start trading more than 500 instruments with
                  spreads starting from 0.0 pips.
                </p>
              </div>
            </li>
            <li>
              <div class="startbox">
                <a href="https://cp.theprimelimited.com/login"
                  ><strong>Start trading</strong></a
                >
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
@endsection