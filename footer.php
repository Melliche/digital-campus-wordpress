<?php wp_footer(); ?>

<!--<section class="min-h-60 h-60 flex items-center justify-center flex-col bg-[url(--><?php //echo get_field('image_de_fond', 'options'); ?><!--)] ">-->
<section class='flex items-center h-auto justify-center flex-col mb-8 bg-cover bg-center' style=" background-image: url('<?php echo get_field('image_de_fond', 'option'); ?>')">
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
        <ul class="hidden sm:flex">
            <?php
            // On récupère la liste des menus
            $menuLocations = get_nav_menu_locations();
            // On récupère l'ID de notre menu principal
            $menuID = $menuLocations['liste_campus'];
            // On récupère les liens de ce menu
            $menu = wp_get_nav_menu_items($menuID);
            // On boucle dans les liens et on les affiche
            foreach ($menu as $navItem) {
                $value = $navItem->title;
                if (array_search($navItem, $menu) === count($menu) - 1) {
                    echo '<li><a class="font-semibold  text-white" href="' . $navItem->url . '" title="' . $navItem->title .'">' . $navItem->title .'</a></li>';
                } else {
                    echo '<li><a class="font-semibold text-white" href="' . $navItem->url . '" title="' . $navItem->title .'">'. $value .'</a></li><div class="mx-1 text-white">-</div>';
                }
            }
            ?>
        </ul>
    </nav>
</section>
<section class="h-auto flex flex-col items-center justify-center">
    <div>
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
                    echo '<li class="py-2"><a class="text-white text-lg" href="' . $navItem->url . '" title="' . $navItem->title . '">' . $navItem->title . '</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
    <p></p>
</section>

</body>
</html>