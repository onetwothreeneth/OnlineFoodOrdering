$(function(){ 
 	$('#userlogin').ajaxForm(function(data) { 
        if(data>0){
	 		$('.login-modal #loader').fadeIn();
	 		$('.login-modal .login').hide();
	 		$('.login-modal .signup').hide();
	 		setTimeout(function(){
        		document.location.href= "user";
	 		},2000);
        } else {
	 		$('.login-modal #loader').fadeIn();
	 		$('.login-modal .login').hide();
	 		$('.login-modal .signup').hide();
	 		setTimeout(function(){
		 		$('.login-modal #loader').hide();
		 		$('.login-modal .login').show();
		 		$('.login-modal .login').find('small').hide();
		 		$('.login-modal .login').prepend('<center><small style="color:red;">Nome errado ou senha</small></center>');
		 		$('.login-modal .login input').val('');
		 		$('.login-modal .signup').hide(); 
	 		},2000);
        }
    }); 

    $('#signupsubmit').ajaxForm(function(data) { 
        if(data<=0){
	 		$('.login-modal #loader').fadeIn();
	 		$('.login-modal .login').hide();
	 		$('.login-modal .signup').hide();
	 		setTimeout(function(){
		 		$('.login-modal #loader').hide();
		 		$('.login-modal .login').hide();
		 		$('.login-modal .signup').find('small').hide();
		 		$('.login-modal .signup').html('<center><small style="color:red;">Você pode entrar agora</small></center>');
		 		$('.login-modal .signup input').val('');
		 		$('.login-modal .signup textarea').val('');	
		 		$('.login-modal .signup').show(); 
		 		setTimeout(function(){
		 			document.location.href = 'index';
		 		},1000);
	 		},2000);
        }else if(data='pass'){
	 		$('.login-modal #loader').fadeIn();
	 		$('.login-modal .login').hide();
	 		$('.login-modal .signup').hide();
	 		setTimeout(function(){
		 		$('.login-modal #loader').hide();
		 		$('.login-modal .login').hide();
		 		$('.login-modal .signup').find('small').hide();
		 		$('.login-modal .signup').prepend('<center><small style="color:red;">Você foi cadastrado</small></center>');
		 		$('.login-modal .signup input').val('');
		 		$('.login-modal .signup textarea').val('');	
		 		$('.login-modal .signup').show(); 
	 		},2000);
        }else if(data='symbol'){
	 		$('.login-modal #loader').fadeIn();
	 		$('.login-modal .login').hide();
	 		$('.login-modal .signup').hide();
	 		setTimeout(function(){
		 		$('.login-modal #loader').hide();
		 		$('.login-modal .login').hide();
		 		$('.login-modal .signup').find('small').hide();
		 		$('.login-modal .signup').prepend('<center><small style="color:red;">No symbols allowed</small></center>');
		 		$('.login-modal .signup input').val('');
		 		$('.login-modal .signup textarea').val('');
		 		$('.login-modal .signup').show(); 
	 		},2000);
        }else if(data='error'){
	 		$('.login-modal #loader').fadeIn();
	 		$('.login-modal .login').hide();
	 		$('.login-modal .signup').hide();
	 		setTimeout(function(){
		 		$('.login-modal #loader').hide();
		 		$('.login-modal .login').hide();
		 		$('.login-modal .signup').find('small').hide();
		 		$('.login-modal .signup').prepend('<center><small style="color:red;">Something Went Wrong</small></center>');
		 		$('.login-modal .signup input').val('');
		 		$('.login-modal .signup textarea').val('');
		 		$('.login-modal .signup').show(); 
	 		},2000);
        }
    }); 

	//push Notif
    $('.overlay #addtocart').click(function(data){
    	$('#notif').hide();
    	var prodid = $(this).attr('alt');
    	var qty = $(this).siblings('#qty').val(); 
    	$.post('php/addtocart.php',{ qty: qty , prodid: prodid },function(data){
    		if(data>=1){
    			$('#notif').fadeIn();
    			$('#notif').html('Produto adicionado ao carrinho'); 
    			setTimeout(function(){
    				$('#notif').fadeOut();
    			},2000);
    		} else {
    			alert('Ocorreu um erro !');
    		}
    	});

    });


});	


	// when esc is clicked
	$(document).keyup(function(e) {
	if (e.keyCode == 27) {
			$('.login-modal').slideUp('fast');
			$('body .container').css({'opacity': '1'},"slow");  
	 		$('.login-modal #loader').hide();
	 		$('.login-modal .login').show();
	 		$('.login-modal .signup').hide();
		 
	}
	});
   