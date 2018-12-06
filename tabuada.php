<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$valor=$_POST["valor"];
	echo 'Tabuada';
	for ($i = 1; $i <= 10 ; $i++) {
		$resultado=$i*$valor;
		echo "<br>".$i."*".$valor."=".$resultado;
	}
	if($valor%2==0){
		echo "<br><br>O número que introduzio é par";
	}
	else{
		echo "<br><br>O número que introduzio é par";
	}
	?>
</body>
</html>
