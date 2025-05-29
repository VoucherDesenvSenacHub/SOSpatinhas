<?php 
    $taLogado = isset($_SESSION['taLogado']) && $_SESSION['taLogado'] === true; 
    $isAdm = isset($_SESSION['id']) && $_SESSION['id'] === "Admin";
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
    <link rel="stylesheet" href="public/css/default.css">
    <link rel="icon" type="image/png" href="public/images/icons/favicon.png">
</head>
<body>
<?php include('app/componentes/navbar.php'); ?>

<?php if ($isAdm): ?>
    <?php include('app/componentes/sidebarAdm.php'); ?>
<?php endif; ?>
    


<section class="corpo container" >