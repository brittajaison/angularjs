<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Learn Angular Js</title>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
</head>

<body>
<div >
<p>1. Form Validation</p>
<form ng-app="" ng-controller="validateController" novalidate="novalidate" name="myForm">
<p><input type="text" name="user" ng-model="user" required="required"/></br>
<span style="color:red" ng-show="myForm.user.$dirty && myForm.user.$invalid">
  <span ng-show="myForm.user.$error.required">Username is required.</span></span></p>
<p><input type="email" name="email" ng-model="email" required="required"/></br>
<span style="color:red" ng-show="myForm.email.$dirty && myForm.email.$invalid">
  <span ng-show="myForm.email.$error.required">Email is required.</span>
   <span ng-show="myForm.email.$error.email">Invalid email address.</span></span></p>
<p>
  <input type="submit"
  ng-disabled="myForm.user.$dirty && myForm.user.$invalid ||
  myForm.email.$dirty && myForm.email.$invalid">
</p>
</form>
</div>
<script>
function validateController($scope)
{
	$scope.user = "John";
	$scope.email = "john.doe@gmail.com";
}
</script>
</body>
</html>