<?php
/*
Template Name: Portfolio
*/
?>
<?php

get_header();

?>

<div class="portfolio-wrapper"> <!-- Voeg de wrapper div hier toe -->
<?php
// Query voor portfolio items
$portfolio_query = new WP_Query( array(
    'post_type' => 'portfolio',
    'posts_per_page' => -1 // Haal alle portfolio items op
) );

if ( $portfolio_query->have_posts() ) :
    while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>
        <div class="portfolio-item">
            <h2><?php the_title(); ?></h2>
<!--             <div class="portfolio-content">
                <?php the_excerpt(); ?>
            </div> -->
            <a href="<?php the_permalink(); ?>">Bekijk meer</a>
        </div>
    <?php endwhile;
    wp_reset_postdata();
else :
    echo '<p>Geen portfolio items gevonden.</p>';
endif;
?>
</div> <!-- Sluit de wrapper div hier af -->
<?php
get_footer();
?>