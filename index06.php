<?php
   
  if(isset($_POST['numero'] , $_POST['numero'])){
	 $primo = $_POST['numero'];

  $n = 0;
  for($i=2;$i<=$n;$i++){
  	for($j=2;$j<=$num;$j++){

  		if($i%$j==0){
  			break;
  		}
  	}
  	if($i==$j){
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
	<title>Numero Primo</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST">
	Digite um numero:<input type="text" name="numero">
	<input type="submit" name="primo">
	</form>
</body>
</html>