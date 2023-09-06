<header>
    <!-- ========== Desktop version Navbar  ============== -->
    <div class="nav_inner_desk">
      <div class="container">
        <div class="nav_main_container">
          <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand brand-logos ms-3" href="#">
                <img src="{{asset('Frontend/assets/images/MHM.png')}}" alt="" />
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
                    <a class="nav-link active" aria-current="page" href="/"
                      >Home</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.technology') }}">Technology</a>
                  </li>
                  <li class="nav-item dropdown Slected-menu">
                    <a class="nav-link sele-btn" href="#">
                      Services <i class="fa-solid fa-chevron-down ms-2"></i>
                    </a>
                    <ul class="dropdown-menus">
                      <li>
                        <a class="dropdown-item" href="{{ route('frontend.services') }}"
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
                    <a href="{{ route('frontend.blog') }}" class="nav-link">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('frontend.project') }}" class="nav-link">Project</a>
                  </li>
                  <li class="nav-item dropdown more-menu">
                    <a class="nav-link moresele-btn" href="#">
                      More <i class="fa-solid fa-plus"></i>
                    </a>
                    <ul class="Moredropdown-menus">
                      <li>
                        <a class="dropdown-item" href="{{ route('frontend.about') }}">About</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ route('frontend.contact') }}"
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
                      <img src="{{asset('Frontend/assets/images/Ellipse 17.png')}}" alt="" />
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