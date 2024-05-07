<!DOCTYPE html>
<html>
<head>
    <title>Novo cadastro</title>
</head>
<body>
    <h1>Novo Cadastro</h1>
    <form action="insert.php" method="post">
        <label>Nome do evento:</label>
        <input type="text" name="nome" required>
        <br>
        <label>local do evento:</label>
        <input type="text" name="locals" required>
        <br>
        <label>Descrição:</label>
        <input type="text" name="descricao" required>
        <br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
