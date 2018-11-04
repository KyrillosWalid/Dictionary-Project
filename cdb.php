<?php
    $dns = 'mysql:host=127.0.0.1;dbname=dictionary-kyrilloswalid';
    $user = 'root';
    $pass = '';
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => ("SET NAMES utf8")
    );
    try{
        $db = new PDO($dns, $user, $pass, $options);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo"Database connected successfully.\n"; 
    }
    catch(PDOException $error){
        echo"Connection Failed: " .$error->getMessage();
    }
?>