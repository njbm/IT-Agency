@extends('Frontend.layouts.layouts')
@section('title')
  Technology
@endsection

@section('main')
<main class="technology_pages" id="technology_pages">
  <div class="Responsive_hero-banner">
    <div class="bg-gracolor">
      <img
        src="{{asset('Frontend/assets/images/application-programming-interface-hologram.jpg')}}"
        alt=""
      />
    </div>
  </div>
  <!-- =============  Hero_area   =========== -->
  <section class="ind_hero_area" id="services_pages">
    <div class="banner_container">
      <div
        class="bg-gracolor"
        style="
          background-image: url('{{asset('Frontend/assets/images/application-programming-interface-hologram.jpg')}}');
        "
      >
        <div class="container">
          <div class="banner_content">
            <div class="row">
              <div class="col-lg-7" style="z-index: 9">
                <div class="banner_mainContent">
                  <h1>TECHNOLOGY</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -============== Hero_Area End ============= -->

  <!-- =========== all Technology_inner ========= -->
  <section class="technology_inner_sect">
    <div class="technology_container">
      <div class="container">
        <div class="technology_heading_container">
          <h2>Technologies</h2>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="technology_list">
              <ul>
                <li><a href="#" class="active">all</a></li>
                <li><a href="#">Frontend</a></li>
                <li><a href="#">Frontend</a></li>
                <li><a href="#">Backend</a></li>
                <li><a href="#">Frameworks</a></li>
                <li><a href="#">Mobile App</a></li>
                <li><a href="#">DataBase</a></li>
                <li><a href="#">Google</a></li>
                <li><a href="#">Data Science</a></li>
                <li><a href="#">Machine Learning</a></li>
                <li><a href="#">DevOps </a></li>
                <li><a href="#">CMS</a></li>
              </ul>
            </div>
          </div>
          <!-- ======== Technology Card ============== -->
          <div class="col-12" id="tech_card_container">
            <div class="row">
              @foreach ($technology as $technology )  

              <div class="col-lg-2 col-6">
                <div class="tech_card">
                  <img src="{{asset('backend/home/Technology/'. $technology->logo)}}" alt="" />
                </div>
              </div>

              @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========== all Technology ============== -->

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
</main>
  
@endsection