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
?>