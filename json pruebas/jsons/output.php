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

<h1>DB to JSON</h1>
<?php
    $stmt = $db->query("select * from prueba_json");
    
    while($row = $stmt->fetchAll())
    {
        $rows[] = $row;
    }

    echo json_encode($rows);

    $stmt = null;
    $db = null;

?>
</body>
</html>