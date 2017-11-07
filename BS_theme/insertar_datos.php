<?php
        try 
        {
            $db = new PDO('mysql:host=localhost;dbname=proyecto_db;charset=utf8','root','');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(Exception $e)
        {
            echo "An error ocurred.";
        }
    $json = "empleado.json";
    $data = file_get_contents($json);
    $array = json_decode($data, true);
    
    $carne = $array['carne'];
    $nombres = $array['nombres'];
    $apellidos = $array['apellidos'];
    $dpi = $array['dpi'];
    $nit = $array['nit'];
    $fecha_nacimiento = $array['fecha_nacimiento'];
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

    $stmt = $db->query("call InsertarEmpleadoLaborando($carne, $nombres, $apellidos, $dpi, $nit,
    $fecha_nacimiento, $profesion, $numero_colegiado, $colegio_profesional, $estado_civil, $nacionalidad, $es_asesor, $es_catedratico,
    $tipo_correo1, $tipo_correo2, $address, $tipo_telefono1, $tipo_telefono2)");

    $stmt = null;
    $db = null;
?>
