<!DOCTYPE html>
<html>
    <head>
        <title>mini-site-routing</title>
    </head>

    <body>
        <nav>
            <a href ="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=1">Accueil</a>
            <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=2">Page 2</a>
            <a href ="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=3">Page 3</a>
        </nav>
    <?php 
        if ($_GET['page'] == 1) {
            echo '<h1>Accueil !</h1>';
        }
        if ($_GET['page'] == 2) {
            echo '<h1>Page 2 !</h1>';
        }
        if ($_GET['page'] == 3) {
            echo '<h1>Page 3 !</h1>';
        }

        ?>
    </body>
    </html>
