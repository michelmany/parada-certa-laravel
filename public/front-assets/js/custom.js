// JavaScript Document

'use strict';

$(document).ready(function(e) {
	
	//main slider
	if(typeof MasterSlider == 'function') {
		var main_slider = new MasterSlider();
	
		main_slider.control('arrows');		//add arrows
/*		main_slider.control('thumblist' , { autohide:true, align:"bottom", inset:true, width:150, height:75 });	//add thumbnails*/
	
		main_slider.setup('main-slider', {
			width:1200,
			height:438,
			space:0,
			layout:'fillwidth',
			speed:20,
			autoplay:true,
			overPause:false
		});
	}


	//top slider
	$('#slider-top').owlCarousel({
		items: 1,
		nav: true,
		navText: false,
		smartSpeed: 800
	});
	
	
	//project images slider
	$('#slider-projects').owlCarousel({
		items: 1,
		nav: true,
		navText: false,
		smartSpeed: 800
	});
	
	
	//in page scrolling
	var in_page_links = $('#one-page-nav a, .scroll-to, #scroll-top');
	for(var i=0, len=in_page_links.length; i<len; i++) {
		in_page_scroll(in_page_links.eq(i));
	}
	
	var scroll_top_offset = -89;	//because of fixed menu on one-page
	function in_page_scroll(el) {
		if(el.hasClass('no-scroll'))
			return;
		var scroll_anchor = el.attr('href');
		if(!scroll_anchor || scroll_anchor === "#")
			scroll_anchor = 0;
		el.on('click', function(e) {
			$.scrollTo(scroll_anchor, 800, { axis:'y', offset: scroll_top_offset });
		});
	}
	
	
	//fixed top menu position
	var navbar_fixed = $('#navbar-fixed');
	var site_top = $('#site-top');
	if(navbar_fixed.length == 1) {
		set_navbar_top();
		$(window).on('resize', function(e) {
			set_navbar_top();
		})
		.on('scroll', function(e) {
			set_navbar_top();
		});
	}
	
	function set_navbar_top() {
		var new_top = 0;
		if($(window).scrollTop() < site_top.outerHeight())
			new_top = site_top.outerHeight();
		navbar_fixed.css('top', new_top);
	}
	
	
	//show/hide search box
	var search_box_el = $('#search-box');
	$('#search-trigger').on('click', function(e) {
		e.preventDefault();
		e.stopPropagation();
		search_box_el.toggleClass('active');
	});
	
	
	//donut graphs
	var graph_donut = $('.graph-donut');
	for(var i=0, len=graph_donut.length; i<len; i++) {
		setGraphDonut(graph_donut.eq(i));
	}
	
	function setGraphDonut(graph_el) {
		var percentage = graph_el.data('percentage') / 100;
		if(percentage < 0.5) {
			graph_el.find('.graph-left .graph-inner').hide();
			graph_el.find('.graph-right .graph-inner').css('transform', 'rotate(' + (180 + 360 * percentage) + 'deg)');
		}
		else {
			graph_el.find('.graph-right .graph-inner').css('transform', 'rotate(360deg)');
			graph_el.find('.graph-left .graph-inner').css('transform', 'rotate(' + (360 * percentage) + 'deg)');
		}
	}	
	
	
	//huge icon hover handler
	var huge_icon_els = $('.huge-icon');
	for(var i=0, len=huge_icon_els.length; i<len; i++) {
		huge_icon_hover_handler(huge_icon_els.eq(i));
	}
	
	function huge_icon_hover_handler(el) {
		var hover_content = el.find('.huge-icon-hover');
		el.on('mouseenter', function(e) {
			hover_content.stop().slideDown();
		})
		.on('mouseleave', function(e) {
			hover_content.stop().slideUp();
		});
	}
	
	
	// on-scroll animations
	var on_scroll_anims = $('.onscroll-animate');
	for (var i=0, len=on_scroll_anims.length; i<len; i++) {
		var element = on_scroll_anims.eq(i);
		element.one('inview', function (event, visible) {
			var el = $(this);
			var anim = (el.data("animation") !== undefined) ? el.data("animation") : "fadeInUp";
			var delay = (el.data("delay") !== undefined ) ? el.data("delay") : 200;

			var timer = setTimeout(function() {
				el.addClass(anim);
				clearTimeout(timer);
			}, delay);
		});
	}
	
	
	//worker hover handler
	var worker_els = $('.worker');
	for(var i=0, len=worker_els.length; i<len; i++) {
		worker_hover_handler(worker_els.eq(i));
	}
	
	function worker_hover_handler(el) {
		var hover_content = el.find('.worker-over-hover');
		el.on('mouseenter', function(e) {
			hover_content.stop().slideDown();
		})
		.on('mouseleave', function(e) {
			hover_content.stop().slideUp();
		});
	}
	
	
	//testimonials slider
	$('#slider-testimonials').owlCarousel({
		items: 1,
		margin: 110,
		dotsContainer: '#slider-testimonials-dots',
		smartSpeed: 750
	});
	
	
	//workers slider
	$('#slider-workers').owlCarousel({
		margin: 30,
		smartSpeed: 750,
		nav: true,
		navText: false,
		responsive:{
			0: {
				items: 1,
			},
			768: {
				items: 2
			},
			1200: {
				items: 3
			}
		}
	});
	
	
	//contact form
	$('#form-contact').on('submit', function(e) {
		return form_to_ajax_request($(this), ['name', 'email', 'website', 'message'], ['name', 'email', 'message']);
	});
	
	
	//newsletter form
	$('#form-newsletter').on('submit', function(e) {
		return form_to_ajax_request($(this), ['email'], ['email']);
	});
	
	
	/* Google Map */
	googleMap();
	
	function googleMap() {
		var map_canvas = $('#map-canvas');
		if(map_canvas.length == 0)
			return;
		var map;
		var image = 'assets/images/map_marker.png';		// marker icon
		var myLatlng = new google.maps.LatLng(-22.89055,-43.12162);    //position of the map marker
		var center = new google.maps.LatLng(-22.89055,-43.12162);      //center of the map
		function mapInitialize() {
			var mapOptions = {
				scrollwheel: false,
				zoom: 15,
				center: center
			};
			map = new google.maps.Map(map_canvas.get(0), mapOptions);
			var marker = new google.maps.Marker({
				position: myLatlng,
				map: map,
				icon: image
			});
		}
		google.maps.event.addDomListener(window, 'load', mapInitialize);
	}
});


