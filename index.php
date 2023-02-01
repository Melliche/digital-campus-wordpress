<?php get_header(); ?>

    <div>
        <?php if ( have_posts() ) : ?>

            <?php
            // Début the loop.
            while ( have_posts() ) :
                the_post();
                ?>
                <!-- CE QUE VOUS VOULEZ AFFICHER -->
            <?php endwhile; ?>

        <?php else : ?>

        <?php endif; ?>

    </div>

<?php get_footer(); ?>