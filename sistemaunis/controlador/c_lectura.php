<?php
    require_once("connection.php");

    $stmt = $db->query("select * from $value");

    $rows = "";
    while($row = $stmt->fetchAll())
    {
        $rows[] = $row;
    }

    $json_format = json_encode($rows, JSON_PRETTY_PRINT);

    $json_file = "../sistemaunis/json/lectura.json";

    if(file_put_contents($json_file, $json_format)){
      echo "Archivo JSON creado.";
    } else {
      echo "Error creando arhivo JSON.";
    }
    
    $data = json_encode($rows, JSON_PRETTY_PRINT);    
    echo "<pre>"; 
    echo var_export($data);
    echo "<br><br>";

    $to_normal = json_decode($data, true);
    print_r($to_normal);
    echo "<br><br></pre>";

    $stmt = null;
    $db = null;
?>