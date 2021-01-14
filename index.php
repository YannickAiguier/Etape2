<?php
$metaTitle = 'Le CV de Yannick';
$metaDescription = 'Actuellement en formation au Campus Numérique de Valence comme technicien développeur';
$routes = [
    'cv' => 'cv',
    'hobby' => 'hobby',
    'contact' => 'contact',
    'formulaire_ok' => 'formulaire_ok',
];
if (isset($_GET['page'])) { // nom de la page renseigné
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
    if ($page)
    {
        if ($page == 'cv') {
            // rien à faire
        } elseif ($page == 'hobby') {
            $metaTitle = 'Le hobby de Yannick';
            $metaDescription = 'Ma passion pour le badminton, un sport très physique et ludique';
        } elseif ($page == 'contact') {
            $metaTitle = 'Contacter Yannick';
            $metaDescription = 'Envoyez-moi un message';
        } elseif ($page == 'formulaire_ok') {
            $metaTitle = 'Formulaire rempli';
            $metaDescription = 'formulaire rempli';
        } else {
            $page = '404';
        }
    }
} else { // page cv par défaut
    $page = 'cv';
}
require 'includes/header.php';
require 'pages/'.$routes[$page].'.php';
require 'includes/footer.php';