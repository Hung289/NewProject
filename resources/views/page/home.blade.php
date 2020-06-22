@extends('layoutweb.index')
@section('content')
<section class="slide1">
      <div
        id="carouselExampleInterval"
        class="carousel slide"
        data-ride="carousel"
      >
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="10000">
            <img
              src="public/web/images/img/bg/hero-bg-1.jpg"
              class="d-block w-100"
              alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
              <h1 class="chutoslide wow fadeInDown">
                Luxury Hotel <br />& Room Service <br />
                Agency
              </h1>
              <p class="chunhoslide wow fadeInLeft">
                Desires to obtain pain of itself, because it is pain, but
                because occacu stances occur in which toil and pain can procure
                him some here ways.
              </p>
            </div>
          </div>
          <div class="carousel-item" data-interval="2000">
            <img
              src="public/web/images/img/bg/hero-bg-2.jpg"
              class="d-block w-100"
              alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
              <h1>
                Luxury Hotel <br />& Room Service <br />
                Agency
              </h1>
              <p>
                Desires to obtain pain of itself, because it is pain, but
                because occacu stances occur in which toil and pain can procure
                him some here ways.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="public/web/images/img/bg/hero-bg-3.jpg"
              class="d-block w-100"
              alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
              <h1>
                Luxury Hotel <br />& Room Service <br />
                Agency
              </h1>
              <p>
                Desires to obtain pain of itself, because it is pain, but
                because occacu stances occur in which toil and pain can procure
                him some here ways.
              </p>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleInterval"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleInterval"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <section class="booking-section">
      <div class="continer-fuild align-items-center">
        <div class="row">
          <div class="col-md-10 offset-md-1 toinput">
            <form action="">
              <div class="oto">
                <input
                  type="text"
                  id="arrive-date"
                  placeholder="Arrive Date"
                /><i class="fas fa-calendar-alt"></i>
              </div>
              <div class="oto">
                <input
                  type="text"
                  id="depart-date"
                  placeholder="Depart Date"
                /><i class="fas fa-calendar-alt"></i>
              </div>
              <div class="oto">
                <select name="" id="">
                  <option value="">Guest</option>
                  <option value="">Guest</option>
                  <option value="">Guest</option>
                </select>
              </div>
              <div class="oto">
                <select name="" id="">
                  <option value="">Adult</option>
                  <option value="">Adult</option>
                  <option value="">Adult</option>
                </select>
              </div>
              <div class="oto nut">
                <button type="submit">Check Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="tinhnang2 feature-section-two">
      <div class="wcu-section section-padding">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="section-title">
                <span class="title-top">Why Choose Us</span>
                <h1>
                  Since1990 We Provides <br />
                  Professional Service
                </h1>
              </div>
              <div class="listcart">
                <div class="car">
                  <div class="car-header">
                    <button type="button" class="active">
                      Why Choose Our Product?
                    </button>

                    <div class="car-body">
                      But must explain to you how all this mistaken idea
                      denounie pleasure and praising pain was borand omnis dolor
                      Tempbus autem officiis debitis rerum necessitatibus saepe
                    </div>
                  </div>
                </div>
                <div class="car">
                  <div class="car-header">
                    <button type="button">
                      Meet Respond Testing To Make Build?
                    </button>

                    <div class="car-body">
                      But must explain to you how all this mistaken idea
                      denounie pleasure and praising pain was borand omnis dolor
                      Tempbus autem officiis debitis rerum necessitatibus saepe
                    </div>
                  </div>
                </div>
                <div class="car">
                  <div class="car-header">
                    <button type="button">
                      Css Gird Chanllenge:Build A Template?
                    </button>

                    <div class="car-body">
                      But must explain to you how all this mistaken idea
                      denounie pleasure and praising pain was borand omnis dolor
                      Tempbus autem officiis debitis rerum necessitatibus saepe
                    </div>
                  </div>
                </div>
                <div class="car">
                  <div class="car-header">
                    <button type="button">Why Choose Our Product?</button>

                    <div class="car-body">
                      But must explain to you how all this mistaken idea
                      denounie pleasure and praising pain was borand omnis dolor
                      Tempbus autem officiis debitis rerum necessitatibus saepe
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="feature-accordion-img text-right">
                <img src="public/web/images/img/tile-gallery/03.jpg" alt="Image" />
                <div class="degin-shape">
                  <div class="shape-one">
                    <img src="public/web/images/img/shape/11.png" alt="Shape" />
                  </div>
                  <div class="shape-two">
                    <img src="public/web/images/img/shape/12.png" alt="Shape" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="tinhnang feature-section section-padding">
      <div class="container">
        <div class="section-title text-center">
          <span class="title-top">Popular Features</span>
          <h1>
            Explore Our Hotels Benefits <br />
            Why Take Our Services?
          </h1>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div
              class="single-feature-box text-center wow fadeIn animated"
              data-wow-duration="1500ms"
              data-wow-delay="400ms"
              style="
                visibility: visible;
                animation-duration: 1500ms;
                animation-delay: 400ms;
                animation-name: fadeIn;
              "
            >
              <div class="feature-icon">
                <img src="public/web/images/img/icons/icon.png" alt="Icon" />
              </div>
              <h4>Free Transportation</h4>
              <p>
                Has any right to find fault with man who chooses to enjoy a
                pleasure that has no annoying conseque
              </p>
              <a href="" class="read-more"
                >raed more <i class="fas fa-long-arrow-alt-right"></i></i
              ></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div
              class="single-feature-box text-center wow fadeIn animated"
              data-wow-duration="1500ms"
              data-wow-delay="600ms"
              style="
                visibility: visible;
                animation-duration: 1500ms;
                animation-delay: 600ms;
                animation-name: fadeIn;
              "
            >
              <div class="feature-icon">
                <img src="public/web/images/img/icons/icon-2.png" alt="Icon" />
              </div>
              <h4>Food &amp; Drinks</h4>
              <p>
                Has any right to find fault with man who chooses to enjoy a
                pleasure that has no annoying conseque
              </p>
              <a href="" class="read-more"
                >raed more <i class="fas fa-long-arrow-alt-right"></i></i
              ></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <div
              class="single-feature-box text-center wow fadeIn animated"
              data-wow-duration="1500ms"
              data-wow-delay="800ms"
              style="
                visibility: visible;
                animation-duration: 1500ms;
                animation-delay: 800ms;
                animation-name: fadeIn;
              "
            >
              <div class="feature-icon">
                <img src="public/web/images/img/icons/icon-3.png" alt="Icon" />
              </div>
              <h4>Free Wi-fi Network</h4>
              <p>
                Has any right to find fault with man who chooses to enjoy a
                pleasure that has no annoying conseque
              </p>
              <a href="" class="read-more"
                >raed more <i class="fas fa-long-arrow-alt-right"></i></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mayophong latest-product section-padding">
      <div class="container">
        <div class="section-title text-center">
          <span class="title-top">Latest Product</span>
          <h1>
            Modern Hotel &amp; Room For <br />
            Luxury Living
          </h1>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="product-box text-center">
              <div class="product-img">
                <img src="public/web/images/img/product/product-1.jpg" alt="Product" />
              </div>
              <div class="product-content">
                <i class="fas fa-bahai"></i>
                <h5><a href="room-details.html">Modern Guest Rooms</a></h5>
                <p class="price">$180.00</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="product-box text-center">
              <div class="product-img">
                <img src="public/web/images/img/product/product-2.jpg" alt="Product" />
              </div>
              <div class="product-content">
                <i class="fas fa-bahai"></i>
                <h5><a href="room-details.html">Luxury Couple Rooms</a></h5>
                <p class="price">$230.00</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="product-box text-center">
              <div class="product-img">
                <img src="public/web/images/img/product/product-3.jpg" alt="Product" />
              </div>
              <div class="product-content">
                <i class="fas fa-bahai"></i>
                <h5>
                  <a href="room-details.html">Swimming Pool &amp; Hotel</a>
                </h5>
                <p class="price">$360.00</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="product-box text-center">
              <div class="product-img">
                <img src="public/web/images/img/product/product-4.jpg" alt="Product" />
              </div>
              <div class="product-content">
                <i class="fas fa-bahai"></i>
                <h5><a href="room-details.html">Family Luxury Ronoms</a></h5>
                <p class="price">$180.00</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="product-box text-center">
              <div class="product-img">
                <img src="public/web/images/img/product/product-5.jpg" alt="Product" />
              </div>
              <div class="product-content">
                <i class="fas fa-bahai"></i>
                <h5><a href="room-details.html">Luxury Single Rooms</a></h5>
                <p class="price">$230.00</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="product-box text-center">
              <div class="product-img">
                <img src="public/web/images/img/product/product-6.jpg" alt="Product" />
              </div>
              <div class="product-content">
                <i class="fas fa-bahai"></i>
                <h5><a href="room-details.html">Twieen Couple Rooms</a></h5>
                <p class="price">$360.00</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="shape-one">
        <img src="public/web/images/img/shape/08.png" alt="Shape" />
      </div>
      <div class="shape-two">
        <img src="public/web/images/img/shape/03.png" alt="Shape" />
      </div>
      <div class="shape-three"></div>
    </section>

    <section class="sochay counter-up primary-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="counter-box style-two">
              <img src="public/web/images/img/icons/07.png" alt="icon" />
              <p class="fact-num">
                <span class="counter-number">506</span>
              </p>
              <p>Luxury Appartment</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="counter-box style-two">
              <img src="public/web/images/img/icons/08.png" alt="icon" />
              <p class="fact-num">
                <span class="counter-number">352</span>
              </p>
              <p>Modern Bedroom</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="counter-box style-two">
              <img src="public/web/images/img/icons/09.png" alt="icon" />
              <p class="fact-num">
                <span class="counter-number">420</span>
              </p>
              <p>Win Int Awards</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="counter-box style-two">
              <img src="public/web/images/img/icons/10.png" alt="icon" />
              <p class="fact-num">
                <span class="counter-number">653</span>
              </p>
              <p>Cup Of coffee</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="lookingfor">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <div class="text1">
              Looking For Luxury Hotel
            </div>
            <div class="text2">
              Booking now
            </div>
            <div class="text3">
              <a href="">Booking now <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-md-2">
            <!-- <div class="video-icon">
                <a href="https://www.youtube.com/watch?v=NpEaa2P7qZI"
                  ><i class="fas fa-play"></i
                ></a>
              </div> -->
          </div>
        </div>
      </div>
      <div class="lopmo"></div>
    </section>

    <section id="Client2">
      <div class="container">
        <div class="owl-carousel owl-theme" id="hai">
          <div class="item">
            <div class="row">
              <div class="col-md-6">
                <img src="public/web/images/img/man-image/01.jpg" alt="">
              </div>
              <div class="col-md-5 offset-md-1">
                <div class="phanhoi">
                  <div class="phanhoiavaname">
                    <div class="client_avar">
                      <img src="public/web/images/img/man-image/man-small-01.png" alt="">
                    </div>
                    <div class="client_name">
                      <h3>David K. Vinson</h3>
                      <span>Business Manager</span>
                    </div>
                  </div>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet id quisquam expedita vel harum mollitia obcaecati dicta molestias et. Enim iusto fuga adipisci iste minima cumque magni provident ea similique.</p>
                  <div class="dauphay">
                    <img src="public/web/images/images/dauphay_03.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-6">
                <img src="public/web/images/img/man-image/01.jpg" alt="">
              </div>
              <div class="col-md-5 offset-md-1">
                <div class="phanhoi">
                  <div class="phanhoiavaname">
                    <div class="client_avar">
                      <img src="public/web/images/img/man-image/man-small-01.png" alt="">
                    </div>
                    <div class="client_name">
                      <h3>David K. Vinson</h3>
                      <span>Business Manager</span>
                    </div>
                  </div>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet id quisquam expedita vel harum mollitia obcaecati dicta molestias et. Enim iusto fuga adipisci iste minima cumque magni provident ea similique.</p>
                  <div class="dauphay">
                    <img src="public/web/images/images/dauphay_03.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-6">
                <img src="public/web/images/img/man-image/01.jpg" alt="">
              </div>
              <div class="col-md-5 offset-md-1">
                <div class="phanhoi">
                  <div class="phanhoiavaname">
                    <div class="client_avar">
                      <img src="public/web/images/img/man-image/man-small-01.png" alt="">
                    </div>
                    <div class="client_name">
                      <h3>David K. Vinson</h3>
                      <span>Business Manager</span>
                    </div>
                  </div>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet id quisquam expedita vel harum mollitia obcaecati dicta molestias et. Enim iusto fuga adipisci iste minima cumque magni provident ea similique.</p>
                  <div class="dauphay">
                    <img src="public/web/images/images/dauphay_03.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      </div>
      
    </section>

    <section id="ourstore">
      <div class="container">
        <div class="text1">
          News & Articles
        </div>
        <div class="text2">
          Our Store & Latest News
          <br />
          Get More Tips
        </div>
        <div class="row">
          <div class="col-md-3">
            <div
              class="tomotkhoi wow wow fadeIn animated"
              data-wow-duration="1500ms"
              data-wow-delay="400ms"
              style="
                visibility: visible;
                animation-duration: 1500ms;
                animation-delay: 400ms;
                animation-name: fadeIn;
              "
            >
              <div class="khoianh">
                <img src="public/web/images/img/recent-post/03.jpg" alt="" />
              </div>
              <div class="khoiduoianh">
                <div class="row1">
                  <img src="public/web/images/images/lich_03.png" alt="" />
                  20 Jan 2020
                </div>
                <div class="row2">
                  Css Grid Chanllenge Build A Template, Win sorne Smashing
                  Prizes
                </div>
                <div class="row3">
                  <a href="">READ MORE <i class="fas fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div
              class="tomotkhoi wow fadeInUp animated"
              data-wow-duration="1500ms"
              data-wow-delay="600ms"
              style="
                visibility: visible;
                animation-duration: 1500ms;
                animation-delay: 600ms;
                animation-name: fadeInUp;
              "
            >
              <div class="khoianh">
                <img src="public/web/images/img/recent-post/04.jpg" alt="" />
              </div>
              <div class="khoiduoianh">
                <div class="row1">
                  <img src="public/web/images/images/lich_03.png" alt="" />
                  20 Jan 2020
                </div>
                <div class="row2">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi
                  autem iste similique repellendus quo et voluptatibus a, minima
                  ea? Ipsam, quidem fugiat commodi aliquid maxime eligendi sint
                  laboriosam enim perferendis totam, harum reiciendis quibusdam
                  dolorum placeat illum esse alias.
                </div>
                <div class="row3">
                  <a href="">READ MORE <i class="fas fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-md-3 wow fadeIn animated"
            data-wow-duration="1500ms"
            data-wow-delay="800ms"
            style="
              visibility: visible;
              animation-duration: 1500ms;
              animation-delay: 800ms;
              animation-name: fadeIn;
            "
          >
            <div class="tomotkhoi">
              <div class="khoianh">
                <img src="public/web/images/img/recent-post/05.jpg" alt="" />
              </div>
              <div class="khoiduoianh">
                <div class="row1">
                  <img src="public/web/images/images/lich_03.png" alt="" />
                  20 Jan 2020
                </div>
                <div class="row2">
                  Css Grid Chanllenge Build A Template, Win sorne Smashing
                  Prizes
                </div>
                <div class="row3">
                  <a href="">READ MORE <i class="fas fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section id="icontrenfooter">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-sm-6 moticon">
            <div class="ngoaianh">
              <img src="public/web/images/images/icontrenfooter_03.png" alt="" />
            </div>
          </div>
          <div class="col-md-2 col-sm-6 moticon">
            <div class="ngoaianh">
              <img src="public/web/images/images/icontrenfooter_03.png" alt="" />
            </div>
          </div>
          <div class="col-md-2 col-sm-6 moticon">
            <div class="ngoaianh">
              <img src="public/web/images/images/icontrenfooter_05.png" alt="" />
            </div>
          </div>
          <div class="col-md-2 col-sm-6 moticon">
            <div class="ngoaianh">
              <img src="public/web/images/images/icontrenfooter_05.png" alt="" />
            </div>
          </div>
          <div class="col-md-2 col-sm-6 moticon">
            <div class="ngoaianh">
              <img src="public/web/images/images/icontrenfooter_07.png" alt="" />
            </div>
          </div>
          <div class="col-md-2 col-sm-6 moticon">
            <div class="ngoaianh">
              <img src="public/web/images/images/icontrenfooter_09.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section> -->
    
		

@stop