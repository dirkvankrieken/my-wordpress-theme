<?php
get_header();
?>
<?php
// Verkrijg alle categorieën
$categories = get_categories();
?>

<!-- <div class="category-picker">
    <div class="category-title" onclick="toggleCategoryList()"><?php _e('Categories', 'jouw-thema'); ?></div>
    <div class="category-list" id="categoryList" style="display: none;">
        <?php foreach ($categories as $category) : ?>
            <div class="category-item" onclick="location.href='<?php echo esc_url(home_url('/')); ?>?category_name=<?php echo esc_attr($category->slug); ?>'">
                <?php echo esc_html($category->name . ' (' . $category->count . ')'); ?>
            </div>
        <?php endforeach; ?>
    </div>
</div> -->


<?php
  while(have_posts()) {
    the_post(); ?>
    <div class="blog-post">
	<?php
    // Haal de categorieën op
    $categories = get_the_category();
    if ( ! empty( $categories ) ) {
        echo '<div class="post-categories">';
        foreach ( $categories as $category ) {
            // Toon elke categorie met een link naar de archiefpagina
            echo '<button class="category-button"><a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a></button> ';
        }
        echo '</div>';
    }
    ?>
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
  get_footer();
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