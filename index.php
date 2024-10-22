<?php
/* Template Name: Front Page */
get_header();
?>
<main>
	<?php
	if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
        <h1><?php the_title(); ?></h1>
            <?php the_content(); // Haalt de inhoud van de WordPress editor op ?>
<?php
    endwhile;
endif;
?>
</main>
<?php
get_footer();
?>