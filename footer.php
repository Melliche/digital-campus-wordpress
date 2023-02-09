<?php wp_footer(); ?>

<!--<section class="min-h-60 h-60 flex items-center justify-center flex-col bg-[url(--><?php //echo get_field('image_de_fond', 'options'); ?><!--)] ">-->
<section class='flex items-center h-auto justify-center flex-col bg-cover bg-center'
         style=" background-image: url('<?php echo get_field('image_de_fond', 'option'); ?>')">
    <div class="flex items-center justify-center h-auto my-12">
        <?php
        $image = get_field('logo_footer', 'options');
        $size = 'logo-footer';
        if ($image) {
            echo wp_get_attachment_image($image, $size);
        }
        ?>
    </div>
    <nav class="mb-12">
        <ul class="flex flex-col lg:flex-row justify-center items-center">
            <?php
            // On récupère la liste des menus
            $menuLocations = get_nav_menu_locations();
            // On récupère l'ID de notre menu principal
            $menuID = $menuLocations['liste_campus'];
            // On récupère les liens de ce menu
            $menu = wp_get_nav_menu_items($menuID);
            // On boucle dans les liens et on les affiche
            foreach ($menu as $navItem) {
                $value = strtoupper($navItem->title);
                if (array_search($navItem, $menu) === count($menu) - 1) {
                    echo '<li><a class="text-sm text-white" href="' . $navItem->url . '" title="' . $navItem->title . '">' . $value . '</a></li>';
                } else {
                    echo '<li><a class="text-sm text-white" href="' . $navItem->url . '" title="' . $navItem->title . '">' . $value . '</a></li><div class="mx-1 text-white">-</div>';
                }
            }
            ?>
        </ul>
    </nav>
</section>
<section class="h-auto flex flex-col items-center justify-center">
    <div class="grid grid-cols-3 lg:grid-cols-4 mt-24 row-auto gap-14 mb-12">
        <div class="col-start-1 lg:col-start-2 ml-8 lg:ml-0">
            <h2 class="text-lg"><?= get_field('formulaire_titre_1', 'options'); ?></h2>
            <nav class=" pointer-events-auto md:block">
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
                        echo '<li class="py-2"><a class="text-[0.93rem] text-gray" href="' . $navItem->url . '" title="' . $navItem->title . '">' . $navItem->title . '</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>
        <div>
            <h2 class="text-lg"><?= get_field('formulaire_titre_2', 'options'); ?></h2
            <nav class="pointer-events-auto hidden md:block">
                <ul>
                    <?php
                    // On récupère la liste des menus
                    $menuLocations = get_nav_menu_locations();
                    // On récupère l'ID de notre menu principal
                    $menuID = $menuLocations['liens_rapides'];
                    // On récupère les liens de ce menu
                    $menu = wp_get_nav_menu_items($menuID);
                    // On boucle dans les liens et on les affiche
                    foreach ($menu as $navItem) {
                        echo '<li class="py-2"><a class="text-[0.93rem] text-gray" href="' . $navItem->url . '" title="' . $navItem->title . '">' . $navItem->title . '</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>
        <div>
            <div class="flex items-center justify-center h-auto mb-12">
                <?php
                $image = get_field('image1', 'options');
                $size = 'logo-footer';
                if ($image) {
                    echo wp_get_attachment_image($image, $size);
                }
                ?>
            </div>
            <div class="flex items-center justify-center h-auto mb-12">
                <?php
                $image = get_field('image2', 'options');
                $size = 'logo-footer';
                if ($image) {
                    echo wp_get_attachment_image($image, $size);
                }
                ?>
            </div>
        </div>
    </div>
    <p class="text-gray text-[10px] my-8"><?= get_field('certif', 'options'); ?></p>
</section>

</body>
</html>