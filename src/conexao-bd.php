<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=serenatto', 'root', 'Gabriel32329935');

}catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
}

