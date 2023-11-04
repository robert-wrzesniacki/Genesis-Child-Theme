(function ($) {
	$( document ).ready(
		$( '.menu-bar' ).click(
			function() {
				$( this ).toggleClass( 'menu-open' );
				$( '.header-main-nav' ).toggleClass( 'menu-open' );
				$( '.nav-col' ).toggleClass( 'menu-open' );
			}
		),
		$( window ).scroll(
			function() {
				if ( $( this ).scrollTop() > 100 ) {
					$( '.menu-bar' ).removeClass( 'menu-open' );
					$( '.header-main-nav' ).removeClass( 'menu-open' );
					$( '.nav-col' ).removeClass( 'menu-open' );
				} 
			}
		),
		$( '.menu-item-has-children > a' ).click(
			function(e) {
				e.preventDefault()
				var windowWidth = $( window ).width();
				if ( windowWidth < 1200 ) {
					$( '.menu-item-has-children > a' ).next().removeClass('show');
					$( '.menu-item-has-children > a' ).removeClass('show');
					$( this ).toggleClass( 'show' );
					$( this ).next().toggleClass( 'show' );
				}
			}
		),
		$( '.menu-item-has-children' ).mouseenter(
			function() {
				$( this ).children('a').addClass( 'show' );
				$( this ).children('ul').addClass( 'show' );
			}
		),
		$( '.menu-item-has-children' ).mouseleave(
			function() {
				$( this ).children('a').removeClass( 'show' );
				$( this ).children('ul').removeClass( 'show' );
			}
		),
		$( '.menu-cities a' ).click(
			function(e) {
				e.preventDefault();
			}
		),
		$( function () {
			$( '.overview>:first-child' ).show();
			$( '.overview>:nth-child(2)' ).show();
			$( '.arbitration-content>:first-child' ).show();
			$( '.arbitration-content>:nth-child(2)' ).show();
			$( '.litigation-content>:first-child' ).show();
			$( '.litigation-content>:nth-child(2)' ).show();
			$( '.publications-content>:first-child' ).show();
			$( '.publications-content>:nth-child(2)' ).show();
			$( '.education-content>:first-child' ).show();
			$( '.education-content>:nth-child(2)' ).show();
			$( '.member-description .load-more' ).on( 'click', function (e) {
				e.preventDefault();
				if ( $( this ).text() == 'Load more' ) {
					$( this ).text('Load less');
					$( this ).parent().children().slideDown();
					}
				else if ( $( this ).text() == 'Load less' ) {
					$( this ).text('Load more');
					var children = $( this ).parent().children().toArray();
					children.pop();
					children.shift();
					children.shift();
					$(children).slideUp();
					}
				});
			}
		),
		$( function() {
			$( '.member-description:first-of-type' ).addClass('active');
			$( '.member-tab:first-of-type' ).addClass('active');
		  }
		),
		$( '.member-tab' ).click(
			function(){
				$( '.member-tab' ).removeClass( 'active' );
				$( this ).addClass( 'active' )
				$( '.member-description' ).removeClass( 'active' );
			}
		),
		$( '.arbitration-title' ).click(
			function(){
				$( '.arbitration-content' ).addClass( 'active' );
			}
		),
		$( '.litigation-title' ).click(
			function(){
				$( '.litigation-content' ).addClass( 'active' );
			}
		),
		$( '.publications-title' ).click(
			function(){
				$( '.publications-content' ).addClass( 'active' );
			}
		),
		$( '.education-title' ).click(
			function(){
				$( '.education-content' ).addClass( 'active' );
			}
		),
		$( function() {
			$('.how-we-can-help-col-1').addClass('active');
			$( '.how-we-can-help-col-1.active h4.read-more-help' ).text( 'Close' );
		  }
		),
		$( '.how-we-can-help-title-container' ).click( 
			function() { 
			if ( $( this ).parent().parent().hasClass('active') ) {
				$( '.how-we-can-help-content-container' ).slideUp( 'slow' );
				$ ( this ).parent().children().last().slideUp( 'slow' );
				$( '.how-we-can-help-col' ).removeClass( 'active' );
				var windowWidth = $( window ).width();
					if (windowWidth >= 768) {
						$( 'h4.read-more-help' ).text( 'Read more' );
						$( this ).children().last().text( 'Read more' );
					}
				}
			else {
				$( '.how-we-can-help-col' ).removeClass( 'active' );
				$( '.how-we-can-help-content-container' ).slideUp( 'slow' );
				$ ( this ).parent().children().last().slideDown( 'slow' );
				$( this ).parent().parent().addClass( 'active' );
				var windowWidth = $( window ).width();
					if (windowWidth >= 768) {
						$( 'h4.read-more-help' ).text( 'Read more' );
						$( this ).children().last().text( 'Close' );
					}
				}
			}
		),
		$( '.how-we-can-help-title-container' ).mouseover( 
			function() {
				$( this ).parent().parent().addClass( 'hover' );
			}
		),
		$( '.how-we-can-help-title-container' ).mouseout( 
			function() {
				$( this ).parent().parent().removeClass( 'hover' );
			}
		),
	
		$( '.rankings-image' ).click(
			function() {
				var id = $( this ).attr( 'id' );
				var idModal = '#' + id + '-modal';
				$( idModal ).addClass( 'show');
			}
		),
		$( '.rankings-modal-container' ).click(
			function() {
				$( this ).removeClass( 'show' );
			}
		),
		$( function() {
			$( '.privacy-policy-content-1' ).addClass( 'active' );
			$( '.privacy-policy-chapter-1' ).addClass( 'active' );
		  }
		),
		$( '.privacy-policy-chapter-container' ).click(
			function() {
				$( '.privacy-policy-content-container' ).removeClass( 'active' );
				$( '.privacy-policy-chapter-container' ).removeClass( 'active' );
				$( this ).addClass( 'active' );
				var id = $( this ).attr( 'id' );
				var idContent = '#' + id + '-content';
				$( idContent ).addClass( 'active' );
			}
		),
		$( '.privacy-policy-next-chapter' ).click(
			function() {
				$( '.privacy-policy-content-container' ).removeClass( 'active' );
				$( '.privacy-policy-chapter-container' ).removeClass( 'active' );
				var id = $( this ).parent().parent().next().attr( 'id' );
				id = id.replace( '-content','' );
				var idChapter = '#' + id;
				$( this ).parent().parent().next().addClass( 'active' );
				$ ( idChapter ).addClass( 'active' );
			}
		),
		$( '.privacy-policy-prev-chapter' ).click(
			function() {
				$( '.privacy-policy-content-container' ).removeClass( 'active' );
				$( '.privacy-policy-chapter-container' ).removeClass( 'active' );
				var id = $( this ).parent().parent().prev().attr( 'id' );
				id = id.replace( '-content','' );
				var idChapter = '#' + id;
				$( this ).parent().parent().prev().addClass( 'active' );
				$ ( idChapter ).addClass( 'active' );
			}
		),

		$( function() {
			$( '.our-activity-section-1' ).addClass( 'active' );
			$( '.our-activity-content-1' ).addClass( 'active' );
		  }
		),
		$( '.our-activity-section-title' ).click( 
			function() { 
			if ( $( this ).parent().hasClass('active') ) {
				$( this ).parent().children( '.our-activity-section-years' ).slideUp( 'slow' );
				$( this ).parent().removeClass( 'active' );
				}
			else {
				$( '.our-activity-section-container' ).removeClass( 'active' );
				$( '.our-activity-content-container' ).removeClass( 'active' );
				$( '.our-activity-section-container' ).children( '.our-activity-section-years' ).slideUp( 'slow' );
				$ ( this ).parent().children().last().slideDown( 'slow' );
				$( this ).parent().addClass( 'active' );
				var id = $( this ).parent().attr( 'id' );
				var idContent = '#' + id + '-content';
				$( idContent ).addClass( 'active' );
				}
			}
		),
		$( function() {
			$( '.our-activity-section-2-year-1' ).addClass( 'active' );
			$( '.our-activity-section-2-year-1-content' ).addClass( 'active' );
			$( '.our-activity-section-4-year-1' ).addClass( 'active' );
			$( '.our-activity-section-4-year-1-content' ).addClass( 'active' );
		  }
		),
		$( '.our-activity-section-2-year' ).click(
			function() {
				$( '.our-activity-section-2-year' ).removeClass( 'active' );
				$( '.our-activity-section-2-year-content' ).removeClass( 'active' );
				$( this ).addClass( 'active' );
				var id = $( this ).attr( 'id' );
				var idContent = '#' + id + '-content';
				$( idContent ).addClass( 'active' );
			}
		),
		$( '.our-activity-section-4-year' ).click(
			function() {
				$( '.our-activity-section-4-year' ).removeClass( 'active' );
				$( '.our-activity-section-4-year-content' ).removeClass( 'active' );
				$( this ).addClass( 'active' );
				var id = $( this ).attr( 'id' );
				var idContent = '#' + id + '-content';
				$( idContent ).addClass( 'active' );
			}
		),
		(function () {
			var clicks = 0;
			$( '.our-activity-load-more' ).click(
				function() {
				clicks += 1;
				var count = $( this ).parent().children( '.our-activity-content-wrap' ).length;
				if( clicks < count-1 ) {
					$( this ).parent().find("[data-articels_no='" + clicks + "']").slideDown();
				}
				else {
					$( this ).parent().find( "[data-articels_no='" + clicks + "']" ).slideDown();
					$( this ).addClass( 'disable' );
				}
			})
			$( '.our-activity-section-container' ).click(
				function() {
					clicks = 0;
					$( '[data-articels_no]' ).slideUp();
					$( '.our-activity-load-more' ).removeClass( 'disable' );
				}
			)
		}) (),
		$( function() {
			$( '.experience-section-1' ).addClass( 'active' );
			$( '.experience-content-1' ).addClass( 'active' );
		  }
		),
		$( '.experience-section-title' ).click( 
			function() { 
			if ( $( this ).parent().hasClass('active') ) {
				$( this ).parent().children( '.wrapper-experience ' ).slideUp( 'slow' );
				$( this ).parent().removeClass( 'active' );
				}
			else {
				$( '.experience-section-container' ).removeClass( 'active' );
				$( '.experience-content-container' ).removeClass( 'active' );
				$( '.experience-section-container' ).children( '.wrapper-experience ' ).slideUp( 'slow' );
				$ ( this ).parent().children().last().slideDown( 'slow' );
				$( this ).parent().addClass( 'active' );
				var id = $( this ).parent().attr( 'id' );
				var idContent = '#' + id + '-content';
				$( idContent ).addClass( 'active' );
				}
			}
		),
		$( function() {
			$( '.experience-section-2-type-1-content' ).addClass( 'active' );
			$( '.experience-section-3-type-1-content' ).addClass( 'active' );
		  }
		),
	
		$( '.map-overlay' ).click(
			function() {
				$( '.map-overlay' ).removeClass( 'active' );
				$( '.geography-content' ).removeClass( 'active' );
				$( this ).addClass( 'active' );
				var id = $( this ).attr( 'id' );
				var idContent = '#' + id + '-content';
				$( idContent ).addClass( 'active' );
			}
		),
		(function () {
			var clicks = 0;
			$( '.experience-load-more' ).click(
				function() {
				clicks += 1;
				var count = $( this ).parent().children( '.experience-content-wrap' ).length;
				if( clicks < count-1 ) {
					$( this ).parent().find("[data-articels_no='" + clicks + "']").slideDown();
				}
				else {
					$( this ).parent().find( "[data-articels_no='" + clicks + "']" ).slideDown();
					$( this ).addClass( 'disable' );
				}
				console.log(count);
			})
			$( '.experience-section-container' ).click(
				function() {
					clicks = 0;
					$( '[data-articels_no]' ).slideUp();
					$( '.experience-load-more' ).removeClass( 'disable' );
				}
			)
			$( '.geography-map-container' ).click(
				function() {
					clicks = 0;
					$( '[data-articels_no]' ).slideUp();
					$( '.experience-load-more' ).removeClass( 'disable' );
				}
			)
		}) (),

		$( '.default-option-experience-section-2' ).click(
			function() {
			$( this ).parent().toggleClass( 'active' );
		  }
		),
		  
		  $( '.select-ul-experience-section-2 li' ).click(
			function() {
			var currentEl = $( this ).html();
			$('.default-option-experience-section-2 li').html( currentEl );
			var currentText = $( this ).children().children().text();
			$('.search-results-experience-content-2').html( currentText );
			$( this ).parents( '.experience-section-2-types' ).removeClass( 'active' );
			$( '.experience-section-2-type-content' ).removeClass( 'active' );
			var id = $( this ).attr( 'id' );
			var idContent = '#' + id + '-content';
			$( idContent ).addClass( 'active' );
			}
		),
		$( '.default-option-experience-section-3' ).click(
			function() {
			$( this ).parent().toggleClass( 'active' );
		  }
		),
		  
		  $( '.select-ul-experience-section-3 li' ).click(
			function() {
			var currentEl = $( this ).html();
			$('.default-option-experience-section-3 li').html( currentEl );
			var currentText = $( this ).children().children().text();
			$('.search-results-experience-content-3').html( currentText );
			$( this ).parents( '.experience-section-3-types' ).removeClass( 'active' );
			$( '.experience-section-3-type-content' ).removeClass( 'active' );
			var id = $( this ).attr( 'id' );
			var idContent = '#' + id + '-content';
			console.log(idContent);
			$( idContent ).addClass( 'active' );
		  }
		),
		$( '.widget_categories .widget-wrap ul' ).prepend( '<li><a href="/news-insights/">View all posts</a></li>' ),
		$( '.widget_archive .widget-wrap ul' ).prepend( '<li><a href="/news-insights/">View all posts</a></li>' ),

		$( '.widget_categories .widget-title' ).click(
			function() {
			var windowWidth = $( window ).width();
				if (windowWidth <= 768) {
					$( '.widget_categories .widget-title' ).toggleClass( 'open' );
					$( '.widget_categories ul' ).slideToggle();
				}
			}
		),
		$( '.widget_archive .widget-title' ).click(
			function() {
				var windowWidth = $( window ).width();
				if (windowWidth <= 768) {
					$( '.widget_archive .widget-title' ).toggleClass( 'open' );
					$( '.widget_archive ul' ).slideToggle();
				}
			}
		),
		$( '.archive-pagination li:not(.pagination-next):last a' ).css('border-right', 'none')

	)
})( jQuery );

