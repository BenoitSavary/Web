<?php
    $off = (int)@$_GET["off"];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_offres.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script async src="/cdn-cgi/bm/cv/669835187/api.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/be9c976c2d.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>CESI Offres de stage</title>
</head>
<body>
    @if (Route::has('login'))
        @auth
            @include ('Header_connecte')
            @include ('sidebar_connecte')
        @else
            @include ('Header_nonconnecte')
            @include ('sidebar_nonconnecte')
        @endauth
    @endif


    <h2 id="h2content">Offres de stage</h2>
    <main id="main_offres">

        <div id="dropdown_localite" class="filtre">
        <select>
            <option>Localité</option>
            <option class="test">Fournisseur1</option>
            <option>Fournisseur2</option>
            <option>Fournisseur3</option>
        </select>
        </div>
        <div id="dropdown_competence" class="filtre">
        <select>
            <option>Compétence</option>
            <option class="test">Fournisseur1</option>
            <option>Fournisseur2</option>
            <option>Fournisseur3</option>
        </select>
        </div>
        <div id="dropdown_duree" class="filtre">
        <select>
            <option>Durée</option>
            <option class="test">Fournisseur1</option>
            <option>Fournisseur2</option>
            <option>Fournisseur3</option>
        </select>
        </div>
        <div id="dropdown_entreprise" class="filtre">
        <select>
            <option>Entreprise</option>
            <option class="test">Fournisseur1</option>
            <option>Fournisseur2</option>
            <option>Fournisseur3</option>
        </select>
        </div>
        <div id="dropdown_remuneration" class="filtre">
        <select>
            <option>Rémunération</option>
            <option class="test">Fournisseur1</option>
            <option>Fournisseur2</option>
            <option>Fournisseur3</option>
        </select>
        </div>
        <div id="dropdown_date_offre" class="filtre">
        <select>
            <option>Date de l'offre</option>
            <option class="test">Fournisseur1</option>
            <option>Fournisseur2</option>
            <option>Fournisseur3</option>
        </select>
        </div>
        <div id="dropdown_places" class="filtre">
        <select>
            <option>Nombres de places</option>
            <option class="test">Fournisseur1</option>
            <option>Fournisseur2</option>
            <option>Fournisseur3</option>
        </select>
        </div>


        <div id="boutons_offres">
        @if(Gate::allows('access_admin',) or Gate::allows('access_pilote') or Gate::allows('access_delegue'))
        <a href="formulaireOffre" id="btn_add" class="btn btn-warning btn-color">Ajouter</a>
        <a href="formulaireOffre" id="btn_update" class="btn btn-warning btn-color">Modifier</a>
        <a href="" id="btn_delete" class="btn btn-warning btn-color">Supprimer</a>
        @endif
        </div>

        <div id="section_offres"></div>

        <div id="details_offres"></div>

        <div id="before_details_offres">
            <p>Cliquez sur une offre pour afficher ses détails.</p>
        </div>

        <div id="main">
            <div id="pagination">
              <a href="#" onclick='getUsers(pagePrecedente)'>&laquo;</a>
              <a class="active" href="#">1</a>
              <a href="#">8</a>
              <a href="#" onclick='getUsers(pageSuivante)'>&raquo;</a>
            </div>
        </div>

    </main>
    <input id="input_de_secours2" type="text" value="<?php echo $off ?>" style="visibility: hidden">

    <script src="js/offres.js"></script>
    <script src="js/sidebar.js"></script>
</body>
@include ('Footer')
</html>