<?php

    $usuario    = "JpQm";
    $contrasena = "JpBongo28";
    try{
        $conn = new PDO('mysql:host=localhost;dbname=qm-db', $usuario, $contrasena);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
        catch(PDOException $e)
            {
                echo "ERROR: " . $e->getMessage();
            }
            
?>
