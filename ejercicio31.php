<?php
    $txtNombre = "";
    $rdgLenguaje = "";
    $chkphp = false;
    $chkcss = false;
    $chkhtml = false;
    $lsAnime = "";
    $txtComentario ="";



    if ($_POST) { //instruccion de insertar
        $txtNombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : "";

        $rdgLenguaje = isset($_POST['lenguaje']) ? $_POST['lenguaje'] : "";

        $chkphp = isset($_POST['chkphp']);
        $chkcss = isset($_POST['chkcss']);
        $chkhtml = isset($_POST['chkhtml']);

        $lsAnime = isset($_POST['lsAnime']) ? $_POST['lsAnime'] : "";
        $txtComentario = isset($_POST['txtComentario']) ? $_POST['txtComentario']: "" ;

        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if ($_POST) { ?>
        <strong>Hola: </strong><?php echo $txtNombre ?><br>
        <strong>Tu lenguaje es: </strong><?php echo $rdgLenguaje ?><br>
        <strong>Estas aprendiendo: </strong>    
        <?php
            echo (($chkphp) ? "<br>-PHP " : "");
            echo (($chkhtml) ? "<br>-HTML " : "");
            echo (($chkcss) ? "<br>-CSS " : "");
        ?><br>

        <strong>Estas viendo: </strong><?php echo $lsAnime ?><br/>
        <strong>Tu mensaje es </strong><?php echo $txtComentario; ?>
    <?php } ?>

    <form action="ejercicio31.php" method="POST">
        Nombre:<br>
        <input type="text" name="txtNombre"><br>
        ¿Te gusta?:<br>
        php: <input type="radio" <?php echo ($rdgLenguaje == "php") ? "checked" : "" ?> value="php" name="lenguaje"><br>
        html: <input type="radio" <?php echo ($rdgLenguaje == "html") ? "checked" : "" ?> value="html" name="lenguaje"><br>
        css: <input type="radio" <?php echo ($rdgLenguaje == "css") ? "checked" : "" ?> value="css" name="lenguaje"><br>

        ¿Qué anime te gusta?:<br>
        <select name="lsAnime">
            <option value="">[Ninguna serie]</option>
            <option value="goku" <?php echo ($lsAnime == "goku") ? "selected" : "" ?>>[Goku]</option>
            <option value="naruto" <?php echo ($lsAnime == "naruto") ? "selected" : "" ?>>[Naruto serie]</option>
        </select>
        <br>

        ¿Qué estás aprendiendo?:<br>
        php: <input type="checkbox" <?php echo ($chkphp) ? "checked" : "" ?> name="chkphp" value="Si"><br>
        html: <input type="checkbox" <?php echo ($chkhtml) ? "checked" : "" ?> name="chkhtml" value="Si"><br>
        css: <input type="checkbox" <?php echo ($chkcss) ? "checked" : "" ?> name="chkcss" value="Si"><br>

        ¿Tienes alguna duda?<br/>
        <textarea name="txtComentario" id="" cols="30" rows="10"><?php echo $txtComentario; ?></textarea>
        
        <br/>
        <input type="submit" value="enviar informacion">
    </form>
</body>
</html>
