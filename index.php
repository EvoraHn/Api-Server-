<?php

    header("Content-Type: application/json");

    $data = array(
        "server" => array(
            "dsc" => "API Server App Movil 2",
            "ver" => "0.0.1"
        )
    ); 

    echo json_encode($data);
?>