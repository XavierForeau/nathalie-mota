<!doctype html>
<html lang="<?php echo get_bloginfo('language'); ?>">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Photographe">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <!-- Logo -->
        <div class="header-container header">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nathalie-mota-logo.png" alt="Mon Logo">
            </div>

            <!-- menu -->
            <?php
            wp_nav_menu(['theme_location' => 'menu',]);
            ?>
        </div>

        <div class="banner">
            <?php
            // image random 
            $image_directory = get_template_directory() . '/assets/images/bannieres/';
            $images = glob($image_directory . '*.jpeg');
            $random_image = $images[array_rand($images)];
            
            echo "<script>console.log('image : " . $random_image . "');</script>";

            // Affiche l'image en bannière
            echo '<img src="' . $random_image . '" alt="Bannière de présentation">';
            echo '<img src="' . htmlspecialchars($random_image) . '" alt=" test">';

            ?>
        </div>

        <img class="random-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/bannieres/nathalie-0.jpeg" alt="Bannière">
     
        <?php get_footer(); ?>