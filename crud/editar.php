<?php

//Busca o código que conecta ao SGBD
require_once '../bancoDeDados/conecta.php';
//include_once() não gera erro fatal se não existir 

$id = $_POST['Edit'] ?? 0;

$bd->exec('SELECT id, nome, turno, inicio FROM aluno WHERE id = $id');

//Dados do HTML
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];
    

//UPDATE 
//Fixo id 5 pq é o número do meu registro
$objConsulta = $bd->prepare('UPDATE aluno
                SET nome = :nome,
                    turno = :turno,
                    inicio = :inicio
                WHERE id = 5');

//substitui os rótulos da select (ex: nome, turno..) pelos dados inseguros do usuário
$objConsulta->bindParam('nome', $nome);
$objConsulta->bindParam('turno', $turno);
$objConsulta->bindParam('inicio', $inicio);

$response = $objConsulta->execute();
var_dump($response);