$(window).load(function() {
	
	//remove page loader
	$('#page-loader').removeClass('active');
	
	
	//gallery mansory and filter
	var gallery = $('#gallery');
	if(gallery.length == 1) {
		var gallery_isotope = gallery.isotope({
			itemSelector: '.gallery-item',
			masonry: {
				columnWidth: '.grid-sizer'
			}
		});
		
		//isotope filter
		var gallery_isotope_filters = $('#gallery-filter .isotope-filter');
		var active_filter = gallery_isotope_filters.filter('.active');
		if(active_filter.length == 1) {
			gallery_isotope.isotope({ filter: active_filter.data('filter') });
		}
		gallery_isotope_filters.on('click', function(e) {
			e.preventDefault();
			gallery_isotope_filters.removeClass('active');
			$(this).addClass('active');
			gallery_isotope.isotope({ filter: $(this).data('filter') });
		});
	}
	
	//parallax backgrounds
	if (!Modernizr.touch) {
		var parallax_backgrounds = $('.parallax-background');
		for (var i=0; i<parallax_backgrounds.length; i++) {
			var el = parallax_backgrounds.eq(i);
			if(!el.attr("data-stellar-background-ratio"))
				el.attr('data-stellar-background-ratio', 0.4);
		}
		
		if(typeof($.stellar) === 'function') {
			$.stellar({
				horizontalScrolling: false,
				responsive: true,
			});
		}
	}
});



//youtube video section
var video_main_player;
var video_main_el = $('#video-main');

/* Youtube video player - add API
	It's important to add the api script close to onYouTubePlayerAPIReady() function, otherwise problems might appear
*/
if(video_main_el.length == 1) {
	var tag = document.createElement('script');
	tag.src = "http://www.youtube.com/player_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
}

function onYouTubePlayerAPIReady() {
	// create the global player from the specific iframe (#video-main)
	if(video_main_el.length == 1) {
		video_main_player = new YT.Player('video-main', {
			events: {
				// call this function when player is ready to use
				'onReady': onPlayerReady
			}
		});
	}
}

function onPlayerReady() {
	$("#video-main-play").on('click', function(e) {
		e.preventDefault();
		video_main_el.addClass('active');
		video_main_player.playVideo();
	});
}




