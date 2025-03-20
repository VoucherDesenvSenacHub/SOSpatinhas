<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

    footer {
        width: 100%;
        position: relative; 
        z-index: 1200;
        box-shadow: 0px -4px 10px rgba(0, 0, 0, 0.2);
    }

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

    .mobile-footer-top {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        width: 100%;
        padding: 15px 0;
    }

    .mobile-footer .footer-logo img {
        width: 120px;
        height: auto;
        margin-bottom: 5px;
    }

    .mobile-footer .footer-links-img {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin: 5px 0;
        padding: 0;
    }
    .mobile-footer .footer-links-img a {
        text-decoration: none;
    }
    .mobile-footer .footer-links-img a img {
        width: 30px;
        height: auto;
    }

    .mobile-footer .voucherDesenv {
        text-align: center;
        margin-top: 10px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        border-bottom: 1px solid white;
        display: inline-block;
    }

    @media (min-width: 769px) {
        .footer-desktop { display: flex; }
        .mobile-footer { display: none; }
    }
</style>

<footer>
    
    <div class="footer-desktop">
        <div class="container">
            <div class="footer-lula-esquerda">© 2025 Voucher Desenv. 141</div>
            <a class="footer-logo" href="./paginaInicio.php">
                <img src="../images/Logo_Footer.png" alt="SOS Patinhas">
            </a>
            <div class="footer-balsonaro-direita">
                <a href="https://www.facebook.com/?locale=pt_BR">
                    <img src="../images/icons/facebookBranco.png" alt="Facebook">
                </a>
                <a href="https://www.instagram.com">
                    <img src="../images/icons/instagramBranco.png" alt="Instagram">
                </a>
            </div>
        </div>
    </div>

    
    <div class="mobile-footer">
        
        <div class="mobile-footer-top">
            <a class="footer-logo" href="./paginaInicio.php">
                <img src="../images/Logo_Footer.png" alt="SOS Patinhas">
            </a>
            <div class="footer-links-img">
                <a href="https://www.facebook.com/?locale=pt_BR">
                    <img src="../images/icons/facebookBranco.png" alt="Facebook">
                </a>
                <a href="https://www.instagram.com">
                    <img src="../images/icons/instagramBranco.png" alt="Instagram">
                </a>
            </div>
        </div>
        
        <div class="voucherDesenv">© 2025 Voucher Desenv. 141</div>
    </div>
</footer>