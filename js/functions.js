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
	

	$('#button').click(function(){

		var username = $('#username').val();
		var url = 'https://api.github.com/users/'+username;

		  $.ajax({
	    url: url,
	    success: awesome,
	    error: fail
	  		});

	});

});

function awesome(response) {
	console.log(response);
	

      	$('#display-1').html('');
      	$('#display-2').html('');
		var fullname = response.name;
		var aviurl     = response.avatar_url;
		var followers = response.followers;
		var following = response.following;
		var profileurl = response.url;
		$h2 = $('<h2>');
		$($h2).html("Full name : " + fullname);
		$text1 = $('<h4>');
		$text2 = $('<h4>');
	    $($text1).html("Github followers are : " + followers + " And " + fullname + " is following "+ following + " members ");
	    $($text2).html("Github url :"+ profileurl);
	    $article = $('<article>');
	    $($article).append($h2);
	    $($article).append($text1);
	    $($article).append($text2);
		 $('#display-2').append($article);
		 $("#display-1").html('<p>Profile Image</p>');
		 $('#display-1').prepend('<img id="theImg" src="'+aviurl+'" width="160" height="160"/>');
    
	

}

function fail() {
  console.log('Error'); 
 }


