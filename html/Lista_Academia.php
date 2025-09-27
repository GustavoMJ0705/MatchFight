<?php
$host = 'localhost'; 
$dbname = 'matchfight'; 
$username = 'root'; 
$password = 'root'; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=3307;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Consulta academias
$selectAcademia = "SELECT * FROM tb_perfil_academia";
$stmt = $pdo->prepare($selectAcademia);
$stmt->execute();
$academias = $stmt->fetchAll(PDO::FETCH_ASSOC);




function exibirAcademias($academias) {
    if (count($academias) > 0) {
        foreach ($academias as $academia) {
            echo '<div class="card">';
            echo '<img src="../img/afapm_jiu.png" alt="Academia">';
            echo '<div class="card-content">';
            echo '<h3>' . htmlspecialchars($academia['nm_academia']) . '</h3>';
            echo '<p>' .
                htmlspecialchars($academia['ds_rua']) . ', '
                . htmlspecialchars($academia['ds_bairro']) . ', '
                . htmlspecialchars($academia['ds_cidade']) . ' - '
                . htmlspecialchars($academia['ds_estado']) . '<br>'
                . 'Numero: ' . htmlspecialchars($academia['nr_numero_endereco']) .
            '</p>';
            echo '<button><a href="../html/home_dojo.php">Ver academia</a></button>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<p>Sem academias cadastradas</p>';
    }
}


}
catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
