$(function() {
		function scroll() {
			$(".clouds img")
				.animate({marginLeft: "-850px"}, 20000)
				.animate({marginLeft: "330px"}, 1, scroll);
			}
			scroll();
		});
	

	$(window).load(function() {
		$("#load").addClass("hide");
		$("#mainDoorcontainer").addClass("show");
		$(".lft-door").delay(200).animate({left: "-157px"}, 1500);
		$(".rgt-door").delay(200).animate({left: "157px"}, 1500);
		$(".frame").delay(1500).animate({display: "block"}, 1500);
		$(".ad").delay(1500).animate({
			marginLeft: "0",
			marginRight: "0",
			fontSize: "14px",
			opacity: "1"
		}, 1500);
		$(".adimg").delay(1500).animate({
			width: "163px"
		}, 1500);
	});

// Ads
var slide_seconds = 5;
var slide_current1 = 0;
var slide_current2 = 0;
var slide_current3 = 0;
var slide_current4 = 0;

function slide_select1(slide1){
	var slide_speed = 200;

	if ( $("#top-left-"+slide1).is(":hidden")) {
		// Slide all left
		$("#top-left-0").slideUp(slide_speed);
		$("#top-left-1").slideUp(slide_speed);
		$("#top-left-2").slideUp(slide_speed);
		$("#top-left-3").slideUp(slide_speed);

		//slide right selected
		$("#top-left-"+slide1).slideDown(slide_speed);
	} 
	else {
		//slide right selected
		$("#top-left-"+slide1).slideDown(slide_speed);
	}

	slide_current1 = slide1;
}

function slide_select_next1 () {
	if (slide_current1 == 3)
		slide_select1(0);
	else
		slide_select1(slide_current1 + 1);

	setTimeout('slide_select_next1()', slide_seconds * 1000);
}

function slide_select2(slide2){
	var slide_speed = 200;

	if ( $("#top-right-"+slide2).is(":hidden")) {
		// Slide all left
		$("#top-right-0").slideUp(slide_speed);
		$("#top-right-1").slideUp(slide_speed);
		$("#top-right-2").slideUp(slide_speed);
		$("#top-right-3").slideUp(slide_speed);

		//slide right selected
		$("#top-right-"+slide2).slideDown(slide_speed);
	} 
	else {
		//slide right selected
		$("#top-right-"+slide2).slideDown(slide_speed);
	}

	slide_current2 = slide2;
}

function slide_select_next2 () {
	if (slide_current2 == 3)
		slide_select2(0);
	else
		slide_select2(slide_current2 + 1);

	setTimeout('slide_select_next2()', slide_seconds * 1000);
}

function slide_select3(slide3){
	var slide_speed = 200;

	if ( $("#bottom-left-"+slide3).is(":hidden")) {
		// Slide all left
		$("#bottom-left-0").slideUp(slide_speed);
		$("#bottom-left-1").slideUp(slide_speed);
		$("#bottom-left-2").slideUp(slide_speed);
		$("#bottom-left-3").slideUp(slide_speed);

		//slide right selected
		$("#bottom-left-"+slide3).slideDown(slide_speed);
	} 
	else {
		//slide right selected
		$("#bottom-left-"+slide3).slideDown(slide_speed);
	}

	slide_current3 = slide3;
}

function slide_select_next3 () {
	if (slide_current3 == 3)
		slide_select3(0);
	else
		slide_select3(slide_current3 + 1);

	setTimeout('slide_select_next3()', slide_seconds * 1000);
}

function slide_select4(slide4){
	var slide_speed = 200;

	if ( $("#bottom-right-"+slide4).is(":hidden")) {
		// Slide all left
		$("#bottom-right-0").slideUp(slide_speed);
		$("#bottom-right-1").slideUp(slide_speed);
		$("#bottom-right-2").slideUp(slide_speed);
		$("#bottom-right-3").slideUp(slide_speed);

		//slide right selected
		$("#bottom-right-"+slide4).slideDown(slide_speed);
	} 
	else {
		//slide right selected
		$("#bottom-right-"+slide4).slideDown(slide_speed);
	}

	slide_current4 = slide4;
}

function slide_select_next4 () {
	if (slide_current4 == 3)
		slide_select4(0);
	else
		slide_select4(slide_current4 + 1);

	setTimeout('slide_select_next4()', slide_seconds * 1000);
}