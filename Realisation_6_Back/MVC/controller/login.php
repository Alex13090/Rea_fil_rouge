<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

include_once('../config/config.php');
include_once('../models/users.php');

$success = 0;
$msg = "Une erreur est survenue dans le php";
$data = [];

if (!empty($_POST['email']) && !empty($_POST['password'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $verifEmail = htmlspecialchars(strip_tags($email));
    $verifPassword = htmlspecialchars(strip_tags($password));

    $itemUser = new Users();
    // je donne des valeurs aux attributs de itemUser avec les données reçues
    $itemUser->setMail($verifEmail);
    $itemUser->setPassword($verifPassword);

    // j'appelle la fonction getSingleUser qui va chercher les utilisateurs ayant le pseudo reçu
    // je stocke le retour dans une variable
    $myReturn = $itemUser->readUser();

    // puis je stocke dans une variable le résultat du décompte du nombre de ligne
    // de ce retour grâce à la fonction PHP rowCount()
    $nbrUsers = $myReturn->rowCount();

    // si aucune ligne
    if ($nbrUsers == 0) {
        $msg = "Pas d'utilisateur ayant ce pseudo trouvé, vérifiez votre saisie!!!";
        // si plus de 1 ligne
    } else if ($nbrUsers > 1) {
        $msg = "Il semblerait qu'il y ait une erreur, veuillez contacter un administrateur";
        // si seulement qu'une ligne
    } else if ($nbrUsers == 1) {
        while ($rowUser = $myReturn->fetch()) {
            extract($rowUser);
            // je compare mot de passe reçu avec celui de la BDD
            // si il ne sont pas identiques je retourne un message d'erreur
            if (!password_verify($verifPassword, $rowUser['password'])) {
                $msg = "Erreur dans votre mot de passe, veuillez recommencer!!!";
                // s'ils sont identiques je continue le log
            } else if (password_verify($itemUser->getPassword(), $rowUser['password'])) {

                $success = 1;
                $msg = "Connexion réussie";
                $data['id'] = intval($rowUser['id'], 10);
                $data['email'] = $rowUser['email'];
            }
        }
    } else {
        // je passe une valeur à la variable $msg pour traiter cette erreur
        $msg = "Veuillez remplir tous les champs!!!";
    }

    // si ma variable $success est égal à 1
    if ($success == 1) {
        // je crée un tableau qui contiendra le success, un msg et de la data
        $res = ["success" => $success, "msg" => $msg, "data" => $data];
        // puis j'encode le tout en json pour le retourner
        echo json_encode($res);
    } else {
        // sinon je retourne seulement un tableau contenant success et msg
        $res = ["success" => $success, "msg" => $msg];
        echo json_encode($res);
    }
}
