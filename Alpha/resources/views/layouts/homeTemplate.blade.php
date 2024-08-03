<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>flower gift Online</title>
	    <!-- Bootstrap CSS -->
             <link rel="stylesheet" href="{{asset('homeAssets/css/bootstrap.min.css')}}">
	    <!----css3---->
        <link rel="stylesheet" href="{{asset('homeAssets/css/custom.css')}}">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	   <link rel="stylesheet" type="text/css" href="{{asset('homeAssets/css/settings.css')}}" media="screen" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@300;400;500;600;700;800&family=Lato:ital,wght@0,400;0,700;0,900;1,300&family=Livvic:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,300&family=Montserrat:wght@300;400;500;600;700;800&family=Open+Sans:wght@300;400;500;600;700;800&family=Oswald:wght@200;300;400;500;600;700&family=PT+Sans:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,500&family=Roboto:wght@300;400;500;700;900&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<!--fontawesome-->
<link rel="stylesheet" href="fontawesome-free-5.15.4-web/{{asset('homeAssets/css/all.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
<link rel="stylesheet" href="{{asset('homeAssets/css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('homeAssets/css/baguetteBox.min.css')}}">	
  </head>
  {{-- header started --}}
  <div class="modal fade" id="myModal_delivery" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal-loc-body">
          <div class="delivery-pop">
            <h2>Choose your Delivery City</h2>
            <h3>Enjoy Handpicked Gifts and Offers Personalized for your City</h3>
            <form name="myform" id="myForm">
              <div class="inputdiv-loc">
                <input type="text" name="delivery_popcity" id="delivery_popcity" placeholder="Enter City Name"
                  class="ui-autocomplete-input" autocomplete="off">
              </div>
            </form>
            <div class="top-cities">
              <p>Top Cities</p>
              <ul>
                <li>
                  <a href="" onclick="">Delhi</a>
                </li>
                <li><a href="" onclick="">Noida</a></li>
                <li><a href="" onclick="">Gurgaon</a></li>
                <li><a href="" onclick="">Mumbai</a></li>
                <li><a href="" onclick="">Hyderabad</a></li>
                <li><a href="" onclick="">Chennai</a></li>
                <li><a href="" onclick="">Bangalore</a></li>
                <li><a href="" onclick="">Lucknow</a></li>
                <li><a href="" onclick="">Noida</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header" id="header">
    <div class="globalnav d-flex justify-content-lg-end justify-content-end">
      <ul>
        <li><a href="" title="" class="" target="_blank" rel="">partner with us</a></li>
        <li><a href="" title=" " class="" target="_blank" rel="">Help</a></li>
        <li><a href="" title=" " class="" target="_blank" rel="">Track Order</a></li>
        <li><a href="" title="" class="" target="_blank" rel="">Offers</a></li>
        <li><a href="" title="" class="" target="_blank" rel=""><i class="fas fa-phone"></i> Call us - 098711 41000</a>
        </li>
      </ul>
    </div>
    <div class="head-topper">
      <div class="container-fluid">
        <div class="row d-flex align-items-center">
          <div class="col-lg-3 col-md-3 d-md-none d-lg-block">
            <div class="logo-section d-flex text-left justify-content-lg-start justify-content-center">
              <a href="#"><img src="{{asset('homeAssets/img/logo.svg')}}" class="d-lg-block d-md-none d-none" /></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 px-0 px-md-2 px-lg-2">
            <div class="form-search-section">
              <form>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                      placeholder="Applicant Mobile Number">
                    <div class="input-group-prepend">
                      <a href="javascript:void(0)" onclick="filter_search()" id="filter_search">
                        <div class="searchicon">GO</div>
                      </a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 col-md-8  px-0 px-md-2 px-lg-2">
            <div class="top-link d-flex justify-content-lg-end align-items-center text-center justify-content-center">
            <ul>
              <li><a href="tel:91-8806818972"><img src="{{asset('homeAssets/img/phone.svg')}}" width="20" class=""/>Call us: (+91) 987-654-3210</a></li>
              <li class="d-lg-block d-none"><a href="#">
              <img src="{{asset('homeAssets/img/email.svg')}}"width="20"class=""/>info@gmail.com</a></li>
            </ul>
         </div>
            <div class="header-social-icon d-flex justify-content-between ps-lg-5">
              <div class="delivery-location ms-lg-5">
                <a href="#myModal_delivery" data-bs-toggle="modal">
                  <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                  &nbsp; <span>Select Delivery Location</span> &gt;</a>
              </div>
              <div class="header-right">
                <div class="online-cart d-flex align-items-center justify-content-end">
                  <a href="" type="button" class="trackorder me-lg-3 me-md-3 me-sm-2" data-bs-toggle="tooltip"
                    data-bs-placement="bottom" title="Track My Order"></a>
                  <a href="" type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="My Cart"
                    class="righticon me-lg-3 me-md-3 me-sm-2 cart"><span class="count"> 0 </span></a>
                  <div class="dropdown">
                    <button class="btn usericon dropbtn  dropdown-toggle" type="button" id="dropdownMenuButton1"
                      data-bs-toggle="dropdown" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu shadow user-menu" aria-labelledby="dropdownMenuButton1">
                     
                       <!-- <a href="/login">Login</a> -->
                       <!-- <a href="/logout">register now</a> -->
                       @if(Auth::check())
    <a href="#">{{ Auth::user()->name }}</a>
    <a href="/user">My Profile</a>
    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
        @csrf
        <button type="submit" class="nav-link">Logout</button>
    </form>
