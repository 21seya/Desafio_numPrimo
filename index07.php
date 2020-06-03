<?php
 $cont = 0;
 $num=0;
  if(isset($_POST['numero'])){
  	$primo = $_POST['numero'];

  for($i=1;$i<=$num;$i++){
  		for($j=$i;$j>0;$j--){
  		   if($i%$j==0){
  		      $cont++;
  		   }
  		   if($cont<=2){
  		   	  $num++;
  		   	  echo $i."";
  		   	}
  		   	 $cont=0;
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