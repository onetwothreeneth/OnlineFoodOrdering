$(function(){

					//content
					//var height = $(window).height();
					//$('.content').css({'height': height});


					$('#burgermenu').click(function(){
						$('.sidebar').slideDown();
						var sidebar = $('#burgermenu').attr('alt');
						if(sidebar>0){
							$('.sidebar').animate({'left':'0%'});
							$(this).attr('alt', '0');
							$(this).attr('class', 'fa fa-remove');
						} else {
							$('.sidebar').animate({'left':'-100%'});
							$(this).attr('alt', '1');
							$(this).attr('class', 'fa fa-bars');
						}
					});
					$('#remove').click(function(){
						$('.container').css({'opacity': '0.1'});
						$('.popup').show();
					});
					$('.cancel').click(function(){
						$('.popup').fadeOut("fast",function(){
							$('.container').animate({'opacity': '1'});
						});
					});

	// Sidebar mobile margin top
	setInterval(function(){
		$('.sidebar').css({'top': $('.header').height() });
	});

			//update product
			$('.item #update-prod').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.add_products2').fadeIn();
					$('.add_products').fadeOut();

				var id = $(this).attr('alt');
				$.post('../dashboard/up.php',{ id: id },function(data){
					$('#jafhioasbfaskldhasd').html(data);
				}); 

			});

			//add product popup
			$('#add').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.add_products').fadeIn();
					$('.add_products2').fadeOut();
			});
			//hide add product
			$('.header-title span i').click(function(){
					$('.add_products').fadeOut("fast",function(){
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
			//image upload
			function readURL(input) {
						if (input.files && input.files[0]) {
								var reader = new FileReader();

								reader.onload = function (e) {
										$('.img-cont img').attr('src', e.target.result);
								}

								reader.readAsDataURL(input.files[0]);
						}
				}

				$("#add_image").change(function () {
						readURL(this);
				});

				var file = document.getElementById('add_image');
				file.onchange = function(e){
				    var ext = this.value.match(/\.([^\.]+)$/)[1];
				    switch(ext)
				    {
				        case 'jpg':
				        case 'bmp':
				        case 'png':
				        case 'tif':
				        case 'jpeg':
						    case 'JPG':
						    case 'BMP':
						    case 'PNG':
						    case 'TIF':
						    case 'JPEG':
									 $('#addprod-submit').attr('disabled', false);
									 $('#erorr').html(' ');
									 $('#erorr').hide();
				            break;
				        default:
									 $('.img-cont img').css({'width': '100%'});
									 $('#erorr').show();
									 $('#erorr').prepend("<br><kbd class='animated shake erorr'>This File is not allowed</kbd>");
									 $('#addprod-submit').attr('disabled', true);
									 $('#addprod-submit').css({'background-color': '#e74c3c'});
				    }
				};


				$('#filter').change(function(){
						var cat = $(this).val();
						if(cat==='Extras'){
								$('.product-container #Drinks').hide();
								$('.product-container #Desserts').hide();
								$('.product-container #For-Kids').hide();
								$('.product-container #Main-Meals').hide();
								$('.product-container #Sisig').hide();
								setTimeout(function(){
									$('.product-container #Extras').fadeIn();
								},500);
						}
						if(cat==='Drinks'){
								$('.product-container #Extras').hide();
								$('.product-container #Desserts').hide();
								$('.product-container #For-Kids').hide();
								$('.product-container #Main-Meals').hide();
								$('.product-container #Sisig').fadeOut();
								setTimeout(function(){
									$('.product-container #Drinks').fadeIn();
								},500);
						}
						if(cat==='Desserts'){
								$('.product-container #Extras').fadeOut();
								$('.product-container #Drinks').fadeOut();
								$('.product-container #For-Kids').fadeOut();
								$('.product-container #Main-Meals').fadeOut();
								$('.product-container #Sisig').fadeOut();
								setTimeout(function(){
									$('.product-container #Desserts').fadeIn();
								},500);
						}
						if(cat==='For-Kids'){
								$('.product-container #Extras').fadeOut();
								$('.product-container #Drinks').fadeOut();
								$('.product-container #Desserts').fadeOut();
								$('.product-container #Main-Meals').fadeOut();
								$('.product-container #Sisig').fadeOut();
								setTimeout(function(){
									$('.product-container #For-Kids').fadeIn();
								},500);
						}
						if(cat==='Main-Meals'){
								$('.product-container #Extras').fadeOut();
								$('.product-container #Drinks').fadeOut();
								$('.product-container #Desserts').fadeOut();
								$('.product-container #For-Kids').fadeOut();
								$('.product-container #Sisig').fadeOut();
								setTimeout(function(){
									$('.product-container #Main-Meals').fadeIn();
								},500);
						}
						if(cat==='Sisig'){
								$('.product-container #Extras').fadeOut();
								$('.product-container #Drinks').fadeOut();
								$('.product-container #Desserts').fadeOut();
								$('.product-container #Main-Meals').fadeOut();
								$('.product-container #For-Kids').fadeOut();
								setTimeout(function(){
									$('.product-container #Sisig').fadeIn();
								},500);
						}
						if(cat==='All'){
								$('.product-container #Extras').fadeIn();
								$('.product-container #Drinks').fadeIn();
								$('.product-container #Desserts').fadeIn();
								$('.product-container #Main-Meals').fadeIn();
								$('.product-container #Sisig').fadeIn();
									$('.product-container #For-Kids').fadeIn();
						}


				});

});


$(document).keyup(function(e) {
if (e.keyCode == 27) {
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

}
});
