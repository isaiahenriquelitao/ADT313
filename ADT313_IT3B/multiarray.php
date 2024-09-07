<?php
$user = array(
    "information" => array(
        "fname" => "Isaiah",
        "lname" => "Litao",
    ),
    "roles"=>array(
        "Pro",
        "Student"
    ),
    "address" => array(
        "province" => "bulacan",
        "municipality" => "bocaue",
        "city"=> "bambang"
    )
    );

    echo"<h1>".$user["address"]["province"]."</h1>";
    echo "<h2>".$user["roles"][1]."</h2"
?>