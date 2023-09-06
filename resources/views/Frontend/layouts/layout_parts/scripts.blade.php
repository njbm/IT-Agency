<script src="{{asset('Frontend/assets/JS/bootstrap.min.js')}}"></script>
<script src="{{asset('Frontend/assets/JS/Jquery.js')}}"></script>
<script src="{{asset('Frontend/assets/JS/slick.min.js')}}"></script>
<script src="{{asset('Frontend/assets/JS/main.js')}}"></script>

<!--Home Scripts Start-->
<script>
  $('.our_client').slick({
    infinite: true,
    autoplay: true,
    speed: 600,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
    prevArrow:
      '<a href="#" class="Hero_PrevBtn"><i class="fa-solid fa-chevron-left"></i></a>',
    nextArrow:
      '<a href="#" class="Hero_NextBtn"><i class="fa-solid fa-chevron-right"></i></a>',
  });

  $('.InCatagoires_item').slick({
    infinite: true,

    speed: 600,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
    prevArrow:
      '<a href="#" class="Hero_PrevBtn"><i class="fa-solid fa-chevron-left"></i></a>',
    nextArrow:
      '<a href="#" class="Hero_NextBtn"><i class="fa-solid fa-chevron-right"></i></a>',
  });

  $('.team_memberSlide').slick({
    infinite: true,
    speed: 600,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
    prevArrow:
      '<a href="#" class="Hero_PrevBtn"><i class="fa-solid fa-chevron-left"></i></a>',
    nextArrow:
      '<a href="#" class="Hero_NextBtn"><i class="fa-solid fa-chevron-right"></i></a>',
  });

  $('.Client_memberSlide').slick({
    infinite: true,
    speed: 600,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
    prevArrow:
      '<a href="#" class="Hero_PrevBtn"><i class="fa-solid fa-chevron-left"></i></a>',
    nextArrow:
      '<a href="#" class="Hero_NextBtn"><i class="fa-solid fa-chevron-right"></i></a>',
  });

  $(document).ready(function () {
    $('.card-content').slice(0, 3).show();
    $('#loadMore').on('click', function (e) {
      e.preventDefault();
      $('.card-content:hidden').slice(0, 3).slideDown();
      if ($('.card-content:hidden').length == 0) {
        $('#loadMore');
      }
    });
  });
</script>
<!--Home Scripts End-->


<!--About Scripts Start--->

<script>
    $("#about_review_rows").slick({
      infinite: true,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },

        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ],
      prevArrow:
        '<a href="#" class="prev_arrow"><i class="fa-solid fa-chevron-left"></i></a>',
      nextArrow:
        '<a href="#" class="next_arrow"><i class="fa-solid fa-chevron-right"></i></a>',
    });

    $("#res_blog_container_slider").slick({
      infinite: true,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },

        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ],
      prevArrow:
        '<a href="#" class="prev_arrow"><i class="fa-solid fa-chevron-left"></i></a>',
      nextArrow:
        '<a href="#" class="next_arrow"><i class="fa-solid fa-chevron-right"></i></a>',
    });
  </script>

  <script>
    $(".circle_percent").each(function () {
      var $this = $(this),
        $dataV = $this.data("percent"),
        $dataDeg = $dataV * 3.6,
        $round = $this.find(".round_per");
      $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");
      $this.append(
        '<div class="circle_inbox"><span class="percent_text"></span></div>'
      );
      $this.prop("Counter", 0).animate(
        { Counter: $dataV },
        {
          duration: 4000,
          easing: "swing",
          step: function (now) {
            $this.find(".percent_text").text(Math.ceil(now) + "%");
          },
        }
      );
      if ($dataV >= 51) {
        $round.css("transform", "rotate(" + 360 + "deg)");
        setTimeout(function () {
          $this.addClass("percent_more");
        }, 2000);
        setTimeout(function () {
          $round.css(
            "transform",
            "rotate(" + parseInt($dataDeg + 180) + "deg)"
          );
        }, 2000);
      }
    });
  </script>

  <script>
    // $(".counter").counterUp({});
    $(".counter").each(function () {
      var $this = $(this),
        countTo = $this.attr("data-count");

      $({ countNum: $this.text() }).animate(
        {
          countNum: countTo,
        },

        {
          duration: 5000,
          easing: "linear",
          step: function () {
            $this.text(Math.floor(this.countNum));
          },
          complete: function () {
            $this.text(this.countNum);
            //alert('finished');
          },
        }
      );
    });