/*	
  create ajax request from form element and his fields
  messages: set as form "data" attribut - "[field name]-not-set-msg", "all-fields-required-msg", "ajax-fail-msg", "success-msg"
  form must have attributes "method" and "action" set
  "return message" and "ajax loader" are also managed - see functions below
  
  @param form_el - form element
  @param all_fields - array of names of all fields in the form element that will be send
  @param required_fields - array of names of all fields in the form element that must be set - cannot be empty
*/
function form_to_ajax_request(form_el, all_fields, required_fields) {
	var fields_values = [];
	var error = false;
	
	//get values from fields
	$.each(all_fields, function(index, value) {
		fields_values[value] = form_el.find('*[name=' + value + ']').val();
	});
	
	//check if required fields are set
	$.each(required_fields, function(index, value) {
		if(!isSet(fields_values[value])) {
			var message = form_el.data(value + '-not-set-msg');
			if(!isSet(message))
				message = form_el.data('all-fields-required-msg');
			setReturnMessage(form_el, message);
			showReturnMessage(form_el);
			error = true;
			return;
		}
	});
	if(error)
		return false;
	
	//form data query object for ajax request
	var data_query = {};
	$.each(all_fields, function(index, value) {
		data_query[value] = fields_values[value];
	});
	data_query['ajax'] = true;

	//show ajax loader
	showLoader(form_el);
	
	//send the request
	$.ajax({
		type: form_el.attr('method'),
		url: form_el.attr('action'),
		data: data_query,
		cache: false,
		dataType: "text"
	})
	.fail(function() {		//request failed
		setReturnMessage(form_el, form_el.data('ajax-fail-msg'));
		showReturnMessage(form_el);
	})
	.done(function(message) {		//request succeeded
		if(!isSet(message)) {
			clearForm(form_el);
			setReturnMessage(form_el, form_el.data('success-msg'));
			showReturnMessage(form_el);
		}
		else {
			setReturnMessage(form_el, message);
			showReturnMessage(form_el);
		}
	});
	
	//hide ajax loader
	hideLoader(form_el);
	
	return false;
}

function isSet(variable) {
	if(variable == "" || typeof(variable) == 'undefined')
		return false;
	return true;
}

function clearForm(form_el) {
	form_el.find('input[type=text], input[type=email], input[type=password]').val('');
	form_el.find('input[type=checkbox]').prop('checked', false);
	form_el.find('textarea').val('');
}

function showLoader(form_el) {
	form_el.find('.ajax-loader').fadeIn('fast');
}

function hideLoader(form_el) {
	form_el.find('.ajax-loader').fadeOut('fast');
}
	
function setReturnMessage(form_el, content) {
	if(!isSet(content))
		content = "Unspecified message.";
	form_el.find('.return-msg').html(content);
}

function showReturnMessage(form_el) {
	form_el.find('.return-msg').addClass('show-return-msg');
}

$('.return-msg').on('click', function(e) {
	$(this).removeClass('show-return-msg');
});

//placeholder fallback for old browsers
if ( !("placeholder" in document.createElement("input")) ) {
    $("input[placeholder], textarea[placeholder]").each(function() {
	    var val = $(this).attr("placeholder");
        if ( this.value == "" ) {
    	    this.value = val;
        }
        $(this).focus(function() {
        	if ( this.value == val ) {
            	this.value = "";
            }
       	}).blur(function() {
        	if ( $.trim(this.value) == "" ) {
            	this.value = val;
            }
        })
  	});
 
    // Clear default placeholder values on form submit
    $('form').submit(function() {
    	$(this).find("input[placeholder], textarea[placeholder]").each(function() {
        	if ( this.value == $(this).attr("placeholder") ) {
            	this.value = "";
            }
        });
    });
}


// set li menu active on clic
jQuery(function ($) {
	$("ul#menu-side-cat-a a")
		.click(function(e) {
			var link = $(this);

			var item = link.parent("li");

			if (item.hasClass("active")) {
				item.removeClass("active").children("a").removeClass("active");
			} else {
				item.addClass("active").children("a").addClass("active");
			}

			if (item.children("ul").length > 0) {
				var href = link.attr("href");
				link.attr("href", "#");
				setTimeout(function () {
					link.attr("href", href);
				}, 300);
				e.preventDefault();
			}
		})
		.each(function() {
			var link = $(this);
			if (link.get(0).href === location.href) {
				link.addClass("active").parents("li").addClass("active");
				return false;
			}
		});
});

// word rotator (MORPHEXT)
$(".js-rotating").Morphext({
	// The [in] animation type. Refer to Animate.css for a list of available animations.
	animation: "bounceIn",
	// An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
	separator: "|",
	// The delay between the changing of each phrase in milliseconds.
	speed: 2000,
	complete: function () {
		// Called after the entrance animation is executed.
	}
});