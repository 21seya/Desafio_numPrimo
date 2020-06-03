<?php
  
  if(isset($_POST['primo'] , $_POST['primo'])){
	 $primo = $_POST['primo'];

	 $i=0;
	 $j=0;

	 for($i=1;$i<=$primo;$i++){
	 	$count=0;
	 	for($j=0;$j<=$primo;$j++){
	 		if($i % $j==0){
	 			$count++;
	 		}
	 	}
	 	if($count==2){
	 		echo $i . "";

	 	}
	 }
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
	<input type="submit" name="primo">
	</form>
</body>
</html>