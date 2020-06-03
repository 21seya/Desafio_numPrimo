<?php
   
  if(isset($_POST['numero'])){
 	 $num = $_POST['numero'];

  for($i=2;$i<=$num;$i++){
  	 for($j=2;$j<$i;$j++){
  	 	 if($i%$j==0){
  	 	 	$num++;
  	 	 	break;
  	 	 }
  	 	 echo $i.",";
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
	<input type="submit" name="primo">
	</form>
</body>
</html>