<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script async src="/cdn-cgi/bm/cv/669835187/api.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/be9c976c2d.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>CESI Stage</title>
</head>
<body>

    <?php include 'Header_nonconnecte.php'; ?>
    <?php include 'sidebar_nonconnecte.php'; ?>

    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="presentation" src="img/presentation.png" alt="Image présentation">

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <p><a id="btn-carousel" class="btn btn-warning" href="#presentation">Présentation</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="offres" src="img/offres.png" alt="Image offres">

                    <div class="container">
                        <div class="carousel-caption">
                            <p><a id="btn-carousel" class="btn btn-warning" href="Offres.php">Offres de stage</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="entreprises" src="img/entreprises.png" alt="Image entreprises">

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <p><a id="btn-carousel" class="btn btn-warning" href="Entreprises.php">Entreprises</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <br>
        <br>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 justify-content-center">
                <div id="presentation" class="card" style="width: 18rem;">
                    <img src="img/img-presentation.png" class="card-img-top" alt="Image de présentation">
                    <div class="card-body">
                        <h5 class="card-title cover">Présentation</h5>
                        <p class="card-text">Ce site permet de référencer toutes les offres de stage porposées par les entreprises recensées par CESI. En vous connectant, vous pourrez trouver des offres qui correspondent à votre profil.</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/img-ofrres.png" class="card-img-top" alt="Image d'offres d'entreprises">
                    <div class="card-body">
                        <h5 class="card-title cover">Offres de stage</h5>
                        <p class="card-text">Retrouvez les offres de stage les plus récentes en cliquant ci-dessous.</p>
                        <a href="Offres.php" class="btn btn-warning btn-color">Offres de stage</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/img-entreprises.png" class="card-img-top" alt="Image d'entreprises">
                    <div class="card-body">
                        <h5 class="card-title cover">Entreprises</h5>
                        <p class="card-text">Retrouvez la liste des entreprises qui recrutent en cliquant ci-dessous.</p>
                        <a href="Entreprises.php" class="btn btn-warning btn-color">Entreprises</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <br>

    <?php include 'Cookies.php' ?>
    <?php include 'Footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/sidebar.js"></script>
</body>
</html>