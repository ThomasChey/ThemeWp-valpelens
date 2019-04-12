<!-------------------- Footer --------------------->

<footer>
    <div class="container">
        <div class="row">

            <!------- Google Map ------->

            <?php dynamic_sidebar('valpelens-google-map') ?>

            <!------- Newsletter ------->

            <?php dynamic_sidebar('valpelens-newsletter') ?>

            <!------- Contact------->

            <?php dynamic_sidebar('valpelens-contacts') ?>

        </div> <!-- ./row -->
    </div> <!-- ./container -->
</footer>


<!-- Permet à wordpress de placer les fichiers scripts dans le bas de page de mon thème. -->
<?php wp_footer(); ?>
</body>
</html>