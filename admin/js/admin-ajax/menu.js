$(function(){

        		$('.content').load('../php/admin/category/notifications.php');

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_products').find('.icon').removeClass('active');
            $('#a_products').find('.name').removeClass('active2');
            $('#a_orders').find('.icon').removeClass('active');
            $('#a_orders').find('.name').removeClass('active2');
            $('#a_sales').find('.icon').removeClass('active');
            $('#a_sales').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_accounts').find('.icon').removeClass('active');
            $('#a_accounts').find('.name').removeClass('active2');


            		$('.add_products').fadeOut("fast",function(){
            				$('.container').animate({'opacity': '1'});
            				$('.content').css({'opacity': '1'});
            				$('.sidebar').css({'opacity': '1'});
            				$('.header').css({'opacity': '1'});
            		});
            		$('.popup').fadeOut("fast",function(){
            		  	$('.container').animate({'opacity': '1'});
            			  $('.content').css({'opacity': '1'});
            		  	$('.sidebar').css({'opacity': '1'});
            		  	$('.header').css({'opacity': '1'});
            		});
            		$('.add_products2').fadeOut("fast",function(){
            				$('.container').animate({'opacity': '1'});
            				$('.content').css({'opacity': '1'});
            				$('.sidebar').css({'opacity': '1'});
            				$('.header').css({'opacity': '1'});
            		});

    $('#a_notifications').click(function(){

      			//$('.content').load('../php/admin/category/notifications.php');
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').fadeIn('slow',function(){
                    $('.content').load('../php/admin/category/notifications.php');
                });
            });

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_products').find('.icon').removeClass('active');
            $('#a_products').find('.name').removeClass('active2');
            $('#a_orders').find('.icon').removeClass('active');
            $('#a_orders').find('.name').removeClass('active2');
            $('#a_sales').find('.icon').removeClass('active');
            $('#a_sales').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_accounts').find('.icon').removeClass('active');
            $('#a_accounts').find('.name').removeClass('active2');


            		$('.add_products').fadeOut("fast",function(){
            				$('.container').animate({'opacity': '1'});
            				$('.content').css({'opacity': '1'});
            				$('.sidebar').css({'opacity': '1'});
            				$('.header').css({'opacity': '1'});
            		});
            		$('.popup').fadeOut("fast",function(){
            		  	$('.container').animate({'opacity': '1'});
            			  $('.content').css({'opacity': '1'});
            		  	$('.sidebar').css({'opacity': '1'});
            		  	$('.header').css({'opacity': '1'});
            		});
            		$('.add_products2').fadeOut("fast",function(){
            				$('.container').animate({'opacity': '1'});
            				$('.content').css({'opacity': '1'});
            				$('.sidebar').css({'opacity': '1'});
            				$('.header').css({'opacity': '1'});
            		});

    });
    $('#a_products').click(function(){
            //$('.content').load('../php/admin/category/products.php
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                        $('.content').load('../php/admin/category/products.php');
                    });
            });

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_notifications').find('.icon').removeClass('active');
            $('#a_notifications').find('.name').removeClass('active2');
            $('#a_orders').find('.icon').removeClass('active');
            $('#a_orders').find('.name').removeClass('active2');
            $('#a_sales').find('.icon').removeClass('active');
            $('#a_sales').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_accounts').find('.icon').removeClass('active');
            $('#a_accounts').find('.name').removeClass('active2');


            		$('.add_products').fadeOut("fast",function(){
            				$('.container').animate({'opacity': '1'});
            				$('.content').css({'opacity': '1'});
            				$('.sidebar').css({'opacity': '1'});
            				$('.header').css({'opacity': '1'});
            		});
            		$('.popup').fadeOut("fast",function(){
            		  	$('.container').animate({'opacity': '1'});
            			  $('.content').css({'opacity': '1'});
            		  	$('.sidebar').css({'opacity': '1'});
            		  	$('.header').css({'opacity': '1'});
            		});
            		$('.add_products2').fadeOut("fast",function(){
            				$('.container').animate({'opacity': '1'});
            				$('.content').css({'opacity': '1'});
            				$('.sidebar').css({'opacity': '1'});
            				$('.header').css({'opacity': '1'});
            		});

    });
    $('#a_orders').click(function(){
      			$('.content').load('../php/admin/category/orders.php');

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_products').find('.icon').removeClass('active');
            $('#a_products').find('.name').removeClass('active2');
            $('#a_notifications').find('.icon').removeClass('active');
            $('#a_notifications').find('.name').removeClass('active2');
            $('#a_sales').find('.icon').removeClass('active');
            $('#a_sales').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_accounts').find('.icon').removeClass('active');
            $('#a_accounts').find('.name').removeClass('active2');


            		$('.add_products').fadeOut("fast",function(){
            				$('.container').animate({'opacity': '1'});
            				$('.content').css({'opacity': '1'});
            				$('.sidebar').css({'opacity': '1'});
            				$('.header').css({'opacity': '1'});
            		});
            		$('.popup').fadeOut("fast",function(){
            		  	$('.container').animate({'opacity': '1'});
            			  $('.content').css({'opacity': '1'});
            		  	$('.sidebar').css({'opacity': '1'});
            		  	$('.header').css({'opacity': '1'});
            		});
            		$('.add_products2').fadeOut("fast",function(){
            				$('.container').animate({'opacity': '1'});
            				$('.content').css({'opacity': '1'});
            				$('.sidebar').css({'opacity': '1'});
            				$('.header').css({'opacity': '1'});
            		});

    });
    $('#a_sales').click(function(){
      			$('.content').load('../php/admin/category/sales.php');

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_notifications').find('.icon').removeClass('active');
            $('#a_notifications').find('.name').removeClass('active2');
            $('#a_orders').find('.icon').removeClass('active');
            $('#a_orders').find('.name').removeClass('active2');
            $('#a_products').find('.icon').removeClass('active');
            $('#a_products').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_accounts').find('.icon').removeClass('active');
            $('#a_accounts').find('.name').removeClass('active2');


            		$('.add_products').fadeOut("fast",function(){
            				$('.container').animate({'opacity': '1'});
            				$('.content').css({'opacity': '1'});
            				$('.sidebar').css({'opacity': '1'});
            				$('.header').css({'opacity': '1'});
            		});
            		$('.popup').fadeOut("fast",function(){
            		  	$('.container').animate({'opacity': '1'});
            			  $('.content').css({'opacity': '1'});
            		  	$('.sidebar').css({'opacity': '1'});
            		  	$('.header').css({'opacity': '1'});
            		});
            		$('.add_products2').fadeOut("fast",function(){
            				$('.container').animate({'opacity': '1'});
            				$('.content').css({'opacity': '1'});
            				$('.sidebar').css({'opacity': '1'});
            				$('.header').css({'opacity': '1'});
            		});

    });
    $('#a_messages').click(function(){
            $('.content').load('../php/admin/category/messages.php');

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_notifications').find('.icon').removeClass('active');
            $('#a_notifications').find('.name').removeClass('active2');
            $('#a_orders').find('.icon').removeClass('active');
            $('#a_orders').find('.name').removeClass('active2');
            $('#a_sales').find('.icon').removeClass('active');
            $('#a_sales').find('.name').removeClass('active2');
            $('#a_products').find('.icon').removeClass('active');
            $('#a_products').find('.name').removeClass('active2');
            $('#a_accounts').find('.icon').removeClass('active');
            $('#a_accounts').find('.name').removeClass('active2');


            		$('.add_products').fadeOut("fast",function(){
            				$('.container').animate({'opacity': '1'});
            				$('.content').css({'opacity': '1'});
            				$('.sidebar').css({'opacity': '1'});
            				$('.header').css({'opacity': '1'});
            		});
            		$('.popup').fadeOut("fast",function(){
            		  	$('.container').animate({'opacity': '1'});
            			  $('.content').css({'opacity': '1'});
            		  	$('.sidebar').css({'opacity': '1'});
            		  	$('.header').css({'opacity': '1'});
            		});
            		$('.add_products2').fadeOut("fast",function(){
            				$('.container').animate({'opacity': '1'});
            				$('.content').css({'opacity': '1'});
            				$('.sidebar').css({'opacity': '1'});
            				$('.header').css({'opacity': '1'});
            		});

    });
    $('#a_accounts').click(function(){
      			$('.content').load('../php/admin/category/accounts.php');

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_notifications').find('.icon').removeClass('active');
            $('#a_notifications').find('.name').removeClass('active2');
            $('#a_orders').find('.icon').removeClass('active');
            $('#a_orders').find('.name').removeClass('active2');
            $('#a_sales').find('.icon').removeClass('active');
            $('#a_sales').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_products').find('.icon').removeClass('active');
            $('#a_products').find('.name').removeClass('active2');


            		$('.add_products').fadeOut("fast",function(){
            				$('.container').animate({'opacity': '1'});
            				$('.content').css({'opacity': '1'});
            				$('.sidebar').css({'opacity': '1'});
            				$('.header').css({'opacity': '1'});
            		});
            		$('.popup').fadeOut("fast",function(){
            		  	$('.container').animate({'opacity': '1'});
            			  $('.content').css({'opacity': '1'});
            		  	$('.sidebar').css({'opacity': '1'});
            		  	$('.header').css({'opacity': '1'});
            		});
            		$('.add_products2').fadeOut("fast",function(){
            				$('.container').animate({'opacity': '1'});
            				$('.content').css({'opacity': '1'});
            				$('.sidebar').css({'opacity': '1'});
            				$('.header').css({'opacity': '1'});
            		});

    });


});
