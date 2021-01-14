<?php
$metaTitle = 'Le CV de Yannick';
$metaDescription = 'Actuellement en formation au Campus Numérique de Valence comme technicien développeur';
$routes = [
    'cv' => 'cv',
    'hobby' => 'hobby',
    'contact' => 'contact',
    'formulaire_ok' => 'formulaire_ok',
    '404' => '404'
];
if (isset($_GET['page'])) { // nom de la page renseigné
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
    if (!array_key_exists($page, $routes)) {
            $page = '404';
    }
} else { // page cv par défaut
    $page = 'cv';
}
require 'includes/header.php';
require 'pages/'.$routes[$page].'.php';
require 'includes/footer.php';