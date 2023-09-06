<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="assets/CSS/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/CSS/common.css" />
    <link rel="stylesheet" href="assets/CSS/contact.css" />
    <link rel="stylesheet" href="assets/CSS/responsive.css" />
  </head>
  <body>
    <!-- ========== haader  ======== -->
    <header>
      <!-- ========== Desktop version Navbar  ============== -->
      <div class="nav_inner_desk">
        <div class="container">
          <div class="nav_main_container">
            <nav class="navbar navbar-expand-lg">
              <div class="container-fluid">
                <a class="navbar-brand brand-logos ms-3" href="index.html">
                  <img src="assets/images/MHM.png" alt="" />
                </a>
                <button
                  class="navbar-toggler toggleBtnNav"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="">
                    <i class="fa-solid fa-bars"></i>
                  </span>
                </button>
                <div
                  class="collapse navbar-collapse nav_toggleContent"
                  id="navbarSupportedContent"
                >
                  <ul class="navbar-nav me-auto ms-4 mb-lg-0 gap-2">
                    <li class="nav-item">
                      <a
                        class="nav-link active"
                        aria-current="page"
                        href="index.html"
                        >Home</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="technology.html">Technology</a>
                    </li>
                    <li class="nav-item dropdown Slected-menu">
                      <a class="nav-link sele-btn" href="#">
                        Services <i class="fa-solid fa-chevron-down ms-2"></i>
                      </a>
                      <ul class="dropdown-menus">
                        <li>
                          <a class="dropdown-item" href="services.html"
                            >Services</a
                          >
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"
                            >Something else here</a
                          >
                        </li>

                        <li>
                          <a class="dropdown-item" href="#">Something else</a>
                        </li>
                      </ul>
                    </li>

                    <li class="nav-item">
                      <a href="blog.html" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Project</a>
                    </li>
                    <li class="nav-item dropdown more-menu">
                      <a class="nav-link moresele-btn" href="#">
                        More <i class="fa-solid fa-plus"></i>
                      </a>
                      <ul class="Moredropdown-menus">
                        <li>
                          <a class="dropdown-item" href="about.html">About</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="Contact.html"
                            >Contact</a
                          >
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"
                            >Something else here</a
                          >
                        </li>

                        <li>
                          <a class="dropdown-item" href="#">Something else</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <div
                    class="d-flex gap-4 align-items-center me-4 user_Trigger_Btn"
                  >
                    <div class="language_selected">
                      <a href="#" class="language_selected_btn">
                        <img src="assets/images/Ellipse 17.png" alt="" />
                        <div class="select_language">
                          <span>EN</span>
                          <i class="fa-solid fa-chevron-down"></i>
                        </div>
                      </a>
                      <ul class="languagedropdown-menus">
                        <li>
                          <a class="dropdown-item language_option" href="#"
                            >BN</a
                          >
                        </li>
                        <li>
                          <a class="dropdown-item language_option" href="#"
                            >INA</a
                          >
                        </li>
                        <li>
                          <a class="dropdown-item language_option" href="#"
                            >USA</a
                          >
                        </li>

                        <li>
                          <a class="dropdown-item language_option" href="#"
                            >PSK</a
                          >
                        </li>
                      </ul>
                    </div>

                    <div class="user_authSign">
                      <button class="btn login_btn" type="submit">
                        Log In
                      </button>
                      <button class="btn sign_btn" type="submit">
                        Sign Up
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <!-- ============= Mobile Version Navbar =========== -->
    </header>
    <!-- ========= Header End ======= -->
    <main id="contact_pages" class="contact-pages">
      <!-- ===========  Responsive hero_banner inner ============ -->
      <div class="Responsive_hero-banner">
        <div class="bg-gracolor">
          <img src="assets/images/Rectangle 4 (4).png" alt="" />
        </div>
      </div>
      <!-- =============  Hero_area   =========== -->
      <section class="ind_hero_area" id="services_pages">
        <div class="banner_container">
          <div
            class="bg-gracolor"
            style="
              background-image: url('assets/images/Rectangle\ 4\ \(4\).png');
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
        <img class="contact_shp-image" src="assets/images/div (5).png" alt="" />
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
                  <img src="assets/images/Ellipse 36.png" alt="" />
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
                  <img src="assets/images/Ellipse 37.png" alt="" />
                  <div class="contact-content-cart">
                    <h4>PHONE</h4>
                    <p>+88017XXXXXXX</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4" style="z-index: 9">
                <div class="contact-cart-inner">
                  <img src="assets/images/Ellipse 38.png" alt="" />
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
                    background-image: url('assets/images/Mask\ group\ \(1\).png');
                  "
                >
                  <div class="right_content">
                    <div class="d-flex">
                      <h3>Go further with the MHM</h3>
                      <img src="assets/images/image 1.png" alt="" />
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
    <!-- ========== Footer  ======== -->

    <footer>
      <div class="footer-main">
        <div class="footer_container">
          <div class="container">
            <div class="row">
              <div class="col-lg-2">
                <div class="footer_title">
                  <div class="brand-logos">
                    <img src="assets/images/MHM (1).png" class="mb-3" alt="" />
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="footer_title">
                  <h4>Expertises</h4>
                  <ul>
                    <li>
                      <a href="#"> Design Thinking </a>
                    </li>
                    <li>
                      <a href="#"> UX Design </a>
                    </li>
                    <li>
                      <a href="#">Product Design </a>
                    </li>
                    <li>
                      <a href="#">Developpement Webflow</a>
                    </li>
                    <li>
                      <a href="#">Developpement Shopify </a>
                    </li>
                    <li>
                      <a href="#">Developpement Shopify </a>
                    </li>
                    <li>
                      <a href="#">Referencement SEO </a>
                    </li>
                    <li>
                      <a href="#">Referencement SEA </a>
                    </li>
                    <li>
                      <a href="#">Reseaux sociaux</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="footer_title">
                  <h4>Solutions</h4>
                  <ul>
                    <li>
                      <a href="#"> Design Thinking </a>
                    </li>
                    <li>
                      <a href="#"> UX Design </a>
                    </li>
                    <li>
                      <a href="#">Product Design </a>
                    </li>
                    <li>
                      <a href="#">Developpement Webflow</a>
                    </li>
                    <li>
                      <a href="#">Developpement Shopify </a>
                    </li>
                    <li>
                      <a href="#">Developpement Shopify </a>
                    </li>
                    <li>
                      <a href="#">Referencement SEO </a>
                    </li>
                    <li>
                      <a href="#">Referencement SEA </a>
                    </li>
                    <li>
                      <a href="#">Reseaux sociaux</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="footer_title">
                  <h4>Resources</h4>
                  <ul>
                    <li>
                      <a href="#"> Miro Academy</a>
                    </li>
                    <li>
                      <a href="#"> Help Center </a>
                    </li>
                    <li>
                      <a href="#">Blog </a>
                    </li>
                    <li>
                      <a href="#">Status</a>
                    </li>
                    <li>
                      <a href="#">Miro Community</a>
                    </li>
                    <li>
                      <a href="#">Miro Professional Network</a>
                    </li>
                    <li>
                      <a href="#">Referencement SEO </a>
                    </li>
                    <li>
                      <a href="#">Miro Experts Directory </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="footer_title">
                  <h4>Company</h4>
                  <ul>
                    <li>
                      <a href="#"> About us </a>
                    </li>
                    <li>
                      <a href="#"> Careers 🚀 </a>
                    </li>
                    <li>
                      <a href="#">Miro in the News </a>
                    </li>
                    <li>
                      <a href="#">Customer Stories</a>
                    </li>

                    <li>
                      <a href="#">Reseaux sociaux</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="footer_title">
                  <h4>Plans and Pricing</h4>
                  <ul>
                    <li>
                      <a href="#">Pricing </a>
                    </li>
                    <li>
                      <a href="#">Enterprise </a>
                    </li>
                    <li>
                      <a href="#">Consultants </a>
                    </li>
                    <li>
                      <a href="#">Education</a>
                    </li>
                    <li>
                      <a href="#">NPOs </a>
                    </li>
                    <li>
                      <a href="#"> Contact sales </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="app_auth">
              <div class="">
                <a href="#">
                  <img src="assets/images/Frame.png" alt="" />
                </a>
                <a href="#">
                  <img src="assets/images/Frame (1).png" alt="" />
                </a>
              </div>
              <div class="copyRight">
                <p>© 2022 MHM, Inc. All rights reserved.</p>
              </div>
            </div>
          </div>
          <div class="footerBttom">
            <div class="container">
              <div class="row">
                <div class="col-lg-3">
                  <ul class="socila_media">
                    <li>
                      <a href="#">
                        <i class="fa-brands fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa-brands fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa-brands fa-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa-brands fa-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa-brands fa-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="language_selected">
                        <i class="fa-solid fa-globe"></i>
                        <div class="select_language">
                          <span class="ms-1">EN</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-9">
                  <div class="right_contents">
                    <div class="copyRight">
                      <p>© 2022 Miro</p>
                    </div>
                    <ul class="trams">
                      <li>
                        <a href="#"> Terms of Service </a>
                      </li>
                      <li>
                        <a href="#"> Privacy Policy </a>
                      </li>
                      <li><a href="#"> Manage Cookies </a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- ============Footer End  ========= -->
    <script src="assets/JS/bootstrap.min.js"></script>
    <script src="assets/JS/main.js"></script>
  </body>
</html>
