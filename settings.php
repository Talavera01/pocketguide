<?php
    $database = 'mysql:host=localhost; dbname=pocketguide';
    $user = 'pocketguide-admin';
    $pwd = '2[07jehY*IPY8axy';

    try{
        $pdo = new PDO($database, $user, $pwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'Connection success!';
    }catch(PDOException $e){
        echo 'Connection failed: '.$e->getMessage();
    }
?>