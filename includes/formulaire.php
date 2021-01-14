<?php
$result_form = $erreur = [
    "civilite" => '',
    "nom-utilisateur" => '',
    "prenom-utilisateur" => '',
    "mail-utilisateur" => '',
    "raison" => '',
    "msg-utilisateur" => ''
];
$civilite_choisie = [
    'M'     => '',
    'Mme'   => ''
];
$raison_choisie = [
    'emploi'    => '',
    'infos'     => '',
    'presta'    => ''
];

$erreur_presente = false;
if (!empty($_POST)) {
    $result_form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    if ($result_form['civilite'] != "M." && $result_form['civilite'] != "Mme") {
        $erreur['civilite'] = "Merci de choisir votre civilité";
        $erreur_presente = true;
    } else {
        switch ($result_form['civilite']){
            case "M.":
                $civilite_choisie['M'] = "selected";
                break;
            case "Mme":
                $civilite_choisie['Mme'] = "selected";
                break;
        }
    }
    if ($result_form['nom-utilisateur'] == '') {
        $erreur['nom-utilisateur'] = "Votre nom est nécessaire";
        $erreur_presente = true;
    }
    if ($result_form['prenom-utilisateur'] == '') {
        $erreur['prenom-utilisateur'] = "Votre prénom est nécessaire";
        $erreur_presente = true;
    }
    if ($result_form['mail-utilisateur'] == '') {
        $erreur['mail-utilisateur'] = "Merci de renseigner votre adresse email";
        $erreur_presente = true;
    } else {
        // validation de l'adresse mail
        $mail_valide = filter_var($result_form['mail-utilisateur'], FILTER_VALIDATE_EMAIL);
        if (!$mail_valide) {
            $erreur['mail-utilisateur'] = "Votre adresse mail n'est pas valide";
            $erreur_presente = true;
        } else {
            $result_form['mail-utilisateur'] = $mail_valide;
        }
    }
    if (!isset($result_form['raison'])) {
        $erreur['raison'] = "Choisissez un motif de contact !";
        $erreur_presente = true;
    } elseif ($result_form['raison'] != "emploi" && $result_form['raison'] != "infos" && $result_form['raison'] != "presta") {
        $erreur['raison'] = "Pour quelle raison me contactez-vous ?";
        $erreur_presente = true;
    } else {
        switch ($result_form['raison']){
            case "emploi":
                $raison_choisie['emploi'] = "checked";
                break;
            case "infos":
                $raison_choisie['infos'] = "checked";
                break;
            case "presta":
                $raison_choisie['presta'] = "checked";
                break;
        }
    }
    if (strlen($result_form['msg-utilisateur']) < 5 ) {
        $erreur['msg-utilisateur'] = "Merci de taper un message plus explicite";
        $erreur_presente = true;
    }

    if (!$erreur_presente) {
        $sanitized = implode(" ", $result_form);
        $filename = "contact/contact_".date("Y-m-d-H-i-s").".txt";
        file_put_contents($filename, $sanitized, FILE_APPEND);
        $result_form = array_fill(0, count($result_form), '');
    }
}