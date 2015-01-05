<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Learn Angular Js</title>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
</head>

<body>
<div ng-app="" ng-controller="customController">
<table>
<tr ng-repeat="x in names">
<td>{{x.Name}}</td>
<td>{{x.Country}}</td>
</tr>
</table>
<p>Angular JS HTML DOM</p>
<p><button ng-disabled="myswitch">Click Me!</button></p>
<p>
<input type="checkbox" ng-model="myswitch">Button
</p>
<p>ng-show directive</p>
<p ng-show="true">I am visible</p>
<p ng-show="false">I am not visible</p>
</div>
<script type="text/javascript">
function customController($scope,$http)
{
	var site = "http://localhost//angularjs/";
	var page = "data.php";
	$http.get(site+page).success(function(response){$scope.names = response;});
}
</script>
</body>
</html>