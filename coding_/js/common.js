$(function(){
	var window_w = $(window).width();
	var window_h = $(window).height();

	var $check = $(location).attr('href');
  console.log($check);


	if (window_w > 569) {
		//View on PC function
		$(document).ready(function(){
	 	 $('#bxslider').bxSlider();
	 	 $('.slick').slick();
		});
		//未完処理
		//var url = $(location).attr('href');
		//$('#nav li a').each(function(){
    //  var $href = $(this).attr('href');
    //  if(url.match($href)) {
    //  	$(this).addClass('active');
    //  } else {
    //  	$(this).removeClass('active');
    //  }
    //});


	} else if(window_w < 568) {
		//View on SP function
		//sidr-right
		$(document).ready(function() {
	    $('.btn').sidr({
	      name: 'sidr-right',
	      side: 'right',
	      speed:500,
	      displace: false
	    });
	  });
		//SP menu height
		var WrapperHeight = $('#wrapper').height();
		var NavHeight = WrapperHeight - 50;
		$(window).load(function () {
	    $("#nav .inner").css("height", NavHeight+"px")
		});

		//SP menu btn
		//$(window).load(function(){
		//	$(".btn").click(function(){
		//		$("#sidr-right").css("height",window_h+"px");
		//		if ($("#wrapper").hasClass("no-active")) {
		//			$("#wrapper").addClass("active").removeClass("no-active");
		//			$("")
		//		} else if ($("#wrapper").hasClass("active")) {
		//			$("#wrapper").removeClass("active").addClass('no-active');
		//		};;
		//	});
		//});
		//pagetop
		$(".pagetop").click(function () {
			$("html,body").animate({ scrollTop: 0 }, "slow");
			return false;
		});
	};
});