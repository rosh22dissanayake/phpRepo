<!DOCTYPE html>
<html>
<head>
	<title>sample object</title>
</head>
<body>

	<?php

	class car{

		public $color;
		public $model;

		public function car($color,$model){
$this -> color =$color;
$this -> model =$model;

}

public function message(){

return "My car is a". $this -> color . " " . $this -> model. " ! " ;

}

}
		

		$mycar = new car("black","Volvo");

echo $mycar -> message();
echo "<br>";

$mycar = new car("red","Toyota");
echo $mycar -> message();
	


	?>

</body>
</html>