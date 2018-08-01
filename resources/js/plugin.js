//$(document).ready(function() {
//	$('.carousel').carousel({
//		interval:5000
//		});
//
//});
/* smooth scroll function*/
$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 800, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});

/*
google map 
*/
//function initialize() {
//        var mapCanvas = document.getElementById('map-canvas');
//        var mapOptions = {
//          center: new google.maps.LatLng(30.368560, 30.511697),
//          zoom: 16,
//          mapTypeId: google.maps.MapTypeId.ROADMAP
//        }
//        var map = new google.maps.Map(mapCanvas, mapOptions)
//      }
//      google.maps.event.addDomListener(window, 'load', initialize);
//
//
//function closepopmap (id)
//{
//	var mappic = document.getElementById(id);
//	mappic.style.display="none";
//	}
//
//function showpopmap(id){
//	var mappic = document.getElementById(id);
//	mappic.style.display="block";
//	}









