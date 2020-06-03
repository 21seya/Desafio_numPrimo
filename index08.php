<?php
  
  $count=0;
  $num=2;
  for($i=0;$num<=$_POST['numero'];$i++){
  	for($j=$i;$j>0;$j--){

  		if($j%$i==0){
  			$count++;
  		}
  		if($num==2){
  			echo $i ."";
  		}
  	}
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Numero Primo</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST">
	Digite um numero:<input type="text" name="numero">
	<button type="submit">Calculo</button>	
	</form>
</body>
</html>