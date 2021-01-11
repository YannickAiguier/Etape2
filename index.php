<?php
if (isset($_GET['page'])) // nom de la page renseigné
{
    if ($_GET['page'] == 'cv') {
        $metaTitle = 'Le CV de Yannick';
        $metaDescription = 'Actuellement en formation au Campus Numérique de Valence comme technicien développeur';
        include 'header.php';
        include 'pages/cv.php';
    } elseif ($_GET['page'] == 'hobby') {
        $metaTitle = 'Le hobby de Yannick';
        $metaDescription = 'Ma passion pour le badminton, un sport très physique et ludique';
        include 'header.php';
        include 'pages/hobby.php';
    } elseif ($_GET['page'] == 'contact') {
        $metaTitle = 'Contacter Yannick';
        $metaDescription = 'Envoyez-moi un message';
        include 'header.php';
        include 'pages/contact.php';
    } else { // page inexistante
        $metaTitle = 'Le CV de Yannick';
        $metaDescription = 'Actuellement en formation au Campus Numérique de Valence comme technicien développeur';
        include 'header.php';
        echo 'Page inexistante, vérifier l\'URL entrée.';
        echo '<img src="images/oops.png" alt="Oops">';
    }
    include 'footer.php';
} else {
    echo 'Nom de page non renseigné.';
}
?>