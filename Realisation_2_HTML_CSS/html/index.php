<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Votre shop produit alimentaire asiatique, livraison gratuite dès 50€ ...">
    <link rel="icon" type="image/x-icon" href="../img/logo&icon/logo1.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
    <title>ShopyMe - alimentaire asiatique</title>
</head>

<body>
    <?php
    include 'head.html';
    include 'navi.html';
    ?>

    <div class="slideshow-container">
        <div class="mySlides fade">
            <img class="img-shadow" src="https://www.lidl-recettes.fr/var/site/storage/images/2/4/4/9/89442-3-fre-FR/Onigiri.jpg" height="500">
        </div>
        <div class="mySlides fade">
            <img class="img-shadow" src="https://www.toutvert.fr/wp-content/uploads/2019/09/kimchi-1280x720.jpg" height="500">
        </div>
        <div class="mySlides fade">
            <img class="img-shadow" src="https://www.ma-grande-taille.com/wp-content/uploads/2021/02/recette-gyoza.jpg" height="500">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <div class="shadowDot">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
    </div>

    <?php
    include 'foot.html';
    ?>
    <script src="http://localhost/Realisation_fil_rouge/Realisation_2_HTML_CSS/js/index.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>