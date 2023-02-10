<?php /* Template Name: Page Ecole */ ?>

<?php get_header(); ?>

    <section class="grid grid-cols-10 items-center bg-[#EBEBEB] w-full">
        <div class="col-span-6">
            <h1 class="text-6xl text-center"><?= get_field('titre'); ?></h1>
        </div>
        <div class="col-span-4">
            <?php
            $image = get_field('image_section1_ecole');
            $size = 'full';
            if ($image) {
                echo wp_get_attachment_image($image, $size);
            }
            ?>
        </div>
    </section>


    <section class="mycontainer h-auto my-10">
        <p><?= get_field('texte_section2'); ?></p>
    </section>

    <section class="mycontainer h-auto my-10">
        <h2 class="text-2xl font-semibold my-8"><?= get_field('titre_section3'); ?></h2>
        <p><?= get_field('texte_section3'); ?></p>
    </section>

    <section class="mycontainer h-auto">
        <h2 class="text-4xl font-semibold my-8"><?= get_field('titre_section4'); ?></h2>

        <?php if (have_rows('repeteur_liste_section4')) :
            $i = 0; ?>
            <ul class="grid grid-cols-2 h-auto list-[square]">
                <?php while (have_rows('repeteur_liste_section4')) : the_row();
                    $titre = get_sub_field('titre_element');
                    $text = get_sub_field('texte_element');
                    ?>
                    <li class="m-3">
                        <p class=" text-xl font-bold"><?= $titre; ?></p>
                        <p class="text-lg"><?php echo $text; ?></p>
                    </li>
                    <?php
                    $i++;
                endwhile; ?>
            </ul>
        <?php endif; ?>



        <?php if (have_rows('repeteur_case_section4')) :
            $i = 0; ?>
            <ul class="grid grid-cols-1 lg:grid-cols-4 h-auto">
                <?php while (have_rows('repeteur_case_section4')) : the_row();
                    $titre = get_sub_field('titre');

                    ?>
                    <?php if ($i == 0) {
                        $color = 'bg-orange';
                        $number = '01';
                    } elseif ($i == 1) {
                        $color = 'bg-gray-grass';
                        $number = '02';
                    } elseif ($i == 2) {
                        $color = 'bg-blue';
                        $number = '03';
                    } elseif ($i == 3) {
                        $color = 'bg-black';
                        $number = '04';
                    } elseif ($i == 4) {
                        $color = 'bg-grey';
                        $number = '05';
                    } ?>
                    <li class="<?php echo $color ?> text-white grid grid-rows-2 gap-2 pl-8 pr-32 py-8">
                        <div class="w-32 text-7xl font-light text-white font-semibold underline underline-offset-[10px] decoration-4"><?= $number; ?></div>
                        <div class="text-2xl text-white"><?php echo $titre; ?></div>
                    </li>
                    <?php
                    $i++;
                endwhile; ?>
            </ul>
        <?php endif; ?>
    </section>

    <section class="mycontainer h-auto">
        <h2 class="text-4xl font-semibold my-8"><?= get_field('titre_section5'); ?></h2>
        <p><?= get_field('texte_section5'); ?></p>
    </section>

    <section class="mycontainer h-auto">
        <h2 class="text-4xl font-semibold my-8"><?= get_field('titre_section6'); ?></h2>
        <p><?= get_field('texte_section6'); ?></p>
        <?php if (have_rows('liste_section6')) :
            $i = 0; ?>
            <ul class="grid grid-cols-1 mx-8 h-auto list-[square]">
                <?php while (have_rows('liste_section6')) : the_row();
                    $text = get_sub_field('texte');
                    ?>
                    <li class="my-1">
                        <p class="text-lg"><?php echo $text; ?></p>
                    </li>
                    <?php
                    $i++;
                endwhile; ?>
            </ul>
        <?php endif; ?>
    </section>

    <section class="mycontainer h-auto mb-20">
        <h2 class="text-4xl font-semibold my-8"><?= get_field('titre_section7'); ?></h2>
        <p><?= get_field('texte_section7'); ?></p>
        <?php if (have_rows('liste_section7')) :
            $i = 0; ?>
            <ul class="grid grid-cols-1 mx-8 h-auto list-[square]">
                <?php while (have_rows('liste_section7')) : the_row();
                    $text = get_sub_field('texte');
                    ?>
                    <li class="my-1">
                        <p class="text-lg"><?php echo $text; ?></p>
                    </li>
                    <?php
                    $i++;
                endwhile; ?>
            </ul>
        <?php endif; ?>
    </section>


<?php get_footer(); ?>