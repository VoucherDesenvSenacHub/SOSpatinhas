<?php
session_start();
$tipoUsuario = isset($_SESSION['tipo']) ? $_SESSION['tipo'] : 'visitante';
$pagina = isset($_GET['page']) ? $_GET['page'] : 'paginaInicio';

$paginasRestritas = // Talvez criar um json com tds as pags restritas; ['editarPerfilUsuario', 'frmAdocao', 'perfilUsuario'];

if (in_array($pagina, $paginasRestritas)) {
    if ($tipoUsuario === 'Admin'){
        switch ($pagina){
            case "cadastrarAdocao":
                include("views/adm/cadastrarAdocao.php")
                break;
            case
        }
    } elseif ($tipoUsuario === 'Usuario') {
        switch ($pagina){
            case "editarPerfilUsuario":
                include("views/adm/editarPerfilUsuario.php")
                break;
            case "frmAdocao":
                include("views/adm/frmAdocao.php")
                break;
            case "perfilUsuario":
                include("views/adm/perfilUsuario.php")
                break;
        }
    } else {
        echo "<script>alert('Acesso Negado: Você não possui permissão para acessar esta página.');</script>";
    }
} else {
    switch ($pagina){
        case "adocao":
            include("views/adm/adocao.php")
            break;
        case "arrecadacao":
            include("views/adm/arrecadacao.php")
            break;
        default:
            header("HTTP/1.0 404 Not Found");
            include("views/adm/404.php")
            break
    }
}



    
// Route Handling
if ($method === 'GET') {
    if ($uri === '/') {
        // Render homepage
        require_once 'views/home.php';
    } elseif ($uri === '/adocao') {
        // Render adocao page
        require_once 'views/adocao.php';
    } elseif ($uri === '/eventos') {
        // Render eventos page
        require_once 'views/eventos.php';
    } else {
        // 404 Not Found
        http_response_code(404);
        require_once 'views/404.php';
    }
} elseif ($method === 'POST') {
    // Handle form submissions
    if ($uri === '/adocao') {
        // Process adocao form submission
        require_once 'controllers/AdocaoController.php';
        $adocaoController = new AdocaoController();
        $adocaoController->processForm();
    } else {
        // 405 Method Not Allowed
        http_response_code(405);
        require_once 'views/405.php';
    }
}

// Error Handling
try {
    // Your code here
} catch (Exception $e) {
    // Handle exceptions
    http_response_code(500);
    require_once 'views/500.php';
}
