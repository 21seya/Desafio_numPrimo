<?php
 
 $count = 0;
 $num = 0;
 
 if(isset($_POST['numero'])){
 	$num = $_POST['numero'];

 for($i=1;$i<=$num;$i++){
 	
 	if($num%$i==0){
 		$count++;
 	}
 	if($count==2){
 		echo $i."";
  }
 }
} 	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Numeros Primos</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST">
	Digite um numero:<input type="text" name="numero">
	<button type="submit">Calculo</button>	
	</form>
</body>
</html>