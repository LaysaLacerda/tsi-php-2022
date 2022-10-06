<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>Formulário de cadastro</title>
</head>
<body>
    <form action="gravar.php" method="post">
	<label for="nome">Nome:</label>
    <input type="text" name="nome">
    <br>
    <label for="turno">turno:</label>
    <select name="turno" id="turno">
        <option value="">Escolha</option>
        <option value="maturino">Matutino</option>
        <option value="vespertino">Vespertino</option>
        <option value="noturno">Noturno</option>
    </select>
    <br>
    <label for="inicio">Inicio</label>
    <input type="date" name="inicio" id="inicio">
    <br>
    <input type="submit" value="Gravar">
</form>
</body>