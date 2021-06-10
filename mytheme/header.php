<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>

    <!-- Lien Bootstrap v5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body <?php body_class(); ?>>

<header>

    <nav class="bg-light container-fluid">
    
    <div class="row align-items-center">
        <div class="col-12 d-flex justify-content-center">
            <a class="" href="<?php echo home_url( '/' ); ?>">

                <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png" alt="" height="90">

            </a>

            <p class="fs-2 align-self-center">Journal Le Pays</p>

        </div>
    </div>

    <div class="row align-items-center p-2">
        <div class="col-12 d-flex justify-content-center">
            <?php wp_nav_menu( 
                array( 
                    'theme_location' => 'header-menu',
                    'menu_class' => 'nav'
                )
            ); ?>
        </div>
    </div>

    </nav>

</header>

<br>

<?php wp_body_open(); ?>