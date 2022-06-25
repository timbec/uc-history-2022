<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uc-history-2022
 */

get_header();
?>
<h4>page-places.php</h4>
	<main id="primary" class="site-main">
	<h1>Places</h1>

	<h3>About Places:</h3>

	<p>Places are posts dedicated to mulitple places in and around Uranium City, contributed by various people who have stories about their time in Uranium City and the area.</p>
		    <?php 
    
    $placesWidget = new WP_Query(array(
        'posts_per_page' => 3,
        'post_type' => 'places',
        'orderyby' => 'meta_value_num',
        'order' => 'ASC',
    )); 
    while ($placesWidget->have_posts()) {
        $placesWidget->the_post(); ?>
        <li>
        
        <a href="<?php the_permalink(); ?>">
		<?php echo the_post_thumbnail(); ?>
            <?php the_title(); ?>
        </a>
		<h3>
		<a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
		</h3>
		<p>
			<?php the_excerpt(); ?>
		</p>
        </li>
        
        
    <?php } ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
