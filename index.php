<?php
include 'dbinfo.inc';

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$conn) {
    die('Erro ao conectar com o banco: ' . mysqli_connect_error());
}

echo 'Conexão bem sucedida com RDS!';
mysqli_close($conn);
?>