jQuery(document).ready(function($){
//numbers
	$.fn.isInViewport = function() {
		var elementTop = $(this).offset().top;
		var elementBottom = elementTop + $(this).outerHeight();

		var viewportTop = $(window).scrollTop();
		var viewportBottom = viewportTop + $(window).height();

		return elementBottom > viewportTop && elementTop < viewportBottom;
  	};

	var number1 = $('.number-col');
	if (number1.length !== 0)  {
		if ($('.number').isInViewport()) {
		$(document).ready(function() {
			$('.standing-out-number-value').each(function () {
			var $this = $(this);
			jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
				duration: 5000,
				easing: 'swing',
				step: function () {
				$this.text(Math.ceil(this.Counter));
				}
			});
			});
		});
		} 
		else {
		$(window).on('resize scroll', function() {
			var numbers =$('.number');
			var numTop = $(numbers).offset().top - window.innerHeight;
			if ($(window).scrollTop() > numTop) {
			$(window).off("scroll");
			$('.standing-out-number-value').each(function () {
				var $this = $(this);
				jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
				duration: 5000,
				easing: 'swing',
				step: function () {
					$this.text(Math.ceil(this.Counter));
				}
				});
			});
			}
		});
		}
	}

});

//carousels
var swiper = new Swiper('.swiper-standing-out', {
	slidesPerView: 1,
	spaceBetween: 30,
	autoplay: {
		delay: 6000,
		disableOnInteraction: false,
	},
	loop: true,
	pagination: {
	  el: '.swiper-standing-out-pagination',
	  type: 'fraction',
	},
	navigation: {
	  nextEl: '.swiper-standing-out-button-next',
	  prevEl: '.swiper-standing-out-button-prev',
	},
  });
