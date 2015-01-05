<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Learn Angular Js</title>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
</head>

<body>
<div ng-app="" ng-controller="namesController">
<p>10. Creating new controller as external file, angular js filter using uppercae,lowercase,order by</p>
<ul>
<li ng-repeat="x in names|orderBy:'country'">
{{x.name+" "+x.country|uppercase}}
</li>
</ul>
<p> Filter by curency</p>
<p><input type="text" ng-model="qty"/> (*)</p>
<p><input type="text" ng-model="price"/><p>
<p>Total is {{qty*price|currency}}</p>
</div>

<script src="namesController.js"></script>
</body>
</html>