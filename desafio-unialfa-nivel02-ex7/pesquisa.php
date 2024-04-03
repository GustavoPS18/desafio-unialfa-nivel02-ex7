<?php
    $servidor = "localhost";
    $usuario  = "root";
    $senha    = "";
    $banco    = "desafio07";

    
    try {
        $pdo = new PDO("mysql:host={$servidor};dbname={$banco};port=3306;charset=utf8;",$usuario,$senha);
    } catch (Exception $e) {
        echo "<p>Erro ao tentar conectar</p>";
        echo $e->getMessage();
    }
    $conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}


$sql = "SELECT regiao, descricao, status FROM pesquisa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["regiao"] . "</td><td>" . $row["descricao"] . "</td><td>" . $row["status"] . "</td></tr>";
    }
} else {
    echo "<tr><td colspan='3'>Nenhum resultado encontrado.</td></tr>";
}
$conn->close();
?>