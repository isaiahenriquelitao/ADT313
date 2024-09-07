<?php 
$cars = array("Volvo", "BMW", "Toyota");
// Same as the code below
$cars = ["Volvo", "BMW", "Toyota"];
 echo $cars[1];
 echo '<br/>';

 $userInformation = array(
    "firstname"=>"IE",
    "lastname"=>"Poge",
    "role"=>"pro"
 );
$userInformation ["address"] = "manila";
$userInformation [] = "09128182172";
 echo $userInformation['address'];
 echo '<br/>';
 //print alll
 print_r($userInformation);
 echo '<br/>';
 var_dump($userInformation);
?>