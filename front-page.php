<?php get_header(); // Inclut le fichier header.php ?>

<div class="container p-3 bg-light">

    <!------------- Aside + Article -------------->

    <div class="row">

        <aside class="col-6 imgAside">
            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/aside/chalet.jpg">
        </aside>

        <article class="col-6">
            <h3 class="text-center"><a href="#">Location Chalet Haute-Alpes</a></h3>
            <ul class="pt-4">
                <li><strong>Chambre :</strong> 4</li>
                <li><strong>Capacité :</strong> 8 personnes</li>
                <li><strong>Salle de bain :</strong> 2</li>
                <li><strong>Surface :</strong> 80 m²</li>
                <li><strong>Situation :</strong> A 100m des remontées mécaniques</li>
                <li><strong><a href="#">Réservation</a></strong></li>
            </ul>
        </article>

    </div> <!-- ./row -->

    <!---------------- Partenaires ----------------->

    <div class="row pt-5">
        <div class="col">
            <h3 class="text-center"><u>Partenaires</u></h3>
        </div>
    </div>

    <div class="row pt-4 partenaires">
        <div class="col-md-2 col-sm-4 col-6 d-flex justify-content-center"><a href=""><img alt="partenaire"
                                                                                           src="<?php echo get_template_directory_uri(); ?>/img/partenaires/partenaire1.png"></a>
        </div>
        <div class="col-md-2 col-sm-4 col-6 d-flex justify-content-center"><a href=""><img alt="partenaire"
                                                                                           src="<?php echo get_template_directory_uri(); ?>/img/partenaires/partenaire2.png"></a>
        </div>
        <div class="col-md-2 col-sm-4 col-6 d-flex justify-content-center"><a href=""><img alt="partenaire"
                                                                                           src="<?php echo get_template_directory_uri(); ?>/img/partenaires/partenaire3.png"></a>
        </div>
        <div class="col-md-2 col-sm-4 col-6 d-flex justify-content-center"><a href=""><img alt="partenaire"
                                                                                           src="<?php echo get_template_directory_uri(); ?>/img/partenaires/partenaire4.png"></a>
        </div>
        <div class="col-md-2 col-sm-4 col-6 d-flex justify-content-center"><a href=""><img alt="partenaire"
                                                                                           src="<?php echo get_template_directory_uri(); ?>/img/partenaires/partenaire5.png"></a>
        </div>
        <div class="col-md-2 col-sm-4 col-6 d-flex justify-content-center"><a href=""><img alt="partenaire"
                                                                                           src="<?php echo get_template_directory_uri(); ?>/img/partenaires/partenaire6.png"></a>
        </div>
    </div>

</div> <!-- ./container -->

<?php get_footer(); // Inclut le fichier footer.php ?>
