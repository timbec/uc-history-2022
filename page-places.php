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
	<main id="primary" class="site-main page-places">

    <article class="page-places__intro">
    <h1 class="page-places__title">About Places:</h1>

	<p>Places are posts dedicated to mulitple places in and around Uranium City, contributed by various people who have stories about their time in Uranium City and the area.</p>
    </article>

    <ul class="page-places__container">
        <?php 
    
    $placesWidget = new WP_Query(array(
        'posts_per_page' => 4,
        'post_type' => 'places',
        'orderyby' => 'meta_value_num',
        'order' => 'ASC',
    )); 
    while ($placesWidget->have_posts()) {
        $placesWidget->the_post(); ?>
        <li class="page-places__item">
        
        <a href="<?php the_permalink(); ?>">
		<?php echo the_post_thumbnail(); ?>
            <?php the_title(); ?>
        </a>
		<h3>
		<!-- <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a> -->
		</h3>
		<p>
			<?php the_excerpt(); ?>
		</p>
        </li>
        
        
    <?php } ?>
    </ul>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
