<?php

if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    $suma = $valorA+$valorB; 
    $resta = $valorA-$valorB;
    $multiplicacion = $valorA*$valorB;
    $division = $valorA/$valorB;
    echo "La suma es:".$suma."\n";
    echo "La resta es:".$resta."\n";
    echo "La multiplicacion es:".$multiplicacion."\n";
    echo "La division es:".$division."\n";
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
    <form action="ejercicio7.php" method="post">
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