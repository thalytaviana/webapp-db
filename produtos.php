<?php
include 'dbinfo.inc';
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES ('$nome', '$preco', '$quantidade')";
    mysqli_query($conn, $sql);
}

$result = mysqli_query($conn, "SELECT * FROM produtos");
?>

<html>
<body>
<h2>Cadastrar Produto</h2>
<form method="POST">
    Nome: <input type="text" name="nome"><br>
    Preço: <input type="number" step="0.01" name="preco"><br>
    Quantidade: <input type="number" name="quantidade"><br>
    <input type="submit" value="Cadastrar">
</form>

<h2>Lista de Produtos</h2>
<table border="1">
<tr>
    <th>ID</th><th>Nome</th><th>Preço</th><th>Quantidade</th><th>Data Criação</th>
</tr>
<?php while ($row = mysqli_fetch_assoc($result)): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['nome'] ?></td>
    <td><?= $row['preco'] ?></td>
    <td><?= $row['quantidade'] ?></td>
    <td><?= $row['data_criacao'] ?></td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>
