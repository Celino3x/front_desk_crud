<?php
    //$server = "localhost";
    //$database = "front_desk";
    //$username = "celino3x";
    //$pass = "123456";

    //$conexao = mysqli_connect($server, $username, $pass, $database);


    $mysqli = mysqli_init();
    $mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
    $mysqli->real_connect($_ENV["us-east.connect.psdb.cloud"], $_ENV["4mon01d2c7rdz5cb1pbr"], $_ENV["pscale_pw_nJMs6RmrRaSToA3dNHOKilZQtBEXQyIIbxi63XGAtqE"], $_ENV["front_desk"]);
    $mysqli->close();
?>