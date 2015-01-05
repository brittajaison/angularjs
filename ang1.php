<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Learn Angular JS</title>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
</head>
<body>
<p>1. Understanding the basic directories ng-app,ng-control,ng-bind</p>

<div ng-app="" ng-init="firstName='Britta';quantity=1;cost=5;points=[1,2,3,4,5];names=['Jaison','Britta','Alex','Emil','Jhancy'];names2=[{name:'Edwin',country:'India'},{name:'Freddy',country:'Singapore'},{name:'Anoop',country:'Switzerland'},{name:'Emil',country:'Germany'},{name:'Anish',country:'Norway'}]" ng-controller="personController">
<p>Name: <input type="text" ng-model="name" value=""/></p>
<p ng-bind="name"></p>
<p>2. Initializing application variables using ng-init</p>
<p>The name is <span ng-bind="firstName"></span></p>
<p>3. Angular Js Expressions</p>
<p> My first expression is: {{5+5}}</p>
<p>4. Angular Js Controllers</p>
<p> My full name is {{firstname + " " + lastname}}</p>
<p>5. Angular JS Numbers</p>
<p><input type="text" ng-model="quantity" /></p>
<p><input type="text" ng-model="cost" /></p>
<p>Total is : {{quantity*cost|currency}}</p>
<p>6. Arrays</p>
The value of 2nd index in points is {{points[2]}}
<p>7. Repeating html elements</p>
<ul>
<li ng-repeat="x in names">
{{x}}
</li>
</ul>
<p>8. Repeat an array of objects</p>
<ul>
<li ng-repeat="x in names2">
{{x.name+"-"+x.country}}
</li>
</ul>

</div>

<script type="text/javascript">

function personController($scope)
{
	$scope.firstname = "Britta",
	$scope.lastname = "Jaison";
}
</script>
</body>
</html>