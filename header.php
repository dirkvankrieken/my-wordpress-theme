<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="wrapper">
            <nav>
				<h1><?php bloginfo('name'); ?></h1>
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'primary', // Zorg dat 'primary' overeenkomt met jouw themalocatie
                        'container' => false,           // Om extra divs rond het menu te vermijden
                        'menu_class' => '',             // Voeg hier eventueel een CSS-klasse toe
                    ) );
                ?>
            </nav>
        </div>
    </header>
