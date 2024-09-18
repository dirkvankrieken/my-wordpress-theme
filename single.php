<?php
get_header();
while(have_posts()) {
	the_post(); ?>
	    <div class="blog-post">
		<div class="blog-header">
			<div class="blog-date">Door <?php the_author_posts_link(); ?> op <?php echo get_the_date('l j F, Y'); ?>
		</div>
			<div class="blog-header-content"><?php the_title(); ?></div>
  		</div>
		<div class="blog-content">
	<?php the_content(); ?>
</div>
</div>
	<?php
}
get_footer();
?>

