 <header>
      <div class="container">
        <div class="header">
          <div class="logo">
            <figure>
              <a href="{{url ('/') }}"><img src="{{ asset('') }}images/logo1.png" alt="logo" style="width: 97px;height: auto;" /></a>
            </figure>
          </div>
          <div class="navigation">
            <div class="menu-button">
              <span></span><span></span><span></span>
            </div>
            <nav>
              <ul data-breakpoint="992" class="flexnav lg-screen">
                <li><a href="{{url ('/') }}">Home</a></li>
                <li><a href="{{url ('/about-us') }}">About Us</a></li>
                <li class="item-with-ul">
                  <a href="javascript:void(0)">Trading</a>
                 <ul>
                    <li><a href="{{ url('forex') }}">Forex</a></li>
                    <li><a href="{{ url('equities') }}">Equities</a></li>
                    <li><a href="{{ url('indices') }}">Indices</a></li>
                    <li><a href="{{ url('commodities') }}">Commodities</a></li>
                    <li><a href="{{ url('cryptocurrencies') }}">Cryptocurrencies</a></li>
                 </ul>
                </li>

              
                <li class="item-with-ul">
                  <a href="javascript:void(0)">Account Type</a>
                  <ul>
                    <li><a href="{{ url('/account') }}">Standard Account</a></li>
                    <li><a href="{{ url('/account') }}">Prime Account</a></li>
                  </ul>
                </li>
                <li><a href="{{url ('/contact') }}">Contact Us</a></li>
                 <li><a class="btn borderbtn" href="https://cp.theprimelimited.com/login">Client Login</a></li>
                 <li><a class="btn borderbtn" href="https://cp.theprimelimited.com/login?ibLogin=true">IB Login</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
