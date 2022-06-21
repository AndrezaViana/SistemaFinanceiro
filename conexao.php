<?php
    require_once("configuracao.php");
    
    date_default_timezone_set('America/Sao_Paulo');

    $pdo = new PDO("mysql:host=$servidor; dbname=$banco", "$usuario", "$senha")
?>