<?php 
    echo "Conditional Statements";
   
    $showvariable = true;
    $name = "Poge";
    $auth = true;
if($showvariable == true){
    //execute code
    echo $name;
}elseif($showvariable&&$name =="Poge" &&$auth){
    echo "Hello".$name;
}
else{
    //no show
    echo "Not Poge";
}
//(condition)           ?if condition:else condition
$anothervar = ($showvariable == true) ? $name : "short hand: else";
echo $anothervar
?>