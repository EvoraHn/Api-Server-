<?php
    

    include("../../tools/config.php");
    include("../../tools/mysql.php");
    include("../../tools/querys.php");   

    // Limpieza de parametros
    $UsrUsr     = (isset($_POST["UsrUsr"]))?$_POST["UsrUsr"]:"";
    $UsrPwd     = (isset($_POST["UsrPwd"]))?$_POST["UsrPwd"]:"";

    

    $UsrUsr     = mysqli_real_escape_string($mydb, $UsrUsr);
    $UsrPwd     = mysqli_real_escape_string($mydb, $UsrPwd);

    // Realizamos la consulta a la base de datos
    $pst = $mydb->prepare($querys["usuarios"]["1_obtener"]);
    $pst->bind_param("s", $UsrUsr);
    $pst->execute();
    $rs = $pst->get_result();
    
    header("Content-Type: application/json");

    if($usuario = $rs->fetch_assoc()){
        if($UsrPwd == $usuario["UsrPwd"]){
            echo json_encode(array(
                "status" => "OK",
                "payload" => array(
                    "message" => "Usuario autenticado con éxito."
                )
            ));
        }else{
            echo json_encode(array(
                "status" => "ER",
                "payload" => array(
                    "message" => "Usuario / Password Incorrectos."
                )
            ));
        }
    }else{
        echo json_encode(array(
            "status" => "ER",
            "payload" => array(
                "message" => "Usuario no encontrado."
            )
        ));
    }

/*
header("Content-Type: application/json");
if($UsrUsr == "user" && $UsrPwd == "user"){
    echo json_encode(array(
        "status" => "OK",
        "payload" => array(
            "message" => "usuario / Password correctos."
        )
        ));
}else{
    echo json_encode(array(
        "status" => "ER",
        "payload" => array(
            "message" =>"Usuario /Password Incorrectos."
        )
        ));
}*/



?> 