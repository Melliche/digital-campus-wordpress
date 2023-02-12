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
            <h1 class="text-4xl sm:text-8xl font-bold font-display mt-7 mb-7"><?php the_field('section1_title'); ?></h1>
            <p class="text-center"><?php the_field('section1_text'); ?></p>
            <div class="p-7 flex flex-col sm:flex-row justify-center items-center">
                <a class="bg-orange p-3 mr-0 sm:mr-3 my-3 text-white text-center"
                   href=""><?php the_field('section1_first_btn'); ?></a>
                <a class="bg-grey p-3 text-center my-3" href=""><?php the_field('section1_second_btn'); ?></a>
            </div>
        </div>
    </section>
    <section>
        <?php ?>
        <div>

            <?php if (have_rows('section2_repeteur_stats')) :
                $i = 0; ?>
                <ul class="grid grid-cols-1 lg:grid-cols-3 h-auto lg:h-36rem">
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
                            <p class="text-7xl sm:text-9xl font-bold text-white"><?php echo $stat; ?></p>
                            <p class="mt-3 text-white text-2xl font-medium"><?php echo $text; ?></p>
                        </li>

                        <?php
                        $i++;
                    endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>
    <section>
        <div class="flex justify-center bg-gray">
            <div class="mycontainer">
                <div class="pl-3 h-auto">
                    <h2 class="text-5xl sm:text-8xl w-full sm:w-3/4 my-7"><?php the_field('section3_title2'); ?></h2>
                    <p class="text-gray-grass font-medium my-3"><?php the_field('section3_txt'); ?></p>
                </div>
                <div class="flex w-full justify-between	flex-col lg:flex-row">
                    <div>
                        <?php if (have_rows('section3_repeteur')) :
                            ?>
                            <ul class="lg:min-w-[40rem] xl:w-60rem my-12">
                                <?php while (have_rows('section3_repeteur')) : the_row();
                                    $name = get_sub_field('name');
                                    $date = get_sub_field('date');
                                    $hour = get_sub_field('hour');
                                    ?>

                                    <li class="p-5 mt-3 bg-white">
                                        <div class="w-full md:w-3/5 lg:w-4/5 xl:w-3/5 grid grid-cols-1 sm:grid-cols-3 max-[640px]:place-items-center">
                                            <p class="sm:ml-7 font-bold text-lg"><?php echo $name; ?></p>
                                            <p class="text-gray-grass font-medium"><?php echo $date; ?></p>
                                            <p class="text-gray-grass font-medium"><?php echo $hour; ?></p>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                    <div class="flex flex-col justify-center items-center w-full lg:w-26rem my-8">
                        <p class="text-2xl lg:text-3xl font-normal mb-7 w-3/4 "><?php the_field('section3__text_r'); ?></p>
                        <a class="bg-orange p-3 text-white " href=""><?php the_field('txt_r_button'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="h-auto bg-black flex justify-center items-center">
            <div class="container w-4/5">
                <h2 class="w-full xl:w-[40%] text-white font-normal text-3xl md:text-5xl my-20"><?php the_field('section4_text_center'); ?></h2>
            </div>
        </div>
    </section>

    <section>
        <div class="grid grid-cols-1 xl:grid-cols-2 w-full h-auto max-h-auto">
            <div class=" bg-orange sm:px-36 py-7 text-white">
                <h2 class="text-4xl sm:text-6xl xl:text-8xl text-center sm:text-left font-medium mb-7"><?php the_field('section5_title'); ?></h2>
                <p class="text-lg sm:mb-7 sm:w-70% text-center sm:text-left"><?php the_field('section5_text'); ?></p>
                <nav class="pointer-events-auto md:block">
                    <ul class="grid grid-cols-1 sm:grid-cols-2 my-8 text-center sm:text-left">
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

            <div class="hidden xl:flex max-h-full">
                <?php
                $image = get_field('section5_image');
                $size = 'presentation-size-frontpage';
                if ($image) {
                    echo wp_get_attachment_image($image, $size, ' ', array('class' => ''));
                }
                ?>
            </div>
        </div>
    </section>
    <section>
        <div class="bg-grey py-20">
            <div class="mycontainer">
                <div class="flex flex-col items-center">
                    <h2 class="text-5xl sm:text-7xl	"><?php the_field('section6_title'); ?></h2>
                    <p class="py-5 my-6 md:mx-20 text-center"><?php the_field('section6_text'); ?></p>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-6 sm:gap-20 md:gap-16">
                        <?php
                        if (have_rows('section6_images')) :
                            while (have_rows('section6_images')) : the_row();
                                $image = get_sub_field('image');
                                $size = 'card-size-frontpage';
                                if ($image) {
                                    echo wp_get_attachment_image($image, $size, ' ', array('class' => 'w-full'));
                                }
                            endwhile;
                        else :
                            // Do something...
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div>
            <h2 class="w-full text-center text-5xl sm:text-7xl my-14"><?php the_field('section7_title'); ?></h2>
            <?php if (have_rows('section7_repeteur')) :
                ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 m-8 sm:m-20 gap-14">
                    <?php while (have_rows('section7_repeteur')) : the_row();
                        $desc = get_sub_field('desc');
                        $image = get_sub_field('image');
                        $name = get_sub_field('name');
                        $text = get_sub_field('text');
                        ?>

                        <div class="bg-grey p-7 grid-row-2 grid items-center ">
                            <p class="text-center my-7"><?php echo $text ?></p>
                            <div class="grid grid-cols-2 gap-x-4">
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
    </section>

    <section>
        <div class="mycontainer bg-grey py-14">
            <h2 class="text-5xl lg:text-7xl w-60%"><?php the_field('section_8_title'); ?></h2>
        </div>
        <?php if (have_rows('section_8_repeteur')) :
            $i = 0; ?>
            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 h-auto">
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
    </section>

    <section>
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
                <div class="grid grid-cols-1 md:grid-cols-3 gap-14 ">
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <article class="shadow-bxsh grid grid-row-2	">

                                <div class=""><?php echo the_post_thumbnail('article-image', array('class' => 'w-full')) ?></div>
                                <div class="m-7">
                                    <p class=" my-7 text-xl"><?php echo get_the_excerpt() ?></p>
                                    <a class="text-orange flex justify-end w-full " href="<?php the_permalink() ?>">Read
                                        more</a>
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