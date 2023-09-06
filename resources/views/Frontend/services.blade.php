@extends('Frontend.layouts.layouts')

@section('title')
  Services
@endsection

@section('main')
<main class="services_main">
  <!-- ===========  Responsive hero_banner inner ============ -->
  <div class="Responsive_hero-banner">
    <div class="bg-gracolor">
      <img src="{{asset('Frontend/assets/images/Rectangle 4 (2).png')}}" alt="" />
    </div>
  </div>
  <!-- =============  Hero_area   =========== -->
  <section class="ind_hero_area" id="services_pages">
    <div class="banner_container">
      <div
        class="bg-gracolor"
        style="
          background-image: url('{{asset('Frontend/assets/images/Rectangle\ 4\ \(2\).png')}}');
        "
      >
        <div class="container">
          <div class="banner_content">
            <div class="row">
              <div class="col-lg-7" style="z-index: 2">
                <div class="banner_mainContent">
                  <h1>Services</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -============== Hero_Area End ============= -->

  <!-- ======== Services Container ======= -->
  <section class="servicespage_inner_container">
    <img src="{{asset('Frontend/assets/images/div (4).png')}}" alt="" class="bg_serviceImg" />
    <div class="servicespages_inner pt-5">
      <div class="container">
        <div class="servicespage_itemsul Responsive_desk">
          <ul
            class="nav nav-pills mb-3 InCatagoires_item"
            id="pills-tab"
            role="tablist"
          >
            <li class="nav-item" role="presentation">
              <button
                class="nav-link active"
                id="pills-home-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-home"
                type="button"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
              >
                All
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-profile-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-profile"
                type="button"
                role="tab"
                aria-controls="pills-profile"
                aria-selected="false"
              >
                Web UI/UX
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-contact"
                type="button"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                Mobile Ui
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-contact"
                type="button"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                Product Design
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-contact"
                type="button"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                3D DESIGN
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-contact"
                type="button"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                WEB DESIGN
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-contact"
                type="button"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                DEVELOPING
              </button>
            </li>
          </ul>
        </div>
        <!-- ======== Responsive servicesItems  ============= -->
        <div class="servicespage_itemsul responsive_servicesItems">
          <ul
            class="nav nav-pills mb-3 responsive_servicesItemsList InCatagoires_item"
            id="pills-tab"
            role="tablist"
          >
            <li class="nav-item" role="presentation">
              <button
                class="nav-link active"
                id="pills-home-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-home"
                type="button"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
              >
                All
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-profile-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-profile"
                type="button"
                role="tab"
                aria-controls="pills-profile"
                aria-selected="false"
              >
                Web UI/UX
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-contact"
                type="button"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                Mobile Ui
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-contact"
                type="button"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                Product Design
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-contact"
                type="button"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                3D DESIGN
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-contact"
                type="button"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                WEB DESIGN
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-contact"
                type="button"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                DEVELOPING
              </button>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="pills-tabContent">
          <div
            class="tab-pane fade myTab_content show active"
            id="pills-home"
            role="tabpanel"
            aria-labelledby="pills-home-tab"
            tabindex="0"
          >
            <div class="row mt-5 pt-3">
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <img
                      src="https://study.com/cimages/course-image/ohio-assessments-for-educators-computer-technology-subtests-i-ii-practice-study-guide_218362_large.jpg"
                      alt=""
                    />
                  </div>
                  <a href="{{ route('frontend.servicesView') }}">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <img src="{{asset('Frontend/assets/images/Rectangle 725.png')}}" alt="" />
                  </div>
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (1).png')}}"
                        alt=""
                      />
                      <h4>DEVELOPING</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 727.png')}}');
                  "
                >
                  <a href="servicesView.html">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (3).png')}}"
                        alt=""
                      />
                      <h4>VIDEO EDITING</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 700.png')}}');
                  "
                >
                  <a href="servicesView.html">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (5).png')}}"
                        alt=""
                      />
                      <h4>UI/UX DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 701.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (4).png')}}"
                        alt=""
                      />
                      <h4>APP DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 700.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (5).png')}}"
                        alt=""
                      />
                      <h4>UI/UX DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 701.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (4).png')}}"
                        alt=""
                      />
                      <h4>APP DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 726.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (3).png')}}"
                        alt=""
                      />
                      <h4>3D DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>

              <div class="col-12 mt-4 mb-4">
                <div class="viewMoreBtn">
                  <button id="loadMore">Load More</button>
                </div>
              </div>
            </div>
          </div>
          <div
            class="tab-pane myTab_content fade"
            id="pills-profile"
            role="tabpanel"
            aria-labelledby="pills-profile-tab"
            tabindex="0"
          >
            <div class="row mt-5 pt-3">
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 699.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 725.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (1).png')}}"
                        alt=""
                      />
                      <h4>DEVELOPING</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 727.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (3).png')}}"
                        alt=""
                      />
                      <h4>VIDEO EDITING</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 700.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (5).png')}}"
                        alt=""
                      />
                      <h4>UI/UX DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 701.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (4).png')}}"
                        alt=""
                      />
                      <h4>APP DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 700.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (5).png')}}"
                        alt=""
                      />
                      <h4>UI/UX DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 701.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (4).png')}}"
                        alt=""
                      />
                      <h4>APP DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 726.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (3).png')}}"
                        alt=""
                      />
                      <h4>3D DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>

              <div class="col-12 mt-4 mb-4">
                <div class="viewMoreBtn">
                  <button id="loadMore">Load More</button>
                </div>
              </div>
            </div>
          </div>
          <div
            class="tab-pane myTab_content fade"
            id="pills-contact"
            role="tabpanel"
            aria-labelledby="pills-contact-tab"
            tabindex="0"
          >
            <div class="row mt-5 pt-3">
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 699.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 725.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (1).png')}}"
                        alt=""
                      />
                      <h4>DEVELOPING</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 727.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (3).png')}}"
                        alt=""
                      />
                      <h4>VIDEO EDITING</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 700.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (5).png')}}"
                        alt=""
                      />
                      <h4>UI/UX DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 701.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (4).png')}}"
                        alt=""
                      />
                      <h4>APP DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 700.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (5).png')}}"
                        alt=""
                      />
                      <h4>UI/UX DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 701.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (4).png')}}"
                        alt=""
                      />
                      <h4>APP DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 726.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (3).png')}}"
                        alt=""
                      />
                      <h4>3D DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>

              <div class="col-12 mt-4 mb-4">
                <div class="viewMoreBtn">
                  <button id="loadMore">Load More</button>
                </div>
              </div>
            </div>

            <!-- ============ Responsive  ========== -->
            <div
              class="row mt-5 pt-3 services_slide responsive_cardServices"
            >
              <div class="col-lg-4 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 699.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 725.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (1).png')}}"
                        alt=""
                      />
                      <h4>DEVELOPING</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 727.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (3).png')}}"
                        alt=""
                      />
                      <h4>VIDEO EDITING</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 700.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (5).png')}}"
                        alt=""
                      />
                      <h4>UI/UX DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 701.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (4).png')}}"
                        alt=""
                      />
                      <h4>APP DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 700.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (5).png')}}"
                        alt=""
                      />
                      <h4>UI/UX DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 701.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (4).png')}}"
                        alt=""
                      />
                      <h4>APP DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 card-content">
                <div
                  class="services_cardInner"
                  style="
                    background-image: url('{{asset('Frontend/assets/images/Rectangle\ 726.png')}}');
                  "
                >
                  <a href="#">
                    <div class="card_contaent">
                      <img
                        src="{{asset('Frontend/assets/images/Rectangle 728 (3).png')}}"
                        alt=""
                      />
                      <h4>3D DESIGN</h4>
                    </div>
                  </a>
                </div>
              </div>

              <div class="col-12 mt-4 mb-4">
                <div class="viewMoreBtn">
                  <button id="loadMore">Load More</button>
                </div>
              </div>
            </div>

            <!-- ========== Responsive  ========== == -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== Services Container =========== -->

  <!-- =========== SubScribe Inner =========== -->

  <section class="SubScribe_container">
    <div class="our_clientInner">
      <div class="container">
        <div class="row mt-4 pt-3">
          <div class="col-lg-6">
            <div class="Subscribe_title">
              <h3>Looking For The Best IT Business Solution</h3>
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