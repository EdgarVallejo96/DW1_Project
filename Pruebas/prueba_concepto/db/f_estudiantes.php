<?php
    require_once("connection.php");

    $json_file = "http://localhost/prueba_concepto/jsons/estudiantes.json";
    $data = file_get_contents($json_file);
    echo $data . "<br><br>";
    $array = json_decode($data, true);
    print_r($array);
    echo "<br><br>";

    $id_estudiante = $array['id_estudiante'];
    echo $id_estudiante . "<br>";
    $nombre          = $array['nombre'];
    echo $nombre . "<br>";
    $edad          = $array['edad'];
    echo $edad . "<br>";

    $stmt = $db->query("CALL insertar_datos($id_estudiante, '$nombre', $edad)");

    $stmt = null;
    $db = null;
?>