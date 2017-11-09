<?php
    require_once("connection.php");

    $json_file = "http://localhost/DW1_Project/sistemaunis/json/EmpleadoNuevo.json";

    $data = file_get_contents($json_file);
    $array = json_decode($data, true);

    $carne                  = $array['carne'];
    $nombres                = $array['nombres'];
    $apellidos              = $array['apellidos'];
    $dpi                    = $array['dpi'];
    $nit                    = $array['nit'];
    $fecha_nacimiento       = $array['fecha_nacimiento'];
    $profesion              = $array['profesion'];
    $numero_colegiado       = $array['numero_colegiado'];
    $colegio_profesional    = $array['colegio_profesional'];
    $estado_civil           = $array['estado_civil'];
    $nacionalidad           = $array['nacionalidad'];
    $es_asesor              = $array['es_asesor'];
    $es_catedratico         = $array['es_catedratico'];
    $tipo_correo1           = $array['tipo_correo1'];
    $tipo_correo2           = $array['tipo_correo2'];
    $Address                = $array['Address'];
    $tipo_telefono1         = $array['tipo_telefono1'];
    $tipo_telefono2         = $array['tipo_telefono2'];

    $stmt = $db->query("call InsertarEmpleadoLaborando($carne, '$nombres', '$apellidos', $dpi, $nit,
    '$fecha_nacimiento', '$profesion', $numero_colegiado, '$colegio_profesional', '$estado_civil', '$nacionalidad', $es_asesor, $es_catedratico,
    '$tipo_correo1', '$tipo_correo2', '$Address', '$tipo_telefono1', '$tipo_telefono2')");

    $stmt = null;
    $db = null;
?>