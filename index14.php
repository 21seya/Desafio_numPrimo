<?php
  // verifica no input os dados inserios e requisita pelo metodo post. 
  if(isset($_POST['numero'] ,$_POST['numero'])){
    $num = $_POST['numero'];
   //faz a lista dos números inserido pelo usuário e mostra os números primos.
  for($i=2;$i<=$num;$i++){
     for($j=2;$j<$i;$j++){
       if($i%$j==0){
          $j++;
          break;
       }
       if($j<=2){
         // $num++;
          echo $i.",";
          //echo "<br>";
        }  
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