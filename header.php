<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php
if (is_page('contact')) {
} else {
    ?>

    <header class="flex flex-col sm:flex-row justify-start items-center h-auto">
        <a href="/">
            <div class="flex items-center justify-center h-8 px-8 my-8">
                <?php
                $image = get_field('logo', 'options');
                $size = 'footer-size';
                if ($image) {
                    echo wp_get_attachment_image($image, $size);
                }
                ?>
            </div>
        </a>
        <nav class="mb-8 sm:mb-0">
            <ul class="flex-col sm:flex-row sm:flex">
                <?php
                // On récupère la liste des menus
                $menuLocations = get_nav_menu_locations();
                // On récupère l'ID de notre menu principal
                $menuID = $menuLocations['menu_principal'];
                // On récupère les liens de ce menu
                $menu = wp_get_nav_menu_items($menuID);
                // On boucle dans les liens et on les affiche
                foreach ($menu as $navItem) {
                    echo '<li><a class="font-semibold px-2" href="' . $navItem->url . '" title="' . $navItem->title . '">' . $navItem->title . '</a></li>';
                }
                ?>
            </ul>
        </nav>
    </header>
    <?php
}
?>


<?php wp_body_open(); ?>