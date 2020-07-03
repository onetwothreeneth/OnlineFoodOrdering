//show myCart 
app3.controller('ccart', function($scope, $http) {
	    $http.get("cartclient.php")
	    .then(function (response) {$scope.namess = response.data.mycart;});
	setInterval(function(){
	    $http.get("cartclient.php")
	    .then(function (response) {$scope.namess = response.data.mycart;});
	},1000);
});
