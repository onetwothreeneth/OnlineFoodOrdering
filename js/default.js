$(function(){
	$('.prod-contents .item').hover(function(){
		$(this).find('.overlay').fadeIn();
		$(this).find('img').css({'opacity': '0.11'});
	}); 
	$('.prod-contents .item').mouseleave(function(){
		$(this).find('.overlay').slideUp(); 
		$(this).find('img').css({'opacity': '1'});   
	});


	$('.prod-content .item').hover(function(){ 
		$(this).find('.overlay').fadeIn();
		$(this).find('img').css({'opacity': '0.05'});
		$(this).find('p').css({'opacity': '0.05'}); 
	}); 
	$('.prod-content .item').mouseleave(function(){
		$(this).find('.overlay').hide();
		$(this).find('img').css({'opacity': '1'},"slow");  
		$(this).find('p').css({'opacity': '1'},"slow");  
	});
	
	$('#signupbtn2').click(function(){
		$('.login-modal .login').hide();
		$('.login-modal .signup').fadeIn(); 
	});
	$('#loginbtn2').click(function(){
		$('.login-modal .signup').hide();
		$('.login-modal .login').fadeIn(); 
	});

	$('#loginmodal').click(function(){
		$('.login-modal').show();
		$('body .container').css({'opacity': '0.3'}); 
	});
	$('.login #close').click(function(){
		$('.login-modal').slideUp('fast');
		$('body .container').css({'opacity': '1'},"slow"); 
	});
	$('.signup #close').click(function(){
		$('.login-modal').slideUp('fast');
		$('body .container').css({'opacity': '1'},"slow"); 
	});
	$('body').unload(function(){
	    $('body').html();
	    $('html body').css({'background-color':':black'});
	    alert('asd');
	});








	//category visitor

	$('#All').click(function(){
		$(this).addClass('active');
		$('#Sisig').removeClass('active');
		$('#Main-Meals').removeClass('active');
		$('#For-Kids').removeClass('active');
		$('#Desserts').removeClass('active');
		$('#Drinks').removeClass('active');
		$('#Extras').removeClass('active');
  
			$('.prod-content').find('#Sisig').fadeIn();
			$('.prod-content').find('#Main-Meals').fadeIn();
			$('.prod-content').find('#For-Kids').fadeIn();
			$('.prod-content').find('#Desserts').fadeIn();
			$('.prod-content').find('#Drinks').fadeIn();
			$('.prod-content').find('#Extras').fadeIn(); 
	});
	
	$('#Sisig').click(function(){
		$(this).addClass('active');
		$('#All').removeClass('active');
		$('#Main-Meals').removeClass('active');
		$('#For-Kids').removeClass('active');
		$('#Desserts').removeClass('active');
		$('#Drinks').removeClass('active');
		$('#Extras').removeClass('active');
	 
			$('.prod-content').find('#Sisig').fadeIn("slow");
			$('.prod-content').find('#Main-Meals').hide();
			$('.prod-content').find('#For-Kids').hide();
			$('.prod-content').find('#Desserts').hide();
			$('.prod-content').find('#Drinks').hide();
			$('.prod-content').find('#Extras').hide();

	});

	
	$('#Main-Meals').click(function(){
		$(this).addClass('active');
		$('#All').removeClass('active');
		$('#Sisig').removeClass('active');
		$('#For-Kids').removeClass('active');
		$('#Desserts').removeClass('active');
		$('#Drinks').removeClass('active');
		$('#Extras').removeClass('active');
	 
			$('.prod-content').find('#Sisig').hide();
			$('.prod-content').find('#Main-Meals').fadeIn("slow");
			$('.prod-content').find('#For-Kids').hide();
			$('.prod-content').find('#Desserts').hide();
			$('.prod-content').find('#Drinks').hide();
			$('.prod-content').find('#Extras').hide();

	});

	
	$('#For-Kids').click(function(){
		$(this).addClass('active');
		$('#All').removeClass('active');
		$('#Sisig').removeClass('active');
		$('#Main-Meals').removeClass('active');
		$('#Desserts').removeClass('active');
		$('#Drinks').removeClass('active');
		$('#Extras').removeClass('active');
	 
			$('.prod-content').find('#Sisig').hide();
			$('.prod-content').find('#Main-Meals').hide();
			$('.prod-content').find('#For-Kids').fadeIn("slow");
			$('.prod-content').find('#Desserts').hide();
			$('.prod-content').find('#Drinks').hide();
			$('.prod-content').find('#Extras').hide();

	});

	
	$('#Desserts').click(function(){
		$(this).addClass('active');
		$('#All').removeClass('active');
		$('#Sisig').removeClass('active');
		$('#Main-Meals').removeClass('active');
		$('#For-Kids').removeClass('active');
		$('#Drinks').removeClass('active');
		$('#Extras').removeClass('active');
	 
			$('.prod-content').find('#Sisig').hide();
			$('.prod-content').find('#Main-Meals').hide();
			$('.prod-content').find('#For-Kids').hide();
			$('.prod-content').find('#Desserts').fadeIn("slow");
			$('.prod-content').find('#Drinks').hide();
			$('.prod-content').find('#Extras').hide();

	});

	
	$('#Drinks').click(function(){
		$(this).addClass('active');
		$('#All').removeClass('active');
		$('#Sisig').removeClass('active');
		$('#Main-Meals').removeClass('active');
		$('#For-Kids').removeClass('active');
		$('#Desserts').removeClass('active');
		$('#Extras').removeClass('active');
	 
			$('.prod-content').find('#Sisig').hide();
			$('.prod-content').find('#Main-Meals').hide();
			$('.prod-content').find('#For-Kids').hide();
			$('.prod-content').find('#Desserts').hide();
			$('.prod-content').find('#Drinks').fadeIn("slow");
			$('.prod-content').find('#Extras').hide(); 

	});

	
	$('#Extras').click(function(){
		$(this).addClass('active');
		$('#All').removeClass('active');
		$('#Sisig').removeClass('active');
		$('#Main-Meals').removeClass('active');
		$('#For-Kids').removeClass('active');
		$('#Desserts').removeClass('active');
		$('#Drinks').removeClass('active');
	 
			$('.prod-content').find('#Sisig').hide();
			$('.prod-content').find('#Main-Meals').hide();
			$('.prod-content').find('#For-Kids').hide();
			$('.prod-content').find('#Desserts').hide();
			$('.prod-content').find('#Drinks').hide();
			$('.prod-content').find('#Extras').fadeIn("slow");

	});



	 

  
});


$('#searchr').keypress(function(e) {
    if(e.which == 13) {
        var s = $(this).val();
        document.location.href = 'search.php?q='+s;
    }
});

$('#searchv').keypress(function(e) {
    if(e.which == 13) {
        var s = $(this).val();
        document.location.href = 'find.php?q='+s;
    }
});