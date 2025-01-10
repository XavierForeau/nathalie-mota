<!doctype html>
<html lang="<?php echo get_bloginfo('language'); ?>">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Photographe d'event">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <!-- Logo -->
        <div class="header-container">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nathalie-mota-logo.png" alt="Mon Logo">
            </div>

            <!-- menu back-office -->
            <?php
            wp_nav_menu([
                'theme_location' => 'main-menu',
            ]);
            ?>
        </div>

        <div class="banner-home">
            <?php
            // image random dans le répertoire des bannieres
            $image_directory = get_template_directory() . '/assets/images/bannieres/';
            $images = glob($image_directory . '*.jpeg');
            $random_image = $images[array_rand($images)];

            // Affiche l'image en bannière
            echo '<img src="' . $random_image . '" alt="Bannière de présentation">';
            ?>
        </div>

        <!--
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bannieres/nathalie-0.jpeg" alt="Bannière">
        -->

        <?php
        // formulaire de contact
        echo do_shortcode('[contact-form-7 id="50e16f7" title="Formulaire de contact 1"]');
        ?>