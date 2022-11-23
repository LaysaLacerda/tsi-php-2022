<?php

require_once '../bancoDeDados/conecta.php';

$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];

$stmt = $bd->prepare("  UPDATE aluno 
                        SET nome = :nome,
                            turno = :turno,
                            inicio = :inicio
                        WHERE 
                            id = :id");
                            