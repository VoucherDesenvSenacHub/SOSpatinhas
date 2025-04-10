<?php
session_start();
$tipoUsuario = isset($_SESSION['tipo']) ? $_SESSION['tipo'] : 'visitante';
$pagina = isset($_GET['page']) ? $_GET['page'] : 'paginaInicio';

$paginasRestritas = [
    'Admin' => [
        'perfilAdm',
        'cadastrarAdocao',
        'cadastrarArrecadacao',
        'cadastrarEventos',
        'cadastrarMembro',
        'editarAdocao',
        'editarArrecadacao',
        'editarEventos',
        'editarPerfilAdm',
        'editarPerfilMembro',
        'frmPreenchido',
        'listaAdocao',
        'listaArrecadacao',
        'listaEvento',
        'listaFormulario',
        'listaMembro',
        'listaUsuario'
    ],
    'Usuario' => [
        'editarPerfilUsuario',
        'frmAdocao',
        'perfilUsuario'
    ]
];

$pastaAdm = "views/adm/";
$pastaUser = "views/user/";
$pastaComp = "views/compartilhada/";

function incluirPagina($pagina, $tipo = 'compartilhada') {
    global $pastaAdm, $pastaUser, $pastaComp;

    if ($tipo === 'user') {
        $pasta = $pastaUser;
    } elseif ($tipo === 'admin') {
        $pasta = $pastaAdm;
    } else {
        $pasta = $pastaComp;
    }

    $arquivo = $pasta . $pagina . ".php";
    if (file_exists($arquivo)) {
        include($arquivo);
    } else {
        header("HTTP/1.0 404 Not Found");
        include("views/404.php");
    }
}

if (isset($paginasRestritas[$tipoUsuario]) && in_array($pagina, $paginasRestritas[$tipoUsuario])) {
    if ($tipoUsuario === 'Admin') {
        switch ($pagina) {
            case "perfilAdm":
            case "perfilMembro":
            case "cadastrarAdocao":
            case "cadastrarArrecadacao":
            case "cadastrarEventos":
            case "cadastrarMembro":
            case "editarAdocao":
            case "editarArrecadacao":
            case "editarEventos":
            case "editarPerfilAdm":
            case "editarPerfilMembro":
            case "frmPreenchido":
            case "listaAdocao":
            case "listaArrecadacao":
            case "listaEvento":
            case "listaFormulario":
            case "listaMembro":
            case "listaUsuario":
                incluirPagina($pagina, 'admin');
                break;
            default:
                echo "<script>alert('Acesso Negado: Página não reconhecida.');</script>";
        }
    } elseif ($tipoUsuario === 'Usuario' || $tipoUsuario === 'Admin') {
        switch ($pagina) {
            case "editarPerfilUsuario":
            case "frmAdocao":
            case "perfilUsuario":
                incluirPagina($pagina, 'user');
                break;
            default:
                echo "<script>alert('Acesso Negado: Página não reconhecida para este usuário.');</script>";
        }
    }
} else {
    switch ($pagina) {
        case "adocao":
        case "arrecadacao":
        case "cadastrousuario":
        case "confirmacaoEmail":
        case "detalhesEvento":
        case "developers":
        case "esqueciSenha":
        case "eventos":
        case "infoAnimal":
        case "login":
        case "loginAdm":
        case "novaSenha":
            incluirPagina($pagina, 'user');
            break;
        case "blog":
        case "comoAjudar":
        case "quemSomos":
        case "paginaInicio":
            incluirPagina($pagina, 'compartilhada');
            break;
        default:
            header("HTTP/1.0 404 Not Found");
            incluirPagina("404", 'admin');
            break;
    }
}
?>
