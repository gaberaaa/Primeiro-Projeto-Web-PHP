<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=serenatto', 'usuario', 'senha');

}catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
}

