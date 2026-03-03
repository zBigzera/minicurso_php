<?php
session_start(); // inicia sessão

$compras = [
    ["produto" => "Arroz", "preco" => 15.50],
    ["produto" => "Leite", "preco" => 4.30]
];

// Inicializando lista de compras se ainda não existir
if (!isset($_SESSION['compras'])) {
    $_SESSION['compras'] = $compras;
}

$compras = $_SESSION['compras'];

// Função para adicionar item
function adicionarItem($produto, $preco) {
    if ($produto !== "" && is_numeric($preco)) {

        $novaCompra = ["produto" => $produto, "preco" => $preco];

        // [] adiciona um item no final do array, igual ao array_push ou .push do JavaScript
        $_SESSION['compras'][] = $novaCompra;

        return true;
    }

    return false;
}

// Processando formulário
if (isset($_POST['adicionar'])) {

    $sucesso = adicionarItem($_POST['produto'], $_POST['preco']);
    
    if ($sucesso) {
        echo "Produto adicionado com sucesso!";
    } else {
        echo "Erro: Produto ou preço inválido!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Compras</title>
</head>
<body>
    <h1>Minha Lista de Compras</h1>

    <!-- Formulário para adicionar item -->
    <form method="POST">
        <input type="text" name="produto" placeholder="Produto">
        <input type="number" step="0.01" name="preco" placeholder="Preço">
        <button type="submit" name="adicionar">Adicionar</button>
    </form>

    <!-- Exibindo itens -->
    <table border="1" cellpadding="5">
        <tr>
            <th>Produto</th>
            <th>Preço (R$)</th>
        </tr>
        <?php foreach ($compras as $item): ?>
            <tr>
                <td><?= htmlspecialchars($item['produto']) ?></td>
                <td><?= number_format($item['preco'], 2, ',', '.') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- Total -->
    <?php
    $total = 0;
    foreach ($compras as $item) {
        $total += $item['preco'];
    }
    ?>
    <p><strong>Total: R$ <?= number_format($total, 2, ',', '.') ?></strong></p>
</body>
</html>
