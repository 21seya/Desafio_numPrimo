<?php
$a = 0;
$b = 0;
for($i = 2; $i<$a; $i++){
	if($a%$i==0){
		$b++;
		break;
	}
}
if($b==0){
	Echo "$a is prime";
}else{
	Echo "$a is not prime";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Desafio Numero Primo</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST">
	Digite um numero:<input type="text" name="numero">
	<button type="submit">Calculo</button>	
	</form>
</body>
</html>