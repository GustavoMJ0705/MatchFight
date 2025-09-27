<?php
$host = 'localhost';
$dbname = 'matchfight';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=3307;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recebe os dados do formulário
    $nome = $_POST['dojoName'];
    $descricao = $_POST['dojoDescription'];
    $cep = $_POST['dojoCEP'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['dojoPhone'];
    $email = $_POST['dojoEmail'];
   
    // Verifica se já existe academia com o mesmo email
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM tb_perfil_academia WHERE ds_email = :email");
    $stmt->execute([':email' => $email]);
    $existe = $stmt->fetchColumn();

    if ($existe > 0) {
        echo '<script>alert("Já existe uma academia cadastrada com este email."); window.history.back();</script>';
        exit();
    }

    $stmt = $pdo->prepare("INSERT INTO tb_perfil_academia
            (nm_academia, ds_descricao, nr_cep, ds_rua, nr_numero_endereco, ds_bairro, ds_cidade, ds_estado, nr_telefone, ds_email)
            VALUES
            (:nome, :descricao, :cep, :rua, :numero, :bairro, :cidade, :estado, :telefone, :email)");

    $stmt->execute([
        ':nome' => $nome,
        ':descricao' => $descricao,
        ':cep' => $cep,
        ':rua' => $rua,
        ':numero' => $numero,
        ':bairro' => $bairro,
        ':cidade' => $cidade,
        ':estado' => $estado,
        ':telefone' => $telefone,
        ':email' => $email
    ]);

    header("Location: ../html/home.php");
    exit();

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
