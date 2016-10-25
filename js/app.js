var hello =  angular.module('HelloApp',[]);
hello.controller('FormController',function($scope){
	$scope.login = function(){
		alert(1);
	}
});