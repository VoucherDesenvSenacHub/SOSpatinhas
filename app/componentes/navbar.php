<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<header class="navbar" id="home">
    <div class="container navbar-container">
        <h1 class="logo" aria-label="Logo SOS Patinhas">
            <i class="fa-solid fa-paw"></i> <a href="/SOSPatinhas/" style="text-decoration: none; color: white;">SOS Patinhas</a>
        </h1>
        <button class="menu-toggle" aria-label="Abrir menu" id="menuToggle">
            <i class="fas fa-bars"></i>
        </button>
        <nav aria-label="Menu Principal">
            <ul class="menu" id="mainMenu">
                <li><a href="/SOSPatinhas/">Home</a></li>
                <li><a href="adocao">Adote um Pet</a></li>
                <li><a href="comoajudar">Doe Agora</a></li>
                <li><a href="eventos">Eventos</a></li>
                <li><a href="quemsomos">Sobre Nós</a></li>
                <!-- <li class="social-icons">
                    <a href="https://www.facebook.com/" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </li> -->
            </ul>
        </nav>
    </div>
</header>

<style>
.navbar {
  background-color: var(--blue);
  color: white;
  padding: var(--spacing-md) 0;
  position: sticky;
  top: 0;
  z-index: 1000;
  box-shadow: var(--shadow-sm);
}

.navbar-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
  
.logo {
  font-size: var(--font-size-xl);
  font-weight: bold;
  display: flex;
  align-items: center;
  gap: var(--spacing-sm);
}

.logo i {
  font-size: 1.2em;
}

.menu {
  display: flex;
  list-style: none;
  gap: var(--spacing-lg);
  align-items: center;
}

.menu a {
  color: white;
  text-decoration: none;
  font-weight: 600;
  padding: var(--spacing-sm) var(--spacing-md);
  border-radius: var(--border-radius-sm);
  transition: background-color var(--transition-normal);
}

.menu a:hover {
  background-color: rgba(255, 255, 255, 0.2);
}

.menu-toggle {
  display: none;
  color: white;
  font-size: var(--font-size-xl);
}

.social-icons {
  display: flex;
  gap: var(--spacing-md);
}

.social-icons a {
  font-size: var(--font-size-lg);
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform var(--transition-fast);
}

.social-icons a:hover {
  transform: translateY(-3px);
}
</style>