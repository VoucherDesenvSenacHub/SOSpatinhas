<?php 
    $isAdm = isset($_SESSION['taLogado']) && $_SESSION['taLogado'] === true;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <?php if(isset($cssLink)): ?>
        <link rel="stylesheet" href="<?php echo $cssLink; ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="/sospatinhas/public/css/default.css">
    <link rel="icon" type="image/png" href="/sospatinhas/public/images/icons/favicon.png">
</head>
<body>
<?php 
    $isAdm ? include('app/componentes/sidebarAdm.php') : include(__DIR__ . '/../navbar.php');
?>
    


<section class="corpo container" >