<style>
    footer {
        text-align: center;
        padding: 3px;
        background-color: rgb(68, 128, 63);
        color: white;
        width: 100%;
    }

    .footer-links{
        display: flex;
        flex-direction: column; 
        margin-bottom: 10px;
        align-items: center;    
    }
    .footer-links a{
        text-decoration: none;
        color: white;
        width: max-content;
        padding-bottom: 5px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .footer-links-img a, .footer-logo img{
        margin-top: 1rem;
        margin-bottom: 1rem;
    }
    .footer-links-img a{
        display: inline-block;
        margin-right: 10px;
        text-decoration: none;
    }
    .footer-links-img a:last-child{
        margin-right: 0;
    }
    .footer-links-bottom {
        display: flex;
        justify-content: center;
        gap: 10px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        margin-top: 5px;
    }
    .footer-links-bottom a{
        text-decoration: none;
        color: white;
        display: inline-block;
    }

    @media (max-width: 768px) {
        footer {
            text-align: center;
            padding: 15px;
            background-color: rgb(68, 128, 63);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .footer-logo img {
            width: 120px;
            height: auto;
            margin-bottom: 5px;
        }

        .footer-links {
            display: none;
        }

        .footer-links-img {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 5px 0;
        }

        .footer-links-img a img {
            width: 30px;
            height: auto;
        }

        .footer-links-bottom {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            font-size: 13px;
            margin-top: 5px;
        }
    }
</style>

<footer>
    <a class="footer-logo" href="./editarPaginaInicio.php">
        <img src="../images/Logo_Footer.png" alt="SOS Patinhas">
    </a>

    <ul class="footer-links">
        <a href="./blogEditar.php">Blog</a>
        <a href="./quemSomosEditaveis.php">Quem Somos</a>
        <a href="./comoAjudarEditavel.php">Como Ajudar</a>
        <a href="./eventos.php">Eventos</a>
        <a href="./adocao.php">Adoção</a>
    </ul>  

    <ul class="footer-links-img">
        <a href="#">
            <img src="../images/facebook_branco.png" alt="Facebook">
        </a>
        <a href="#">
            <img src="../images/instagram_branco.png" alt="Instagram">
        </a>
    </ul>
    
    <ul class="footer-links-bottom">
        <a href="#">Acessibilidade</a>
        <a href="#">Política de Privacidade</a>
        <a href="#">Termos e Condições</a>
    </ul>
</footer>