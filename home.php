<?php
if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <article class="">
            <div>
            </div>
            <p><?php echo get_the_excerpt() ?></p>
            <a href="<?php the_permalink() ?>">Read more</a>
        </article>
<? }
}
?>