@else
    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
    <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
@endif

                     
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="navigation" id="navigation">
      <div class="header-inner" id="header-inner">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg my-navbar navbar-light p-0">
            <a href="#" class="navbar-brand"><img src="{{asset('homeAssets/img/logo.svg')}}" width="150" class="d-lg-none d-md-block" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span></span>
              <span></span>
              <span></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav m-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#">Women day</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Same day Delivery</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" data-bs-toggle="dropdown">flower <i class="fas fa-chevron-right"></i></a>
                    <ul class="dropdown-menu small-menu">
                      <a href="#">Office Carpet Tiles</a>
                      <a href="#">Wall to Wall Carpets Dubai</a>
                      <a href="#">Vinyl Carpets</a>
                      <a href="#">Sisal Carpets</a>
                      <a href="#">Office Carpets</a>
                      <a href="#">Artificial Grass Carpets</a>
                      <a href="#">Exhibition Carpets</a>
                      <a href="#">Outdoor Carpets</a>
                      <a href="#">Carpet Texture</a>
                    </ul>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" data-bs-toggle="dropdown">Cakes 
                    <i class="fas fa-chevron-right"></i></a>
                  <ul class="dropdown-menu small-menu">
                    <a href="#">Laminate Flooring</a>
                    <a href="#">Vinyl Flooring</a>
                    <a href="#">EPDM Flooring</a>
                    <a href="#">Wooden Flooring</a>
                    <a href="#">Parquet Flooring</a>
                    <a href="#">Rubber Flooring</a>
                    <a href="#">Ceramic Flooring Tiles</a>
                    <a href="#">Granite Flooring</a>
                    <a href="#">Porcelain Flooring</a>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" data-bs-toggle="dropdown">Personalised <i
                      class="fas fa-chevron-right"></i></a>
                  <ul class="dropdown-menu small-menu">
                    <a href="#">Handmade Rugs</a>
                    <a href="#">Modern Rugs</a>
                    <a href="#">area Rugs</a>
                    <a href="#">Sisal Rugs</a>
                    <a href="#">Persian Rugs</a>
                    <a href="#">Shaggy Rug</a>
                    <a href="#">Patchwork Rugs</a>
                    <a href="#">Animal Skin Rugs</a>
                    <a href="#">Leopard Rugs</a>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" data-bs-toggle="dropdown">birthday <i
                      class="fas fa-chevron-right"></i></a>
                  <ul class="dropdown-menu small-menu">
                    <a href="#">Aluminum Skirting</a>
                    <a href="#">MDF Skirting</a>
                    <a href="#">Skirting Tiles</a>
                    <a href="#">PVC Skirting</a>
                    <a href="#">Wall Skirting</a>
                    <a href="#">Wooden Skirting</a>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Anniversary</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Plant</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">gift</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">International</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Occasions</a>
                </li>
              </ul>
            </div>
            {{-- <form class="form-inline my-2 my-lg-0 d-lg-block d-md-none d-none">
            </form> --}}
          </nav>
        </div>
      </div>
    </div>
  </div>
  {{-- end header --}}
  @yield('homeContent')
 <!-- footer Started -->
 <div class="footer-sections">
    <div class="hidden-xs" style="text-align:center; font-size:35px; color:#333; padding:5px; border-bottom: 1px solid #ccc;">
      Make Someone Happy Today
    </div>
    <div class="footer-inner-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-4 subcribe text-center">
            <div class="footer-heading">
              <p class="footer-txt-hedng">SIGN UP FOR EMAIL OFFERS &amp; UPDATES</p>
            </div>
            <input type="text" name="newsletter-email" id="newsletter-email" placeholder="Email">
            <button class="subcribe" id="newsletter">SUBMIT</button>
            <div class="errorNews" style="color: red;"></div>
          </div>
          <div class="col-md-4 d-flex justify-content-center text-center">
            <div class="social-icons">
              <div class="footer-heading">
                <p class="footer-txt-hedng">CONNECT WITH US</p>
              </div>
              <a class="facebook" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook" target="_blank"
                href="">
                <i class="fab fa-facebook" aria-hidden="true"></i></a>
              <a target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Twitter" class="twitter"
                href="">
                <i class="fab fa-twitter" aria-hidden="true"></i></a>
              <a target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="youtube" class="youtube"
                href=""><i class="fab fa-youtube" aria-hidden="true"></i></a>
              <a target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pinterest"
                class="pinterest" href=""><i class="fab fa-pinterest" aria-hidden="true"></i></a>
              <a target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="LinkedIn" class="linkedin"
                href=""><i class="fab fa-linkedin" aria-hidden="true"></i></a>
              <a target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram"
                class="Instagram" href=""><i class="fab fa-instagram" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="col-md-4 hidden-xs">
            <div class="footer-heading text-center">
              <p class="footer-txt-hedng">SECURE ORDERING &amp; TRANSACTIONS</p>
            </div>
            <div class="pull-left">
              <img src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/live-new/images/footerpayment.png"
                width="100%">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-items hidden-xs d-flex justify-content-center">
      <div class="footer-items-list ">
        <a href="/about-us">About Us</a>
        | <a href="">Sitemap</a>
        | <a href="/contact-us">Contact Us</a>
        | <a href="/faq">FAQS</a>
        | <a href="/blog">Blog</a>
        | <a href="/special-offers">Offers</a>
        | <a href="/terms-of-use">Terms &amp; Conditions</a>
        | <a href="/CustomizeYourBouquet">Customize Your Bouquet</a>
        | <a href="/floristlogin">Become a Partner</a>
      </div>
    </div>
    <p style="padding-top:5px; font-size:12px; text-align:center; margin:0px; padding-bottom:5px;">Copyright &copy
      2009-2022, MyFlowerTree.com, All Rights Reserved.</p>
  </div>
  <a id="scrollUp" href="#top" data-bs-toggle="tooltip" data-bs-placement="right" title="Go to Top"
    style="position: fixed; z-index: 2147483647; display: block;">
    <i class="fas fa-long-arrow-alt-up"></i></a>
  <div id="WAButton" class="floating-wpp">
    <div class="floating-wpp-button">
      <img src="{{asset('homeAssets/img/whatsapp-gif.gif')}}">
      <div class="floating-wpp-button-image"></div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js')}}, then Bootstrap JS -->
  <script src="{{asset('homeAssets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('homeAssets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('homeAssets/js/wow.min.js')}}"></script>
  <script src="{{asset('homeAssets/js/baguetteBox.min.js')}}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
  <script>
  $(function () {
        $('#WAButton').floatingWhatsApp({
          phone: '+9717185100', //WhatsApp Business phone number International format-
          Get it with Toky at https://toky.co/en/features/whatsapp.
          headerTitle: 'Chat with us on WhatsApp!', //Popup Title
          popupMessage: 'Hello, how can we help you?', //Popup Message
          showPopup: true, //Enables popup display
          buttonImage: <img src="{{asset('homeAssets/img/whatsapp-gif.gif')}}"/>, //Button Image
          headerColor: 'crimson' //Custom header color
          backgroundColor: 'crimson' //Custom background button color
          position: "right"
        });
    });
    //Auto Focus Input
    $(document).ready(function () {
      $('.appint-btn, #formclick').click(function () {
        $('#fullname_f').focus();
        $('#InputToFocus').focus();
      });
    });
    $(".appint-btn, #formclick").click(function () {
      $([document.documentElement, document.body]).animate({
        scrollTop: $(".tp-mask-wrap, .contact_form_section").offset().top
      }, 200);
    });
  </script>
  <script>
    $(document).ready(function () {
      $('.close').click(function () {
        $('.floating-wpp-popup').removeClass('active');
      });
      $('.floating-wpp-button').mouseover(function () {
        $('.floating-wpp-popup').addClass('active');
      });
    });
  </script>
  <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
  </script>
  <script>
    $(document).ready(function () {
      $('.contents').btnLoadmore({
        showItem: 8,
        whenClickBtn: 4,
        textBtn: 'Load more...',
        classBtn: 'btn btn-secondary'
      });
    });
  </script>
  <script>
    $(document).ready(function ($) {
      var $element = $('.counter');
      if ($element.length > 0) {
        $element.counterUp({
          delay: 10,
          time: 1000
        });
      }
    });
  </script>
  <script>
    $('.location-slider').slick({
      slidesToShow: 5,
      dots: true,
      arrows: true,
      autoplay: true,
      autoplaySpeed: 3000,
      prevArrow: '<i class="fas fa-chevron-left prev"></i>',
      nextArrow: '<i class="fas fa-chevron-right next"></i>',
      swipe: true,
      swipeToSlide: true,
      responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          centerMode: true,
        }
      }, {
        breakpoint: 800,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: false,
          infinite: true,

        }
      }, {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        }
      }]
    });
  </script>
  <script>
    $('.client-slider').slick({
      slidesToShow: 6,
      dots: false,
      arrows: true,
      autoplay: false,
      autoplaySpeed: 3000,
      prevArrow: '<i class="fas fa-chevron-left prev"></i>',
      nextArrow: '<i class="fas fa-chevron-right next"></i>',
      swipe: true,
      swipeToSlide: true,
      responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          centerMode: true,
        }
      }, {
        breakpoint: 800,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2,
          dots: false,
          infinite: true,
        }
      }, {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          dots: false,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        }
      }]
    });
  </script>
  <script>
    $('.project-slider').slick({
      slidesToShow: 4,
      dots: false,
      arrows: true,
      autoplay: false,
      autoplaySpeed: 3000,
      prevArrow: '<i class="fas fa-chevron-left prev"></i>',
      nextArrow: '<i class="fas fa-chevron-right next"></i>',
      swipe: true,
      swipeToSlide: true,
      responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          centerMode: true,
        }
      }, {
        breakpoint: 800,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: false,
          infinite: true,

        }
      }, {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        }
      }]
    });
  </script>
  <script>
    $('.ticker-slider').slick({
      speed: 500,
      arrows: false,
      fade: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: '<i class="fas fa-chevron-left tab-prev"></i>',
      nextArrow: '<i class="fas fa-chevron-right tab-next"></i>',
      dots: false,
    });
  </script>
  <script>
    window.addEventListener('load', function () {
      baguetteBox.run('.gallery,.gallery2');
    });
  </script>
   <script src="{{asset('homeAssets/js/wow.min.js')}}"></script>
  <script>
    new WOW().init();
  </script>
  <script>
    $('.blog-slider').slick({
      speed: 500,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 2000,
      dots: false,
      responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
        }
      }, {
        breakpoint: 800,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 2,
          dots: false,
          infinite: true,

        }
      }, {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        }
      }]
    });
  </script>
  <script>
    $(document).ready(function () {
      $(window).scroll(function () {//scroll--top---indicator---arrow-jquery----//
        if ($(window).scrollTop() > 600) {//---position---600----px scroll-----//
          $("#scrollUp").fadeIn();
        }
        else {
          $("#scrollUp").css("display", "none");
        }
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $(window).scroll(function () {
        if ($(window).scrollTop() < 90) { //-navbar-----scrolltop---fixed---jquery--/
          $('#header').removeClass('navbar-scroll');
        }
        else {
          $('#header').addClass('navbar-scroll');
        }
      });
    });
  </script>
</body>
</html>