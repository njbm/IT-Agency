@extends('Frontend.layouts.layouts')
@section('title')
  Project
@endsection

@section('main')
<main class="Project_pages" id="project_pages">
  <!-- ===========  Responsive hero_banner inner ============ -->
  <div class="Responsive_hero-banner">
    <div class="bg-gracolor">
      <img src="{{asset('Frontend/assets/images/Rectangle 4 (5).png')}}" alt="" />
    </div>
  </div>
  <!-- =============  Hero_area   =========== -->
  <section class="ind_hero_area" id="services_pages">
    <div class="banner_container">
      <div
        class="bg-gracolor"
        style="
          background-image: url('{{asset('Frontend/assets/images/Rectangle\ 4\ \(5\).png')}}');
        "
      >
        <div class="container">
          <div class="banner_content">
            <div class="row">
              <div class="col-lg-7" style="z-index: 9">
                <div class="banner_mainContent">
                  <h1>PROJECT</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -============== Hero_Area End ============= -->

  <!-- ============  Project _ inner   ============== -->
  <section class="projecT_work_inner mb-5">
    <div class="project_work_container">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" style="z-index: 9">
            <div class="project_work_left_contains">
              <div class="shot-p">
                <p>What we do</p>
              </div>
              <div class="left_heading_title">
                <h3>We Work Performed For Client <span> Happy </span></h3>
              </div>
              <div class="project_Services">
                <a href="services.html"> View All Services </a>
              </div>

              <div class="project_serv_main">
                <img
                  src="{{asset('Frontend/assets/images/icon/Rectangle 579 (6).png')}}"
                  alt=""
                />
                <div class="project_serv-content">
                  <h4>VIDEO ANIMATION</h4>
                  <p>
                    text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard
                  </p>
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4" style="z-index: 9">
            <div class="project_mid_card">
              <div class="project_serv_main">
                <img src="{{asset('Frontend/assets/images/icon/Rectangle 579.png')}}" alt="" />
                <div class="project_serv-content">
                  <h4>WEB DESIGN</h4>
                  <p>
                    text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard
                  </p>
                  <a href="#">Read More</a>
                </div>
              </div>

              <div class="project_serv_main">
                <img
                  src="{{asset('Frontend/assets/images/icon/Rectangle 579 (1).png')}}"
                  alt=""
                />
                <div class="project_serv-content">
                  <h4>DEVELOPING</h4>
                  <p>
                    text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard
                  </p>
                  <a href="#">Read More</a>
                </div>
              </div>

              <div class="project_serv_main">
                <img
                  src="{{asset('Frontend/assets/images/icon/Rectangle 579 (2).png')}}"
                  alt=""
                />
                <div class="project_serv-content">
                  <h4>3D DESIGN</h4>
                  <p>
                    text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard
                  </p>
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4" style="z-index: 9">
            <div class="project_mid_card">
              <div class="project_serv_main">
                <img
                  src="{{asset('Frontend/assets/images/icon/Rectangle 579 (3).png')}}"
                  alt=""
                />
                <div class="project_serv-content">
                  <h4>APP DESIGN</h4>
                  <p>
                    text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard
                  </p>
                  <a href="#">Read More</a>
                </div>
              </div>

              <div class="project_serv_main">
                <img
                  src="{{asset('Frontend/assets/images/icon/Rectangle 579 (4).png')}}"
                  alt=""
                />
                <div class="project_serv-content">
                  <h4>GRAPHIC DESIGN</h4>
                  <p>
                    text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard
                  </p>
                  <a href="#">Read More</a>
                </div>
              </div>

              <div class="project_serv_main">
                <img
                  src="{{asset('Frontend/assets/images/icon/Rectangle 579 (5).png')}}"
                  alt=""
                />
                <div class="project_serv-content">
                  <h4>UI/UX DESIGN</h4>
                  <p>
                    text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard
                  </p>
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========  Project  ================ -->

  <section class="project_pages_our_Work-inner mb-5">
    <div class="project_pages_ourWork_container">
      <div class="container">
        <div class="our-work_heading_title">
          <p>How we work</p>
          <div class="left_heading_title">
            <h3>Our Unique Work <span> Process </span></h3>
          </div>
        </div>
        <div class="row" id="project_pages_slider">
          <div class="col-12">
            <div class="work_process_containr">
              <img src="{{asset('Frontend/assets/images/Rectangle 582.png')}}" alt="" />
              <a href="#"> DEVELOPING </a>
            </div>
          </div>
          <div class="col-12">
            <div class="work_process_containr">
              <img src="{{asset('Frontend/assets/images/Rectangle 582.png')}}" alt="" />
              <a href="#"> DEVELOPING </a>
            </div>
          </div>
          <div class="col-12">
            <div class="work_process_containr">
              <img src="{{asset('Frontend/assets/images/Rectangle 582.png')}}" alt="" />
              <a href="#"> DEVELOPING </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== Project Package ============== -->
  <section class="project_packages_inner">
    <div class="project_packages">
      <div class="container">
        <div class="project_pack-top_contennt">
          <div class="project_pay">
            <div class="py_btn">
              <a href="#" class="show-pay-btn" data-target="Pay-Monthly"
                >Pay Monthly</a
              >
              <a href="#" data-target="Pay-Yearly">Pay Yearly</a>
            </div>
          </div>

          <div class="our-work_heading_title">
            <p>Pricing Plan</p>
            <div class="left_heading_title">
              <h3>Join Now For Your <span> Business </span></h3>
            </div>
          </div>
        </div>

        <div class="tab-content-main">
          <div
            class="tab-content active-SubScriptons"
            data-item="Pay-Monthly"
          >
            <div class="row">
              <div class="col-lg-4">
                <div class="subScriptions_package">
                  <div class="subScriptions_package_heading">
                    <h4>Small Business</h4>
                    <p>Single Business</p>
                  </div>
                  <div class="subScriptions_package_price">
                    <h2>$15.99 <span>/per Month</span></h2>
                  </div>
                  <div class="subScriptions_package-feture">
                    <ul>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 10 Pages Responsive Website </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 15 PPC Campaigns </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 10 SEO Keyword </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 5 Facebook Campaigns </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 2 Video Campaigns</span>
                      </li>
                    </ul>
                  </div>
                  <div class="subScriptions_package_pybutton">
                    <a href="cartpayment.html"> Pay Now </a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="subScriptions_package">
                  <div class="subScriptions_package_heading">
                    <h4>Professional</h4>
                    <p>Small Team</p>
                  </div>
                  <div class="subScriptions_package_price">
                    <h2>$90.99 <span>/per Month</span></h2>
                  </div>
                  <div class="subScriptions_package-feture">
                    <ul>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 10 Pages Responsive Website </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 15 PPC Campaigns </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 10 SEO Keyword </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 5 Facebook Campaigns </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 2 Video Campaigns</span>
                      </li>
                    </ul>
                  </div>
                  <div class="subScriptions_package_pybutton">
                    <a href="cartpayment.html"> Pay Now </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="subScriptions_package">
                  <div class="subScriptions_package_heading">
                    <h4>Enterprice</h4>
                    <p>Large Team</p>
                  </div>
                  <div class="subScriptions_package_price">
                    <h2>$150.99 <span>/per Month</span></h2>
                  </div>
                  <div class="subScriptions_package-feture">
                    <ul>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 10 Pages Responsive Website </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 15 PPC Campaigns </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 10 SEO Keyword </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 5 Facebook Campaigns </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 2 Video Campaigns</span>
                      </li>
                    </ul>
                  </div>
                  <div class="subScriptions_package_pybutton">
                    <a href="cartpayment.html"> Pay Now </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-content" data-item="Pay-Yearly">
            <div class="row">
              <div class="col-lg-4">
                <div class="subScriptions_package">
                  <div class="subScriptions_package_heading">
                    <h4>Small Business</h4>
                    <p>Single Business</p>
                  </div>
                  <div class="subScriptions_package_price">
                    <h2>$300.99 <span>/per Yearly</span></h2>
                  </div>
                  <div class="subScriptions_package-feture">
                    <ul>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 10 Pages Responsive Website </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 15 PPC Campaigns </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 10 SEO Keyword </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 5 Facebook Campaigns </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 2 Video Campaigns</span>
                      </li>
                    </ul>
                  </div>
                  <div class="subScriptions_package_pybutton">
                    <a href="cartpayment.html"> Pay Now </a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="subScriptions_package">
                  <div class="subScriptions_package_heading">
                    <h4>Professional</h4>
                    <p>Small Team</p>
                  </div>
                  <div class="subScriptions_package_price">
                    <h2>$900.99 <span>/per Yearly</span></h2>
                  </div>
                  <div class="subScriptions_package-feture">
                    <ul>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 10 Pages Responsive Website </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 15 PPC Campaigns </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 10 SEO Keyword </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 5 Facebook Campaigns </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 2 Video Campaigns</span>
                      </li>
                    </ul>
                  </div>
                  <div class="subScriptions_package_pybutton">
                    <a href="cartpayment.html"> Pay Now </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="subScriptions_package">
                  <div class="subScriptions_package_heading">
                    <h4>Enterprice</h4>
                    <p>Large Team</p>
                  </div>
                  <div class="subScriptions_package_price">
                    <h2>$1500.99 <span>/per Yearly</span></h2>
                  </div>
                  <div class="subScriptions_package-feture">
                    <ul>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 10 Pages Responsive Website </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 15 PPC Campaigns </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 10 SEO Keyword </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 5 Facebook Campaigns </span>
                      </li>
                      <li>
                        <span>
                          <img
                            src="{{asset('Frontend/assets/images/Rectangle 586.png')}}"
                            alt=""
                          />
                        </span>
                        <span> 2 Video Campaigns</span>
                      </li>
                    </ul>
                  </div>
                  <div class="subScriptions_package_pybutton">
                    <a href="cartpayment.html"> Pay Now </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ==========  project package =========== -->
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