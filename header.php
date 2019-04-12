<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <!--  Encodage de la page  -->
    <meta charset="<?php bloginfo('charset'); ?>">

    <!--  Titre de la page  -->
    <title><?php wp_title(); ?></title>

    <!--  Affichage mobile  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--  Chargement de l'entete WP | OBLIGATOIRE  -->
    <!--  Permet à Wordpress de placer les fichiers styles, scripts dans l'entente de mon thème  -->
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<div class=" container">

    <!------------ Phrase D'accroche ------------>

    <div class="row justify-content-start phrase">
        <div class="col-12 pt-3 ml-4">
            <p><?php bloginfo('name') ?> : <em><?php bloginfo('description'); ?></em></p>
        </div> <!-- ./col -->
    </div> <!-- ./row -->

    <!-------------- Espace Client -------------->

    <div class="row justify-content-end client">
        <div class="col-md-4 col-sm-8 py-2">
            Espace Client : &nbsp;
            <a href="<?= wp_login_url(); ?>"><strong>Connexion</strong></a> &nbsp;
            <a href="<?= wp_registration_url(); ?>"><strong>Inscription</strong></a>
        </div> <!-- ./col -->
    </div> <!-- ./row -->

    <!----------------- Header ------------------>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light mt-3">

            <a class="navbar-brand" href="#">
                <?php echo the_custom_logo(); ?>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuhamburger"
                    aria-controls="menuhamburger" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-lg-end menu" id="menuhamburger">
                <div class="navbar-nav">
                    <?php wp_nav_menu(array('theme_location' => 'primary')) ?>
                </div> <!-- ./navbar-nav -->
            </div> <!-- ./collapse menu -->

        </nav>
    </header>

</div> <!-- ./container -->

<!------------- Image Projecteur ------------->

<div class="container-fluid p-0">
    <?php
    if (has_header_image()) { ?>
        <img class="projecteur" src="<?php header_image();?>" alt="<?php bloginfo('name'); ?>">
    <?php } ?>
</div>