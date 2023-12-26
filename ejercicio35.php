<?php
$url="https://api.dailymotion.com/videos?channel=sports&limit=10";
$opciones = array("ssl"=>array("verify_peer"=>false,"verify_peer"=>false));
$respuesta=file_get_contents($url, false, stream_context_create($opciones));
$objRespuesta=json_decode($respuesta);

foreach($objRespuesta->list as $video){
    print_r($video_>title);
}
?>