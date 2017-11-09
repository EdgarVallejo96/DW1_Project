<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DB to JSON</title>
</head>
<body>
<h1>Connection</h1>
<?php
try 
{
    $db = new PDO('mysql:host=localhost;dbname=universidad;charset=utf8','root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Established";
}
catch(Exception $e)
{
    echo "An error ocurred.";
}
?>

<h1>JSON to DB</h1>
<?php
    $json = "info.json";
    $data = file_get_contents($json);
    $array = json_decode($data, true);

    $id_estudiante = $array['id_estudiante'];
    $name          = $array['nombre'];
    $apellido      = $array['apellido'];
    $edad          = $array['edad'];

    $sql = "INSERT INTO prueba_json (id_estudiante, nombre, apellido, edad) VALUES ('$id_estudiante', '$name', '$apellido', '$edad')";
    $stmt = $db->query($sql);
    $stmt->execute();

    $stmt = null;
    $db = null;
    sleep(60);


?>
</body>
</html>