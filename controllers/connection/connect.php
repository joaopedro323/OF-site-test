<?php
    // Dados de Conexão
    $localhost  = "localhost";
    $user       = "onefac49_admin";
    $pass       = "951753@onefactory";
    $banco      = "onefac49_site";

    // Conexão MYSQLI
    $conecta = mysqli_connect($localhost, $user, $pass, $banco);
    mysqli_set_charset($conecta, "utf8");
?>