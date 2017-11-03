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