<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "angular");

$result = $conn->query("SELECT customerName, customerCity, customerCountry FROM customers");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"Name":"'  . $rs["customerName"] . '",';
    $outp .= '"City":"'   . $rs["customerCity"]        . '",';
    $outp .= '"Country":"'. $rs["customerCountry"]     . '"}'; 
}
$outp .="]";

$conn->close();

echo($outp);
?>