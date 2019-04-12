<?php

//       #############################################
//       #                                           #
//  ######          Styles CSS et Script JS          ####### //
//       #                                           #
//       #############################################

function valpelens_enqueue_style()
{
    //Bootstrap CSS
    wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);

    // Google Font
    wp_enqueue_style('roboto', '//fonts.googleapis.com/css?family=Roboto' , false);
    wp_enqueue_style('courgette', '//fonts.googleapis.com/css?family=Courgette' , false);

    //FontAwesome
    wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.8.1/css/all.css' , false);

    // -- Ma feuille CSS
    wp_enqueue_style('core', get_stylesheet_uri(), false);
}

function valpelens_enqueue_script()
{

    // -- jQuery
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.2.1.slim.min.js', false);

    // -- Popper
    wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', false);

    // -- Bootstrap JS
    wp_enqueue_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', false);

}

add_action('wp_enqueue_scripts', 'valpelens_enqueue_style');
add_action('wp_enqueue_scripts', 'valpelens_enqueue_script');


//       ##############################################
//       #                                            #
//  ######          Fonctionnalités du Thème          ####### //
//       #                                            #
//       ##############################################

# Image de Logo Personnalisable
# https://codex.wordpress.org/Theme_Logo

add_theme_support( 'custom-logo', array(
    'height'      => 180,
    'width'       => 240,
    'flex-height' => false,
    'flex-width'  => false,
    'header-text' => array( 'site-title', 'site-description' ),
) );

# Menu Wordpress
# https://codex.wordpress.org/Function_Reference/register_nav_menu

add_action('after_setup_theme', 'register_valpelens_menu');

function register_valpelens_menu(){
    register_nav_menu('primary', 'Menu du Haut');
}


# Image du Header Personnalisable

$args = array(
    'width'         => 1600,
    'height'        => 550,
    'uploads'       => true,
    'default-image' => get_template_directory_uri() . '/img/bandeau/bandeau1.jpg',
);
add_theme_support('custom-header', $args);

# Custom Background
add_theme_support('custom-background');


//       ##########################################
//       #                                        #
//  ######          Position pour Widgets         ####### //
//       #                                        #
//       ##########################################


function valpelens_widgets_init() {

    # Placement de la Google Map

    register_sidebar( array(
        'name'          => ( 'Pied de page 1'),
        'id'            => 'valpelens-google-map',
        'description'   => ( 'Placez votre widget ( ex: Google map )'),
        'before_widget' => '<div class="col-md-4 col-sm-12 py-5 googlemap">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="text-center pb-2">',
        'after_title'   => '</h4>',
    ) );

    # Placement de la Newsletter - 2eme Emplacement

    register_sidebar( array(
        'name'          => ( 'Pied de page 2'),
        'id'            => 'valpelens-newsletter',
        'description'   => ( 'Placez votre widget ( ex: Newsletter )'),
        'before_widget' => '<div class="col-md-4 col-sm-12 py-5 newsletter">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="text-center pb-2">',
        'after_title'   => '</h4>',
    ) );

    # Placement des Coordonnées de Contact - 3eme Emplacement

    register_sidebar( array(
        'name'          => ( 'Pied de page 3'),
        'id'            => 'valpelens-contacts',
        'description'   => ( 'Placez votre widget ( ex: Info de Contact )'),
        'before_widget' => '<div class="col-md-4 col-sm-12 py-5 contact">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="text-center pb-2">',
        'after_title'   => '</h4>',
    ) );
}

add_action( 'widgets_init', 'valpelens_widgets_init' );