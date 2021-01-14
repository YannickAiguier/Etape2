<?php
session_start();
if (!isset($_SESSION['dateFirstVisit'])) { // la variable n'existe pas il faut la créer
    $_SESSION['dateFirstVisit'] = date("Y-m-d H:i:s");
}
if (!isset($_SESSION['countViewPage'])) {
    $_SESSION['countViewPage'] = 0;
}
$_SESSION['countViewPage']++;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$metaDescription?>">
    <link rel="stylesheet" href="../styles/styles.css">
    <title><?=$metaTitle?></title>
</head>

<body>
<header>
    <div>Yannick Aiguier</div>
    <div id="photo"><img src="../images/photo.jpg" alt="Une photo de Yannick"></div>
</header>
<nav>
    <a href="../index.php?page=cv">Mon CV</a> | <a href="../index.php?page=hobby">Mon Hobby</a> | <a href="../index.php?page=contact">Me
        contacter</a><br>
</nav>