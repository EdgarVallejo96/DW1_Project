<!DOCTYPE html>
<html>
<head>
    <meta charset="UFT-8">
    <title>Prueba JSON</title>
</head>
<body>
<!-- Este index2.php fueron varias pruebas que hice, pero no funcionaron bien y empezaron a ponerse muy
     desordenados así que lo deje por si necesitaba algún tipo de referencia después -->
<h1> Probando JSON </h1>
<?php
try 
    {
        $db = new PDO('mysql:host=localhost;dbname=universidad;charset=utf8','root','');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        var_dump($db);
        echo "Connection Established";
    }
    catch(Exception $e)
    {
        echo "An error ocurred.";
    }
    
    /*
    $stmt = $db->query("select * from prueba_json");
    
    while($row = $stmt->fetchAll())
    {
        $rows[] = $row;
    }

    echo json_encode($rows);
    */
    
    /*
    $jsondata = file_get_contents('info.json');
    $data = json_decode($jsondata, true);
    */
/*
    $stmt = $db->prepare("insert into prueba_json values (?, ?, ?, ?)");
/*
    foreach($data as $row)
    {
        
        $stmt ->execute(array('".$row[id_estudiante]"', 'nombre', 'apellido', 'edad'));
      
        
        $stmt->bindParam(1, $row['id_estudiante']);
        $stmt->bindParam(2, $row['nombre']);
        $stmt->bindParam(3, $row['apellido']);
        $stmt->bindParam(4, $row['edad']);
        $stmt->execute();
        
        
    }
*/
/*
    foreach($data as $row)
    {
        $stmt = "INSERT INTO prueba_json(id_estudiante, nombre, apellido, edad) VALUES ('".$row["id_estudiante"]."', '".$row["nombre"]."', '".$row["apellido"]."', '".$row["edad"]."')";

    }
    
    echo "Data Inserted";
*/

$db = null;
sleep(60);
?>


</body>
</html>

