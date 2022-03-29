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
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

                <div class="top-modal">
                    <button type="button" class="btn-close btn-close-white fermeture" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h5 class="txt-jaune" id="exampleModalLabel">Se connecter</h5>
                    <h6 class="txt-blanc" id="exampleModalLabel">Veuillez saisir votre identifiant et votre mot de passe !</h6>
                </div>
                <div  class="bot-modal">
                    <div class="espace">
                        <input class="box" type="text" id="id" name="Identifiant" placeholder="Adresse mail" size="30" required minlength="">
                        <br>
                        <input class="box" type="password" id="mdp" name="Password" placeholder="Mot de passe" size="30" required minlength="8">
                    </div>
                    <h6 class="txt-blanc"><a href="#mdpoublie" class="jaune">Mot de passe oublié ?</a></h6>
                    <div class="espace2">
                        <input id="btn-color" class="btn btn-warning btn-seco" type="submit" value="Se connecter">
                    </div>
                </div>

        </div>
    </div>
</div>

<!-- Modal du mdp oublié -->
<div class="modal fade" id="mdpoublie" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

                <div class="top-modal">
                    <button type="button" class="btn-close btn-close-white fermeture" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h5 class="txt-jaune" id="exampleModalLabel">Mot de passe oublié ?</h5>
                    <h6 class="txt-blanc" id="exampleModalLabel">Veuillez contacter un administrateur par mail</h6>
                </div>
                <div  class="bot-modal">
                    <div class="espace">
                        <li class="mail"><a href="valentin.campagne@viacesi.fr" class="email">valentin.campagne@viacesi.fr</a></li>
                        <li class="mail"><a href="nathan.szusciak.viacesi.fr" class="email">nathan.szusciak.viacesi.fr</a></li>
                        <li class="mail"><a href="benoit.savary@viacesi.fr" class="email">benoit.savary@viacesi.fr</a></li>
                        <li class="mail"><a href="thomas.blondel@viacesi.fr" class="email">thomas.blondel@viacesi.fr</a></li>
                        <li class="mail"><a href="arthur.kubiak@viacesi.fr" class="email">arthur.kubiak@viacesi.fr</a></li>
                    </div>
                    <h6 class="txt-blanc" id="exampleModalLabel">Vous avez un compte ? <a href="#seco" class="jaune">Se connecter</a></h6>
                </div>

        </div>
    </div>
</div>