<?php /* Template Name: Page Contact */ ?>

<?php get_header(); ?>


<section class="bg-black min-h-screen">
    <div class="grid grid-cols-1 sm:grid-cols-6">
        <a class="grid col-start-1 col-span-1 sm:col-span-2 my-12" href="/">
            <div class="flex items-center justify-center h-8 px-8">
                <?php
                $image = get_field('logo');
                $size = 'logo-footer';
                if ($image) {
                    echo wp_get_attachment_image($image, $size);
                }
                ?>
            </div>
        </a>
        <div class="sm:col-start-3 col-span-1 sm:col-span-3 place-items-center mx-8">
            <h1 class="col-start-4 text-white text-center text-xl md:text-5xl my-8"><?= get_field('titre'); ?></h1>
            <div class="place-items-center text-center">
                <?php echo FrmFormsController::get_form_shortcode(array('id' => 2)); ?>
            </div>
            <div class="text-[0.7rem] text-center my-4 place-items-center"><?= get_field('texte'); ?></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
