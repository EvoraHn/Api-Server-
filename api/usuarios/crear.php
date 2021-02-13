<?php

    include("../../tools/config.php");
    include("../../tools/mysql.php");
    include("../../tools/querys.php");   

    $UsrUsr     = (isset($_POST["UsrUsr"]))?$_POST["UsrUsr"]:"";
    $UsrPwd     = (isset($_POST["UsrPwd"]))?$_POST["UsrPwd"]:"";
    $UsrMail    = (isset($_POST["UsrMail"]))?$_POST["UsrMail"]:"";
    $UsrTel     = (isset($_POST["UsrTel"]))?$_POST["UsrTel"]:"";
    $UsrEst     = (isset($_POST["UsrEst"]))?$_POST["UsrEst"]:"";

    $UsrUsr     = mysqli_real_escape_string($mydb,$UsrUsr);
    $UsrPwd     = mysqli_real_escape_string($mydb,$UsrPwd);
    $UsrMail    = mysqli_real_escape_string($mydb,$UsrMail);
    $UsrTel     = mysqli_real_escape_string($mydb,$UsrTel);
    $UsrEst     = mysqli_real_escape_string($mydb,$UsrUsr);

    //inserción de registro

    $pst = $mydb->prepare($query['usuarios']['2_insertar']);
    //las s depende de cuantos parametros enviemos s es string, puedes usar d o l etc
    $pst->bind_param("ssssss",$UsrUsr);
    $pst->execute();

    header("Content-Type: application/json");
    if($mydb->error){
        echo json_encode(array(
            "status"=>"ER",
            "payload"=>array(
                "error"=> $mydb->error,
                "message"=>"Ocurrio un error registrando el usuario."
            )
            ));
    }else{
        echo json_encode(array(
            "status"=>"OK",
            "payload"=>array(
                "message"=>"Usuario registrado."
            )
            ));
    }


?>