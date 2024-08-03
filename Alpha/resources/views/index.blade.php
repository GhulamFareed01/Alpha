@extends('layouts.homeTemplate')
@section('homeContent')
<!-- revolution slider -->
<div class="slider-section">
    <section class="container-fluid px-lg-1 px-1">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('homeAssets/img/slider/3.jpg')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('homeAssets/img/slider/2.jpg')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('homeAssets/img/slider/1.jpg')}}" alt="Second slide">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!-- revolution slider end -->
</div>
<div class="category-section-top">
    <div class="data surprise-for hidden-xs">
      <ul>
        <li class="leaf"><a href="">
            <span class="icon">
              <img style="background: #ffecef;"
                src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/2021/home/birthday11.jpg" alt="Birthday"
                title="Birthday"></span>
            <span class="category">Birthday</span></a></li>
        <li class="leaf"><a href=""><span class="icon">
              <img style="background: #f5efb0;"
                src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/2021/home/flower.png"
                alt="Online Flower Delivery" title="Online Flowers Delivery"></span><span
              class="category">Flowers</span></a></li>
        <li class="leaf"><a href=""><span class="icon">
              <img style="background: #ffeabc;"
                src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/2021/home/cakes.png"
                alt="Online Cake Delivery" title="Online Cake Delivery"></span><span class="category">Cakes</span></a>
        </li>
        <li class="leaf"><a href=""><span class="icon">
              <img style="background: #f0ffcc;"
                src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/2021/home/plants.png"
                alt="Online Plant Delivery" title="Online Plant Delivery"></span><span
              class="category">Plants</span></a></li>
        <li class="leaf"><a href="/anniversary"><span class="icon">
              <img style="background: #dcf5ff;"
                src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/2021/home/anniversary.png"
                alt="Anniversary Gifts Online" title="Anniversary Gifts Online">
            </span>
            <span class="category">Anniversary</span></a></li>
        <li class="leaf"><a href=""><span class="icon">
              <img style="background: #efe5ff;"
                src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/2021/home/personalised.jpg"
                alt="Personalised Gifts Online" title="Personalised Gifts Online"></span><span
              class="category">Personalised</span></a></li>
        <li class="leaf"><a href="">
            <span class="icon">
              <img style="background: #ffdce6;"
                src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/2021/home/combos.jpg">
            </span><span class="category">Combos</span></a></li>
      </ul>
    </div>
