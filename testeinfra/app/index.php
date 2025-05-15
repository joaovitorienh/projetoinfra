'<?php
$pdo = new PDO('mysql:host=mysql;dbname=tenis_db;charset=utf8', 'root', 'root');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $preco = $_POST['preco'] ?? 0;

    if (!empty($nome) && $preco > 0) {
        $stmt = $pdo->prepare("INSERT INTO tenis (nome, preco) VALUES (?, ?)");
        $stmt->execute([$nome, $preco]);
    }
}

$tenis = $pdo->query("SELECT * FROM tenis ORDER BY id DESC")->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Tênis</title>
</head>
<body>
    <h1>Cadastro de Tênis</h1>

    <form method="post">
        <label>Nome do Tênis:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Preço:</label><br>
        <input type="number" name="preco" step="0.01" required><br><br>

        <button type="submit">Salvar</button>
    </form>

    <h2>Lista de Tênis</h2>
    <ul>
        <?php foreach ($tenis as $t): ?>
            <li><?= htmlspecialchars($t['nome']) ?> – R$ <?= number_format($t['preco'], 2, ',', '.') ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
