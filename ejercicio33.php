<?php
$jsonContenido = '[
    {"nombre":"Oscar", "apellido":"uh"},
    {"nombre":"Jose", "apellido":"Perez"}
]';

$resultado = json_decode($jsonContenido);
print_r($resultado);


?>
