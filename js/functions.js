console.log('yay its working');
$(document).ready(function(){
	$(window).scroll(function() {
		if ($(this).scrollTop() > 1){  
		    $('.main-navigation').addClass("sticky");
		  }
		  else{
		    $('.main-navigation').removeClass("sticky");
		  }
		});



		$('#primary-menu').slicknav();




});



