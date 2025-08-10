<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="images/logo1.png" />
    <link href="{{ asset('') }}css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}css/flexnav.css" rel="stylesheet" />
    <link href="{{ asset('') }}css/custom.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <script
      type="text/javascript"
      src="../widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js"
      async
    ></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
      rel="stylesheet"
    />
    <title>The Prime Limited</title>
    <!-- Google tag (gtag.js) -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-04K4CDYX9T"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-04K4CDYX9T");
    </script>
    <!--Start of Tawk.to Script-->
   
    <!--End of Tawk.to Script-->
  </head>
  <body>
     @include('body.header')
    @yield('content')
    @include('body.footer')
    <!-- <div class="floating-div">
      <img src="{{ asset('') }}images/binancelogo.png" alt="Finance Logo" /> Trusted by Binance
    </div> -->

    <script src="{{ asset('') }}js/jquery-min.js"></script>
    <script src="{{ asset('') }}js/flexnav.js"></script>
    <script src="{{ asset('') }}js/bootstrap.bundle.min.js"></script>
    <script>
      $(".flexnav").flexNav();
      $(".menu-button").click(function () {
        $(".menu-button").toggleClass("open");
        $("body").toggleClass("stop-scroll");
      });
      $(document).ready(function () {
        $(".searchmobile").click(function () {
          $(".searchbox").toggleClass("show");
        });
      });
      $(window).scroll(function () {
        var sticky = $("header"),
          scroll = $(window).scrollTop();
        if (scroll >= 100) {
          sticky.addClass("headerfixed");
        } else {
          sticky.removeClass("headerfixed");
        }
      });
    </script>

    <script>
      $(document).ready(function () {
        $("#emailForm").submit(function (e) {
          e.preventDefault();

          var formData = $(this).serialize();

          $.ajax({
            type: "POST",
            url: "https://productiongameapi.mazimatic.com/v1/sendmail", // Replace with your server-side script URL
            data: formData,
            success: function (response) {
              $("#successMessage").text("Email sent successfully!");
              $("#successMessage").show();
              setTimeout(function () {
                $("#successMessage").hide();
              }, 5000);
            },
            error: function (error) {
              $("#successMessage").text("Error sending email.");
              $("#successMessage").show();
              setTimeout(function () {
                $("#successMessage").hide();
              }, 5000);
            },
          });
        });
      });
    </script>
    @stack('script')
  </body>
</html>
