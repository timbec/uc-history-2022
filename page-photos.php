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
<h4>page-news.php</h4>
	<main id="primary" class="site-main page-news">
	<h1>Places</h1>

	<h3>Photo Galleries</h3>

	<p>Photographs, taken by me and other people, from UC and area.</p>
		    <?php 
    
    $photoWidget = new WP_Query(array(
        'posts_per_page' => 6,
        'post_type' => 'photos',
        'orderyby' => 'meta_value_num',
        'order' => 'ASC',
    )); 
    while ($photoWidget->have_posts()) {
        $photoWidget->the_post(); ?>
        <li class="page-news__listing">
        <figure class="page-news__thumbnail">
            <a href="<?php the_permalink(); ?>">
		<?php echo the_post_thumbnail(); ?>
        </a>
        </figure>
        <div class="page-news__content">
            		<h3>
		<a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
		</h3>
		<p>
			<?php the_excerpt(); ?>
		</p>
        </div>
        </li>
        
        
    <?php } ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
