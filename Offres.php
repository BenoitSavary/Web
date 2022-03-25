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
    <title>CESI Offres de stage</title>
</head>
<body>
    <?php include 'Header_connecte.php' ?>
    <main id="main_offres">
        <!-- <iframe class="offres_liste" src="Offres_liste.php" width="45%" height="60%"></iframe> -->

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

        <div id="section_offres">
        <div class="offres" style="width:97%; height: 100px;">
            <b><p class="p_offres">Intitulé de l'offre</p></b>
            <b><p class="p_offres">Entreprise / Localisation</p></b>
            <b><p class="p_offres">Date de mise en ligne</p></b>
            <b><p class="accroche_offres">Accroche</p></b>
            <div class="rating">
	        <div class="stars">
                <i id="star_1" class="fa-solid fa-star"></i>
	        	<i id="star_2" class="fa-solid fa-star"></i>
	        	<i id="star_3" class="fa-regular fa-star"></i>
	        	<i id="star_4" class="fa-regular fa-star"></i>
	        	<i id="star_5" class="fa-regular fa-star"></i>
	        </div>
            </div>
        </div>
        <div class="offres" style="width:97%; height: 100px;">
            <b><p class="p_offres">Intitulé de l'offre</p></b>
            <b><p class="p_offres">Entreprise / Localisation</p></b>
            <b><p class="p_offres">Date de mise en ligne</p></b>
            <b><p class="accroche_offres">Accroche</p></b>
        </div>
        <div class="offres" style="width:97%; height: 100px;">
            <b><p class="p_offres">Intitulé de l'offre</p></b>
            <b><p class="p_offres">Entreprise / Localisation</p></b>
            <b><p class="p_offres">Date de mise en ligne</p></b>
            <b><p class="accroche_offres">Accroche</p></b>
        </div>
        <div class="offres" style="width:97%; height: 100px;">
            <b><p class="p_offres">Intitulé de l'offre</p></b>
            <b><p class="p_offres">Entreprise / Localisation</p></b>
            <b><p class="p_offres">Date de mise en ligne</p></b>
            <b><p class="accroche_offres">Accroche</p></b>
        </div>
        <div class="offres" style="width:97%; height: 100px;">
            <b><p class="p_offres">Intitulé de l'offre</p></b>
            <b><p class="p_offres">Entreprise / Localisation</p></b>
            <b><p class="p_offres">Date de mise en ligne</p></b>
            <b><p class="accroche_offres">Accroche</p></b>
        </div>
        <div class="offres" style="width:97%; height: 100px;">
            <b><p class="p_offres">Intitulé de l'offre</p></b>
            <b><p class="p_offres">Entreprise / Localisation</p></b>
            <b><p class="p_offres">Date de mise en ligne</p></b>
            <b><p class="accroche_offres">Accroche</p></b>
        </div>
        <div class="offres" style="width:97%; height: 100px;">
            <b><p class="p_offres">Intitulé de l'offre</p></b>
            <b><p class="p_offres">Entreprise / Localisation</p></b>
            <b><p class="p_offres">Date de mise en ligne</p></b>
            <b><p class="accroche_offres">Accroche</p></b>
        </div>
        <div class="offres" style="width:97%; height: 100px;">
            <b><p class="p_offres">Intitulé de l'offre</p></b>
            <b><p class="p_offres">Entreprise / Localisation</p></b>
            <b><p class="p_offres">Date de mise en ligne</p></b>
            <b><p class="accroche_offres">Accroche</p></b>
        </div>
        </div>

        <div id="details_offres">
            <div id="rappel" style="width: 98%; height: 15%;">
                <p>Rappel de l'offre</p>
            </div>
            <div id="details" style="width: 98%; height: 74%;">
                <p>Rappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offreRappel de l'offre</p>
            </div>
        </div>

        <div id="before_details_offres">
            <p>Cliquez sur une offre pour afficher ses détails.</p>
        </div>

        <div id="main">
            <div class="pagination">
              <a href="#">&laquo;</a>
              <a class="active" href="#">1</a>
              <a href="#">2</a>
              <a href="#">3</a> 
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#">6</a>
              <a href="#">7</a>
              <a href="#">8</a>
              <a href="#">&raquo;</a>
            </div>
        </div>

    </main>
    <?php include 'Footer.php' ?>
    <script src="js/offres.js"></script>
</body>
</html>