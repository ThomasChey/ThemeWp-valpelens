<?php get_header(); // Inclut le fichier header.php ?>

<div class="container">
    <section class="row">
        <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <article <?php post_class( 'col-12' ); ?>>

                <div class="post-body">
                    <?php the_title( '<h3>', '</h3>' ); ?>
                    <?php the_content(); ?>
                </div>

            </article>
        <?php endwhile; wp_reset_query(); endif; ?>
    </section>
</div>


<?php get_footer(); // Inclut le fichier footer.php ?>

