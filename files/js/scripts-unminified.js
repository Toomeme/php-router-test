//http://bootbites.com/tutorials/how-make-bootstrap-3-4-dropdowns-show-hover-desktop-only
/* -------------------------------------------------------------------
Side menu
------------------------------------------------------------------- */
$(document).ready(function () {
	$('#side-nav .dropdown').on({
		"shown.bs.dropdown": function () {
			$(this).attr('closable', false);
		},
		"click": function () {},
		"hide.bs.dropdown": function () {
			return $(this).attr('closable') == 'true';
		}
	});

	$('#side-nav .navbar-toggle').on({
		"click": function () {
			$(this).parent().attr('closable', true);
		}
	})

	$('#side-nav .dropdown-toggle').on({
		"click": function () {
			$(this).parent().attr('closable', true);
		}
	})

	// get the full URL at the address bar
	var url = window.location.href;
	var dir = url.substring(0, url.lastIndexOf('/') + 1);

	//find each matched a 
	$('#side-nav a').each(function () {

		//match height of +/- button
		if ($(this).hasClass('dropdown-link')) {
			var setHeight = $(this).outerHeight();
			$(this).closest('.dropdown').find('.dropdown-caret').outerHeight(setHeight);
		}

		// checks if link id the same on the address bar and if so add class active to link
		if (this.href === url || this.href === dir) {
			$(this).addClass('active');

			if ($(this).hasClass('active')) {
				var cli = $(this).closest('li');
				var cul = $(this).closest('ul');

				//if closest li has a class of dropdown
				if (cli.hasClass('dropdown')) {
					cli.addClass('parent open'); // add these classes
					$(this).children('a').eq(1).attr('aria-expanded', 'true');


					if ($(this).children('a').eq(1).attr('aria-expanded', 'false')) {
						$(this).next('a').addClass('toggle-closed');
					}
				}

				if (cul.hasClass('dropdown-menu')) {
					cul.closest('li').addClass('parent open');
					cul.closest('li').children('a').eq(1).attr('aria-expanded', 'true');
				}
			}
		}

	});
});

/* -------------------------------------------------------------------
sticky nav 
------------------------------------------------------------------- */
$('#main-nav').affix({
	offset: {
		top: function () {
			return (this.top = $('#main-nav').offset().top)
		},
	}
});

/* -------------------------------------------------------------------
Scroll to top arrow
------------------------------------------------------------------- */
$(document).ready(function () {

	//Check to see if the window is top if not then display button
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) { // If page is scrolled more than 300px
			$('.btt').fadeIn(200); // Fade in the arrow
		} else {
			$('.btt').fadeOut(200); // Else fade out the arrow
		}
	});

	//Click event to scroll to top
	$('.btt').click(function () { // When arrow is clicked
		$('html, body').animate({
			scrollTop: 0
		}, 500); // Scroll to top of body
		return false;
	});

});

/* -------------------------------------------------------------------
glossary active page highlight
------------------------------------------------------------------- */
$(document).ready(function () {
	$(".related .panel-body a").each(function () {
		if ($(this).attr("href") == window.location.href) {
			$(this).wrap('<strong></strong>');
		}
	});
});