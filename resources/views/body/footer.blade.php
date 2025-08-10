 <footer>
      <div class="container">
        <div class="top-footer">
          <div class="footerlogo">
            <figure><img src="{{ asset('') }}images/logo1.png" alt="logo" style="width: 140px;height: auto;" /></figure>
            <p>
              Elevate your Financial Journey today with Mazi Finance. Trade
              Forex, Stocks, Crypto, Indices, Metals, Commodities & ETF's.
            </p>
            <p>Email: <a href="mailto:support@theprimelimited.com;">support@theprimelimited.com</a></p>
            <ul class="social-icon">
              <li>
                <a
                  href="#"
                  ><img src="{{ asset('') }}images/twitter-icon.svg" alt="img"
                /></a>
              </li>
            
              <li>
                <a
                  href="https://instagram.com/"
                  ><img src="{{ asset('') }}images/instagram-icon.png" alt="img"
                /></a>
              </li>
            </ul>
          </div>
          <div class="footerlink d-none d-md-block">
            <h4>Pages</h4>
            <ul>
            <li><a href="{{ route('forex') }}">Forex</a></li>
            <li><a href="{{ route('equities') }}">Stocks</a></li>
            <li><a href="{{ route('indices') }}">Indices</a></li>
            <li><a href="{{ route('commodities') }}">Commodities</a></li>
            <li><a href="{{ route('cryptocurrencies') }}">Cryptocurrencies</a></li>
            </ul>
          </div>
          <div class="footerlink">
            <h4>Documents</h4>
            <ul>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Risk Disclosure</a></li>
              <!-- <li><a href="javascript:void(0)">User Agreement</a></li> -->
            </ul>
          </div>
          <div class="footerlink">
            <h4>Contact Us</h4>
            <ul>
              <li><a href="{{ url('/about-us') }}">About us</a></li>
              <li><a href="{{ url('/contact') }}">Contact us</a></li>
             
            </ul>
          </div>
        </div>

        <div class="copyright">
          <h4>&copy;2025 The Prime Limited All rights reserved</h4>
          
        </div>
      </div>
    </footer>