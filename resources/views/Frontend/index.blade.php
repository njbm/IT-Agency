@extends('Frontend.layouts.layouts')

@section('title')
Front Page
@endsection

@section('main')
<main class="index-pages" id="index_pages">
  <!-- =============  Hero_area   =========== -->
  <section class="ind_hero_area">
    <div class="banner_container">
      <div
        class="bg-gracolor"
        style="background-image: url('Frontend/assets/images/Rectangle\ 4.png')"
      >
        <div class="container">
          <div class="banner_content">
            <div class="row">
              <div class="col-lg-7" style="z-index: 9">
                <div class="banner_mainContent">
                  <h1>
                    Creative & <span class="bg_gradient"> Minimal </span>
                    <span class="bg_stok"> IT Agency </span>
                  </h1>
                  <div class="shot_dis">
                    <p>
                      Lorem Ipsum has been the industry's standard dummy
                      text ever since the 1500s, when an unknown printer
                      took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five
                      centuries, but also the leap into electronic
                      typesetting, remaining essentially unchanged. It was
                      popularise
                    </p>
                  </div>
                  <div class="get_dBtn mt-4 mb-4">
                    <div class="get_btn">
                      <a href="#" class="startedbtn">Get Started</a>
                    </div>
                    <div class="get_btn">
                      <a href="#" class="learnMoreBtn">
                        <img
                          src="{{asset('Frontend/assets/images/Learn More icon.png')}}"
                          alt=""
                        />
                        <span class="ms-3"> Learn More</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -============== Hero_Area End ============= -->
  <div class="in_project_services">
    <div class="inproject_achieve">
      <div class="row">
        <div class="col-lg-3 col-3 responsive_pd">
          <div class="project_services Achieve">
            <div class="Services_images">
              <img src="{{asset('Frontend/assets/images/Rectangle 643.png')}}" alt="" />
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
              <img src="{{asset('Frontend/assets/images/Rectangle 644.png')}}" alt="" />
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
              <img src="{{asset('Frontend/assets/images/Rectangle 645.png')}}" alt="" />
            </div>
            <div class="pro_count">
              <h3>150+</h3>
              <p>Expert Teams</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-3 responsive_none">
          <div class="project_services Achieve">
            <div class="Services_images">
              <img src="{{asset('Frontend/assets/images/Rectangle 646.png')}}" alt="" />
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

  <!-- ======== Our Services  =========== -->
  <section class="our_services">
    <div class="our_services_container">
      <div class="container">
        <div class="Services_heading">
          <div class="heading_service">
            <p>What we do</p>
          </div>
          <div class="services_minheading">
            <h1>Our <span> Service </span></h1>
          </div>
        </div>
        <div class="row mt-5 pt-3">
          <div class="col-lg-4 col-md-4 card-content">
            <div
              class="services_cardInner"
              style="
                background-image: url('{{ asset('Frontend/assets/images/Rectangle 699.png') }}');"
            >
              <a href="#">
                <div class="card_contaent">
                  <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                  <h4>WEB DESIGN</h4>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 card-content">
            <div
              class="services_cardInner"
              style="
                background-image: url('{{ asset('Frontend/assets/images/Rectangle\ 725.png')}}');
              "
            >
              <a href="#">
                <div class="card_contaent">
                  <img src="{{asset('Frontend/assets/images/Rectangle 728 (1).png')}}" alt="" />
                  <h4>DEVELOPING</h4>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 card-content">
            <div
              class="services_cardInner"
              style="
                background-image: url('{{ asset('Frontend/assets/images/Rectangle\ 727.png')}}');
              "
            >
              <a href="#">
                <div class="card_contaent">
                  <img src="{{asset('Frontend/assets/images/Rectangle 728 (3).png')}}" alt="" />
                  <h4>VIDEO EDITING</h4>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 card-content">
            <div
              class="services_cardInner"
              style="
                background-image: url('{{ asset('Frontend/assets/images/Rectangle\ 700.png') }}');
              "
            >
              <a href="#">
                <div class="card_contaent">
                  <img src="{{asset('Frontend/assets/images/Rectangle 728 (5).png')}}" alt="" />
                  <h4>UI/UX DESIGN</h4>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 card-content">
            <div
              class="services_cardInner"
              style="
                background-image: url('{{ asset('Frontend/assets/images/Rectangle\ 701.png') }}');
              "
            >
              <a href="#">
                <div class="card_contaent">
                  <img src="{{asset('Frontend/assets/images/Rectangle 728 (4).png')}}" alt="" />
                  <h4>APP DESIGN</h4>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 card-content">
            <div
              class="services_cardInner"
              style="
                background-image: url('{{ asset('Frontend/assets/images/Rectangle\ 726.png')}}');
              "
            >
              <a href="#">
                <div class="card_contaent">
                  <img src="{{asset('Frontend/assets/images/Rectangle 728 (3).png')}}" alt="" />
                  <h4>3D DESIGN</h4>
                </div>
              </a>
            </div>
          </div>

          <div class="col-12 mt-4 mb-4">
            <div class="viewMoreBtn">
              <button id="loadMore">View More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======== Our Services End  =========== -->
  <!-- ======== Client  ============= -->
  <section class="in_client">
    <div
      class="our_clientInner"
      style="background-image: url('{{ asset('Frontend/assets/images/Rectangle\ 730.png')}}')"
    >
      <div class="container">
        <div class="client_heading">
          <div class="heading_service">
            <p>Clients</p>
          </div>
          <div class="services_minheading">
            <h1>Meet Our <span> Belivers </span></h1>
          </div>
        </div>
        <div class="row mt-5 our_client">
          <div class="col-lg-2">
            <div class="clinet_brand">
              <img src="{{asset('Frontend/assets/images/FPmZo.png')}}" alt="" />
            </div>
          </div>
          <div class="col-lg-2">
            <div class="clinet_brand">
              <img src="{{asset('Frontend/assets/images/MGV5G.png')}}" alt="" />
            </div>
          </div>
          <div class="col-lg-2">
            <div class="clinet_brand">
              <img src="{{asset('Frontend/assets/images/WKuV6.png')}}" alt="" />
            </div>
          </div>
          <div class="col-lg-2">
            <div class="clinet_brand">
              <img src="{{asset('Frontend/assets/images/FPmZo.png')}}" alt="" />
            </div>
          </div>
          <div class="col-lg-2">
            <div class="clinet_brand">
              <img src="{{asset('Frontend/assets/images/MGV5G.png')}}" alt="" />
            </div>
          </div>
          <div class="col-lg-2">
            <div class="clinet_brand">
              <img src="{{asset('Frontend/assets/images/WKuV6.png')}}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ======== Client  ============= -->

  <!-- ===========Catagoires Inner ========= -->
  <section class="in_catagoiresInner">
    <div class="ind_catagories_container">
      <div class="container">
        <div class="Catagoiresclient_heading">
          <div class="heading_service">
            <p>Our Project</p>
          </div>
          <div class="services_minheading">
            <h1>Find The Category <span> For You </span></h1>
          </div>
        </div>

        <div class="Inde_Catagoires_inner">
          <ul
            class="nav nav-pills mb-3 InCatagoires_item"
            id="pills-tab"
            role="tablist"
          >
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-home-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-home"
                type="button"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
              >
                Web Design
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
                Video
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
                Video
              </button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div
              class="tab-pane fade show active"
              id="pills-home"
              role="tabpanel"
              aria-labelledby="pills-home-tab"
              tabindex="0"
            >
              <div class="catagories_projectInner">
                <div class="row ms-1 me-1">
                  <div class="col-lg-4 col-md-4">
                    <div class="Catagoires_card">
                      <img
                        src="{{asset('Frontend/assets/images/application-programming-interface-hologram.jpg')}}"
                        alt=""
                      />
                      <div class="in_catagories_content">
                        <p class="titleName">Project Name 01</p>
                        <p class="catagories_subTitle">
                          Lorem Ipsum has been the industry's standard dummy
                          text em Ipsum has been the industry's standard
                          dummy tex
                        </p>
                        <a href="#">Read more</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="Catagoires_card">
                      <img
                        src="{{asset('Frontend/assets/images/programming-background-collage (1) (1).jpg')}}"
                        alt=""
                      />
                      <div class="in_catagories_content">
                        <p class="titleName">Project Name 01</p>
                        <p class="catagories_subTitle">
                          Lorem Ipsum has been the industry's standard dummy
                          text em Ipsum has been the industry's standard
                          dummy tex
                        </p>
                        <a href="#">Read more</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="Catagoires_card">
                      <img
                        src="{{asset('Frontend/assets/images/programming-background-collage.jpg')}}"
                        alt=""
                      />
                      <div class="in_catagories_content">
                        <p class="titleName">Project Name 01</p>
                        <p class="catagories_subTitle">
                          Lorem Ipsum has been the industry's standard dummy
                          text em Ipsum has been the industry's standard
                          dummy tex
                        </p>
                        <a href="#">Read more</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="Catagoires_card">
                      <img src="{{asset('Frontend/assets/images/web-design.jpg')}}" alt="" />
                      <div class="in_catagories_content">
                        <p class="titleName">Project Name 01</p>
                        <p class="catagories_subTitle">
                          Lorem Ipsum has been the industry's standard dummy
                          text em Ipsum has been the industry's standard
                          dummy tex
                        </p>
                        <a href="#">Read more</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="Catagoires_card">
                      <img
                        src="{{asset('Frontend/assets/images/web-design-concept-with-drawings.jpg')}}"
                        alt=""
                      />
                      <div class="in_catagories_content">
                        <p class="titleName">Project Name 01</p>
                        <p class="catagories_subTitle">
                          Lorem Ipsum has been the industry's standard dummy
                          text em Ipsum has been the industry's standard
                          dummy tex
                        </p>
                        <a href="#">Read more</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="Catagoires_card">
                      <div class="catagories_content">
                        <p class="titleName">Video Libraries</p>
                        <p class="catagories_subTitle">
                          Lorem Ipsum has been the industry's standard dummy
                          text em Ipsum has been the industry's standard
                          dummy texLorem Ipsum has been the industry's
                          standard dummy text em Ipsum has been the
                          industry's standard dummy tex
                        </p>
                        <a href="#">Read more</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="pills-profile"
              role="tabpanel"
              aria-labelledby="pills-profile-tab"
              tabindex="0"
            >
              <div class="catagories_projectInner">
                <div class="row ms-1 me-1">
                  <div class="col-lg-4 col-md-4">
                    <div class="Catagoires_card">
                      <img
                        src="{{asset('Frontend/assets/images/application-programming-interface-hologram.jpg')}}"
                        alt=""
                      />
                      <div class="in_catagories_content">
                        <p class="titleName">Project Name 01</p>
                        <p class="catagories_subTitle">
                          Lorem Ipsum has been the industry's standard dummy
                          text em Ipsum has been the industry's standard
                          dummy tex
                        </p>
                        <a href="#">Read more</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="Catagoires_card">
                      <img
                        src="{{asset('Frontend/assets/images/programming-background-collage (1) (1).jpg')}}"
                        alt=""
                      />
                      <div class="in_catagories_content">
                        <p class="titleName">Project Name 01</p>
                        <p class="catagories_subTitle">
                          Lorem Ipsum has been the industry's standard dummy
                          text em Ipsum has been the industry's standard
                          dummy tex
                        </p>
                        <a href="#">Read more</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="Catagoires_card">
                      <img
                        src="{{asset('Frontend/assets/images/programming-background-collage.jpg')}}"
                        alt=""
                      />
                      <div class="in_catagories_content">
                        <p class="titleName">Project Name 01</p>
                        <p class="catagories_subTitle">
                          Lorem Ipsum has been the industry's standard dummy
                          text em Ipsum has been the industry's standard
                          dummy tex
                        </p>
                        <a href="#">Read more</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="Catagoires_card">
                      <img
                        src="{{asset('Frontend/assets/images/web-design-concept-with-drawings.jpg')}}"
                        alt=""
                      />
                      <div class="in_catagories_content">
                        <p class="titleName">Project Name 01</p>
                        <p class="catagories_subTitle">
                          Lorem Ipsum has been the industry's standard dummy
                          text em Ipsum has been the industry's standard
                          dummy tex
                        </p>
                        <a href="#">Read more</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="Catagoires_card">
                      <div class="catagories_content">
                        <p class="titleName">Video Libraries</p>
                        <p class="catagories_subTitle">
                          Lorem Ipsum has been the industry's standard dummy
                          text em Ipsum has been the industry's standard
                          dummy texLorem Ipsum has been the industry's
                          standard dummy text em Ipsum has been the
                          industry's standard dummy tex
                        </p>
                        <a href="#">Read more</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="pills-contact"
              role="tabpanel"
              aria-labelledby="pills-contact-tab"
              tabindex="0"
            >
              ...
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============= Ctagoires Inner ========== -->

  <!-- ========  Meet Our PartNer  ============= -->
  <section class="in_client mt-5 pt-3 mb-4">
    <div
      class="our_clientInner"
      style="background-image: url('{{ asset('frontend/assets/images/Rectangle 729.png') }}');"
    >
      <div class="container">
        <div class="client_heading">
          <div class="heading_service">
            <p>Our Partner</p>
          </div>
          <div class="services_minheading">
            <h1>Meet Our Partner <span> Partner </span></h1>
          </div>
        </div>
        <div class="row mt-5 our_client">
          <div class="col-lg-2">
            <div class="clinet_brand">
              <img src="{{asset('Frontend/assets/images/FPmZo.png')}}" alt="" />
            </div>
          </div>
          <div class="col-lg-2">
            <div class="clinet_brand">
              <img src="{{asset('Frontend/assets/images/MGV5G.png')}}" alt="" />
            </div>
          </div>
          <div class="col-lg-2">
            <div class="clinet_brand">
              <img src="{{asset('Frontend/assets/images/WKuV6.png')}}" alt="" />
            </div>
          </div>
          <div class="col-lg-2">
            <div class="clinet_brand">
              <img src="{{asset('Frontend/assets/images/FPmZo.png')}}" alt="" />
            </div>
          </div>
          <div class="col-lg-2">
            <div class="clinet_brand">
              <img src="{{asset('Frontend/assets/images/MGV5G.png')}}" alt="" />
            </div>
          </div>
          <div class="col-lg-2">
            <div class="clinet_brand">
              <img src="{{asset('Frontend/assets/images/WKuV6.png')}}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ======== Meet Our PartNer  ============= -->

  <!-- ========== Team  Member  ============= -->
  <section class="Team_member">
    <div class="ind_team_member pt-3 pb-3">
      <div class="container">
        <div class="client_heading">
          <div class="heading_service">
            <p>Our Team</p>
          </div>
          <div class="services_minheading">
            <h1>Meet The Team <span> Team </span></h1>
          </div>
        </div>
        <div class="tema_member_inner">
          <div class="row mt-5 pt-4 team_memberSlide">
            <div class="col-lg-4">
              <div class="tema_member_container">
                <div class="tem-member_content">
                  <div class="images">
                    <img src="{{asset('Frontend/assets/images/Mask (1).png')}}" alt="" />
                  </div>
                  <div class="member_content">
                    <h4>Mason Campbell</h4>
                    <p>UI DESIGNER</p>
                  </div>
                </div>
                <div class="taem_social">
                  <div class="social_media">
                    <a href="#">
                      <i class="fa-brands fa-twitter"></i>
                    </a>
                  </div>
                  <div class="social_media">
                    <a href="#">
                      <i class="fa-brands fa-square-facebook"></i>
                    </a>
                  </div>
                  <div class="social_media">
                    <a href="#">
                      <i class="fa-brands fa-dribbble"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="tema_member_container">
                <div class="tem-member_content">
                  <div class="images">
                    <img src="{{asset('Frontend/assets/images/Mask.png')}}" alt="" />
                  </div>
                  <div class="member_content">
                    <h4>Vanessa Laird</h4>
                    <p>UI DESIGNER</p>
                  </div>
                </div>
                <div class="taem_social">
                  <div class="social_media">
                    <a href="#">
                      <i class="fa-brands fa-twitter"></i>
                    </a>
                  </div>
                  <div class="social_media">
                    <a href="#">
                      <i class="fa-brands fa-square-facebook"></i>
                    </a>
                  </div>
                  <div class="social_media">
                    <a href="#">
                      <i class="fa-brands fa-dribbble"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="tema_member_container">
                <div class="tem-member_content">
                  <div class="images">
                    <img src="{{asset('Frontend/assets/images/Userpic.png')}}" alt="" />
                  </div>
                  <div class="member_content">
                    <h4>Irea Evans</h4>
                    <p>Client Manager</p>
                  </div>
                </div>
                <div class="taem_social">
                  <div class="social_media">
                    <a href="#">
                      <i class="fa-brands fa-twitter"></i>
                    </a>
                  </div>
                  <div class="social_media">
                    <a href="#">
                      <i class="fa-brands fa-square-facebook"></i>
                    </a>
                  </div>
                  <div class="social_media">
                    <a href="#">
                      <i class="fa-brands fa-dribbble"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="tema_member_container">
                <div class="tem-member_content">
                  <div class="images">
                    <img src="{{asset('Frontend/assets/images/Mask (1).png')}}" alt="" />
                  </div>
                  <div class="member_content">
                    <h4>Mason Campbell</h4>
                    <p>UI DESIGNER</p>
                  </div>
                </div>
                <div class="taem_social">
                  <div class="social_media">
                    <a href="#">
                      <i class="fa-brands fa-twitter"></i>
                    </a>
                  </div>
                  <div class="social_media">
                    <a href="#">
                      <i class="fa-brands fa-square-facebook"></i>
                    </a>
                  </div>
                  <div class="social_media">
                    <a href="#">
                      <i class="fa-brands fa-dribbble"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="tema_member_container">
                <div class="tem-member_content">
                  <div class="images">
                    <img src="{{asset('Frontend/assets/images/Mask.png')}}" alt="" />
                  </div>
                  <div class="member_content">
                    <h4>Vanessa Laird</h4>
                    <p>UI DESIGNER</p>
                  </div>
                </div>
                <div class="taem_social">
                  <div class="social_media">
                    <a href="#">
                      <i class="fa-brands fa-twitter"></i>
                    </a>
                  </div>
                  <div class="social_media">
                    <a href="#">
                      <i class="fa-brands fa-square-facebook"></i>
                    </a>
                  </div>
                  <div class="social_media">
                    <a href="#">
                      <i class="fa-brands fa-dribbble"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="project_row_container">
            <div class="row">
              <div class="col-lg-6 col-7">
                <div class="row">
                  <div class="col-4">
                    <div class="Completed_project">
                      <div class="Completed_project_count">
                        <h4>50+</h4>
                        <p>engineers</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="Completed_project">
                      <div class="Completed_project_count">
                        <h4>250+</h4>
                        <p>engineers</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="Completed_project">
                      <div class="Completed_project_count">
                        <h4>200+</h4>
                        <p>Project</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-5">
                <div class="company_lance">
                  <div class="client_heading">
                    <div class="services_minheading">
                      <h1>
                        Company <br />
                        At a <span> Glance </span>
                      </h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========= Team Member ============= -->

  <!-- ============ Technology ================ -->
  <section class="ind_Technology_inner">
    <div
      class="our_clientInner"
      style="
        background-image: url('{{ asset('Frontend/assets/images/adults-analysis-brainstorming-collaboration.jpg') }}');
      "
    >
      <div class="container">
        <div class="client_heading">
          <div class="heading_service">
            <p>Specialized</p>
          </div>
          <div class="services_minheading">
            <h1><span> Technologies </span></h1>
          </div>
        </div>
        <div class="row mt-5 our_client">
          @foreach ($technology as $technology ) 
          <div class="col-lg-2">
            <div class="clinet_brand">
              <img src="{{asset('backend/home/Technology/'. $technology->logo)}}" alt="" />
            </div>
          </div>
          @endforeach
          <div class="col-lg-2">
            <div class="clinet_brand">
              <img src="{{asset('Frontend/assets/images/image 6.png')}}" alt="" />
            </div>
          </div>
          <div class="col-lg-2">
            <div class="clinet_brand">
              <img
                src="assets/images/angular-logo-icon-png-svg 1.png')}}"
                alt=""
              />
            </div>
          </div>
          <div class="col-lg-2">
            <div class="clinet_brand">
              <img src="{{asset('Frontend/assets/images/image 4.png')}}" alt="" />
            </div>
          </div>
          <div class="col-lg-2">
            <div class="clinet_brand">
              <img src="{{asset('Frontend/assets/images/image 3.png')}}" alt="" />
            </div>
          </div>
          <div class="col-lg-2">
            <div class="clinet_brand">
              <img src="{{asset('Frontend/assets/images/image 3.png')}}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========== Technology End =================== -->

  <!-- ===============ind_Specialized_services ================= -->
  <section class="ind_Specialized_services">
    <div class="Specialized_container">
      <div class="container">
        <div class="client_heading">
          <div class="heading_service">
            <p>Specialized</p>
          </div>
          <div class="services_minheading mt-3">
            <h1>Specialized Staff We <span>Provide</span></h1>
          </div>
        </div>
        <!-- ====== _Specialized_services inner =========== -->
        <div class="row mt-5 pt-2">
          <div class="col-lg-4">
            <div class="Indservice_inner_specialized">
              <div class="logos_specialized">
                <img src="{{asset('Frontend/assets/images/icon/frontend 2.png')}}" alt="" />
              </div>
              <div class="Indservice_inner_specialized_title">
                <h5>Frontend Engineers</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="Indservice_inner_specialized">
              <div class="logos_specialized">
                <img
                  src="assets/images/icon/angular_solidBlack.png')}}"
                  alt=""
                />
              </div>
              <div class="Indservice_inner_specialized_title">
                <h5>Angular Developers</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="Indservice_inner_specialized">
              <div class="logos_specialized">
                <img src="{{asset('Frontend/assets/images/icon/chip 2.png')}}" alt="" />
              </div>
              <div class="Indservice_inner_specialized_title">
                <h5>
                  AI and ML Engineers Deep Lerning/Machine Vision/NLP
                </h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="Indservice_inner_specialized">
              <div class="logos_specialized">
                <img
                  src="assets/images/icon/software-application 3.png')}}"
                  alt=""
                />
              </div>
              <div class="Indservice_inner_specialized_title">
                <h5>Fullstack Engineers</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="Indservice_inner_specialized">
              <div class="logos_specialized">
                <img
                  src="assets/images/icon/software-application 3.png')}}"
                  alt=""
                />
              </div>
              <div class="Indservice_inner_specialized_title">
                <h5>DevOps + DevSecOps Engineers</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="Indservice_inner_specialized">
              <div class="logos_specialized">
                <img src="{{asset('Frontend/assets/images/icon/data-science 2.png')}}" alt="" />
              </div>
              <div class="Indservice_inner_specialized_title">
                <h5>Data Scientist / Data Engineers</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="Indservice_inner_specialized">
              <div class="logos_specialized">
                <img src="{{asset('Frontend/assets/images/icon/uiux 2.png')}}" alt="" />
              </div>
              <div class="Indservice_inner_specialized_title">
                <h5>UI/UX Engineers</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="Indservice_inner_specialized">
              <div class="logos_specialized">
                <img src="{{asset('Frontend/assets/images/icon/PHP.png')}}" alt="" />
              </div>
              <div class="Indservice_inner_specialized_title">
                <h5>PHP Developers</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="Indservice_inner_specialized">
              <div class="logos_specialized">
                <img src="{{asset('Frontend/assets/images/icon/scrum 2.png')}}" alt="" />
              </div>
              <div class="Indservice_inner_specialized_title">
                <h5>Project Managers</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="Indservice_inner_specialized">
              <div class="logos_specialized">
                <img src="{{asset('Frontend/assets/images/icon/quality 2.png')}}" alt="" />
              </div>
              <div class="Indservice_inner_specialized_title">
                <h5>QA Engineers</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="Indservice_inner_specialized">
              <div class="logos_specialized">
                <img src="{{asset('Frontend/assets/images/icon/wordpress-logo.png')}}" alt="" />
              </div>
              <div class="Indservice_inner_specialized_title">
                <h5>Wordpress CMS Developers</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="Indservice_inner_specialized">
              <div class="logos_specialized">
                <img src="{{asset('Frontend/assets/images/icon/analysis 2.png')}}" alt="" />
              </div>
              <div class="Indservice_inner_specialized_title">
                <h5>Business Analyst</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="Indservice_inner_specialized">
              <div class="logos_specialized">
                <img src="{{asset('Frontend/assets/images/icon/idea 1.png')}}" alt="" />
              </div>
              <div class="Indservice_inner_specialized_title">
                <h5>Product Designer</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="Indservice_inner_specialized">
              <div class="logos_specialized">
                <img src="{{asset('Frontend/assets/images/icon/phone 3.png')}}" alt="" />
              </div>
              <div class="Indservice_inner_specialized_title">
                <h5>Mobile App Developersr</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="Indservice_inner_specialized">
              <div class="logos_specialized">
                <img src="{{asset('Frontend/assets/images/icon/padlock 1.png')}}" alt="" />
              </div>
              <div class="Indservice_inner_specialized_title">
                <h5>Information Scurity Engineers</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="Indservice_inner_specialized">
              <div class="logos_specialized">
                <img src="{{asset('Frontend/assets/images/icon/database 1.png')}}" alt="" />
              </div>
              <div class="Indservice_inner_specialized_title">
                <h5>Database admin</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- =============== ind_Specialized_services  ================= -->
  <!-- =========  Blog Gallary=============== -->
  <section class="ind_blog_gallary">
    <div class="blog_gallary">
      <div class="galley_content">
        <img src="{{asset('Frontend/assets/images/Rectangle 137.png')}}" alt="" />
      </div>
      <div class="galley_content">
        <img
          src="{{asset('Frontend/assets/images/programming-background-collage (1) (1).jpg')}}"
          alt=""
        />
      </div>
      <div class="galley_content lg-content wide">
        <img src="{{asset('Frontend/assets/images/Rectangle 145.png')}}" alt="" />
        <div class="gallary_content">
          <h3>Android Development</h3>
          <p>
            Lorem Ipsum has been the industry's standard dummy text ever
            since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book. It has survived
            not only five centuries, but also the leap into electronic
            typesetting, remainin
          </p>
        </div>
      </div>
    </div>
    <div class="blog_gallary1">
      <div class="galley_content lg-content">
        <img
          src="{{asset('Frontend/assets/images/adults-analysis-brainstorming-collaboration.jpg')}}"
          alt=""
        />
        <div class="gallary_content">
          <h3>Digital Solution</h3>
          <p>
            Lorem Ipsum has been the industry's standard dummy text ever
            since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book. It has survived
            not only five centuries, but also the leap into electronic
            typesetting, remainin
          </p>
        </div>
      </div>
      <div class="galley_content">
        <img src="{{asset('Frontend/assets/images/Rectangle 137.png')}}" alt="" />
      </div>
      <div class="galley_content">
        <img src="{{asset('Frontend/assets/images/Rectangle 140.png')}}" alt="" />
      </div>
      <div class="galley_content lg-content">
        <img src="{{asset('Frontend/assets/images/Rectangle 142.png')}}" alt="" />
      </div>
    </div>
    <div class="blog_gallary">
      <div class="galley_content lg-content wide">
        <img src="{{asset('Frontend/assets/images/Rectangle 145.png')}}" alt="" />
        <div class="gallary_content">
          <h3>Android Development</h3>
          <p>
            Lorem Ipsum has been the industry's standard dummy text ever
            since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book. It has survived
            not only five centuries, but also the leap into electronic
            typesetting, remainin
          </p>
        </div>
      </div>
      <div class="galley_content">
        <img src="{{asset('Frontend/assets/images/Rectangle 137.png')}}" alt="" />
      </div>
      <div class="galley_content">
        <img
          src="{{asset('Frontend/assets/images/programming-background-collage (1) (1).jpg')}}"
          alt=""
        />
      </div>
    </div>
  </section>
  <!-- =========  Blog Gallary End ============= -->

  <!-- ======  Clien Review Inner =================== -->
  <section class="clinet_review">
    <div class="client_review_container">
      <div class="container">
        <div class="client_heading">
          <div class="heading_service">
            <p>Tetimonials</p>
          </div>
          <div class="services_minheading">
            <h1>Our Client<span> Say </span></h1>
          </div>
        </div>

        <!-- ======= Client Tesimonials  =========== -->
        <div class="client_testimonials">
          <div class="row mt-5 pt-4 Client_memberSlide">
            <div class="col-lg-3">
              <div class="tema_member_container">
                <div class="tem-member_content">
                  <div class="images">
                    <img src="{{asset('Frontend/assets/images/Rectangle 18 (1).png')}}" alt="" />
                  </div>
                  <div class="member_content">
                    <h4>Mason Campbell</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing
                      elit. A fringilla at gravida justo, felis risus
                      ullamcorper augue tempus. Nam hac.
                    </p>
                  </div>
                  <div class="clinet_ratting">
                    <ul>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="tema_member_container">
                <div class="tem-member_content">
                  <div class="images">
                    <img src="{{asset('Frontend/assets/images/Rectangle 18 (2).png')}}" alt="" />
                  </div>
                  <div class="member_content">
                    <h4>Vanessa Laird</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing
                      elit. A fringilla at gravida justo, felis risus
                      ullamcorper augue tempus. Nam hac.
                    </p>
                  </div>
                  <div class="clinet_ratting">
                    <ul>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="tema_member_container">
                <div class="tem-member_content">
                  <div class="images">
                    <img src="{{asset('Frontend/assets/images/Rectangle 19.png')}}" alt="" />
                  </div>
                  <div class="member_content">
                    <h4>Irea Evans</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing
                      elit. A fringilla at gravida justo, felis risus
                      ullamcorper augue tempus. Nam hac.
                    </p>
                  </div>
                  <div class="clinet_ratting">
                    <ul>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="tema_member_container">
                <div class="tem-member_content">
                  <div class="images">
                    <img src="{{asset('Frontend/assets/images/Rectangle 18 (1).png')}}" alt="" />
                  </div>
                  <div class="member_content">
                    <h4>Mason Campbell</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing
                      elit. A fringilla at gravida justo, felis risus
                      ullamcorper augue tempus. Nam hac.
                    </p>
                  </div>
                  <div class="clinet_ratting">
                    <ul>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="tema_member_container">
                <div class="tem-member_content">
                  <div class="images">
                    <img src="{{asset('Frontend/assets/images/Rectangle 18 (1).png')}}" alt="" />
                  </div>
                  <div class="member_content">
                    <h4>Vanessa Laird</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing
                      elit. A fringilla at gravida justo, felis risus
                      ullamcorper augue tempus. Nam hac.
                    </p>
                  </div>
                  <div class="clinet_ratting">
                    <ul>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                      <li>
                        <i class="fa-solid fa-star"></i>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ======== Client Testimonials=============== -->
      </div>
    </div>
  </section>
  <!-- =============  Client Review ================ -->

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
              <form action="">
                <input type="text" placeholder="Email" />
                <button>
                  <i class="fa-solid fa-paper-plane me-2"></i>
                  Subscribe
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========  Subscribe Inner ================= -->

  <!-- =========== Contact ========= -->
  <section class="indContact">
    <div class="contact_inner pb-3">
      <div class="container">
        <div class="responsive_contact-heading">
          <div class="client_heading mb-3">
            <div class="heading_service">
              <p>Get Consultation</p>
            </div>
            <div class="services_minheading">
              <h1>Contact<span>Us</span></h1>
            </div>
          </div>
        </div>
        <div class="row contact_rows">
          <div class="col-lg-6 col-md-6">
            <div class="client_heading mb-3">
              <div class="heading_service">
                <p>Get Consultation</p>
              </div>
              <div class="services_minheading">
                <h1>Contact<span>Us</span></h1>
              </div>
            </div>
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
          <div class="col-lg-6 col-md-6">
            <div
              class="contact_right_content"
              style="background-image: url(assets/images/Mask\ group.png')}})"
            >
              <div class="right_content">
                <div class="d-flex">
                  <h3>Go further with the MHM</h3>
                  <img src="{{asset('Frontend/assets/images/image 1.png')}}" alt="" />
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
</main>
  
@endsection