<?php
    require_once("../db/connection.php");

    $carnet = $_POST['carnet'];
    echo "<br>Normal: " . $carnet . "<br>";
    
    $data = array(
        "id_estudiante"=>"$carnet"
    );
    
    /*transforma el array a formato json*/
    $to_json = json_encode($data);
    echo "JSON: " . $to_json . "<br>";

    /*transforma el json en un array*/
    $to_normal = json_decode($to_json, true);
    echo "print_r function: ";
    print_r($to_normal); /*sirve para mostrar el tipo de variable y valor de la variable.*/
    echo "<br>";
    
    $var = $to_normal['id_estudiante']; /*guardando valor en id_estudiante*/
    echo "Valor escrito por usuario: " . $var . "<br>";
    /*Trae el valor del json*/
    echo "No JSON: " . $to_normal['id_estudiante'] . "<br>";

    
    $stmt = $db->query("SELECT * FROM prueba_json WHERE id_estudiante=$var"); /*seleccionar en la base de datos*/
    
    while($row = $stmt->fetchAll())
    {
        $rows[] = $row;
    }

    echo json_encode($rows);
    /*mostrar en formato json*/

    $stmt = null;
    $db = null;
?>