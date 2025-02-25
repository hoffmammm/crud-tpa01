<?php
require ('pdo_con.php');

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Função para listar todos os registros do banco de dados
    function listarRegistros($pdo, $id) {
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        // Listar registros
        $registros = listarRegistros($pdo, $id);
        foreach ($registros as $registro) {
            if ($registro['id'] == $id) {
                $aux = true;
            }
        }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <?php if (isset($aux)) : ?>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $registro['id']; ?>">
            <label>Nome:</label>
            <input type="text" name="nome" value="<?php echo $registro['nome']; ?>" required>
            <br>
            <label>Email:</label>
            <input type="text" name="locals" value="<?php echo $registro['locals']; ?>" required>
            <br>
            <label>Senha:</label>
            <input type="text" name="descricao" value="<?php echo $registro['descricao']; ?>" required>
            <br>
            <input type="submit" value="Salvar">
        </form>
    <?php else : ?>
        <p>Usuario não encontrado.</p>
    <?php endif; ?>
</body>
</html>
