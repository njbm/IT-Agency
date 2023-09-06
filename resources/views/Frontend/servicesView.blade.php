@extends('Frontend.layouts.layouts')
@section('title')
  Service View
@endsection

@section('main')
<main class="servicesview_main" id="services_View_main">
  <!-- ===========  Responsive hero_banner inner ============ -->
  <div class="Responsive_hero-banner" id="responsiveHero_banner">
    <div class="bg-gracolor">
      <img src="{{asset('Frontend/assets/images/Rectangle 4 (2).png')}}" alt="" />
    </div>
  </div>
  <!-- =============  Hero_area   =========== -->
  <section class="ind_hero_area" id="servicesview_pages">
    <div class="banner_container">
      <div
        class="bg-gracolor"
        style="
          background-image: url('{{asset('Frontend/assets/images/Rectangle\ 4\ \(2\).png')}}');
        "
      >
        <div class="container">
          <div class="banner_content" id="services_View_banner">
            <div class="row" id="rows">
              <div class="col-lg-7">
                <div class="banner_mainContent">
                  <h1>Web Design</h1>
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
        <div class="servicespage_itemsul" id="">
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
                Best Selling
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
                Newest
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
                Trending
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
                Best Rated
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
                Price
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
                    <a href="servicesSignle.html">
                      <img
                        src="https://study.com/cimages/course-image/ohio-assessments-for-educators-computer-technology-subtests-i-ii-practice-study-guide_218362_large.jpg"
                        alt=""
                      />
                    </a>
                  </div>
                  <a href="CheckOut.html" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="servicesSignle.html">
                      <img src="{{asset('Frontend/assets/images/Rectangle 143.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="CheckOut.html">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="servicesSignle.html">
                      <img src="{{asset('Frontend/assets/images/Rectangle 145.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="CheckOut.html">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="servicesSignle.html">
                      <img src="{{asset('Frontend/assets/images/Rectangle 701.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="CheckOut.html">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="servicesSignle.html">
                      <img src="{{asset('Frontend/assets/images/Rectangle 726.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="servicesSignle.html">
                      <img src="{{asset('Frontend/assets/images/Rectangle 727.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="#">
                      <img src="{{asset('Frontend/assets/images/Rectangle 700.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="#">
                      <img src="{{asset('Frontend/assets/images/Rectangle 142.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="#">
                      <img src="{{asset('Frontend/assets/images/Rectangle 141.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 mt-4 mb-4 pageiNationInner">
                <div class="pageNationButton">
                  <div class="prev_arrowsBtn">
                    <a href="#">
                      <span>
                        <i class="fa-solid fa-chevron-left"></i>
                      </span>
                      <span>
                        <i class="fa-solid fa-chevron-left"></i>
                      </span>
                    </a>
                  </div>
                  <div class="pageNationCount">
                    <ul>
                      <li>
                        <a class="active_page" href="#">1</a>
                      </li>
                      <li>
                        <a href="#">2</a>
                      </li>
                      <li>
                        <a href="#">3</a>
                      </li>
                      <li>
                        <a href="#">4</a>
                      </li>
                    </ul>
                  </div>
                  <div class="next_arrowsBtn">
                    <a href="#">
                      <span>
                        <i class="fa-solid fa-chevron-right"></i>
                      </span>
                      <span>
                        <i class="fa-solid fa-chevron-right"></i>
                      </span>
                    </a>
                  </div>
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
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="#">
                      <img
                        src="https://study.com/cimages/course-image/ohio-assessments-for-educators-computer-technology-subtests-i-ii-practice-study-guide_218362_large.jpg"
                        alt=""
                      />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="#">
                      <img src="{{asset('Frontend/assets/images/Rectangle 143.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="#">
                      <img src="{{asset('Frontend/assets/images/Rectangle 145.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="#">
                      <img src="{{asset('Frontend/assets/images/Rectangle 701.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="#">
                      <img src="{{asset('Frontend/assets/images/Rectangle 726.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="#">
                      <img src="{{asset('Frontend/assets/images/Rectangle 727.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="#">
                      <img src="{{asset('Frontend/assets/images/Rectangle 700.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="#">
                      <img src="{{asset('Frontend/assets/images/Rectangle 142.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="#">
                      <img src="{{asset('Frontend/assets/images/Rectangle 141.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 mt-4 mb-4 pageiNationInner">
                <div class="pageNationButton">
                  <div class="prev_arrowsBtn">
                    <a href="#">
                      <span>
                        <i class="fa-solid fa-chevron-left"></i>
                      </span>
                      <span>
                        <i class="fa-solid fa-chevron-left"></i>
                      </span>
                    </a>
                  </div>
                  <div class="pageNationCount">
                    <ul>
                      <li>
                        <a class="active_page" href="#">1</a>
                      </li>
                      <li>
                        <a href="#">2</a>
                      </li>
                      <li>
                        <a href="#">3</a>
                      </li>
                      <li>
                        <a href="#">4</a>
                      </li>
                    </ul>
                  </div>
                  <div class="next_arrowsBtn">
                    <a href="#">
                      <span>
                        <i class="fa-solid fa-chevron-right"></i>
                      </span>
                      <span>
                        <i class="fa-solid fa-chevron-right"></i>
                      </span>
                    </a>
                  </div>
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
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="servicesSignle.html">
                      <img
                        src="https://study.com/cimages/course-image/ohio-assessments-for-educators-computer-technology-subtests-i-ii-practice-study-guide_218362_large.jpg"
                        alt=""
                      />
                    </a>
                  </div>
                  <a href="" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="CheckOut.html">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="servicesSignle.html">
                      <img src="{{asset('Frontend/assets/images/Rectangle 143.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="CheckOut.html">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="#">
                      <img src="{{asset('Frontend/assets/images/Rectangle 145.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="#">
                      <img src="{{asset('Frontend/assets/images/Rectangle 701.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="#">
                      <img src="{{asset('Frontend/assets/images/Rectangle 726.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="#">
                      <img src="{{asset('Frontend/assets/images/Rectangle 727.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="#">
                      <img src="{{asset('Frontend/assets/images/Rectangle 700.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="#">
                      <img src="{{asset('Frontend/assets/images/Rectangle 142.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-content">
                <div class="services_cardInner">
                  <div class="serv_images">
                    <a href="#">
                      <img src="{{asset('Frontend/assets/images/Rectangle 141.png')}}" alt="" />
                    </a>
                  </div>
                  <a href="#" class="serv_card-contents">
                    <div class="card_contaent">
                      <img src="{{asset('Frontend/assets/images/Rectangle 728.png')}}" alt="" />
                      <h4>WEB DESIGN</h4>
                    </div>
                  </a>
                  <div class="services_Shop_hover">
                    <div>
                      <div class="serv_title_inner">
                        <h4>Web Design</h4>
                      </div>
                      <div class="serv_add_toContent">
                        <div class="servAdd_to_inner">
                          <h3 class="add_price_title">$29</h3>
                          <a href="#" class="wishlistbtn">
                            <i class="fa-solid fa-heart"></i>
                          </a>
                          <p class="add_to_subtitle">
                            Last Updated 29 Aug 2023
                          </p>
                        </div>
                        <div class="serv_addto_btn">
                          <a href="#">
                            <img src="{{asset('Frontend/assets/images/icon/Cart.png')}}" alt="" />
                            +Add to Cart
                          </a>
                          <a href="#">
                            <img
                              src="{{asset('Frontend/assets/images/icon/Group 1676.png')}}"
                              alt=""
                            />
                            Live Preview</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 mt-4 mb-4 pageiNationInner">
                <div class="pageNationButton">
                  <div class="prev_arrowsBtn">
                    <a href="#">
                      <span>
                        <i class="fa-solid fa-chevron-left"></i>
                      </span>
                      <span>
                        <i class="fa-solid fa-chevron-left"></i>
                      </span>
                    </a>
                  </div>
                  <div class="pageNationCount">
                    <ul>
                      <li>
                        <a class="active_page" href="#">1</a>
                      </li>
                      <li>
                        <a href="#">2</a>
                      </li>
                      <li>
                        <a href="#">3</a>
                      </li>
                      <li>
                        <a href="#">4</a>
                      </li>
                    </ul>
                  </div>
                  <div class="next_arrowsBtn">
                    <a href="#">
                      <span>
                        <i class="fa-solid fa-chevron-right"></i>
                      </span>
                      <span>
                        <i class="fa-solid fa-chevron-right"></i>
                      </span>
                    </a>
                  </div>
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

              <div class="col-12 mt-4 mb-4 pageiNationInner">
                <div class="pageNationButton">
                  <div class="prev_arrowsBtn">
                    <a href="#">
                      <span>
                        <i class="fa-solid fa-chevron-left"></i>
                      </span>
                      <span>
                        <i class="fa-solid fa-chevron-left"></i>
                      </span>
                    </a>
                  </div>
                  <div class="pageNationCount">
                    <ul>
                      <li>
                        <a class="active_page" href="#">1</a>
                      </li>
                      <li>
                        <a href="#">2</a>
                      </li>
                      <li>
                        <a href="#">3</a>
                      </li>
                      <li>
                        <a href="#">4</a>
                      </li>
                    </ul>
                  </div>
                  <div class="next_arrowsBtn">
                    <a href="#">
                      <span>
                        <i class="fa-solid fa-chevron-right"></i>
                      </span>
                      <span>
                        <i class="fa-solid fa-chevron-right"></i>
                      </span>
                    </a>
                  </div>
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