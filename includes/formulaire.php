<?php
$erreur = [
    "civilite" => '',
    "nom-utilisateur" => '',
    "prenom-utilisateur" => '',
    "mail-utilisateur" => '',
    "raison" => '',
    "msg-utilisateur" => ''
];
$erreur_presente = false;
if (!empty($_POST)) {
    foreach($_POST as $cle => $valeur) {
        if ($valeur == '') {
            $erreur[$cle] = "Ce champ doit être renseigné !";
            $erreur_presente = true;
        }
    }
    if (!$erreur_presente) {
        $sanitized = implode(" ", $_POST);
        $filename = "contact/contact_".date("Y-m-d-H-i-s").".txt";
        file_put_contents($filename, $sanitized, FILE_APPEND);
    }
}