<?php
$result_form = $formErrors = [
    "civilite" => '',
    "nom-utilisateur" => '',
    "prenom-utilisateur" => '',
    "mail-utilisateur" => '',
    "raison" => '',
    "msg-utilisateur" => ''];
$civilite_choisie = [
    'M'     => '',
    'Mme'   => ''];
$raison_choisie = [
    'emploi'    => '',
    'infos'     => '',
    'presta'    => ''];
$erreur_presente = false;

$args = [
    'civilite' => FILTER_SANITIZE_STRING,
    'nom-utilisateur' => FILTER_SANITIZE_STRING,
    'prenom-utilisateur' => FILTER_SANITIZE_STRING,
    'mail-utilisateur' => FILTER_VALIDATE_EMAIL,
    'raison' => FILTER_SANITIZE_STRING,
    'msg-utilisateur' => FILTER_SANITIZE_STRING];

if (!empty($_POST)) {
    $result_form = filter_input_array(INPUT_POST, $args);
    if ($result_form['civilite'] != "M." && $result_form['civilite'] != "Mme") {
        $formErrors['civilite'] = "Merci de choisir votre civilité";
        $erreur_presente = true;
    } else {
        switch ($result_form['civilite']) {
            case "M.":
                $civilite_choisie['M'] = "selected";
                break;
            case "Mme":
                $civilite_choisie['Mme'] = "selected";
                break;
        }
    }
    if ($result_form['nom-utilisateur'] == '') {
        $formErrors['nom-utilisateur'] = "Votre nom est nécessaire";
        $erreur_presente = true;
    }
    if ($result_form['prenom-utilisateur'] == '') {
        $formErrors['prenom-utilisateur'] = "Votre prénom est nécessaire";
        $erreur_presente = true;
    }
    if ($result_form['mail-utilisateur'] == false) {
        $formErrors['mail-utilisateur'] = "Merci de renseigner une adresse email valide";
        $erreur_presente = true;
        if (!isset($result_form['raison'])) {
            $formErrors['raison'] = "Choisissez un motif de contact !";
            $erreur_presente = true;
        } elseif ($result_form['raison'] != "emploi" && $result_form['raison'] != "infos" && $result_form['raison'] != "presta") {
            $formErrors['raison'] = "Pour quelle raison me contactez-vous ?";
            $erreur_presente = true;
        } else {
            switch ($result_form['raison']) {
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
        if (strlen($result_form['msg-utilisateur']) < 5) {
            $formErrors['msg-utilisateur'] = "Merci de taper un message plus explicite";
            $erreur_presente = true;
        }

        if (!$erreur_presente) { // aucune erreur dans le formulaire, on peut l'envoyer
            $sanitized = implode(" ", $result_form);
            $filename = "contact/contact_" . date("Y-m-d-H-i-s") . ".txt";
            file_put_contents($filename, $sanitized, FILE_APPEND);
            $result_form = array_fill(0, count($result_form), '');
            header('Location: index.php?page=formulaire_ok');
        }
    }
}