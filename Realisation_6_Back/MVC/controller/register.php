<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

include_once('../config/config.php');
include_once('../models/users.php');

$success = 0;
$msg = "Une erreur est survenue dans le php";
$data = [];

if (
    !empty($_POST['name'])
    && !empty($_POST['firstName'])
    && !empty($_POST['email'])
    && !empty($_POST['password'])
    && !empty($_POST['confPassword'])
) {
    $name = trim($_POST['name']);
    $firstName = trim($_POST['firstName']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confPassword = trim($_POST['confPassword']);

    if ($password !== $confPassword) {

        $msg = 'Vos mots de passe ne sont pas identiques!!!';
    } else {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $msg = "Cette adresse e-mail n'est pas valide!!!";
        } else {
            $verifName = htmlspecialchars(strip_tags($name));
            $verifFirstName = htmlspecialchars(strip_tags($firstName));
            $verifPassword = htmlspecialchars(strip_tags($password));
            $verifMail = htmlspecialchars(strip_tags($email));

            $newUser = new Users();

            $newUser->setName($verifName);
            $newUser->setFirstName($verifFirstName);
            $newUser->setPassword(password_hash($verifPassword, PASSWORD_BCRYPT));
            $newUser->setMail($verifMail);

            $userMail = $newUser->verifyMail();

            $nbrLignes = $userMail->rowCount();

            if ($nbrLignes > 0) {
                $msg = "Pseudo ou Mail déjà utlisé, veuillez renouveler votre demande avec d'autres informations";
            } else {
                if ($newUser->createUser()) {
                    $myReturn = $newUser->readUser();
                    $nbrUsers = $myReturn->rowCount();

                    if ($nbrUsers == 0) {
                        $msg = "Pas d'utilisateur ayant ce email trouvé, vérifiez votre saisie!!!";
                    } else if ($nbrUsers > 1) {
                        $msg = "Il semblerait qu'il y ait une erreur, veuillez contacter un administrateur";
                    } else if ($nbrUsers == 1) {
                        while ($rowUser = $myReturn->fetch()) {
                            extract($rowUser);

                            $success = 1;
                            $msg = "Utilisateur créé avec succès";
                            $data['id'] = intval($rowUser['id'], 10);
                            $data['name'] = $rowUser['name'];
                        }
                    }
                } else {
                    // je passe une valeur à la variable $msg pour traiter cette erreur
                    $msg = "Erreur lors de l'enregistrement, veuillez renouveler votre demande!!!";
                }
            }
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
