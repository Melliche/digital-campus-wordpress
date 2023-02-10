<?php get_header(); ?>
<section>
    <div class="">
        <div>
            <?php
            $image = get_field('section1_image_t');
            $size = 'panoramic-size-frontpage';
            if ($image) {
                echo wp_get_attachment_image($image, $size, ' ', array('class' => 'w-full'));
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
            <div class="flex w-full justify-between	flex-col md:flex-row">
                <div>
                    <?php if (have_rows('section3_repeteur')) :
                    ?>
                        <ul class="xl:w-60rem">
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
            <div class="bg-orange px-48 py-7 text-white">
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
                            echo '<li class="py-2"><a class="text-2xl font-medium text-gray-400" href="' . $navItem->url . '" title="' . $navItem->title . '">' . $navItem->title . '</a></li>';
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
                        echo wp_get_attachment_image($image, $size, ' ', array('class' => 'w-full'));
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
                                    echo wp_get_attachment_image($image, $size, ' ', array('class' => 'w-full'));
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

        <div class=" ">
            <h2 class="w-full text-center text-7xl	my-14"><?php the_field('section7_title'); ?></h2>
            <div class="">
                <?php if (have_rows('section7_repeteur')) :
                ?>
                    <div class="grid grid-cols-3 mx-40 my-20 gap-x-14">
                        <?php while (have_rows('section7_repeteur')) : the_row();
                            $desc = get_sub_field('desc');
                            $image = get_sub_field('image');
                            $name = get_sub_field('name');
                            $text = get_sub_field('text');
                        ?>

                            <div class="bg-gray p-7 grid-row-2 grid items-center ">
                                <p class="text-center my-7"><?php echo $text ?></p>
                                <div class="grid grid-cols-2">
                                    <?php
                                    $size = 'profile-image';
                                    if ($image) {
                                        echo wp_get_attachment_image($image, $size, ' ', array('class' => 'rounded-full'));
                                    }
                                    ?>

                                    <div class="">
                                        <h3 class="font-semibold"><?php echo $name ?></h3>
                                        <p><?php echo $desc ?></p>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>



        <div>
            <div class="mycontainer">
                <h2 class=" text-7xl w-5/12	"><?php the_field('section_8_title'); ?></h2>
            </div>
            <?php if (have_rows('section_8_repeteur')) :
                $i = 0; ?>
                <ul class="grid grid-cols-4 h-auto">
                    <?php while (have_rows('section_8_repeteur')) : the_row();
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                        $button = get_sub_field('button');

                    ?>
                        <?php if ($i == 0) {
                            $color = 'bg-orange';
                            $bgBtn = 'bg-white';
                        } elseif ($i == 1) {
                            $color = 'bg-gray-grass';
                            $bgBtn = '';
                        } elseif ($i == 2) {
                            $color = 'bg-blue';
                        } elseif ($i == 3) {
                            $color = 'bg-black';
                        } ?>
                        <li class="<?php echo $color ?> text-white p-12">
                            <p class="w-32 text-7xl text-white font-semibold underline underline-offset-[10px] decoration-4"><?= $title; ?></p>
                            <p class="w-3/4 my-7 text-2xl text-white"><?php echo $text; ?></p>
                            <a class="<?php echo $bgBtn ?> text-black p-3" href=""><?php echo $button; ?></a>
                        </li>
                    <?php
                        $i++;
                    endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>

        <div class="mycontainer my-28">
            <h2 class="text-5xl text-center"><?php the_field('section9_title'); ?></h2>
            <div class="flex flex-col gap-16 my-20">

                <?php
                $args = array(
                    'post_type' => 'post',
                    'orderby' => 'publish_date',
                    'order' => 'ASC',
                );
                // the query
                $the_query = new WP_Query($args); ?>
                <div class="grid grid-cols-3 gap-x-14 ">
                    <?php if ($the_query->have_posts()) : ?>

                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <article class="shadow-bxsh grid grid-row-2	">

                                <div class=""><?php echo the_post_thumbnail('article-image', array('class' => 'w-full')) ?></div>
                                <div class="m-7">
                                    <p class=" my-7 text-xl"><?php echo get_the_excerpt() ?></p>
                                    <a class="text-orange flex justify-end w-full " href="<?php the_permalink() ?>">Read more</a>
                                </div>
                            </article>


                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>

                </div>


            </div>
        </div>
</section>


<?php get_footer(); ?>