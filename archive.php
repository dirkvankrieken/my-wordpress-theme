<?php
get_header();
?>
<?php
// Verkrijg alle categorieën
$categories = get_categories();
?>

<?php
  while(have_posts()) {
    the_post(); ?>
    <div class="blog-post">
		<div class="blog-header">
			<div class="blog-date">Door <?php the_author_posts_link(); ?> op <?php echo get_the_date('l j F, Y'); ?>
		</div>
			<div class="blog-header-content"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
  		</div>
		<div class="blog-content">
        <?php the_excerpt(); ?>
        <p><a href="<?php the_permalink(); ?>">Verder lezen &raquo;</a></p>
	</div>

    </div>
  <?php }
?>

	<script>
    function toggleCategoryList() {
        var categoryList = document.getElementById('categoryList');
        if (categoryList.style.display === 'none') {
            categoryList.style.display = 'block';
        } else {
            categoryList.style.display = 'none';
        }
    }
</script>