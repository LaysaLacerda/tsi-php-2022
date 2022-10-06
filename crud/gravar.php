<?php

//Busca o código que conecta ao SGBD
require_once '../bancoDeDados/conecta.php';
//include_once() não gera erro fatal se não existir 

//Dados do HTML
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];
    

//DOCUMENTAÇÃO DA FUNÇÃO https://www.php.net/manual/pt_BR/class.pdo.php
//INSERT
$objConsulta = $bd->prepare('INSERT INTO aluno
                (nome, turno, inicio)
                VALUE
                (:nome, :turno, :inicio)');


//UPDATE 
//Fixo id 5 pq é o número do meu registro
$objConsulta = $bd->prepare('UPDATE aluno
                SET nome = :nome,
                    turno = :turno,
                    inicio = :inicio
                WHERE id = 5');

/* 
A função $bd->prepare()retorna outra variavel (objeto), essa outra 
variável junta os dados do usuário com a consulta SQL
*/

//substitui os rótulos da select (ex: nome, turno..) pelos dados inseguros do usuário
$objConsulta->bindParam('nome', $nome);
$objConsulta->bindParam('turno', $turno);
$objConsulta->bindParam('inicio', $inicio);

$response = $objConsulta->execute();
var_dump($response);