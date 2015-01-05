<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Learn Angular Js</title>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
<style>
table, th , td {
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 5px;
}
table tr:nth-child(odd) {
  background-color: #f1f1f1;
}
table tr:nth-child(even) {
  background-color: #ffffff;
}
</style>
</head>

<body>
<div ng-app="" ng-controller="customerController">
<p>11. To read JSON data (can be used to fetch data from db)</p>
<ul>
<li ng-repeat="x in names">
{{x.Name+" - "+x.Country}}
</li>
</ul>
<p>12. Data display in table - order by country</p>
<table>
<tr ng-repeat="x in names | orderBy:'Country'">
<td>{{x.Name}}</td>
<td>{{x.Country}}</td>
</tr>
</table>
</div>
<script type="text/javascript">
function customerController($scope,$http)
{//alert(1);
	$http.get("customer_json.php").success(function(response){$scope.names = response;});
}
</script>

</body>
</html>