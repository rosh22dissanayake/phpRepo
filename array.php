   <!DOCTYPE html>
   <html>
   <head>
   	<title>Basic array</title>
   </head>
   <body>
   
<?php

$simple = array("kamal","saman","nimal","santha","kasun","janith");

$tech = array("roshan", 25,"amal",34,"sugath",42);
//print value in any possition
echo $simple['3']. "</br>";
echo $tech['3']. "</br>";

//array size
echo "simple array size is ";
echo sizeof($simple);

echo "</br>";

//print array name with possition
print_r($tech);

echo "</br>";
echo "</br>";

//value type or primitive data type

$arr = $simple;

var_dump($simple);
echo "</br>";
echo "</br>";
var_dump($arr);

echo "</br>";
echo "</br>";

$simple['6'] = "chamal";
var_dump($simple);

echo "</br>";
echo "</br>";

//refernce data type

$arr = & $simple;

var_dump($simple);
echo "</br>";
echo "</br>";
var_dump($arr);

echo "</br>";
echo "</br>";

$simple['6'] = "chamal";
var_dump($simple);

echo "</br>";
echo "</br>";

var_dump($arr);


?>

   </body>
   </html>