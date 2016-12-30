//user products
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
	setInterval(function(){
	    $http.get("php/products-visitor.php")
	    .then(function (response) {$scope.names = response.data.products;});
	},1000);
});

//count cart
var app2 = angular.module('myApp2', []);
app2.controller('count', function($scope, $http) {
	setInterval(function(){
	    $http.get("php/count.php")
	    .then(function (response) {$scope.names = response.data.count;});
	},1000);
});

//messages
app2.controller('messages', function($scope, $http) {
	setInterval(function(){
	    $http.get("php/messages.php")
	    .then(function (response) {$scope.msg = response.data;}); 
	},1000);   
	$scope.read = function(event){  
    	$.post('php/read.php',function(){});
    }  
});


//show myCart 
app2.controller('mycart', function($scope, $http) {
	    $http.get("php/mycart.php")
	    .then(function (response) {$scope.namess = response.data.mycart;});
	setInterval(function(){
	    $http.get("php/mycart.php")
	    .then(function (response) {$scope.namess = response.data.mycart;});
	},1000);
});

//total
app2.controller('totalctrl', function($scope, $http) {
	    $http.get("php/total.php")
	    .then(function (response) {$scope.namesss = response.data.totalcart;});
	setInterval(function(){
	    $http.get("php/total.php")
	    .then(function (response) {$scope.namesss = response.data.totalcart;});
	},1000);
	$scope.checkout = function(event){ 
	    	$(event.target).html('<img src="img/loader2.gif" width="14%">'); 
	    	var total = $(event.target).siblings('b').html(); 
		    setTimeout(function(){
		    	 $.post('php/checkout.php',{ total: total },function(data){ 
		   	 		$(event.target).html("CheckOut");  $('#notif').show();
					  	$('#notif').html('Order Is now Proccessing');
						setTimeout(function(){
						  	$('#notif').fadeOut();
						},1500);
		    	 });
		    },3000)
    } 
});

//remove to cart
app2.controller('remove', function($scope, $http) { 
    $scope.remove = function(event){ 
    	var id = $(event.target).attr("alt"); 
    	$.post('php/remove.php',{ id:id },function(data){ 
    	});
    } 
}); 

//orders
app2.controller('orders', function($scope, $http) {
	    $http.get("php/orders.php")
	    .then(function (response) {$scope.ords = response.data.orders;});
	setInterval(function(){
	    $http.get("php/orders.php")
	    .then(function (response) {$scope.ords = response.data.orders;});
	},1000);

	$scope.cancel = function(event){ 
		   var id = $(event.target).attr('alt');
		   var confirm = window.confirm('Cancel this order ?');
		   if(confirm){
			  $.post('php/cancel.php',{ id: id },function(data){
			  	$('#notif').show();
			  	$('#notif').html('Order has been canceled !');
				  	setTimeout(function(){
				  		$('#notif').fadeOut();
				  	},1500);
			  });   
		   } else {

		   } 
    }   
});

 