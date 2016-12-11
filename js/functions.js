console.log('yay its working');
$(document).ready(function(){
	$(window).scroll(function(scroll) {
		console.log(scroll);
		if ($(this).scrollTop() > 1){  
		    $('.main-navigation').addClass("sticky");
		  }
		  else{
		    $('.main-navigation').removeClass("sticky");
		  }
		});

});
