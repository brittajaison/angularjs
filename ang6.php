<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Learn Angular Js</title>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
</head>

<body>
<div ng-app="" ng-controller="personController">
<p>Angular JS events (Click)</p>
<p><button ng-click="count=count+1">Count</button><button ng-click="count=0">Reset</button></p>
<p>Count: {{count}}</p>
<p><button ng-click="toggle()">Click</button></p>
<p ng-hide="mvar">
<input type="text" ng-model="fname"/><br/>
<input type="text" ng-model="lname"/></p>
</div>
<script type="text/javascript">
function personController($scope)
{
	$scope.fname = 'Britta',
	$scope.lname = 'Jaison',
	$scope.mvar  = false; 
	$scope.toggle =  function()
	{
		$scope.mvar = !$scope.mvar;
	}
	
}
</script>
</body>
</html>