<?php

//Dados para conectar ao SGBD
$dsn = 'mysql:dbname=senac;host=localhost;port=3301';
$user = 'root';
$pass = '';

//Conectamos ao SGBD
$bd = new PDO($dsn, $user, $pass);

var_dump($bd);