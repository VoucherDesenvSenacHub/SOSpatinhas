<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome= trim($_POST['nome']);
    $cpf= trim($_POST['cpf']);
    $rg= trim($_POST['rg']);
    $email= trim($_POST['email']);
    $dtNasc= trim($_POST['dtNasc']);
    $ddd= trim($_POST['ddd']);
    $telefone= trim($_POST['telefone']);
    $senha= trim($_POST['senha']);

    $usersFile = '../script/userData.json';
    $users = [];

    if (file_exists($usersFile)) {
        $jsonData = file_get_contents($usersFile);
        $users = json_decode($jsonData, true);
    }

    foreach ($users as $user) {
        if ($user['email'] === $email) {
            echo "Email já cadastrado.";
            exit();
        }
    }

    $hashedPassword = password_hash($senha, PASSWORD_DEFAULT);

    $novoUser  = [
        'nome' => $nome,
        'cpf' => $cpf,
        'rg' => $rg,
        'email' => $email,
        'dtNasc' => $dtNasc,
        'ddd' => $ddd,
        'telefone' => $telefone,
        'senha' => $hashedPassword
    ];

    $users[] = $novoUser ;

    file_put_contents($usersFile, json_encode($users, JSON_PRETTY_PRINT));

    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="../../public/css/cadastroUsuario.css">
    <link rel="stylesheet" href="../../public/css/default.css">
    
</head>

<body>
    <?php include('../../public/componentes/navbar.php')?>
    
    <section class="corpo-container">
        <h1>Cadastro</h1>
        <form method="POST" action="" class="form" id="formCadastro">
            <input type="text" name="nome" placeholder="Nome Completo*" required>
            
            <div class="divInputs">
                <input type="text" name="cpf" placeholder="CPF*" required>           
                <input type="text" name="rg" placeholder="RG*" required>
            </div>
            
            <div class="divInputs">
                <input type="email" name="email" placeholder="Email*" required>
                <input type="date" name="dtNasc" placeholder="Data de Nascimento*" required>
            </div>
            
            <div id="divTelefone">
                <input id="inputDDD" type="text" name="ddd" placeholder="DDD*" required>
                <input id="inputTelefone" type="text" name="telefone" placeholder="Telefone*" required>
            </div>
            
            <input type="password" name="senha" placeholder="Senha:" required>

            <?php
                $funcaoClick = "submitComValidacao('formCadastro')";
                $titulo = "Cadastrar";
                include('../../public/componentes/componenteButton.php');
            ?>
        </form>
        <p>Já tem uma conta? <a href="login.php">Login</a></p>
   
    </section>
</body>
<?php include('../../public/componentes/footer.php'); ?>
</html> 