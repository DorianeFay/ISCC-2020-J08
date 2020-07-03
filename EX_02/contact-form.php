<?php 
include 'header.php';

    if ($_POST) {
        echo '<p> Aucune donnée reçue.</p>';
    }
    else {
        echo '<p> Nom : '.$_POST['nom']. '</p>';
        echo '<p> Email : '.$_POST['email'].'</p>';
        echo '<p> Message : '.$_POST['message'].'</p>';
    }
include 'footer.php';
?> 