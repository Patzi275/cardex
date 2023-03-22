$(document).ready(function () {
	"use strict"; // start of use strict

	/*==============================
	Header
	==============================*/
	$(window).on('scroll', function () {
		if ( $(window).scrollTop() > 0 ) {
			$('.header').addClass('header--active');
		} else {
			$('.header').removeClass('header--active');
		}
	});
	$(window).trigger('scroll');

	/*==============================
	Menu
	==============================*/
	$('.header__btn').on('click', function() {
		$(this).toggleClass('header__btn--active');
		$('.header__menu').toggleClass('header__menu--active');
	});

	/*==============================
	Multi level dropdowns
	==============================*/
	$('ul.dropdown-menu [data-toggle="dropdown"]').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();

		$(this).siblings().toggleClass('show');
	});

	$(document).on('click', function (e) {
		$('.dropdown-menu').removeClass('show');
	});

	/*==============================
	Favorite
	==============================*/
	$('.offer__favorite').on('click', function() {
		$(this).toggleClass('offer__favorite--active');
	});

	$('.car__favorite').on('click', function() {
		$(this).toggleClass('car__favorite--active');
	});

	/*==============================
	Carousel
	==============================*/
	if ($('.main__carousel').length) {
		var elms = document.getElementsByClassName('main__carousel');

		for ( var i = 0; i < elms.length; i++ ) {
			new Splide(elms[ i ], {
				type: 'loop',
				perPage: 1,
				drag: true,
				pagination: false,
				autoWidth: true,
				autoHeight: false,
				speed: 800,
				gap: 30,
				focus: 'center',
				arrows: false,
				breakpoints: {
					767: {
						gap: 20,
						focus: 1,
						autoHeight: true,
						pagination: true,
						arrows: false,
					},
					1199: {
						focus: 1,
						autoHeight: true,
						pagination: true,
						arrows: false,
					},
				}
			}).mount();
		}
	}

	/*==============================
	Car carousel
	==============================*/
	if ($('.car__slider').length) {
		var elms = document.getElementsByClassName('car__slider');

		for ( var i = 0; i < elms.length; i++ ) {
			new Splide(elms[ i ], {
				type: 'loop',
				drag: true,
				pagination: true,
				speed: 800,
				gap: 10,
				arrows: false,
				focus: 0,
			}).mount();
		}
	}

	/*==============================
	Details
	==============================*/
	if ($('.details__slider').length) {
		var details = new Splide('.details__slider', {
				type: 'loop',
				drag: true,
				pagination: false,
				speed: 800,
				gap: 15,
				arrows: false,
				focus: 0,
		});

		var thumbnails = document.getElementsByClassName("thumbnail");
		var current;

		for (var i = 0; i < thumbnails.length; i++) {
			initThumbnail(thumbnails[i], i);
		}

		function initThumbnail(thumbnail, index) {
			thumbnail.addEventListener("click", function () {
				details.go(index);
			});
		}

		details.on("mounted move", function () {
			var thumbnail = thumbnails[details.index];

			if (thumbnail) {
				if (current) {
					current.classList.remove("is-active");
				}

				thumbnail.classList.add("is-active");
				current = thumbnail;
			}
		});

		details.mount();
	}

	/*==============================
	Partners
	==============================*/
	if ($('#partners-slider').length) {
		var partners = new Splide('#partners-slider', {
			type: 'loop',
			perPage: 6,
			drag: true,
			pagination: false,
			speed: 800,
			gap: 30,
			focus: 1,
			arrows: false,
			autoplay: true,
			interval: 4000,
			breakpoints: {
				575: {
					gap: 20,
					perPage: 2,
				},
				767: {
					gap: 20,
					perPage: 3,
				},
				991: {
					perPage: 4,
				},
				1199: {
					perPage: 5,
				},
			}
		});
		partners.mount();
	}

	/*==============================
	Modal
	==============================*/
	$('.open-video, .open-map').magnificPopup({
		disableOn: 0,
		fixedContentPos: true,
		type: 'iframe',
		preloader: false,
		removalDelay: 300,
		mainClass: 'mfp-fade',
		callbacks: {
			open: function() {
				if ($(window).width() > 1200) {
					$('.header').css('margin-left', "-" + getScrollBarWidth() + "px");
				}
			},
			close: function() {
				if ($(window).width() > 1200) {
					$('.header').css('margin-left', 0);
				}
			}
		}
	});

	$('.open-modal').magnificPopup({
		fixedContentPos: true,
		fixedBgPos: true,
		overflowY: 'auto',
		type: 'inline',
		preloader: false,
		focus: '#username',
		modal: false,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in',
		callbacks: {
			open: function() {
				if ($(window).width() > 1200) {
					$('.header').css('margin-left', "-" + getScrollBarWidth() + "px");
				}
			},
			close: function() {
				if ($(window).width() > 1200) {
					$('.header').css('margin-left', 0);
				}
			}
		}
	});

	$('.modal__close').on('click', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});

	function getScrollBarWidth () {
		var $outer = $('<div>').css({visibility: 'hidden', width: 100, overflow: 'scroll'}).appendTo('body'),
			widthWithScroll = $('<div>').css({width: '100%'}).appendTo($outer).outerWidth();
		$outer.remove();
		return 100 - widthWithScroll;
	};

	/*==============================
	Select
	==============================*/
	$('.main__select').select2({
		minimumResultsForSearch: Infinity
	});

	/*==============================
	Scrollbar
	==============================*/
	var Scrollbar = window.Scrollbar;

	if ($('.cart__table-scroll').length) {
		Scrollbar.init(document.querySelector('.cart__table-scroll'), {
			damping: 0.1,
			renderByPixels: true,
			alwaysShowTracks: true,
			continuousScrolling: true
		});
	}

	/*==============================
	Section bg
	==============================*/
	$('.main--sign').each(function(){
		if ($(this).attr('data-bg')){
			$(this).css({
				'background': 'url(' + $(this).data('bg') + ')',
				'background-position': 'center center',
				'background-repeat': 'no-repeat',
				'background-size': 'cover'
			});
		}
	});

});