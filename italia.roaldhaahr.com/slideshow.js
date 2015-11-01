$(document).ready(function() {
	var images = new Array();
	images[0] = 'images/home1.gif';
	images[1] = 'images/home2.gif';
	images[2] = 'images/home3.gif';
	images[3] = 'images/home4.gif';
	
	var links = new Array();
	links[0] = 'pizzaPasta';
	links[1] = 'steak';
	links[2] = 'pizzaPasta';
	links[3] = 'redWine';

	$('#slideshow').css({backgroundImage: "url(" + images[0] + ")"});
	$('#slide-link').attr('href', links[0]);

	var i = 1;

	setInterval(function() {

		//$('#slideshow').html('<a class="lightbox-trigger" href="' + links[i] + '">' +
		//	'<img src="' + images[i] +'" alt="" /></a>');

		$('#slide-link').attr('href', links[i]);
		$('#slideshow').css({backgroundImage: "url(" + images[i] + ")"});

		if(i == 3) {
			i = 0;
		} else {
			i = i + 1;
		}

	}, 6700);
		
});