<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

    .footer-desktop {
        width: 100%;
        background-color: rgb(68, 128, 63);
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        display: flex;
        justify-content: center;
        position: relative; 
        z-index: 1200;
        box-shadow: 0px -4px 10px rgba(0, 0, 0, 0.2);
    }
    
    .footer-desktop .container {
        max-width: 1200px;    
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between; 
        padding: 20px 40px;  
        box-sizing: border-box;
    }

    .footer-desktop .footer-lula-esquerda {
        font-size: 14px;
        border-bottom: 1px solid white; 
        padding-bottom: 3px;
        white-space: nowrap; 
    }

    .footer-desktop .footer-logo img {
        width: 180px;   
        height: auto;
    }

    .footer-desktop .footer-balsonaro-direita {
        display: flex;
        gap: 15px;      
    }
    .footer-desktop .footer-balsonaro-direita img {
        width: 40px;    
        height: auto;
    }

    .mobile-footer {
        text-align: center;
        padding: 3px;
        background-color: rgb(68, 128, 63);
        color: white;
        width: 100%;
        position: relative;
        z-index: 1200;
        box-shadow: 0px -4px 10px rgba(0, 0, 0, 0.2);
    }
    .mobile-footer .footer-links {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
        align-items: center;
    }
    .mobile-footer .footer-links a {
        text-decoration: none;
        color: white;
        width: max-content;
        padding-bottom: 5px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .mobile-footer .footer-links-img a,
    .mobile-footer .footer-logo img {
        margin-top: 1rem;
        margin-bottom: 1rem;
    }
    .mobile-footer .footer-links-img a {
        display: inline-block;
        margin-right: 10px;
        text-decoration: none;
    }
    .mobile-footer .footer-links-img a:last-child {
        margin-right: 0;
    }
    .mobile-footer .footer-links-bottom {
        display: flex;
        justify-content: center;
        gap: 10px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        margin-top: 5px;
    }
    .mobile-footer .footer-links-bottom a {
        text-decoration: none;
        color: white;
        display: inline-block;
    }

    @media (max-width: 768px) {
        .mobile-footer {
            text-align: center;
            padding: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .mobile-footer .footer-logo img {
            width: 120px;
            height: auto;
            margin-bottom: 5px;
        }
        .mobile-footer .footer-links {
            display: none;
        }
        .mobile-footer .footer-links-img {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 5px 0;
        }
        .mobile-footer .footer-links-img a img {
            width: 30px;
            height: auto;
        }
        .mobile-footer .footer-links-bottom {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            font-size: 13px;
            margin-top: 5px;
        }
    }

    @media (min-width: 769px) {
        .footer-desktop { display: block; }
        .mobile-footer { display: none; }
    }
    @media (max-width: 768px) {
        .footer-desktop { display: none; }
        .mobile-footer { display: block; }
    }
</style>

<footer>
<!-- footer pc -->
    <div class="footer-desktop">
        <div class="container">
            <div class="footer-lula-esquerda">© 2025 Voucher Desenv. 141</div>
            <a class="footer-logo" href="./paginaInicio.php">
                <img src="../images/Logo_Footer.png" alt="SOS Patinhas">
            </a>
            <div class="footer-balsonaro-direita">
                <a href="#">
                    <img src="../images/facebook_branco.png" alt="Facebook">
                </a>
                <a href="#">
                    <img src="../images/instagram_branco.png" alt="Instagram">
                </a>
            </div>
        </div>
    </div>

<!-- footer mobilador deitador de playhard papakill tudo fraco clipa krlll -->
    <div class="mobile-footer">
        <a class="footer-logo" href="./paginaInicio.php">
            <img src="../images/Logo_Footer.png" alt="SOS Patinhas">
        </a>
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
    </div>
</footer>