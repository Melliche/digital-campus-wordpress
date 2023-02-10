<?php get_header(); ?>
<section>
    <div class="flex w-full justify-center">
        <div>
            <?php
            $image = get_field('section1_image_t');
            $size = 'panoramic-size-frontpage';
            if ($image) {
                echo wp_get_attachment_image($image, $size);
            }
            ?>
        </div>
    </div>
    <div class="flex flex-col w-full items-center">
        <h1 class="text-8xl font-bold font-display mt-7 mb-7"><?php the_field('section1_title'); ?></h1>
        <p class=""><?php the_field('section1_text'); ?></p>
        <div class="p-7">
            <a class="bg-orange p-3 mr-3 text-white" href=""><?php the_field('section1_first_btn'); ?></a>
            <a class="bg-gray p-3 " href=""><?php the_field('section1_second_btn'); ?></a>
        </div>
    </div>
    <?php ?>
    <div>

        <?php if (have_rows('section2_repeteur_stats')) :
            $i = 0; ?>
            <ul class="grid grid-cols-3 h-36rem">
                <?php while (have_rows('section2_repeteur_stats')) : the_row();
                    $stat = get_sub_field('stat');
                    $text = get_sub_field('text');

                ?>
                    <?php if ($i == 0)
                        $color = 'bg-blue';
                    elseif ($i == 1)
                        $color = 'bg-orange';
                    elseif ($i == 2)
                        $color = 'bg-black';
                    ?>

                    <li class="<?php echo $color ?> flex flex-col justify-end pl-7 pb-20">
                        <p class="text-9xl font-bold text-white"><?php echo $stat; ?></p>
                        <p class="mt-3 text-white text-2xl font-medium"><?php echo $text; ?></p>
                    </li>

                <?php
                    $i++;
                endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>

    <div class="flex justify-center bg-gray pb-20 pt-20">
        <div class="mycontainer">
            <div class="pl-3">
                <h2 class="text-8xl	w-2/4 mb-7"><?php the_field('section3_title2'); ?></h2>
                <p class="text-gray-grass font-medium"><?php the_field('section3_txt'); ?></p>
            </div>
            <div class="flex w-full justify-between	">
                <div>
                    <?php if (have_rows('section3_repeteur')) :
                    ?>
                        <ul class="w-60rem">
                            <?php while (have_rows('section3_repeteur')) : the_row();
                                $name = get_sub_field('name');
                                $date = get_sub_field('date');
                                $hour = get_sub_field('hour');
                            ?>

                                <li class="flex p-5 mt-3 bg-white ">
                                    <div class=" w-3/5  grid grid-cols-3">
                                        <p class="ml-7 font-bold text-lg"><?php echo $name; ?></p>
                                        <p class="text-gray-grass font-medium"><?php echo $date; ?></p>
                                        <p class="text-gray-grass font-medium"><?php echo $hour; ?></p>
                                    </div>
                                </li>


                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="w-26rem ">
                    <p class="text-3xl font-normal mb-7 w-3/4 "><?php the_field('section3__text_r'); ?></p>
                    <a class="bg-orange p-3 text-white " href=""><?php the_field('txt_r_button'); ?></a>
                </div>

            </div>
        </div>
    </div>
    <div class="h-60 bg-black flex justify-center items-center">
        <div class="container w-4/5 ">

            <h2 class=" w-30% text-white font-normal text-4xl"><?php the_field('section4_text_center'); ?></h2>

        </div>

    </div>
    <div>

        <div class="grid grid-cols-2 w-full">
            <div class="bg-orange px-12rem py-7 text-white">
                <h2 class="text-9xl	font-medium mb-7"><?php the_field('section5_title'); ?></h2>
                <p class="text-lg mb-7 w-70%"><?php the_field('section5_text'); ?></p>
                <nav class="pointer-events-auto hidden md:block">
                    <ul class="grid grid-cols-2">
                        <?php
                        // On récupère la liste des menus
                        $menuLocations = get_nav_menu_locations();
                        // On récupère l'ID de notre menu principal
                        $menuID = $menuLocations['liste_campus'];
                        // On récupère les liens de ce menu
                        $menu = wp_get_nav_menu_items($menuID);
                        // On boucle dans les liens et on les affiche
                        foreach ($menu as $navItem) {
                            echo '<li class="py-2"><a class="text-2xl font-medium" href="' . $navItem->url . '" title="' . $navItem->title . '">' . $navItem->title . '</a></li>';
                        }
                        ?>
                    </ul>
                </nav>
            </div>

            <div>
                <div class="h-full w-full">
                    <?php
                    $image = get_field('section5_image');
                    $size = 'presentation-size-frontpage';
                    if ($image) {
                        echo wp_get_attachment_image($image, $size);
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="bg-gray py-20">
            <div class="mycontainer">
                <div class="flex flex-col items-center">
                    <h2 class="text-7xl	"><?php the_field('section6_title'); ?></h2>
                    <p class="py-5 w-23% text-center	"><?php the_field('section6_text'); ?></p>
                    <div class="grid grid-cols-5 gap-4">
                        <?php

                        // Check rows existexists.
                        if (have_rows('section6_images')) :

                            // Loop through rows.
                            while (have_rows('section6_images')) : the_row();

                                // Load sub field value.
                                $image = get_sub_field('image');
                                $size = 'card-size-frontpage';
                                if ($image) {
                                    echo wp_get_attachment_image($image, $size);
                                }


                            // End loop.
                            endwhile;

                        // No value.
                        else :
                        // Do something...
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
</section>


<?php get_footer(); ?>