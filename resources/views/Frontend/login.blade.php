<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login-in</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="assets/CSS/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/CSS/common.css" />
    <link rel="stylesheet" href="assets/CSS/login.css" />
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
                      <a href="Sign.html">
                        <button class="btn login_btn" type="submit">
                          Log In
                        </button>
                      </a>
                      <a href="Signup.html">
                        <button class="btn sign_btn" type="submit">
                          Sign Up
                        </button>
                      </a>
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

    <main class="login_pages" id="login_pages">
      <section class="ind_hero_area" id="">
        <div class="banner_container">
          <div class="single_Services_image_gradient">
            <div class="container">
              <div class="banner_content" id="single_services_banner"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- =============  Register Form  ================ -->
      <section class="register-main-From">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="main-form">
                <div class="form-innner">
                  <div class="form-heaind-content">
                    <h3>Login</h3>
                    <p>
                      Create an account to easily use navieasoft.com service
                    </p>
                  </div>
                  <form class="row g-3">
                    <div class="col-12" id="input-fild">
                      <span>
                        <img src="assets/images/Group 65.png" alt="" />
                      </span>
                      <input
                        type="email"
                        class="form-control"
                        id="inputEmail4"
                        placeholder="Enter your mail"
                      />
                    </div>

                    <div class="col-12" id="input-fild">
                      <span>
                        <img src="assets/images/Group 223.png" alt="" />
                      </span>
                      <input
                        type="password"
                        class="form-control"
                        id="inputpass"
                        placeholder="Enter your password"
                      />
                    </div>
                    <div class="col-12 text-end">
                      <a href="#" class="forget-btn"> Forget password ? </a>
                    </div>

                    <div class="col-12">
                      <button type="submit" class="btn from-btn">Next</button>
                    </div>
                  </form>
                  <div class="an-account">
                    <p>
                      Don’t have an account?
                      <a href="Register.html"> Signup </a>
                    </p>
                  </div>
                  <div class="pt-3 text-center short-text">
                    <p>or use one of these options</p>
                  </div>
                  <div class="row">
                    <div class="col-4">
                      <div class="auth-login">
                        <a href="#">
                          <img src="assets/images/facebook.png" alt="" />
                        </a>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="auth-login">
                        <a href="#">
                          <img src="assets/images/Google.png" alt="" />
                        </a>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="auth-login">
                        <a href="#">
                          <img
                            src="assets/images/apple-logo-png-dallas-shootings-don-add-are-speech-zones-used-4 1.png"
                            alt=""
                          />
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="form-footer-content">
                    <p>
                      By signing in or creating an account, you agree with our
                      <a href="#"> Terms & Conditions </a> and
                      <a href="#"> Privacy Statement</a>
                    </p>

                    <p>All rights reserved. Copyright 2022 – MHM™</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ================  Register Form ================= -->
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
