<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prueba Concepto</title>
</head>
<body>
    <form action="" method="post">
        <label>id_estudiante</label><br>
        <input type="number" name="num1"><br>
        <lable>nombre</label><br>
        <input type="text" name="text1"><br>
        <label>edad</label><br>
        <input type="number" name="num2"><br>
        <input type="submit" name="publish" value="Insertar"><br>
    </form>

    <?php
        if(isset($_POST['publish'])){

            $json_array = array(
                'id_estudiante' => $_POST['num1'],
                'nombre'        => $_POST['text1'],
                'edad'          => $_POST['num2']
            );

            $json_format = json_encode($json_array, JSON_PRETTY_PRINT);

            $json_file = '../prueba_concepto/jsons/estudiantes.json';

            if(file_put_contents($json_file, $json_format)){
                echo "Archivo JSON creado.";
            } else {
                echo "Error creando arhivo JSON.";
            }

            include '../prueba_concepto/db/f_estudiantes.php';

        }
    ?>
</body>
</html>