</script>

<!--About scripts End-->


<!--Service scripts End-->

  <script>
    $('.services_slide').slick({
      infinite: true,
      autoplay: true,
      speed: 600,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 2,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ],
      prevArrow:
        '<a href="#" class="Hero_PrevBtn"><i class="fa-solid fa-chevron-left"></i></a>',
      nextArrow:
        '<a href="#" class="Hero_NextBtn"><i class="fa-solid fa-chevron-right"></i></a>',
    });

    // $(function () {
    //   $(".card-content").slice(0, 3).show();
    //   $("body").on("click touchstart", "#loadMore", function (e) {
    //     e.preventDefault();
    //     $(".card-content:hidden").slice(0, 3).slideDown();
    //     if ($(".card-content:hidden").length == 0) {
    //       $("#loadMore").css("visibility", "hidden");
    //     }
    //   });
    // });

    $('.responsive_servicesItemsList').slick({
      speed: 600,
      slidesToShow: 7,
      slidesToScroll: 1,
      arrows: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 3,
            infinite: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 2,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ],
      prevArrow:
        '<a href="#" class="Hero_PrevBtn"><i class="fa-solid fa-chevron-left"></i></a>',
      nextArrow:
        '<a href="#" class="Hero_NextBtn"><i class="fa-solid fa-chevron-right"></i></a>',
    });

    const cardContent = document.querySelectorAll('.card-content');
    const loadMorebtn = document.querySelectorAll('#loadMore');

    let maxItem = 3;
    let index = 1;

    // function showItems() {
    //   for (let i = 0; i < cardContent.length; i++) {
    //     cardContent[i].classList.remove("show");
    //     cardContent[i].classList.add("hide");
    //     if (i >= index * maxItem - maxItem && i < index * maxItem) {
    //       // if i greater than and equal to (index*maxItem)-maxItem;
    //       // means  (1*8)-8=0 if index=2 then (2*8)-8=8
    //       cardContent[i].classList.remove("hide");
    //       cardContent[i].classList.add("show");
    //     }
    //   }
    // }

    let boxes = [...document.querySelectorAll('.card-content')];
    console.log(boxes);
    let current = boxes.slice(0, 5);
    console.log(current);

    const myfun = () => {
      current.forEach((element) => {
        // element.style.display = "none";
      });
    };

    window.addEventListener('load', () => {
      myfun();
      loadMorebtn.forEach((btn) => {
        btn.addEventListener('click', (e) => {
          e.preventDefault();
        });
      });
    });

    ///////////////////////

    const cardsPerLoad = 3;
    let currentCardCount = cardsPerLoad;

    const cardSection = document.getElementById('cardSection');
    const viewMoreBtn = document.getElementById('viewMoreBtn');

    viewMoreBtn.addEventListener('click', loadMoreCards);

    function loadMoreCards() {
      for (let i = 0; i < cardsPerLoad; i++) {
        const card = document.createElement('div');
        card.className = 'main_div';
        card.textContent = 'Lorem ipsum dolor sit amet...';
        cardSection.appendChild(card);
      }

      currentCardCount += cardsPerLoad;

      if (currentCardCount >= 12) {
        viewMoreBtn.style.display = 'none';
      }
    }

    loadMoreCards();
  </script>
<!--Service scripts End-->

