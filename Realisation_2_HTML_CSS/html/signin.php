<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Votre shop produit alimentaire asiatique, livraison gratuite dès 50€ ...">
    <link rel="icon" type="image/x-icon" href="../image/logo/logo1.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
    <title>ShopyMy - alimentaire asiatique</title>
</head>

<body>
    <?php
    include 'head.html';
    ?>

    <main class="text-center m-5">
        <section class="container w-25 mt-5 p-3 loginForm">
            <form class="d-flex flex-column p-3" method="POST" id="loginForm">
                <h1 class="mb-5 h3 text-center">Your sign in form</h1>

                <label class="mb-2" for="email">Email</label>
                <input class="mb-2" type="email" name="email" id="email" placeholder="Your Email .." size="50" />
                <label class="mb-2" for="pass">Password</label>
                <input class="mb-5" type="password" name="password" id="pass" placeholder="Your Password.." size="30" />

                <input class="mb-2 mt-5 w-50 btn btn-primary" type="submit" value="Sign in" />
            </form>
            <article class="d-flex align-items-center mt-5">
                You don't have one?
                <form action="signup.php" method="POST">
                    <input class="btn btn-light text-primary" type="submit" value="Join free now!" />
                </form>
            </article>
        </section>

    </main>

    <?php
    include 'foot.html';
    ?>
    <script src="http://localhost/Fil_rouge/Realisation_6_Back_end/MVC/views/js/login.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>