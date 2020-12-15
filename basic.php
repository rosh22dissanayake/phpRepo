<!DOCTYPE html>
<html>
<head>
	<title>basic php</title>
</head>
<body>
<?php

$x =25;
$y =60;
$z = 80;

if ($x < 30 ) {
echo "Grade F";
}

elseif ($x < 20 && $y > 50) {
	 echo "Grade D";
}

elseif ($y > 55 || $z < 75) {
	 echo "Grade c";
}

else{

	echo "Grade A";
}

?>

<br>
<br>


<?php

$x =3;

do{

	echo "the number is". $x . "<br>";

	$x++;

}

while($x <=10);



?>

<br>
<br>

<?php

$x=6;
while ($x <= 12) {
	 echo "the number is". $x. "<br>";

	 $x++;
}

?>

<br>
<br>

<?php

for($x =1 ; $x <=20 ; $x++){
echo "The number is ". $x . "<br>"; 

}

?>




</body>
</html>