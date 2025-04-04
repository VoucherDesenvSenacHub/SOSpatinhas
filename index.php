<?php
session_start();
$tipoUsuario = isset($_SESSION['tipo']) ? $_SESSION['tipo'] : 'visitante';
$pagina = isset($_GET['page']) ? $_GET['page'] : 'paginaInicio';

$paginasAdm = // vai pegar o json pagsAdm - tem q criar;
$paginasUsuario = ['editarPerfilUsuario', 'frmAdocao', 'perfilUsuario'];


if (in_array($pagina, $paginasAdm)) {
    if ($tipoUsuario === 'Admin'){
        switch ($pagina){
            case "cadastrarAdocao":
                include()
                break;
            case
        }
    }
    if ($userRole === 'admin' && $page === 'admin-dashboard') {
        include('admin/admin-dashboard.php');
    } elseif ($userRole === 'user' && $page === 'user-dashboard') {
        include('user/user-dashboard.php');
    } else {
        echo "Access Denied: You do not have permission to view this page.";
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