var swiper = new Swiper('.swiper-meet-our-team', {
	slidesPerView: 1,
	spaceBetween: 10,
	autoplay: {
		delay: 6000,
		disableOnInteraction: false,
	},
	loop: true,
	pagination: {
	  el: '.swiper-meet-our-team-pagination',
	  type: 'fraction',
	},
	navigation: {
	  nextEl: '.swiper-meet-our-team-button-next',
	  prevEl: '.swiper-meet-our-team-button-prev',
	},
	breakpoints: {
		580: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		992: {
			slidesPerView: 3,
			spaceBetween: 30,
		},
		1200: {
			slidesPerView: 4,
			spaceBetween: 30,
		},
	}
  });
  var swiperNews = new Swiper('.swiper-slider-with-news', {
	autoplay: {
		delay: 6000,
		disableOnInteraction: false,
	},
	loop: true,
	speed: 1000,
	slidesPerView: 1,
	spaceBetween: 0,
	pagination: {
	  el: '.swiper-slider-with-news-pagination',
	  type: 'fraction',
	},
	navigation: {
	  nextEl: '.swiper-slider-with-news-button-next',
	  prevEl: '.swiper-slider-with-news-button-prev',
	}
  });
  var swiper = new Swiper('.swiper-our-clients', {
	slidesPerView: 2,
	spaceBetween: 10,
	autoplay: {
		delay: 6000,
		disableOnInteraction: false,
	},
	loop: true,
	pagination: {
	  el: '.swiper-our-clients-pagination',
	  type: 'fraction',
	},
	navigation: {
	  nextEl: '.swiper-our-clients-button-next',
	  prevEl: '.swiper-our-clients-button-prev',
	},
	breakpoints: {
		580: {
			slidesPerView: 3,
			spaceBetween: 20,
		},
		992: {
			slidesPerView: 4,
			spaceBetween: 30,
		},
		1200: {
			slidesPerView: 5,
			spaceBetween: 30,
		},
	}
  });
  var swiper = new Swiper('.swiper-they-write-about-us', {
	slidesPerView: 1,
	spaceBetween: 30,
	autoplay: {
		delay: 6000,
		disableOnInteraction: false,
	},
	loop: true,
	pagination: {
	  el: '.swiper-they-write-about-us-pagination',
	  type: 'fraction',
	},
	navigation: {
	  nextEl: '.swiper-they-write-about-us-button-next',
	  prevEl: '.swiper-they-write-about-us-button-prev',
	},
  });