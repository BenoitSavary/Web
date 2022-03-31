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
                <br>
                <select name="roles" class="role-select">
                    <option value="0">Administrateur</option>
                    <option value="1">Étudiant</option>
                    <option value="2">Délégué</option>
                    <option value="3">Tuteur</option>
                </select>
            </div>
            <h6 class="txt-blanc"><a href="mdpoublie.php" class="jaune">Mot de passe oublié ?</a></h6>
            <div class="espace2">
                <input id="btn-color" class="btn btn-warning btn-seco" type="submit" value="Se connecter">
            </div>
        </div>
    </div>
</div>