<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <head>
        <title>Accueil</title>
        <link rel="stylesheet" href="assets/vitrine.css">
    </head>

<?php 
    include 'header.php';

    if ($_GET)
    {
    if ($_GET['page'] == 'accueil') { 
        include 'vitrine-accueil.html';
    }
    elseif ($_GET['page'] == 'programme') {
        include 'vitrine-programme.html';
    }
    elseif ($_GET['page'] == 'contact') {
        include 'vitrine-contact.html';
    }
    elseif ($_GET['page'] == 'contact-form') {
        include 'contact-form.php';
    }
    
    else {
        include '404.php';
    }
    }
    include 'footer.php';
?>

</html>