<?php
    require_once("../db/connection.php");

    $id_documento = $_POST['docs'];
    $dpi = $_POST['dpi'];
    $nota_ingles = $_POST['n_ingles'];

    echo "<br>Datos que se insertarán:<br>";
    echo "id_documento: " . $id_documento . "<br>";
    echo "dpi: " . $dpi . "<br>";
    echo "nota_ingles: " . $nota_ingles . "<br><br>";

    $data = array(
        "id_documento"=>"$id_documento",
        "dpi"=>"$dpi",
        "nota_ingles"=>"$nota_ingles"
    );

    $to_json = json_encode($data);
    echo "JSON:<br>" . $to_json . "<br><br>";

    echo "Convertido en array:<br>";
    $to_normal = json_decode($to_json, true);
    print_r($to_normal);
    echo "<br><br>";

    echo "Extrayendo datos del array...<br><br>";
    $var1 = $to_normal['id_documento'];
    $var2 = $to_normal['dpi'];
    $var3 = $to_normal['nota_ingles'];

    echo "Empezando insert...<br><br>";
    $stmt = $db->query("CALL insertar_documento_estudiante($var1, $var2, $var3)");
    echo "Datos insertados.<br>";

    $stmt = null;
    $db = null;
 
?>
