$(document).ready(function() {


/*==============o
|	Variables	|
o==============*/

	var header = 		$('.header'),

		navMobile = 	$('.nav_mobile'),

		navMobileBtn = 	$('.nav_mobile_btn'),
		navMobileIcon = $('.nav_mobile_icon'),
		navMobileIconBefore = $('.nav_mobile_icon:before'),
		navMobileIconAfter = $('.nav_mobile_icon:after');




/*======================o
|	Mobile Navigation	|
o======================*/

	navMobileBtn.click(function() {toggleMobileNav()});


	function toggleMobileNav() {

		if (navMobile.height() != 0) {	navMobile.animate({'height' : '0'}, 10);	}
		else {	navMobile.animate({ 	'height' : navMobile.get(0).scrollHeight}, 10 );	}
		menuButtonTransform();
	}

	function menuButtonTransform() {
		
		if(navMobileIcon.height() != 0) {	navMobileIcon.addClass('pop');	} 
		else {	navMobileIcon.removeClass('pop');	}
	}

	function hideMobileNav() {		navMobile.animate({'height' : '0'}, 10) 	}


/*==========================o
|	Box Container Resizing	|
o==========================*/

	



})