<?php
    // Librerias
    include("../../tools/config.php");
    include("../../tools/mysql.php");
    include("../../tools/querys.php");
    include("../../tools/mailer.php");

    $body = "
        Su cuenta fue creada correctamente.
    ";
    
    send_email("remdph@gmail.com", "Rafael Maldonado", "rafaelm@cointla.com", "Confirmación de Cuenta", $body);
?>