<?php 
    $host       =   'localhost';
    $user       =   'root';
    $passwd     =   '';
    $dbname     =   'plinplan_mobile';
    
    $connect    =   new PDO("mysql:host=$host;dbname=$dbname",$user,$passwd);
?>