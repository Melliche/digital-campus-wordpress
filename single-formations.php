<?php get_header(); ?>

    <section class="grid grid-cols-10 items-center bg-[#EBEBEB] w-full">
        <div class="col-span-6 px-12">
            <h2 class="text-xl sm:text-2xl lg:text-5xl text-orange"><?= get_field('sous_titre_section1'); ?></h2>
            <h1 class="text-2xl sm:text-4xl lg:text-7xl font-medium"><?= get_field('titre_section1'); ?></h1>
        </div>
        <div class="col-span-4">
            <?php
            $image = get_field('image_section1_formation');
            $size = 'full';
            if ($image) {
                echo wp_get_attachment_image($image, $size);
            }
            ?>
        </div>
    </section>

    <section class="mycontainer h-auto my-10">
        <?php if (have_rows('repeteur_section2')) :?>
            <ul class="flex flex-col sm:flex-row items-center justify-between">
                <?php while (have_rows('repeteur_section2')) : the_row();
                    $titre = get_sub_field('titre_section2');
                    $text = get_sub_field('sous_titre_section2');
                    ?>
                    <li class="my-1">
                        <p class="text-xl text-center font-semibold text-orange"><?php echo $titre; ?></p>
                        <p class="text-lg text-center"><?= $text; ?></p>
                    </li>
                    <?php
                endwhile; ?>
            </ul>
        <?php endif; ?>
    </section>

    <section class="mycontainer h-auto my-10">
        <p><?= get_field('texte_section3'); ?></p>
        <?php if (have_rows('liste_section_3')) :?>
            <ul class="grid grid-cols-1 m-8 h-auto list-[square]">
                <?php while (have_rows('liste_section_3')) : the_row();
                    $text = get_sub_field('texte_section_3');
                    ?>
                    <li class="my-1">
                        <p class="text-lg"><?php echo $text; ?></p>
                    </li>
                    <?php
                endwhile; ?>
            </ul>
        <?php endif; ?>
    </section>

    <section class="mycontainer h-auto my-10">
        <h2 class="text-5xl my-8"><?= get_field('titre_section4'); ?></h2>
        <p><?= get_field('texte_section4'); ?></p>
        <?php if (have_rows('liste_section4')) :?>
            <ul class="grid grid-cols-1 m-8 h-auto list-[square]">
                <?php while (have_rows('liste_section4')) : the_row();
                    $text = get_sub_field('texte_section4');
                    ?>
                    <li class="my-1">
                        <p class="text-lg"><?php echo $text; ?></p>
                    </li>
                <?php
                endwhile; ?>
            </ul>
        <?php endif; ?>
    </section>

    <section class="mycontainer h-auto my-10">
        <h2 class="text-5xl my-8"><?= get_field('titre_section5'); ?></h2>
        <p><?= get_field('texte_section5'); ?></p>
        <?php if (have_rows('liste_section5')) :?>
            <ul class="grid grid-cols-1 m-8 h-auto list-[square]">
                <?php while (have_rows('liste_section5')) : the_row();
                    $text = get_sub_field('texte_section5');
                    ?>
                    <li class="my-1">
                        <p class="text-lg"><?php echo $text; ?></p>
                    </li>
                <?php
                endwhile; ?>
            </ul>
        <?php endif; ?>
    </section>

    <section class="mycontainer h-auto my-10">
        <h2 class="text-5xl my-8"><?= get_field('titre_section6'); ?></h2>
        <p><?= get_field('texte_section6'); ?></p>
        <?php if (have_rows('liste_section6')) :?>
            <ul class="grid grid-cols-1 m-8 h-auto list-[square]">
                <?php while (have_rows('liste_section6')) : the_row();
                    $text = get_sub_field('texte_section6');
                    ?>
                    <li class="my-1">
                        <p class="text-lg"><?php echo $text; ?></p>
                    </li>
                <?php
                endwhile; ?>
            </ul>
        <?php endif; ?>
    </section>

    <section class="mycontainer h-auto my-10">
        <h2 class="text-5xl my-8"><?= get_field('titre_section7'); ?></h2>
        <p><?= get_field('texte_section7'); ?></p>
        <?php if (have_rows('liste_section7')) :?>
            <ul class="grid grid-cols-1 m-8 h-auto list-[square]">
                <?php while (have_rows('liste_section7')) : the_row();
                    $text = get_sub_field('texte_section7');
                    ?>
                    <li class="my-1">
                        <p class="text-lg"><?php echo $text; ?></p>
                    </li>
                <?php
                endwhile; ?>
            </ul>
        <?php endif; ?>
    </section>

    <section class="mycontainer h-auto my-10">
        <h2 class="text-5xl my-8"><?= get_field('titre_section8'); ?></h2>
        <p><?= get_field('texte_section8'); ?></p>
        <?php if (have_rows('liste_section8')) :?>
            <ul class="grid grid-cols-1 m-8 h-auto list-[square]">
                <?php while (have_rows('liste_section8')) : the_row();
                    $text = get_sub_field('texte_section8');
                    ?>
                    <li class="my-1">
                        <p class="text-lg"><?php echo $text; ?></p>
                    </li>
                <?php
                endwhile; ?>
            </ul>
        <?php endif; ?>
    </section>

    <section class="mycontainer h-auto my-10">
        <h2 class="text-5xl my-8"><?= get_field('titre_section9'); ?></h2>
        <div class="grid place-items-center grid-cols-1 lg:grid-cols-2">
            <?php if (have_rows('liste_section9')) :?>
                <ul class="grid grid-cols-1 m-8 mb-8 lg:mb-0 h-auto list-[square]">
                    <?php while (have_rows('liste_section9')) : the_row();
                        $text = get_sub_field('texte_section9');
                        ?>
                        <li class="my-1">
                            <p class="text-lg"><?php echo $text; ?></p>
                        </li>
                    <?php
                    endwhile; ?>
                </ul>
            <?php endif; ?>
            <iframe height="315" class="aspect-[16/9] w-full" src="<?= get_field('lien_video_section_9'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

    </section>

    <section class="mycontainer h-auto my-10">
        <h2 class="text-5xl my-8"><?= get_field('titre_section10'); ?></h2>
        <p><?= get_field('texte_section10'); ?></p>
        <?php if (have_rows('liste_prerequis_section10')) :?>
            <ul class="grid grid-cols-1 m-8 h-auto list-[hyphen]">
                <?php while (have_rows('liste_prerequis_section10')) : the_row();
                    $text = get_sub_field('texte_section10');
                    ?>
                    <li class="my-1">
                        <p class="text-lg"><?php echo $text; ?></p>
                    </li>
                <?php
                endwhile; ?>
            </ul>
        <?php endif; ?>
        <?php if (have_rows('liste_section10')) :?>
            <ul class="grid grid-cols-1 m-8 h-auto list-[square]">
                <?php while (have_rows('liste_section10')) : the_row();
                    $text = get_sub_field('texte_section10');
                    ?>
                    <li class="my-1">
                        <p class="text-lg"><?php echo $text; ?></p>
                    </li>
                <?php
                endwhile; ?>
            </ul>
        <?php endif; ?>
    </section>

    <section class="mycontainer h-auto my-10">
        <h2 class="text-5xl my-8"><?= get_field('titre_section11'); ?></h2>
        <p><?= get_field('texte_section11'); ?></p>
    </section>

<?php get_footer(); ?>