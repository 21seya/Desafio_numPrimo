<?php
 $num=0;
 $count=0; 

 if(isset($_POST['numero'])){
 	$num = $_POST['numero'];

 while($count<=1){
 	$count++;
 	for($i=1;$i<=$num;$i++){
 		if($num % $i==0){
 			$count++;

 		}
 	}
 	if($count==2){
 		echo $num."";
 		$count++;
 	}
 	$num;
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