<!--Project scripts Start-->
<script>
    $("#project_pages_slider").slick({
      infinite: true,
      speed: 600,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
      prevArrow:
        '<a href="#" class="Hero_PrevBtn"><i class="fa-solid fa-chevron-left"></i></a>',
      nextArrow:
        '<a href="#" class="Hero_NextBtn"><i class="fa-solid fa-chevron-right"></i></a>',
    });
  </script>

  <script>
    const shortCourseItems = document.querySelectorAll(".py_btn a");
    const tabPanel = document.querySelectorAll(
      ".tab-content-main .tab-content"
    );
    console.log(tabPanel);

    shortCourseItems.forEach((shortCoursebtn) => {
      shortCoursebtn.addEventListener("click", (e) => {
        e.preventDefault();
        tabToggle(shortCoursebtn.getAttribute("data-target"));
        const showDropdown = document.querySelector(".show-pay-btn");
        toggleItems(shortCoursebtn);
        // Remove the show-dropdown class from other items
        if (showDropdown && showDropdown !== shortCoursebtn) {
          toggleItems(showDropdown);
        }
      });
    });

    const toggleItems = (item) => {
      // 3.1. Select each dropdown content
      if (item.classList.contains("show-pay-btn")) {
        item.classList.remove("show-pay-btn");
      } else {
        item.classList.add("show-pay-btn");
      }
    };

    const tabToggle = (tabfilter) => {
      tabPanel.forEach((tabpanelElement) => {
        const dataitem = tabpanelElement.getAttribute("data-item");

        if (tabfilter === dataitem) {
          tabpanelElement.classList.add("active-SubScriptons");
        } else if (tabfilter !== dataitem) {
          tabpanelElement.classList.remove("active-SubScriptons");
        }
      });
    };

    // const removefun = (item) => {
    //   if (item.classList.contains('active-panel')) {
    //     item.classList.remove('active-panel');
    //   } else {
    //     item.classList.add('active-panel');
    //   }
    // };
  </script>
<!--Project scripts End-->

<!--Service View Start-->
<script>
    $(".services_slide").slick({
      infinite: true,
      autoplay: true,
      speed: 600,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 2,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ],
      prevArrow:
        '<a href="#" class="Hero_PrevBtn"><i class="fa-solid fa-chevron-left"></i></a>',
      nextArrow:
        '<a href="#" class="Hero_NextBtn"><i class="fa-solid fa-chevron-right"></i></a>',
    });

    // $(function () {
    //   $(".card-content").slice(0, 3).show();
    //   $("body").on("click touchstart", "#loadMore", function (e) {
    //     e.preventDefault();
    //     $(".card-content:hidden").slice(0, 3).slideDown();
    //     if ($(".card-content:hidden").length == 0) {
    //       $("#loadMore").css("visibility", "hidden");
    //     }
    //   });
    // });

    $(".responsive_servicesItemsList").slick({
      speed: 600,
      slidesToShow: 7,
      slidesToScroll: 1,
      arrows: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 3,
            infinite: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 2,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ],
      prevArrow:
        '<a href="#" class="Hero_PrevBtn"><i class="fa-solid fa-chevron-left"></i></a>',
      nextArrow:
        '<a href="#" class="Hero_NextBtn"><i class="fa-solid fa-chevron-right"></i></a>',
    });

    const cardContent = document.querySelectorAll(".card-content");
    const loadMorebtn = document.querySelectorAll("#loadMore");

    let maxItem = 3;
    let index = 1;

    // function showItems() {
    //   for (let i = 0; i < cardContent.length; i++) {
    //     cardContent[i].classList.remove("show");
    //     cardContent[i].classList.add("hide");
    //     if (i >= index * maxItem - maxItem && i < index * maxItem) {
    //       // if i greater than and equal to (index*maxItem)-maxItem;
    //       // means  (1*8)-8=0 if index=2 then (2*8)-8=8
    //       cardContent[i].classList.remove("hide");
    //       cardContent[i].classList.add("show");
    //     }
    //   }
    // }

    let boxes = [...document.querySelectorAll(".card-content")];
    console.log(boxes);
    let current = boxes.slice(0, 5);
    console.log(current);

    const myfun = () => {
      current.forEach((element) => {
        // element.style.display = "none";
      });
    };

    window.addEventListener("load", () => {
      myfun();
      loadMorebtn.forEach((btn) => {
        btn.addEventListener("click", (e) => {
          e.preventDefault();
        });
      });
    });

    ///////////////////////
</script>
<!--Service View Start-->