<?php
$servidor = "localhost";
$usuario = "root";
$contrasenia = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion establecida";

    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programacion', 'foto.jpg');";

    // Preparar la consulta
    $consulta = $conexion->prepare($sql);

    // Ejecutar la consulta preparada
    $consulta->execute();

    echo "Datos insertados correctamente";

} catch (PDOException $error) {
    echo "Conexion erronea: " . $error->getMessage();
}


?>