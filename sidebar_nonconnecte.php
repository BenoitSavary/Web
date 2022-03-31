<div class="sidebar-mobile">
    <header class="bandeau">
        <a href="Accueil.php">
            <img class="logo-centrer" src="img/logo-CESI.png" alt="Logo CESI">
        </a>
    </header>
    <div class="sidebar close">
        <i class='bx bx-menu' ></i>
        <div class="logo-details">
            <a href="Accueil.php">
                <img class="logo-sidebar" src="img/logo-CESI.png" alt="Logo CESI">
            </a>
        </div>
        <ul class="nav-links">
            <li>
                <a href="Accueil.php">
                    <i class='bx bx-home' ></i>
                    <span class="link_name">Accueil</span>
                </a>
            </li>
            <li>
                <a href="Offres.php">
                    <i class='bx bxs-offer' ></i>
                    <span class="link_name">Offres de stage</span>
                </a>
            </li>
            <li>
                <a href="Entreprises.php">
                    <i class='bx bx-building-house' ></i>
                    <span class="link_name">Entreprises</span>
                </a>
            </li>
            <button type="button" class="btn btn-warning btn-color btn-seco-sidebar" data-bs-toggle="modal" data-bs-target="#seco">Se connecter</button>
        </ul>
    </div>
</div>
    <!-- Modal de la connexion -->
    <div class="modal fade" id="seco" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?php include 'seco.php'; ?>
    </div>