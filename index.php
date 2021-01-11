<?php
if ($_GET['page']=='cv') {
    $metaTitle = 'Le CV de Yannick';
    $metaDescription = 'Actuellement en formation au Campus Numérique de Valence comme technicien développeur';
    include 'header.php';
    include 'pages/cv.php';
    include 'footer.php';
} elseif ($_GET['page']=='hobby') {
    $metaTitle = 'Le hobby de Yannick';
    $metaDescription = 'Ma passion pour le badminton, un sport très physique et ludique';
    include 'header.php';
    include 'pages/hobby.php';
    include 'footer.php';
} elseif ($_GET['page']=='contact') {
    $metaTitle = 'Contacter Yannick';
    $metaDescription = 'Envoyez-moi un message';
    include 'header.php';
    include 'pages/contact.php';
    include 'footer.php';
} else {
    echo 'Il faut renseigner le nom de la page sous la forme index.php?page=nom_de_la_page';
}
?>