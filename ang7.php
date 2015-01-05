<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Learn Angular Js</title>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
</head>

<body>
<div ng-app="" ng-controller="formController">
<form novalidate="novalidate">
<p><input type="text" ng-model="user.firstName"/></p>
<p><input type="text" ng-model="user.lastName"/></p>
<p><button ng-click="reset()">RESET</button></p>
</form>
<p>Form: {{user}}</p>
<p>Master: {{master}}</p>
</div>
<script type="text/javascript">
function formController ($scope) {
    $scope.master = {firstName: "Britta", lastName: "Jaison"};
    $scope.reset = function() {
        $scope.user = angular.copy($scope.master);
    };
    $scope.reset();
};
</script>
</body>
</html>