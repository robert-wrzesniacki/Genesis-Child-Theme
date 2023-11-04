!(function (n) {
  var t, i;
  n(document).ready(
    n(".menu-bar").click(function () {
      n(this).toggleClass("menu-open"),
        n(".header-main-nav").toggleClass("menu-open"),
        n(".nav-col").toggleClass("menu-open");
    }),
    n(window).scroll(function () {
      100 < n(this).scrollTop() &&
        (n(".menu-bar").removeClass("menu-open"),
        n(".header-main-nav").removeClass("menu-open"),
        n(".nav-col").removeClass("menu-open"));
    }),
    n(".menu-item-has-children > a").click(function (e) {
      //e.preventDefault(), 
        n(window).width() < 1200 &&
          (n(".menu-item-has-children > a").next().removeClass("show"),
          n(".menu-item-has-children > a").removeClass("show"),
          n(this).toggleClass("show"),
          n(this).next().toggleClass("show"));
    }),
    n(".menu-item-has-children").mouseenter(function () {
      n(this).children("a").addClass("show"),
        n(this).children("ul").addClass("show");
    }),
    n(".menu-item-has-children").mouseleave(function () {
      n(this).children("a").removeClass("show"),
        n(this).children("ul").removeClass("show");
    }),
    n(".menu-cities a").click(function (e) {
      e.preventDefault();
    }),
    n(function () {
      n(".overview>:first-child").show(),
        n(".overview>:nth-child(2)").show(),
        n(".arbitration-content>:first-child").show(),
        n(".arbitration-content>:nth-child(2)").show(),
        n(".litigation-content>:first-child").show(),
        n(".litigation-content>:nth-child(2)").show(),
        n(".publications-content>:first-child").show(),
        n(".publications-content>:nth-child(2)").show(),
        n(".education-content>:first-child").show(),
        n(".education-content>:nth-child(2)").show(),
        n(".member-description .load-more").on("click", function (e) {
          var t;
          e.preventDefault(),
            "Load more" == n(this).text()
              ? (n(this).text("Load less"),
                n(this).parent().children().slideDown())
              : "Load less" == n(this).text() &&
                (n(this).text("Load more"),
                (t = n(this).parent().children().toArray()).pop(),
                t.shift(),
                t.shift(),
                n(t).slideUp());
        });
    }),
    n(function () {
      n(".member-description:first-of-type").addClass("active"),
        n(".member-tab:first-of-type").addClass("active");
    }),
    n(".member-tab").click(function () {
      n(".member-tab").removeClass("active"),
        n(this).addClass("active"),
        n(".member-description").removeClass("active");
    }),
    n(".arbitration-title").click(function () {
      n(".arbitration-content").addClass("active");
    }),
    n(".litigation-title").click(function () {
      n(".litigation-content").addClass("active");
    }),
    n(".publications-title").click(function () {
      n(".publications-content").addClass("active");
    }),
    n(".education-title").click(function () {
      n(".education-content").addClass("active");
    }),
    
    n(function () {
       n(".how-we-can-help-col-1").addClass("active"),
         n(".how-we-can-help-col-1.active h4.read-more-help").text("Close");
     }),
     n(".how-we-can-help-title-container").click(function () {
       n(this).parent().parent().hasClass("active")
         ? (n(".how-we-can-help-content-container").slideUp("slow"),
           n(this).parent().children().last().slideUp("slow"),
           n(".how-we-can-help-col").removeClass("active"),
           768 <= n(window).width() &&
             (n("h4.read-more-help").text("Read more"),
             n(this).children().last().text("Read more")))
         : (n(".how-we-can-help-col").removeClass("active"),
           n(".how-we-can-help-content-container").slideUp("slow"),
           n(this).parent().children().last().slideDown("slow"),
           n(this).parent().parent().addClass("active"),
           768 <= n(window).width() &&
             (n("h4.read-more-help").text("Read more"),
             n(this).children().last().text("Close")));
     }),
     n(".how-we-can-help-title-container").mouseover(function () {
       n(this).parent().parent().addClass("hover");
     }),
     n(".how-we-can-help-title-container").mouseout(function () {
       n(this).parent().parent().removeClass("hover");
     }),


    n(function () {
       // n(".csr-accordion-col-1").addClass("active"),
      //    n(".csr-accordion-col-1.active h4.read-more-help").text("Close");
      }),
      n(".csr-accordion-title-container").click(function () {
        n(this).parent().parent().hasClass("active")
          ? (n(".csr-accordion-content-container").slideUp("slow"),
            n(this).parent().children().last().slideUp("slow"),
            n(".csr-accordion-col").removeClass("active"),
            768 <= n(window).width() &&
              (n("h4.read-more-help").text("Read more"),
              n(this).children().last().text("Read more")))
          : (n(".csr-accordion-col").removeClass("active"),
            n(".csr-accordion-content-container").slideUp("slow"),
            n(this).parent().children().last().slideDown("slow"),
            n(this).parent().parent().addClass("active"),
            768 <= n(window).width() &&
              (n("h4.read-more-help").text("Read more"),
              n(this).children().last().text("Close")));
      }),
      n(".csr-accordion-title-container").mouseover(function () {
        n(this).parent().parent().addClass("hover");
      }),
      n(".csr-accordion-title-container").mouseout(function () {
        n(this).parent().parent().removeClass("hover");
      }),

    n(".rankings-image").click(function () {
      var e = n(this).attr("id");
      n("#" + e + "-modal").addClass("show");
    }),
    n(".rankings-modal-container").click(function () {
      n(this).removeClass("show");
    }),
    n(function () {
      n(".privacy-policy-content-1").addClass("active"),
        n(".privacy-policy-chapter-1").addClass("active");
    }),
    n(".privacy-policy-chapter-container").click(function () {
      n(".privacy-policy-content-container").removeClass("active"),
        n(".privacy-policy-chapter-container").removeClass("active"),
        n(this).addClass("active");
      var e = n(this).attr("id");
      n("#" + e + "-content").addClass("active");
    }),
    n(".privacy-policy-next-chapter").click(function () {
      n(".privacy-policy-content-container").removeClass("active"),
        n(".privacy-policy-chapter-container").removeClass("active");
      var e =
        "#" +
        n(this).parent().parent().next().attr("id").replace("-content", "");
      n(this).parent().parent().next().addClass("active"),
        n(e).addClass("active");
    }),
    n(".privacy-policy-prev-chapter").click(function () {
      n(".privacy-policy-content-container").removeClass("active"),
        n(".privacy-policy-chapter-container").removeClass("active");
      var e =
        "#" +
        n(this).parent().parent().prev().attr("id").replace("-content", "");
      n(this).parent().parent().prev().addClass("active"),
        n(e).addClass("active");
    }),
    n(function () {
      n(".our-activity-section-1").addClass("active"),
        n(".our-activity-content-1").addClass("active");
    }),
    n(".our-activity-section-title").click(function () {
      var e;
      n(this).parent().hasClass("active")
        ? (n(this)
            .parent()
            .children(".our-activity-section-years")
            .slideUp("slow"),
          n(this).parent().removeClass("active"))
        : (n(".our-activity-section-container").removeClass("active"),
          n(".our-activity-content-container").removeClass("active"),
          n(".our-activity-section-container")
            .children(".our-activity-section-years")
            .slideUp("slow"),
          n(this).parent().children().last().slideDown("slow"),
          n(this).parent().addClass("active"),
          (e = n(this).parent().attr("id")),
          n("#" + e + "-content").addClass("active"));
    }),
    n(function () {
      n(".our-activity-section-2-year-1").addClass("active"),
        n(".our-activity-section-2-year-1-content").addClass("active"),
        n(".our-activity-section-4-year-1").addClass("active"),
        n(".our-activity-section-4-year-1-content").addClass("active");
    }),
    n(".our-activity-section-2-year").click(function () {
      n(".our-activity-section-2-year").removeClass("active"),
        n(".our-activity-section-2-year-content").removeClass("active"),
        n(this).addClass("active");
      var e = n(this).attr("id");
      n("#" + e + "-content").addClass("active");
    }),
    n(".our-activity-section-4-year").click(function () {
      n(".our-activity-section-4-year").removeClass("active"),
        n(".our-activity-section-4-year-content").removeClass("active"),
        n(this).addClass("active");
      var e = n(this).attr("id");
      n("#" + e + "-content").addClass("active");
    }),
    ((i = 0),
    n(".our-activity-load-more").click(function () {
      i += 1;
      var e = n(this).parent().children(".our-activity-content-wrap").length;
      i < e - 1
        ? n(this)
            .parent()
            .find("[data-articels_no='" + i + "']")
            .slideDown()
        : (n(this)
            .parent()
            .find("[data-articels_no='" + i + "']")
            .slideDown(),
          n(this).addClass("disable"));
    }),
    void n(".our-activity-section-container").click(function () {
      (i = 0),
        n("[data-articels_no]").slideUp(),
        n(".our-activity-load-more").removeClass("disable");
    })),
    n(function () {
      n(".experience-section-1").addClass("active"),
        n(".experience-content-1").addClass("active");
    }),
    n(".experience-section-title").click(function () {
      var e;
      n(this).parent().hasClass("active")
        ? (n(this).parent().children(".wrapper-experience ").slideUp("slow"),
          n(this).parent().removeClass("active"))
        : (n(".experience-section-container").removeClass("active"),
          n(".experience-content-container").removeClass("active"),
          n(".experience-section-container")
            .children(".wrapper-experience ")
            .slideUp("slow"),
          n(this).parent().children().last().slideDown("slow"),
          n(this).parent().addClass("active"),
          (e = n(this).parent().attr("id")),
          n("#" + e + "-content").addClass("active"));
    }),
    n(function () {
      n(".experience-section-2-type-1-content").addClass("active"),
        n(".experience-section-3-type-1-content").addClass("active");
    }),
    n(".map-overlay").click(function () {
      n(".map-overlay").removeClass("active"),
        n(".geography-content").removeClass("active"),
        n(this).addClass("active");
      var e = n(this).attr("id");
      n("#" + e + "-content").addClass("active");
    }),
    ((t = 0),
    n(".experience-load-more").click(function () {
      t += 1;
      var e = n(this).parent().children(".experience-content-wrap").length;
      t < e - 1
        ? n(this)
            .parent()
            .find("[data-articels_no='" + t + "']")
            .slideDown()
        : (n(this)
            .parent()
            .find("[data-articels_no='" + t + "']")
            .slideDown(),
          n(this).addClass("disable")),
        console.log(e);
    }),
    n(".experience-section-container").click(function () {
      (t = 0),
        n("[data-articels_no]").slideUp(),
        n(".experience-load-more").removeClass("disable");
    }),
    void n(".geography-map-container").click(function () {
      (t = 0),
        n("[data-articels_no]").slideUp(),
        n(".experience-load-more").removeClass("disable");
    })),
    n(".default-option-experience-section-2").click(function () {
      n(this).parent().toggleClass("active");
    }),
    n(".select-ul-experience-section-2 li").click(function () {
      var e = n(this).html();
      n(".default-option-experience-section-2 li").html(e);
      var t = n(this).children().children().text();
      n(".search-results-experience-content-2").html(t),
        n(this).parents(".experience-section-2-types").removeClass("active"),
        n(".experience-section-2-type-content").removeClass("active");
      var i = n(this).attr("id");
      n("#" + i + "-content").addClass("active");
    }),
    n(".default-option-experience-section-3").click(function () {
      n(this).parent().toggleClass("active");
    }),
    n(".select-ul-experience-section-3 li").click(function () {
      var e = n(this).html();
      n(".default-option-experience-section-3 li").html(e);
      var t = n(this).children().children().text();
      n(".search-results-experience-content-3").html(t),
        n(this).parents(".experience-section-3-types").removeClass("active"),
        n(".experience-section-3-type-content").removeClass("active");
      var i = "#" + n(this).attr("id") + "-content";
      console.log(i), n(i).addClass("active");
    }),
    n(".widget_categories .widget-wrap ul").prepend(
      '<li><a href="/news-insights/">View all posts</a></li>'
    ),
    n(".widget_archive .widget-wrap ul").prepend(
      '<li><a href="/news-insights/">View all posts</a></li>'
    ),
    n(".widget_categories .widget-title").click(function () {
      n(window).width() <= 768 &&
        (n(".widget_categories .widget-title").toggleClass("open"),
        n(".widget_categories ul").slideToggle());
    }),
    n(".widget_archive .widget-title").click(function () {
      n(window).width() <= 768 &&
        (n(".widget_archive .widget-title").toggleClass("open"),
        n(".widget_archive ul").slideToggle());
    }),
    n(".archive-pagination li:not(.pagination-next):last a").css(
      "border-right",
      "none"
    )
  );
})(jQuery),
  jQuery(document).ready(function (a) {
    (a.fn.isInViewport = function () {
      var e = a(this).offset().top,
        t = e + a(this).outerHeight(),
        i = a(window).scrollTop(),
        n = i + a(window).height();
      return i < t && e < n;
    }),
      0 !== a(".number-col").length &&
        (a(".number").isInViewport()
          ? a(document).ready(function () {
              a(".standing-out-number-value").each(function () {
                var e = a(this);
                jQuery({ Counter: 0 }).animate(
                  { Counter: e.text() },
                  {
                    duration: 5e3,
                    easing: "swing",
                    step: function () {
                      e.text(Math.ceil(this.Counter));
                    },
                  }
                );
              });
            })
          : a(window).on("resize scroll", function () {
              var e = a(".number"),
                t = a(e).offset().top - window.innerHeight;
              a(window).scrollTop() > t &&
                (a(window).off("scroll"),
                a(".standing-out-number-value").each(function () {
                  var e = a(this);
                  jQuery({ Counter: 0 }).animate(
                    { Counter: e.text() },
                    {
                      duration: 5e3,
                      easing: "swing",
                      step: function () {
                        e.text(Math.ceil(this.Counter));
                      },
                    }
                  );
                }));
            }));
  });
