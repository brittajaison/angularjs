<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Learn Angular JS</title>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
</head>

<body>
<div ng-app="" ng-controller="peopleController">
<p>9. Controller methods</p>
<p><input type="text" ng-model="fname"/></p>
<p><input type="text" ng-model="lname"/></p>
<p>Your full name is: {{fullname()}}</p>
</div>
<script type="text/javascript">
function peopleController($scope)
{
	$scope.fname = 'Britta',
	$scope.lname = 'Alex',
	$scope.fullname =  function(){
		return $scope.fname+" "+$scope.lname;
	}
}
</script>
</body>
</html>