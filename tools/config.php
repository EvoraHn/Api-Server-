<?php

    include("../../tools/cors.php");

    $config = json_decode('
        {
            "db": {
                "hostname": "192.168.1.116",
                "username": "root",
                "password": "Hola123",
                "database": "picme"
            },
            "smtp": {
                "host": "email-smtp.us-east-1.amazonaws.com",
                "user": "AKIA6NYUMABGLZS7FZNY", 
                "pass": "BLRF1JzK+gA6ZzHlAwvU0pg3TyqPQnvmOOXxqxcHsx1y"
            }
        }
    ');

?>