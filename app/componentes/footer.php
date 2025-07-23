<footer class="footer">
    <div class="footer-content">
        <div class="footer-section logo-section">
            <div class="logo"></div>
            <img src="public/images/icons/bandeira.png" alt="" class="bandeira">
            <h2>SOS Patinhas</h2>
            <p>Ong de animais,<br>sem fins lucrativos.</p>
        </div>
        <div class="footer-section">
            <ul>
                <li><a href="/SOSPatinhas/">Ande pelo site :)</a></li>
                <li><a href="adocao">Adote um pet!</a></li>
                <li><a href="comoajudar">Doe Agora</a></li>
                <li><a href="eventos">Eventos</a></li>
                <li><a href="quemsomos">Quem somos</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Contato</h3>
            <div class="contact-info">(67) 99222-1411</div>
            <div class="contact-info">suporte@sospatinhas.com</div>
            <div class="contact-info">@sospatinhas</div>
            <div class="contact-info">@sospatinhas</div>
            <div class="contact-info">@sospatinhas</div>
        </div>
        <div class="footer-section">
            <h3>Quero ser colaborador/patrocinador</h3>
            <a href="https://web.whatsapp.com/" class="cta-button">COLABORADOR</a>
            <h3>Quero ser voluntário(a)</h3>
            <a href="https://web.whatsapp.com/" class="cta-button">VOLUNTÁRIO</a>
        </div>
    </div>
    <div class="footer-bottom">
        Desenvolvido por <a href="141">141</a> &nbsp;&nbsp;&nbsp; Copyright © 2025 SOS Patinhas
    </div>
</footer>

<style>
    .footer {
    background: linear-gradient(135deg, #4a9b8e, #5fb3a3);
    color: white;
    padding: 40px 20px 20px;
    width: 100%;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 40px;
    align-items: start;
}

.footer-section h3 {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 15px;
}

.footer-section ul {
    list-style: none;
}

.footer-section ul li {
    margin-bottom: 8px;
}

.footer-section ul li a {
    color: white;
    text-decoration: none;
    font-size: 14px;
    opacity: 0.9;
    transition: opacity 0.3s ease;
}

.footer-section ul li a:hover {
    opacity: 1;
    text-decoration: underline;
}

.logo-section {
    text-align: center;
}

.log {
    width: 80px;
    height: 80px;
    background-color: #d3d3d3;
    border-radius: 50%;
    margin: 0 auto 15px;
}

.logo-section h2 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 8px;
}

.logo-section p {
    font-size: 14px;
    opacity: 0.9;
    line-height: 1.4;
}

.contact-info {
    display: flex;
    align-items: center;
    margin-bottom: 8px;
    font-size: 14px;
}

.contact-info::before {
    content: '';
    width: 16px;
    height: 16px;
    background-color: white;
    border-radius: 50%;
    margin-right: 10px;
    flex-shrink: 0;
}

.cta-button {
    background-color: rgba(255, 255, 255, 0.2);
    border: 2px solid rgba(255, 255, 255, 0.3);
    color: white;
    padding: 12px 24px;
    border-radius: 25px;
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
    display: inline-block;
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

.cta-button:hover {
    background-color: rgba(255, 255, 255, 0.3);
    border-color: rgba(255, 255, 255, 0.5);
}

.footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    margin-top: 30px;
    padding-top: 20px;
    text-align: center;
    font-size: 13px;
    opacity: 0.8;
}

.footer-bottom a {
    color: #ffd700;
    text-decoration: none;
    font-weight: bold;
}

img.bandeira{
  width: 70%;
  height: 50%;
}


.highlight {
  color: #ff6a6a;
}
</style>