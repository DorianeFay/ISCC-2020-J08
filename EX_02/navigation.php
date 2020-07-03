<nav>
    <?php if ($_GET5['page']=='accueil') : ?>
    <strong><a style color:#17c1ff; class="contact" href="vitrine.accueil.html" >Accueil </a></strong>
        <?php else : ?>
            <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/?page=accueil">Accueil</a>
        <?php endif; ?>

    <?php if ($_GET5['page']=='programme') : ?>
    <strong><a style color:#17c1ff class="contact" href="vitrine.programme.html">Programme</a></strong>
    <?php else : ?>
            <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/?page=programme">Programme</a>
        <?php endif; ?>

    <?php if ($_GET5['page']=='contact') : ?>
    <strong><a style color:#17c1ff class="contact" href="vitrine.contact.html" >Contact</a></strong>
    <?php else : ?>
            <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/?page=contact">Contact</a>
        <?php endif; ?>
</nav>