var swiper = new Swiper(".swiper-standing-out", {
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: { delay: 6e3, disableOnInteraction: !1 },
    loop: !0,
    pagination: { el: ".swiper-standing-out-pagination", type: "fraction" },
    navigation: {
      nextEl: ".swiper-standing-out-button-next",
      prevEl: ".swiper-standing-out-button-prev",
    },
  }),
  swiper = new Swiper(".swiper-meet-our-team", {
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: { delay: 6e3, disableOnInteraction: !1 },
    loop: !0,
    pagination: { el: ".swiper-meet-our-team-pagination", type: "fraction" },
    navigation: {
      nextEl: ".swiper-meet-our-team-button-next",
      prevEl: ".swiper-meet-our-team-button-prev",
    },
    breakpoints: {
      580: { slidesPerView: 2, spaceBetween: 20 },
      992: { slidesPerView: 3, spaceBetween: 30 },
      1200: { slidesPerView: 4, spaceBetween: 30 },
    },
  }),
  swiperNews = new Swiper(".swiper-slider-with-news", {
    autoplay: { delay: 6e3, disableOnInteraction: !1 },
    loop: !0,
    speed: 1e3,
    slidesPerView: 1,
    spaceBetween: 0,
    pagination: { el: ".swiper-slider-with-news-pagination", type: "fraction" },
    navigation: {
      nextEl: ".swiper-slider-with-news-button-next",
      prevEl: ".swiper-slider-with-news-button-prev",
    },
  }),
  swiper = new Swiper(".swiper-our-clients", {
    slidesPerView: 2,
    spaceBetween: 10,
    autoplay: { delay: 6e3, disableOnInteraction: !1 },
    loop: !0,
    pagination: { el: ".swiper-our-clients-pagination", type: "fraction" },
    navigation: {
      nextEl: ".swiper-our-clients-button-next",
      prevEl: ".swiper-our-clients-button-prev",
    },
    breakpoints: {
      580: { slidesPerView: 3, spaceBetween: 20 },
      992: { slidesPerView: 4, spaceBetween: 30 },
      1200: { slidesPerView: 5, spaceBetween: 30 },
    },
  }),
  swiper = new Swiper(".swiper-they-write-about-us", {
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: { delay: 6e3, disableOnInteraction: !1 },
    loop: !0,
    pagination: {
      el: ".swiper-they-write-about-us-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-they-write-about-us-button-next",
      prevEl: ".swiper-they-write-about-us-button-prev",
    },
  });
