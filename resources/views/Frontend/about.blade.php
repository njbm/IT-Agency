@extends('Frontend.layouts.layouts')

@section('main')

<main class="about_pages" id="about_main_pages">
  <!-- ===========  Responsive hero_banner inner ============ -->
  <div class="Responsive_hero-banner">
    <div class="bg-gracolor">
      <img src="{{ asset('Frontend/assets/images/Rectangle 4 (3).png')}}" alt="" />
    </div>
  </div>
  <!-- =============  Hero_area   =========== -->
  <section class="ind_hero_area" id="services_pages">
    <div class="banner_container">
      <div
        class="bg-gracolor"
        style="
          background-image: url('{{asset('Frontend/assets/images/Rectangle\ 4\ \(3\).png')}}');
        "
      >
        <div class="container">
          <div class="banner_content">
            <div class="row">
              <div class="col-lg-7" style="z-index: 9">
                <div class="banner_mainContent">
                  <h1>ABOUT US</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -============== Hero_Area End ============= -->

  <section class="about_agency_contentOne">
    <img class="about_svg" src="{{ asset('Frontend/assets/images/div (5).png')}}" alt="" />
    <div class="about_container_agency">
      <div class="container">
        <div class="row" id="about_onesect_container">
          <div class="col-lg-6">
            <div class="about_part_one_containes">
              <img src="{{ asset('Frontend/assets/images/Rectangle 632.png')}}" alt="" />

              <div class="about_pert_one-content">
                <p>
                  Lorem Ipsum has been the industry's standard dummy text
                  ever since the 1500s, when an unknown printer took a
                  galley of type and scrambled it to make a type specimen
                  book.
                </p>

                <h4>
                  <span>Carli Rabil.</span>
                  CTO & FOUNDER, MHM
                </h4>
                <div class="text-center pt-3">
                  <img
                    class="founder-of-sine"
                    src="{{ asset('Frontend/assets/images/Rectangle 634.png')}}"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about_right_content_inn">
              <div class="aboutright_heading-content">
                <h3>
                  We Are Creative Agency That Creates
                  <span> Beautiful </span>
                </h3>
                <p class="about_sub_disc">
                  Lorem Ipsum has been the industry's standard dummy text
                  ever since the 1500s, when an unknown printer took a
                  galley of type and scrambled it to make a type specimen
                  book. It has survived not only five centuries, but also
                  the leap into electronic typesetting, remaining
                  essentially unchanged. It was popularised in the 1960s
                  with the release of Letraset sheets containing Lorem Ipsum
                  passages,
                </p>
              </div>
              <div class="row about_counter_sect">
                <div class="col-4">
                  <div class="about_Res_main_count">
                    <div class="count_er">
                      <p>
                        <span class="counter" data-count="90"></span>
                        <span>%</span>
                      </p>
                    </div>
                    <div class="about_res_count_title">
                      <h5>IDEA & RESEARCH</h5>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="about_Res_main_count">
                    <div class="count_er">
                      <p>
                        <span class="counter" data-count="50"></span>
                        <span>%</span>
                      </p>
                    </div>
                    <div class="about_res_count_title">
                      <h5>WIREFRAME & DESIGN</h5>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="about_Res_main_count">
                    <div class="count_er">
                      <p>
                        <span class="counter" data-count="85"></span>
                        <span>%</span>
                      </p>
                    </div>
                    <div class="about_res_count_title">
                      <h5>DEVELOPING & LAUNCH</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- ===============  Agency about Section Twoo ============ -->
        <div class="row" id="Agency_about_contenttow">
          <div class="col-lg-6" style="z-index: 9">
            <div class="Agency_about_content_tow_left">
              <div class="about_heading_title_tow">
                <h3>
                  Direction with our
                  <span>Company</span>
                </h3>
                <p class="about_sub_heading_title">
                  Lorem Ipsum has been the industry's standard dummy text
                  ever since the 1500s, when an unknown printer took a
                  galley of type and scrambled it to make a type specimen
                  book. It has survived not only five centuries, but also
                  the leap into electronic typesetting, remaining
                  essentially unchanged. It was popularised in
                </p>
              </div>
              <div class="row">
                <div class="col-7">
                  <div class="about_our_mission">
                    <div class="">
                      <img src="{{ asset('Frontend/assets/images/Rectangle 640.png')}}" alt="" />
                    </div>
                    <div class="about_our_mission_content">
                      <h4>Our Mission</h4>
                      <p>
                        Lorem Ipsum has been the industry's standard dummy
                        text ever since the
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-5">
                  <div
                    class="d-flex gap-3"
                    id="about_our_mission_content_right-content"
                  >
                    <div>
                      <img src="{{ asset('Frontend/assets/images/Line 56.png')}}" alt="" />
                    </div>
                    <div class="text-center">
                      <h4>CTO & FOUNDER</h4>
                      <span class="shape"></span>
                      <img src="{{ asset('Frontend/assets/images/Rectangle 641.png')}}" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="about_more_button">
                <a href="#">About More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="Agency_about_contnet_right_two">
              <div class="Agency_about_right_fsImages">
                <img
                  class="fs-images"
                  src="{{ asset('Frontend/assets/images/Rectangle 637.png')}}"
                  alt=""
                />
                <img
                  class="FC_iamges"
                  src="{{ asset('Frontend/assets/images/Rectangle 636.png')}}"
                  alt=""
                />
                <div class="about_right_Content_feature">
                  <div class="conainer">
                    <div class="about_right_counter">
                      <div class="circle_percent" data-percent="75">
                        <div class="circle_inner">
                          <div class="round_per"></div>
                        </div>
                      </div>
                      <div class="">
                        <p>Web</p>
                        <p>Responsive Design</p>
                      </div>
                    </div>
                    <div class="about_right_counter">
                      <div class="circle_percent" data-percent="95">
                        <div class="circle_inner">
                          <div class="round_per"></div>
                        </div>
                      </div>
                      <div class="">
                        <p>App</p>
                        <p>Developing</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- =========================== -->

        <div class="agency_services_container">
          <!-- -============== Hero_Area End ============= -->
          <div class="in_project_services">
            <div class="inproject_achieve">
              <div class="row">
                <div class="col-lg-3 col-3 responsive_pd">
                  <div class="project_services Achieve">
                    <div class="Services_images">
                      <img src="{{ asset('Frontend/assets/images/Rectangle 643.png')}}" alt="" />
                    </div>
                    <div class="pro_count">
                      <h3>150+</h3>
                      <p>Project Completed</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-3 responsive_pd">
                  <div class="project_services Achieve">
                    <div class="Services_images">
                      <img src="{{ asset('Frontend/assets/images/Rectangle 644.png')}}" alt="" />
                    </div>
                    <div class="pro_count">
                      <h3>150+</h3>
                      <p>Satisfied Clients</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-3 responsive_pd">
                  <div class="project_services Achieve">
                    <div class="Services_images">
                      <img src="{{ asset('Frontend/assets/images/Rectangle 645.png')}}" alt="" />
                    </div>
                    <div class="pro_count">
                      <h3>150+</h3>
                      <p>Expert Teams</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-3">
                  <div class="project_services Achieve">
                    <div class="Services_images">
                      <img src="{{ asset('Frontend/assets/images/Rectangle 646.png')}}" alt="" />
                    </div>
                    <div class="pro_count">
                      <h3>150+</h3>
                      <p>Win Rewards</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <img class="about_svg-left" src="{{ asset('Frontend/assets/images/div (7).png')}}" alt="" />
  </section>

  <!-- ============== Clinet Review Section about ========== -->
  <section class="about_clinet_review pb-5 pt-5">
    <div
      class="about_review_bg_inner"
      style="background-image: url('{{asset('Frontend/assets/images/Rectangle\ 7225.png')}}')"
    >
      <div class="container">
        <div class="row" id="about_review_rows">
          <div class="col-lg-6" style="z-index: 9">
            <div class="about_clinet_review_card">
              <div class="client_profile_images">
                <img src="{{ asset('Frontend/assets/images/Mask.png')}}" alt="" />
              </div>
              <div class="client_profile_content">
                <h4>Helen Guo</h4>
                <p>CEO</p>
              </div>
              <div class="shot_dis_about_client">
                <p>
                  “Been using PostPilot for years. Good for re-engagement.
                  And you can get creative with your messaging.”
                </p>
              </div>
              <div class="review_ratting">
                <img src="{{ asset('Frontend/assets/images/Rectangle 648.png')}}" alt="" />
              </div>
            </div>
          </div>
          <div class="col-lg-6" style="z-index: 9">
            <div class="about_clinet_review_card">
              <div class="client_profile_images">
                <img src="{{ asset('Frontend/assets/images/Mask.png')}}" alt="" />
              </div>
              <div class="client_profile_content">
                <h4>Helen Guo</h4>
                <p>CEO</p>
              </div>
              <div class="shot_dis_about_client">
                <p>
                  “Been using PostPilot for years. Good for re-engagement.
                  And you can get creative with your messaging.”
                </p>
              </div>
              <div class="review_ratting">
                <img src="{{ asset('Frontend/assets/images/Rectangle 648.png')}}" alt="" />
              </div>
            </div>
          </div>
          <div class="col-lg-6" style="z-index: 9">
            <div class="about_clinet_review_card">
              <div class="client_profile_images">
                <img src="{{ asset('Frontend/assets/images/Mask.png')}}" alt="" />
              </div>
              <div class="client_profile_content">
                <h4>Helen Guo</h4>
                <p>CEO</p>
              </div>
              <div class="shot_dis_about_client">
                <p>
                  “Been using PostPilot for years. Good for re-engagement.
                  And you can get creative with your messaging.”
                </p>
              </div>
              <div class="review_ratting">
                <img src="{{ asset('Frontend/assets/images/Rectangle 648.png')}}" alt="" />
              </div>
            </div>
          </div>
          <div class="col-lg-6" style="z-index: 9">
            <div class="about_clinet_review_card">
              <div class="client_profile_images">
                <img src="{{ asset('Frontend/assets/images/Mask.png')}}" alt="" />
              </div>
              <div class="client_profile_content">
                <h4>Helen Guo</h4>
                <p>CEO</p>
              </div>
              <div class="shot_dis_about_client">
                <p>
                  “Been using PostPilot for years. Good for re-engagement.
                  And you can get creative with your messaging.”
                </p>
              </div>
              <div class="review_ratting">
                <img src="{{ asset('Frontend/assets/images/Rectangle 648.png')}}" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== Clinet Review Section about ========== -->

  <section class="about_pages_success">
    <div class="abot_pages_container">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="success_about_heading">
              <h3>
                Success Is Just Around The Next Online <span> Corner </span>
              </h3>
            </div>
            <div class="success_images">
              <img src="{{ asset('Frontend/assets/images/Rectangle 650.png')}}" alt="" />
              <!-- =====  responsive succes img  =========== -->
              <img
                class="responsive_success_iamges"
                src="{{ asset('Frontend/assets/images/Rectangle 649.png')}}"
                alt=""
              />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="success_images_right_content">
              <img src="{{ asset('Frontend/assets/images/Rectangle 649.png')}}" alt="" />
            </div>
            <div class="success_progress">
              <div class="success_progrss_inner">
                <div
                  class="d-flex align-items-center success_progrss_counter"
                >
                  <h5>Web Design</h5>
                  <p>90%</p>
                </div>
                <div class="dorp_shadoow">
                  <span class="drop_inne_shadow" style="width: 90%"></span>
                </div>
              </div>
              <div class="success_progrss_inner">
                <div
                  class="d-flex align-items-center success_progrss_counter"
                >
                  <h5>App Development</h5>
                  <p>90%</p>
                </div>
                <div class="dorp_shadoow">
                  <span class="drop_inne_shadow" style="width: 90%"></span>
                </div>
              </div>
              <div class="success_progrss_inner">
                <div
                  class="d-flex align-items-center success_progrss_counter"
                >
                  <h5>Backend</h5>
                  <p>90%</p>
                </div>
                <div class="dorp_shadoow">
                  <span class="drop_inne_shadow" style="width: 90%"></span>
                </div>
              </div>
              <div class="success_progrss_inner">
                <div
                  class="d-flex align-items-center success_progrss_counter"
                >
                  <h5>Video Animation</h5>
                  <p>90%</p>
                </div>
                <div class="dorp_shadoow">
                  <span class="drop_inne_shadow" style="width: 90%"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ============== about Blog _card  ============= -->
        <div class="row" id="blog_about_rows">
          <div class="col-lg-4">
            <div class="about_blog_leftCard">
              <a class="blog_about_btn" href="#"> Web Design </a>
              <div class="blog_aouthro">
                <div class="blog_aouthor_images">
                  <img src="{{ asset('Frontend/assets/images/Mask.png')}}" alt="" />
                </div>
                <div class="blog_aouthro_names">
                  <h4>Posted By, Alen Jodge</h4>
                  <p>05 January, 2021</p>
                </div>
              </div>
              <div class="blog_content">
                <h3>Donec A Porttitor Phari Sod Tellus Nunc Quis Erosn</h3>
                <p>
                  Lorem Ipsum has been the industry's standard dummy text
                  ever since the 1500s, when an unknown printer took a
                  galley of type and scrambled it to make a type specimen
                  book.
                </p>
                <a href="#" class="blog_btn_view"> View details </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="blog_mid_cart">
              <a class="blog_about_btn" href="#"> Web Design </a>
              <div class="blog_mid_cardimg">
                <img src="{{ asset('Frontend/assets/images/Rectangle 657.png')}}" alt="" />
              </div>
              <div class="blog_content">
                <h3>Donec A Porttitor Phari Sod Tellus Nunc Quis Erosn</h3>

                <a href="#" class="blog_btn_view"> View details </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="blog_right_card">
              <div class="blog_right_card">
                <div class="heading_about_blog_card">
                  <h3>
                    Latest News And Article Modern <span> Design </span>
                  </h3>
                </div>
                <div class="viewall_blogbtn">
                  <a href="blog.html">View all Blog</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ========== Responsive blog card  ============= -->
        <div class="responsive_about_blog_cart">
          <!-- ==========  ======== -->
          <div class="blog_right_card">
            <div class="blog_right_card">
              <div class="heading_about_blog_card">
                <h3>
                  Latest News And Article Modern <span> Design </span>
                </h3>
              </div>
            </div>
          </div>

          <!-- ======== responsive blog slider  ========= -->
          <div class="row" id="res_blog_container_slider">
            <div class="col-lg-4">
              <div class="about_blog_leftCard">
                <a class="blog_about_btn" href="#"> Web Design </a>
                <div class="blog_aouthro">
                  <div class="blog_aouthor_images">
                    <img src="{{ asset('Frontend/assets/images/Mask.png')}}" alt="" />
                  </div>
                  <div class="blog_aouthro_names">
                    <h4>Posted By, Alen Jodge</h4>
                    <p>05 January, 2021</p>
                  </div>
                </div>
                <div class="blog_content">
                  <h3>
                    Donec A Porttitor Phari Sod Tellus Nunc Quis Erosn
                  </h3>
                  <p>
                    Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen
                    book.
                  </p>
                  <a href="#" class="blog_btn_view"> View details </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="blog_mid_cart">
                <a class="blog_about_btn" href="#"> Web Design </a>
                <div class="blog_mid_cardimg">
                  <img src="{{ asset('Frontend/assets/images/Rectangle 657.png')}}" alt="" />
                </div>
                <div class="blog_content">
                  <h3>
                    Donec A Porttitor Phari Sod Tellus Nunc Quis Erosn
                  </h3>

                  <a href="#" class="blog_btn_view"> View details </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="about_blog_leftCard">
                <a class="blog_about_btn" href="#"> Web Design </a>
                <div class="blog_aouthro">
                  <div class="blog_aouthor_images">
                    <img src="{{ asset('Frontend/assets/images/Mask.png')}}" alt="" />
                  </div>
                  <div class="blog_aouthro_names">
                    <h4>Posted By, Alen Jodge</h4>
                    <p>05 January, 2021</p>
                  </div>
                </div>
                <div class="blog_content">
                  <h3>
                    Donec A Porttitor Phari Sod Tellus Nunc Quis Erosn
                  </h3>
                  <p>
                    Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen
                    book.
                  </p>
                  <a href="#" class="blog_btn_view"> View details </a>
                </div>
              </div>
            </div>
          </div>

          <!-- ============ Responsive blog slider  ============== -->
        </div>

        <!-- ===== Responsive blog_card =================== -->
      </div>
    </div>
  </section>

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