<?php
get_header();
?>
<main>
	<?php
	if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
        <div>
            <?php the_content(); // Haalt de inhoud van de WordPress editor op ?>
        </div>
<?php
    endwhile;
endif;
?>
</main>

<?php
get_footer();
?>
