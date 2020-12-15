<!DOCTYPE html>
<html>
<head>
	<title>smaple function</title>
</head>
<body>

	<?php
$x;
$y;
 
function newcal($i,$r){
 $ans = $i + $r;
printf("this is my Answer");
 echo "</br>";
 echo "Answer is ". $ans;

}

newcal(10,20);

	?>
</br> 
</br>

	<?php

	$age =25;

	function infCal($name,$age){

		echo "My name is " . $name . " and my age is ". $age;
	}

	infCal("kasun",$age);

	?>

</br> 
</br>

<?php

$x =30;

function newcalc($x , $y){
 
 $ans = $x * $y;

 return $ans;

}

$k = newcalc($x , $x*2);

echo "Answer is". $k;

?>



</body>
</html>