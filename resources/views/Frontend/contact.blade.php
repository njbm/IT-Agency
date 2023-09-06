@extends('Frontend.layouts.layouts')
@section('title')
  Contact
@endsection

@section('main')
<main id="contact_pages" class="contact-pages">
  <!-- ===========  Responsive hero_banner inner ============ -->
  <div class="Responsive_hero-banner">
    <div class="bg-gracolor">
      <img src="{{ asset('Frontend/assets/images/Rectangle 4 (4).png')}}" alt="" />
    </div>
  </div>
  <!-- =============  Hero_area   =========== -->
  <section class="ind_hero_area" id="services_pages">
    <div class="banner_container">
      <div
        class="bg-gracolor"
        style="
          background-image: url('{{ asset('Frontend/assets/images/Rectangle\ 4\ \(4\).png')}}');
        "
      >
        <div class="container">
          <div class="banner_content">
            <div class="row">
              <div class="col-lg-7" style="z-index: 9">
                <div class="banner_mainContent">
                  <h1>CONTACT US</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -============== Hero_Area End ============= -->

  <!-- =============  contact Inner pages  ============== -->
  <section class="contact_inner_sections">
    <img class="contact_shp-image" src="{{ asset('Frontend/assets/images/div (5).png')}}" alt="" />
    <div class="contact_container">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="conact-heading_title">
              <h3>Contact Us If You Have Any <span> Question </span></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4" style="z-index: 9">
            <div class="contact-cart-inner">
              <img src="{{ asset('Frontend/assets/images/Ellipse 36.png')}}" alt="" />
              <div class="contact-content-cart">
                <h4>LOCATION</h4>
                <p>
                  Lorem Ipsum has been the industry's standard dummy text
                  ever since the 1500s
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4" style="z-index: 9">
            <div class="contact-cart-inner">
              <img src="{{ asset('Frontend/assets/images/Ellipse 37.png')}}" alt="" />
              <div class="contact-content-cart">
                <h4>PHONE</h4>
                <p>+88017XXXXXXX</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4" style="z-index: 9">
            <div class="contact-cart-inner">
              <img src="{{ asset('Frontend/assets/images/Ellipse 38.png')}}" alt="" />
              <div class="contact-content-cart">
                <h4>EMAIL</h4>
                <p>Arafat@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========== Contact ========= -->
  <section class="indContact">
    <div class="contact_inner pb-3">
      <div class="container">
        <div class="row contact_rows">
          <div class="col-lg-6">
            <div class="contactForm">
              <form class="row">
                <div class="col-md-12">
                  <input
                    type="email"
                    class="form-control"
                    id="inputEmail4"
                    placeholder="Full name"
                  />
                </div>
                <div class="col-md-12">
                  <input
                    type="email"
                    class="form-control"
                    id="inputPassword4"
                    placeholder="Email"
                  />
                </div>
                <div class="col-12">
                  <textarea
                    class="form-control"
                    placeholder="Send your message"
                    id="floatingTextarea2"
                    style="height: 100px"
                    aria-placeholder=""
                  ></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">
                    Sign in
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6">
            <div
              class="contact_right_content"
              style="
                background-image: url('{{ asset('Frontend/assets/images/Mask\ group\ \(1\).png')}}');
              "
            >
              <div class="right_content">
                <div class="d-flex">
                  <h3>Go further with the MHM</h3>
                  <img src="{{ asset('Frontend/assets/images/image 1.png')}}" alt="" />
                </div>
                <p>
                  Save even more - Get up to 25% on select Projects and earn
                  double the points when you get on the app.
                </p>
                <p>
                  Scan the QR code with your device camera and download our
                  app
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ==========  Contact  ========= -->

  <!-- =========== SubScribe Inner =========== -->

  <section class="SubScribe_container">
    <div class="our_clientInner">
      <div class="container">
        <div class="row mt-4 pt-3">
          <div class="col-lg-6">
            <div class="Subscribe_title">
              <h3>About Your Next Project Your Mind</h3>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="Subscribe_form">
              <button>Get In Touch</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ==========  Subscribe Inner ================= -->
</main>
@endsection