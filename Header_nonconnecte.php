<header class="p-3 bg text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="Accueil.php" class="image">
                <img class="logo" src="img/logo-CESI.png" alt="Logo CESI">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="Accueil.php" class="nav-link px-2 text-white surbrillance">Accueil</a></li>
                <li><a href="Offres.php" class="nav-link px-2 text-white surbrillance">Offres de stage</a></li>
                <li><a href="Entreprises.php" class="nav-link px-2 text-white surbrillance">Entreprises</a></li>
            </ul>

            <div class="text-end">
                <button type="button" id="btn-color" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#seco">Se connecter</button>
            </div>
        </div>
    </div>
</header>

<!-- Modal de la connexion -->
<div class="modal fade" id="seco" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php include 'seco.php'; ?>
</div>

<!-- Modal du mdp oublié -->
<div class="modal fade" id="mdpoublie" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php include 'mdpoublie.php'; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>