</div>
<div class="container">
    <div class="row">
      <div class="mft-product-itm-list">
        <div class="mft-product-itm-list-inner row">
          <div class=" col-lg-3 col-md-4 col-sm-6 col-6 text-center">
            <div class="box-cover">
              <a href="/birthday"><img
                  src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/2021/home/valentine-1.jpg" class="img-fluid"
                  title="Birthday Gifts" alt="Birthday Gifts">
                <div class="mft-text-product"><span>Birthday</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-6 text-center">
            <div class="box-cover">
              <a href="">
                <img src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/2021/home/anniversary1.jpg"
                  class="img-fluid" title="Anniversary" alt="Anniversary">
                <div class="mft-text-product">
                  <span>Anniversary</span>
                </div>
              </a>
            </div>
          </div>
          <div class=" col-lg-3 col-md-4 col-sm-6 col-6 text-center">
            <div class="box-cover">
              <a href="">
                <img src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/2021/home/flowers.jpg" class="img-fluid"
                  title="Flowers" alt="Flowers">
                <div class="mft-text-product"><span>Flowers</span></div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-6 text-center">
            <div class="box-cover">
              <a href=""><img src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/2021/home/cake.jpg"
                  class="img-fluid" title="Cakes" alt="Cakes">
                <div class="mft-text-product"><span>Cakes</span></div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-6 text-center">
            <div class="box-cover">
              <a href="s"><img src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/2021/home/personalised1.jpg"
                  class="img-fluid" title="Personalised" alt="Personalised">
                <div class="mft-text-product"><span>Personalised</span></div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-6 text-center">
            <div class="box-cover">
              <a href=""><img src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/2021/home/plants1.jpg"
                  class="img-fluid" title="Plants" alt="Plants">
                <div class="mft-text-product"><span>Plants</span></div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-6 text-center">
            <div class="box-cover">
              <a href=""><img src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/2021/home/combos1.jpg"
                  title="Combos" class="img-fluid" alt="Combos">
                <div class="mft-text-product"><span>Combos</span></div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-6 text-center">
            <div class="box-cover">
              <a href=""><img src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/2021/home/barbie-cakes.jpg"
                  class="img-fluid" title="Barbie Cakes" alt="Barbie Cakes">
                <div class="mft-text-product"><span>Barbie Cakes</span></div>
              </a>
            </div>
          </div>

          <div class=" col-lg-3 col-md-4 col-sm-6 col-6 text-center">
            <div class="box-cover">
              <a href=""><img src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/2021/home/chocolate-bouqute.jpg"
                  class="img-fluid" title="Chocolate Bouquets" alt="Chocolate Bouquets">
                <div class="mft-text-product">
                  <span>Chocolate Bouquets</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-6 text-center">
            <div class="box-cover">
              <a href=""><img src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/2021/home/delhi-ncr-special.jpg"
                  class="img-fluid" title="Delhi NCR Special" alt="Delhi NCR Special">
                <div class="mft-text-product"><span>Delhi NCR Special</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<section class="best-seller-section">
    <div class="container">
      <div class="seller-combo mb-4">
        <div class="main-heading d-flex justify-content-between">
          <h2 class="pri-heading">Best Seller</h2>
          <a href=""><span class="view-all">View All</span></a>
        </div>
        <div class="product-inner">
          <ul>
            <li class="leaf first">
              <a href="">
                <div class="pro-img">
                  <img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/Chocolate/5I5B2817-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/Chocolate/5I5B2817-350x350.jpg"
                    alt="16 Pcs Ferrero Rocher" title="16 Pcs Ferrero Rocher">
                </div>
                <div class="pro-desc">
                  <div class="pro-name">16 Pcs Ferrero Rocher</div>
                  <div class="price"> Rs. 1,045</div>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text">Today.</span></div>
              </a>
            </li>
            <li class="leaf">
              <a href="">
                <div class="pro-img">
                  <img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/05-05-2018/1568356801IMG_8080-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/05-05-2018/1568356801IMG_8080-350x350.jpg"
                    alt="Chocolate Truffle Cake" title="Chocolate Truffle Cake">
                </div>
                <div class="pro-desc">
                  <div class="pro-name">Chocolate Truffle Cake</div>
                  <div class="price"> Rs. 599 <span class="list-price"> Rs. 699</span></div><span
                    class="price-percentage" style="display:none;">
                    14% OFF </span>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text"><span style="color:green">Today</span></span>.
                </div>
              </a>
            </li>

            <li class="leaf "><a href="/floral-medley-hamper-8436">
                <div class="pro-img"><img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/29-09-2018/1542094973_DSC1106-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/29-09-2018/1542094973_DSC1106-350x350.jpg"
                    alt="Floral Medley Hamper" title="Floral Medley Hamper"></div>
                <div class="pro-desc">
                  <div class="pro-name">Floral Medley Hamper</div>
                  <div class="price"> Rs. 1,049 <span class="list-price"> Rs. 1,249</span></div><span
                    class="price-percentage" style="display:none;">
                    16% OFF </span>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text"><span style="color:green">Today</span></span>.
                </div>
              </a></li>

            <li class="leaf last"><a href="/jute-wrapped-beauties--9172">
                <div class="pro-img"><img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/009/1557125390IMG_8823-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/009/1557125390IMG_8823-350x350.jpg"
                    alt="Jute Wrapped Beauties " title="Jute Wrapped Beauties "></div>
                <div class="pro-desc">
                  <div class="pro-name">Jute Wrapped Beauties </div>
                  <div class="price"> Rs. 699</div>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text"><span style="color:green">Today</span></span>.
                </div>
              </a></li>

          </ul>
        </div>
      </div>

      <div class="seller-combo mb-4">
        <div class="main-heading d-flex justify-content-between">
          <h2 class="pri-heading">Combos</h2>
          <a href=""><span class="view-all">View All</span></a>
        </div>
        <div class="product-inner">
          <ul>
            <li class="leaf first">
              <a href="">
                <div class="pro-img">
                  <img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/Chocolate/5I5B2817-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/Chocolate/5I5B2817-350x350.jpg"
                    alt="16 Pcs Ferrero Rocher" title="16 Pcs Ferrero Rocher">
                </div>
                <div class="pro-desc">
                  <div class="pro-name">16 Pcs Ferrero Rocher</div>
                  <div class="price"> Rs. 1,045</div>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text">Today.</span></div>
              </a>
            </li>
            <li class="leaf">
              <a href="">
                <div class="pro-img">
                  <img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/05-05-2018/1568356801IMG_8080-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/05-05-2018/1568356801IMG_8080-350x350.jpg"
                    alt="Chocolate Truffle Cake" title="Chocolate Truffle Cake">
                </div>
                <div class="pro-desc">
                  <div class="pro-name">Chocolate Truffle Cake</div>
                  <div class="price"> Rs. 599 <span class="list-price"> Rs. 699</span></div><span
                    class="price-percentage" style="display:none;">
                    14% OFF </span>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text"><span style="color:green">Today</span></span>.
                </div>
              </a>
            </li>

            <li class="leaf "><a href="/floral-medley-hamper-8436">
                <div class="pro-img"><img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/29-09-2018/1542094973_DSC1106-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/29-09-2018/1542094973_DSC1106-350x350.jpg"
                    alt="Floral Medley Hamper" title="Floral Medley Hamper"></div>
                <div class="pro-desc">
                  <div class="pro-name">Floral Medley Hamper</div>
                  <div class="price"> Rs. 1,049 <span class="list-price"> Rs. 1,249</span></div><span
                    class="price-percentage" style="display:none;">
                    16% OFF </span>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text"><span style="color:green">Today</span></span>.
                </div>
              </a></li>

            <li class="leaf last"><a href="/jute-wrapped-beauties--9172">
                <div class="pro-img"><img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/009/1557125390IMG_8823-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/009/1557125390IMG_8823-350x350.jpg"
                    alt="Jute Wrapped Beauties " title="Jute Wrapped Beauties "></div>
                <div class="pro-desc">
                  <div class="pro-name">Jute Wrapped Beauties </div>
                  <div class="price"> Rs. 699</div>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text"><span style="color:green">Today</span></span>.
                </div>
              </a></li>
          </ul>
        </div>
      </div>
      <div class="seller-combo mb-4">
        <div class="main-heading d-flex justify-content-between">
          <h2 class="pri-heading">Cakes</h2>
          <a href=""><span class="view-all">View All</span></a>
        </div>
        <div class="product-inner">
          <ul>
            <li class="leaf first">
              <a href="">
                <div class="pro-img">
                  <img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/Chocolate/5I5B2817-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/Chocolate/5I5B2817-350x350.jpg"
                    alt="16 Pcs Ferrero Rocher" title="16 Pcs Ferrero Rocher">
                </div>
                <div class="pro-desc">
                  <div class="pro-name">16 Pcs Ferrero Rocher</div>
                  <div class="price"> Rs. 1,045</div>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text">Today.</span></div>
              </a>
            </li>
            <li class="leaf">
              <a href="">
                <div class="pro-img">
                  <img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/05-05-2018/1568356801IMG_8080-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/05-05-2018/1568356801IMG_8080-350x350.jpg"
                    alt="Chocolate Truffle Cake" title="Chocolate Truffle Cake">
                </div>
                <div class="pro-desc">
                  <div class="pro-name">Chocolate Truffle Cake</div>
                  <div class="price"> Rs. 599 <span class="list-price"> Rs. 699</span></div><span
                    class="price-percentage" style="display:none;">
                    14% OFF </span>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text"><span style="color:green">Today</span></span>.
                </div>
              </a>
            </li>

            <li class="leaf "><a href="/floral-medley-hamper-8436">
                <div class="pro-img"><img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/29-09-2018/1542094973_DSC1106-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/29-09-2018/1542094973_DSC1106-350x350.jpg"
                    alt="Floral Medley Hamper" title="Floral Medley Hamper"></div>
                <div class="pro-desc">
                  <div class="pro-name">Floral Medley Hamper</div>
                  <div class="price"> Rs. 1,049 <span class="list-price"> Rs. 1,249</span></div><span
                    class="price-percentage" style="display:none;">
                    16% OFF </span>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text"><span style="color:green">Today</span></span>.
                </div>
              </a></li>

            <li class="leaf last"><a href="/jute-wrapped-beauties--9172">
                <div class="pro-img"><img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/009/1557125390IMG_8823-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/009/1557125390IMG_8823-350x350.jpg"
                    alt="Jute Wrapped Beauties " title="Jute Wrapped Beauties "></div>
                <div class="pro-desc">
                  <div class="pro-name">Jute Wrapped Beauties </div>
                  <div class="price"> Rs. 699</div>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text"><span style="color:green">Today</span></span>.
                </div>
              </a></li>
          </ul>
        </div>
      </div>
      <div class="seller-combo mb-4">
        <div class="main-heading d-flex justify-content-between">
          <h2 class="pri-heading">Flower</h2>
          <a href=""><span class="view-all">View All</span></a>
        </div>
        <div class="product-inner">
          <ul>
            <li class="leaf first">
              <a href="">
                <div class="pro-img">
                  <img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/Chocolate/5I5B2817-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/Chocolate/5I5B2817-350x350.jpg"
                    alt="16 Pcs Ferrero Rocher" title="16 Pcs Ferrero Rocher">
                </div>
                <div class="pro-desc">
                  <div class="pro-name">16 Pcs Ferrero Rocher</div>
                  <div class="price"> Rs. 1,045</div>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text">Today.</span></div>
              </a>
            </li>
            <li class="leaf">
              <a href="">
                <div class="pro-img">
                  <img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/05-05-2018/1568356801IMG_8080-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/05-05-2018/1568356801IMG_8080-350x350.jpg"
                    alt="Chocolate Truffle Cake" title="Chocolate Truffle Cake">
                </div>
                <div class="pro-desc">
                  <div class="pro-name">Chocolate Truffle Cake</div>
                  <div class="price"> Rs. 599 <span class="list-price"> Rs. 699</span></div><span
                    class="price-percentage" style="display:none;">
                    14% OFF </span>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text"><span style="color:green">Today</span></span>.
                </div>
              </a>
            </li>

            <li class="leaf "><a href="/floral-medley-hamper-8436">
                <div class="pro-img"><img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/29-09-2018/1542094973_DSC1106-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/29-09-2018/1542094973_DSC1106-350x350.jpg"
                    alt="Floral Medley Hamper" title="Floral Medley Hamper"></div>
                <div class="pro-desc">
                  <div class="pro-name">Floral Medley Hamper</div>
                  <div class="price"> Rs. 1,049 <span class="list-price"> Rs. 1,249</span></div><span
                    class="price-percentage" style="display:none;">
                    16% OFF </span>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text"><span style="color:green">Today</span></span>.
                </div>
              </a></li>

            <li class="leaf last"><a href="/jute-wrapped-beauties--9172">
                <div class="pro-img"><img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/009/1557125390IMG_8823-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/009/1557125390IMG_8823-350x350.jpg"
                    alt="Jute Wrapped Beauties " title="Jute Wrapped Beauties "></div>
                <div class="pro-desc">
                  <div class="pro-name">Jute Wrapped Beauties </div>
                  <div class="price"> Rs. 699</div>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text"><span style="color:green">Today</span></span>.
                </div>
              </a></li>
          </ul>
        </div>
      </div>
      <div class="seller-combo mb-4">
        <div class="main-heading d-flex justify-content-between">
          <h2 class="pri-heading">Personalised gifts</h2>
          <a href=""><span class="view-all">View All</span></a>
        </div>
        <div class="product-inner">
          <ul>
            <li class="leaf first">
              <a href="">
                <div class="pro-img">
                  <img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/Chocolate/5I5B2817-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/Chocolate/5I5B2817-350x350.jpg"
                    alt="16 Pcs Ferrero Rocher" title="16 Pcs Ferrero Rocher">
                </div>
                <div class="pro-desc">
                  <div class="pro-name">16 Pcs Ferrero Rocher</div>
                  <div class="price"> Rs. 1,045</div>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text">Today.</span></div>
              </a>
            </li>
            <li class="leaf">
              <a href="">
                <div class="pro-img">
                  <img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/05-05-2018/1568356801IMG_8080-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/05-05-2018/1568356801IMG_8080-350x350.jpg"
                    alt="Chocolate Truffle Cake" title="Chocolate Truffle Cake">
                </div>
                <div class="pro-desc">
                  <div class="pro-name">Chocolate Truffle Cake</div>
                  <div class="price"> Rs. 599 <span class="list-price"> Rs. 699</span></div><span
                    class="price-percentage" style="display:none;">
                    14% OFF </span>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text"><span style="color:green">Today</span></span>.
                </div>
              </a>
            </li>

            <li class="leaf "><a href="/floral-medley-hamper-8436">
                <div class="pro-img"><img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/29-09-2018/1542094973_DSC1106-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/29-09-2018/1542094973_DSC1106-350x350.jpg"
                    alt="Floral Medley Hamper" title="Floral Medley Hamper"></div>
                <div class="pro-desc">
                  <div class="pro-name">Floral Medley Hamper</div>
                  <div class="price"> Rs. 1,049 <span class="list-price"> Rs. 1,249</span></div><span
                    class="price-percentage" style="display:none;">
                    16% OFF </span>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text"><span style="color:green">Today</span></span>.
                </div>
              </a>
            </li>
            <li class="leaf last"><a href="/jute-wrapped-beauties--9172">
                <div class="pro-img"><img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/009/1557125390IMG_8823-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/009/1557125390IMG_8823-350x350.jpg"
                    alt="Jute Wrapped Beauties " title="Jute Wrapped Beauties "></div>
                <div class="pro-desc">
                  <div class="pro-name">Jute Wrapped Beauties </div>
                  <div class="price"> Rs. 699</div>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text"><span style="color:green">Today</span></span>.
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="seller-combo mb-4">
        <div class="main-heading d-flex justify-content-between">
          <h2 class="pri-heading">3d Mugs</h2>
          <a href=""><span class="view-all">View All</span></a>
        </div>
        <div class="product-inner">
          <ul>
            <li class="leaf first">
              <a href="">
                <div class="pro-img">
                  <img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/Chocolate/5I5B2817-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/Chocolate/5I5B2817-350x350.jpg"
                    alt="16 Pcs Ferrero Rocher" title="16 Pcs Ferrero Rocher">
                </div>
                <div class="pro-desc">
                  <div class="pro-name">16 Pcs Ferrero Rocher</div>
                  <div class="price"> Rs. 1,045</div>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text">Today.</span></div>
              </a>
            </li>
            <li class="leaf">
              <a href="">
                <div class="pro-img">
                  <img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/05-05-2018/1568356801IMG_8080-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/05-05-2018/1568356801IMG_8080-350x350.jpg"
                    alt="Chocolate Truffle Cake" title="Chocolate Truffle Cake">
                </div>
                <div class="pro-desc">
                  <div class="pro-name">Chocolate Truffle Cake</div>
                  <div class="price"> Rs. 599 <span class="list-price"> Rs. 699</span></div><span
                    class="price-percentage" style="display:none;">
                    14% OFF </span>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text"><span style="color:green">Today</span></span>.
                </div>
              </a>
            </li>
            <li class="leaf "><a href="/floral-medley-hamper-8436">
                <div class="pro-img"><img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/29-09-2018/1542094973_DSC1106-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/010/29-09-2018/1542094973_DSC1106-350x350.jpg"
                    alt="Floral Medley Hamper" title="Floral Medley Hamper"></div>
                <div class="pro-desc">
                  <div class="pro-name">Floral Medley Hamper</div>
                  <div class="price"> Rs. 1,049 <span class="list-price"> Rs. 1,249</span></div><span
                    class="price-percentage" style="display:none;">
                    16% OFF </span>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text"><span style="color:green">Today</span></span>.
                </div>
              </a>
            </li>
            <li class="leaf last"><a href="/jute-wrapped-beauties--9172">
                <div class="pro-img"><img class=""
                    src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/009/1557125390IMG_8823-350x350.jpg"
                    data-src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/009/1557125390IMG_8823-350x350.jpg"
                    alt="Jute Wrapped Beauties " title="Jute Wrapped Beauties "></div>
                <div class="pro-desc">
                  <div class="pro-name">Jute Wrapped Beauties </div>
                  <div class="price"> Rs. 699</div>
                </div>
                <div class="product-list-time">
                  Earliest Delivery:<span class="green-text"><span style="color:green">Today</span></span>.
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
</section>
<section class="content-section py-4">
    <div class="container-fluid px-lg-5">
      <span class="block-content">
        <div class="editor-content" style="text-align: left">
          <h1 style="color: #669999;">Flower Delivery Online in India From MyFlowerTree - India's Leading Online Florist
          </h1>
          <p>Sending Flowers online is in trend these days since flowers are the most beautiful gifts. From time
            immemorial, flowers are used as a visual expression of love and respect. Flowers exude positive vibes. They
            help express one's emotions that words cannot, in a most vivid way. Flower Bouquets make every occasion
            bright and happy.</p>
          <p>People of all ages from little ones to elderly people love receiving flowers. They are the best way of
            expressing love. Our <b>online flower shop</b> helps you express emotions and that too just in time!
            <b>Deliver fresh flowers online</b> to make your loved ones feel that you are constantly reminded of them.
          </p>
          <h2>Here are Top Reasons to Choose MyFlowerTree to Send Flowers Online:</h2>
          <ul>
            <li>India's Largest Flower Delivery Network</li>
            <li>Expert Florists Serving Since 2009</li>
            <li>Delivering flowers all over India and Internationally (UK, USA, UAE &amp; other countries)</li>
            <li>Same Day, Early Morning, Midnight and Express flower delivery available</li>
            <li><b>FREE Shipping across India</b></li>
            <li>100% Secure Payment process with<em> Visa Card</em> and <em>PayPal</em></li>
            <li>Most exclusive Floral Jewellery Online Shop in India</li>
            <li><b>Professional Flower Delivery anywhere in India within 3 hours</b></li>
            <li>On-time, Hassle-free delivery of Flowers, Cakes and Gifts</li>
            <li>Freshly picked flowers arrangements by <b>Trusted Local Florists</b></li>
            <li>Prompt, Efficient and Dedicated Customer Support</li>
            <li>Offering Mouth-melting cakes, including Sugar-free, diet cakes, etc.</li>
          </ul>
          <h2>Shop Exclusive and Exotic Flowers For All Occasions With MyFlowerTree</h2>
          <p>We are the stewards of life's celebrations. In this fast-paced modern world, we make it easy for you to
            <b>buy and send flowers online </b>with just a few clicks! Occasions like birthdays, anniversaries,
            Rakshabandhan, Valentine’s Day and weddings need flowers to celebrate. They are the most affectionate form
            of expressing love, making them a must in every celebration.The Flower Arrangements beautifully wrapped by
            <b>expert florists</b> will make your loved ones know how much you really adore them.The unparalleled range
            of flower bouquets is best and you would not find them with your <b>local florists</b> or at any other
            online portal. Celebrate birthdays and anniversaries by having the <b>hand-picked flowers delivered at the
              doorstep</b> of your precious ones.</p>
          <p>Celebrating every festival with great zeal is an integral part of our Indian culture. No festival can be
            celebrated without flowers. Flowers add the magical touch to every occasion. Commemorate Diwali with
            exquisite flower bouquets delivered to your relatives and loved ones place. Flowers are available in
            varieties of <b>roses, <a href="/lilies">lilies</a>, <a href="/orchid">orchids</a>, tulips, <a
                href="/carnations">carnations</a>, <a href="/gerberas">gerberas</a>, mixed flowers, serenades, Luxurious
              flowers, gold roses</b> among many others.</p>
          <p>Celebrate every bond with flowers; they will bind you even stronger. Flowers make time stop for a moment
            whenever one glances over them. You can even go for flower combos to make affectionate ones extra special.
          </p>
          <p>Nothing says <a href="/congratulations">congratulations</a> better than flowers, and we deliver them
            promptly with our delivery heroes. <b>Send Flowers to your dear ones </b> at their wedding, since it is the
            biggest occasion of their life. <a href="/mixed-flowers">Mixed flowers</a> are best suited for birthdays.
            Add enthusiasm to one's birthday with bright-colored flowers. <a href="/roses">Send Roses Online</a> on
            Valentine’s Day or when you are missing your beloved. Gift a bunch of pink roses on baby's birth. Big
            Colourful Rose bouquets are the best flowers for <a href="/anniversary">anniversary</a>. Thus, we offer you
            flowers to make every important occasion of your life memorable.</p>
          <h2>Expert Florists with Same Day Flower Delivery- within 3 Hours</h2>
          <p>MyFlowerTree crafts the most beautiful and perfect flower bouquet in the <b>online flower delivery</b>
            industry. We have the most <b>reliable online flower delivery services </b>with a widely distributed
            network. We understand our customer's needs of <b>delivering flowers</b> to their loved ones in time,
            thereby offering speedy same day delivery service within 3 hours or even less. The adept <b>florists</b>
            design the trendiest and most striking flower arrangements for you. We treasure an impressive collection of
            a variety of <a href="/send-flower-bouquets-online">flower bouquets</a> with on the button delivery options
            that no other <b>online florist</b> vows.</p>
          <h2>Send Flower Bouquets Online to your Loved Ones</h2>
          <p>An overwhelming majority of people love receiving flowers. Flowers always generate a smile every time a
            person looks at them. Flowers make all the blues go away. Every occasion can be made special with flowers.
            Women absolutely love receiving flowers. The belief that ‘women don’t like flowers because they would die
            anyway’ is very untrue! They love flowers. When you send flowers to girlfriend on her birthday, Valentine's
            Day, or on any other special occasion, waking her up to flowers or just without any reason, she will feel
            appreciated and pampered. The Premium Flower Bouquets are the best to send flowers to wife, the luxurious
            flowers convey your royal love for her, be it on occasions like <a href="/birthday">Birthday</a>,
            Anniversary, Diwali, <a href="/valentine">Valentine's day</a>, <a href="/new-year">New Year</a>. Couple them
            with best gift ideas that we have in store.</p>
          <p>Walk an extra mile and send flowers to Husband. Even men like receiving flowers. Sending a beautiful
            bouquet will make him feel that his love is reciprocated and you love him as much as he does. Surprise him
            with flowers and cakes on his birthday or on your anniversary. Send flowers to boyfriend when you are
            confused as to what to choose and want him to feel loved. <a href="/chocolates">Chocolates</a>, <a
              href="/cakes">cakes</a>, <a href="/personalised-gifts">personalised gifts</a> and flowers are the <a
              href="/birthday-gifts-for-brother">best gift for brother on his birthday</a>, Bhai Dooj, Rakhi, and other
            occasions.</p>
          <p>Thank your mother on the occasion of <a href="/mothers-day">Mothers day.</a> She is your savior, you cannot
            go a moment without her. Send her flowers to appreciate all that she does for you. Fathers are your strength
            and support. Send flowers on <a href="/fathers-day">Father's Day</a> and acknowledge the sacrifices he makes
            every day for you.</p>
          <h2>Buy Flowers Online For Delivery In India - Same Day, Midnight, Fixed Time Delivery</h2>
          <p>When you are unable to decide what to order, <b>buy flowers online</b> to bring an assured smile on your
            dear one's face. Just remembered someone's birthday? Don’t worry, we have you covered with our Same Day
            Delivery option. Birthday calls for celebrations right at 12. Make your dear ones feel extremely loved by
            sending midnight surprises via our Midnight Delivery Option. You can also get your flowers delivered within
            3 hours with <a href="/express-delivery">express delivery</a>. Opting for our Fixed-time Delivery of Flowers
            will allow you to choose your preferred time slot in which you want to send flowers to your loved ones. Yes,
            it works! Not just this, we provide free-shipping across India. Spare yourself of last-minute confusion and
            <b>shop flowers online</b> with multiple delivery options like <a href="/sameday-delivery">same day</a>,<a
              href="/midnight-delivery"> midnight</a>, and so on.</p>
          <p>MyFlowerTree is your perfect choice if you want to <b>send flowers to your loved one</b> residing in <a
              href="/delhi">Delhi</a>, <a href="/mumbai">Mumbai</a>, <a href="/bangalore">Bangalore</a> or any other
            city. We will get the flowers delivered with our fast delivery services.</p>
          <p>Sending just flowers is not always enough. Complement them with our add-ons like delectable cakes,
            personalized gifts like cushions, photo- frames, mugs, jewellery, home décor, soft toys, chocolate bouquets,
            dry fruits, green plants, among many others. You can even choose combos of these as well. Make memories last
            forever with us.</p>
          <h2>Shop &amp; Send Your Warm Wishes With Flowers Internationally</h2>
          <p>We not only have an impressive delivery network all over India but also across the boundaries. No worries,
            if you have your loved one residing in a far-fetched place, we will cover the distance for you. Send Flowers
            and cakes internationally to many destinations like <a href="send-flowers-to-usa">USA</a>, <a
              href="send-flowers-to-uk">UK</a>, <a href="/australia">Australia</a>, Germany, <a
              href="send-flowers-to-france">France</a>, <a href="/send-flowers-to-canada">Canada</a> and many others. We
            make sure you get the best experience with instant delivery abroad. If you are looking for a perfect flower
            bouquet, cake, gifts, we have an unmatched collection to meet your need. Buy flowers for <a
              href="/christmas">Christmas</a>, they are an unrivaled gift.</p>
          <h2>Shop Flowers For Every Occasion With Discount Coupons By MyFlowerTree</h2>
          <p>We have something extra for you in our palette for your special occasion so that gifting flowers and other
            <a href="/gifting">gifts</a> is never heavy on your budget. You can make use of our Coupon Codes and make
            your <b>flower shopping </b>economical. Happiness is just a few bucks away while shopping with us. Have a
            look at the treasure trove of flowers that we have and pick the best deals and offers. We are florally
            yours! Happy Gifting!</p>
          <h2>Are You Seeking An Opportunity To Grow In The Booming Bakery Industry?</h2>
          <p>Make your dream of becoming your own boss come true by joining hands with MyFlowerTree. Is there anyone who
            doesn’t like fresh breads, buns, honey cakes, cupcakes, or other baked delicacies? The love of freshly-baked
            breads can be profitable for you by opening a bakery franchise. MyFlowerTree assists all new and old
            franchises from their inception to proper functionality. We offer a great source of earning that lasts for
            forever. Founded in 2009, MyFlowerTree is serving thousands of customers throughout India and abroad. Our
            satisfactory customer service has gained popularity and made us a top-notch online gifting portal. So, don’t
            think a lot and join us to work together and make a new success story.</p>
          <p>Join MyFlowerTree with its amazing bakery franchise in India.</p>
          <h2>Pour in Some Romance and Send Valentines Gifts Online</h2>
          <p>Valentines is all about the celebration of Love and lovers, who are apart no matter what, sending precious
            valentines gifts to each other on Valentine’s Day. Especially, the ones who are in long-distance
            relationships rely on sending gifts online. So, MyFlowerTree is standing here to serve you at its best. Our
            all-inclusive Rose Day Gifts will bring your fondest celebrations. We will bake you a delish story to
            impress the love of your life that will remain in her dreams forever. You can send any <a href="/valentine"
              target="_blank">Valentines Gift Online</a> with our impressive service.</p>
          <h2>Same Day Delivery Valentines Gifts for Her at MyFlowerTree</h2>
          <p>Our hand-picked Rose collection never disappoints lovers around the world who want to send gifts! Our
            stunning Valentines combos, <a href="/rose-day/roses" target="_blank">Roses for Rose Day</a> and Valentines
            cakes will let you choose the gifts apt for this occasion. So, here you will find the most adorable yet
            classic <a href="/valentine/personalised-gifts" target="_blank">Personalised Valentines Gifts</a>. The best
            way is to fuse it with delish Personalised Cakes in different flavours. Our gifts are perfect for your
            girlfriend or boyfriend on the day of lovers like Valentines Day. Getting the most lovable <a
              href="/valentine/chocolates" target="_blank">Valentines Day Chocolates</a> without giving it a second
            thought is the most pleasant way to say I Love You. Gift your special someone with our bouquet of sweetness.
            Just tell him or her how much you love them. Be it a wedding, a birthday, an anniversary or any other
            occasion like Valentines Day, our ideal gift items for your friends and family. Our beautiful round cane
            basket is full of chocolates to woo her.</p>
          <h2>Celebrate the Day of Love with Valentines Flowers, Cakes and Personalised Gifts</h2>
          <p>Do you want to shower all your loved affection on the special man or woman in your life, then here we have
            the greatest ideas to surprise you? Our designer cakes and flowers are just for them! Gift the sweetest
            heart shape gifts to someone special in your life and make the sitting space more interesting and happening.
            Our amazing love theme cushions will definitely brighten up the day. A perfect <a
              href="/valentine/gifts/for-girlfriend" target="_blank">Valentines Day gift for a girlfriend</a> on any
            occasion would serve as a constant reminder of your love! Get her a Solid Red Colour Personalised Sequence
            Cushion as a perfect gift to make her occasion special. The heart shape, cushion, flower arrangement and
            cake will display your affection perfectly.</p>
          <h2>Unique Valentines Day Gift Ideas for Girlfriend – Avail Express Delivery</h2>
          <p>There is no feeling that Rose cannot express, and when you want to add sweetness and flavours to her life
            than adding a cake will always be a good idea. MyFlowerTree gives you an easy way to get hassle-free
            delivery to her home. Here we have something subtle but unique <a href="/valentine/gifts/for-her"
              target="_blank">Valentines gifts for her</a>. So, sending flowers with cake to your partner on Valentine's
            Day will foster her confidence eternally. Valentine Gifts for Girlfriend will nurture her love for you. If
            you want to reciprocate the gesture of love, you can order <a href="/valentine/gifts/for-him"
              target="_blank">Valentines Day gifts for him</a> from our website. Couples love our collection and the
            hassle-free doorstep delivery to your loved ones home. Not only will you get gifts for a perfect love story,
            but you can make it even more special by personalizing it.</p>
        </div>
      </span>
    </div>
