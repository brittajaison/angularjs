<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Learn Angular Js</title>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
</head>

<body>
<div ng-app="myNoteApp" ng-controller="myNoteCtrl">
<h2>My Note</h2>

<p><textarea ng-model="message" cols="40" rows="10"></textarea></p>

<p>
<button ng_click="save()">Save</button>
<button ng-click="clear()">Clear</button>
</p>

<p>Number of characters left: <span ng-bind="left()"></span></p>
</div>
<script src="myNoteApp.js"></script>
<script src="myNoteCtrl.js"></script>
</body>
</html>