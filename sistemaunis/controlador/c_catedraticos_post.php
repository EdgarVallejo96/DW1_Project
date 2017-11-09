<?php
    require_once("connection.php");

    $json_file = "http://localhost/DW1_Project/sistemaunis/jsons/catedraticos_post.json";

    $data = file_get_contents($json_file);
    $array = json_decode($data, true);

    $nombres              = $array['nombres'];
    $apellidos            = $array['apellidos'];
    $expediente_completo  = $array['expediente_completo'];
    $entrevista_realizada = $array['entrevista_realizada'];
    $puesto_aspirado      = $array['puesto_aspirado'];
    $acta_aprobacion      = $array['acta_aprobacion'];
    $expedienteVCR        = $array['expedienteVCR'];
    $entrevista_VCR       = $array['entrevista_VCR'];
    $aprobado_VCR         = $array['nombres'];
    $tipo_correo1         = $array['tipo_correo1'];
    $tipo_correo2         = $array['tipo_correo2'];
    $Address              = $array['Address'];
    $tipo_telefono1       = $array['tipo_telefono1'];
    $tipo_telefono2       = $array['tipo_telefono2'];

    $stmt = $db->query("CALL InsertarCatedraticoPostulado('$nombres', '$apellidos', $expediente_completo,
                                                           $entrevista_realizada, $puesto_aspirado, $acta_aprobacion,
                                                           $expedienteVCR, $entrevista_VCR, $aprobado_VCR,
                                                          '$tipo_correo1', '$tipo_correo2', '$Address',
                                                           $tipo_telefono1, $tipo_telefono2)");

    $stmt = null;
    $db = null;
?>