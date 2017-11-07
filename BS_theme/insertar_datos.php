<?php
    $json = "empleado.json";
    $data = file_get_contents($json);
    $array = json_decode($data, true);
    
    $carne = $array['carne'];
    $nombres = $array['nombres'];
    $apellidos = $array['apellidos'];
    $dpi = $array['dpi'];
    $nit = $array['nit'];
    $fecha_nacimiento = $array['fecha_nacimineto'];
    $profesion = $array['profesion'];
    $numero_colegiado = $array['numero_colegiado'];
    $colegio_profesional = $array['colegio_profesional'];
    $estado_civil = $array['estado_civil'];
    $nacionalidad = $array['nacionalidad'];
    $es_asesor = $array['es_asesor'];
    $es_catedratico = $array['es_catedratico'];
    $tipo_correo1 = $array['tipo_correo1'];
    $tipo_correo2 = $array['tipo_correo2'];
    $address = $array['Address'];
    $tipo_telefono1 = $array['tipo_telefono1'];
    $tipo_telefono2 = $array['tipo_telefono2'];

    $sql = "INSERT INTO prueba_json (id_estudiante, nombre, apellido, edad) VALUES ('$id_estudiante', '$name', '$apellido', '$edad')";
    $stmt = $db->query($sql);
    $stmt->execute();

    $stmt = null;
    $db = null;
?>
