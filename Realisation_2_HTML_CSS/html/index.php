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
    <div id="carouselExampleIndicators" class="container carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.lidl-recettes.fr/var/site/storage/images/2/4/4/9/89442-3-fre-FR/Onigiri.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.toutvert.fr/wp-content/uploads/2019/09/kimchi-1280x720.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.ma-grande-taille.com/wp-content/uploads/2021/02/recette-gyoza.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="container mt-3">

        <div class="row">
            <div class="col-lg-3 col-md-6 offset-md-0 offset-sm-1 col-sm-10 offset-sm-1 my-lg-0 my-2">
                <div class="card"> <img class="card-img-top" src="../img/produit/150/nouille/nouilles_instantanees_boeuf_Tung_Yi_85g_F150.jpg" alt="nouilles shanghai Longevity 300g" width="150">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="d-flex flex-column">
                                <div class="h6 font-weight-bold">Nouilles shanghai Longevity 300g</div>
                                <div class="text-muted">0€ <sup>75</sup></div>
                            </div>
                            <button class="btn btn-light" onclick="addToCart()">
                                <input type="hidden" class="home_product_qty_1" value="1">
                                <img class="add_to_cart_img" src="../img/logo&icon/cart_icon.png" alt="add_to_cart">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'foot.html';
    ?>
    <script src="http://localhost/Realisation_fil_rouge/Realisation_2_HTML_CSS/js/index.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>