</section>
<section class="blog-section">
    <div class="container-fluid px-lg-5">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-box">
            <div class="blog-heading  d-flex justify-content-between">
              <h3>Fresh &amp; Juicy Read from our Blogs
              </h3>
              <a target="_blank" href="">View all Blogs</a>
            </div>

            <ul>
              <li class="blog-items">
                <h4><a target="_blank" href="">9 Jewellery For Your Lady To Appreciate Her On Women's Day</a></h4>
                <p>Internationally, Women's Day is celebrated on 8th March to honor and respect every woman. She shares
                  her knowledge for the upliftment of the nation while sacrificing her personal choices for the family.
                  She also cares, loves, pampers, and motivates her nearer ones at needy times. Therefore,
                  to pay a...<a target="_blank" href="">Read More</a></p>
              </li>
              <li class="blog-items">
                <h4><a target="_blank" href="">Out-Of-The Box Ideas To Celebrate Women's Day</a></h4>
                <p>People all around the world celebrate March 8th as international women's day. It is commemorated to
                  pay a
                  tribute for their tremendous support for the upliftment of society. Also, on this day thanking wishes
                  are
                  conveyed for their unconditional love and care. On women's day, greeting with gifts has
                  ...<a target="_blank" href="">Read More</a></p>
              </li>

              <li class="blog-items">
                <h4><a target="_blank" href="">6 Places to Visit on Your First Anniversary</a></h4>
                <p>Life gets an aim and becomes interesting with a person aside to hold hands. For newlyweds, their
                  first 365
                  days of togetherness will be always crucial as it creates beautiful memories. Nevertheless, these are
                  the perfect
                  days to understand each other and relish the romantic relationship. So, it is i...
                  <a target="_blank" href="">Read More</a>
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection