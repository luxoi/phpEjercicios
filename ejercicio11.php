<?php

if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    if($valorA>$valorB){

        echo "El valor de A es mayor al de B";
    }else{
        echo "El valor de A es menor al de B";
    }        
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio11.php" method="post">
        valor A:
        <input type="text" name="valorA" id="">
        <br>
        valor B:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>