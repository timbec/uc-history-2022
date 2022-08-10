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

	<h3>Uranium City News</h3>

	<p>I try and keep up with the latest news about Uranium City. I'm a one-man band so can't keep up with everything but try to keep this page current. If any important news comes in that I haven't added here, please let me know. </p>
		    <?php 
    
    $newsWidget = new WP_Query(array(
        'posts_per_page' => 6,
        'post_type' => 'news',
        'orderyby' => 'meta_value_num',
        'order' => 'ASC',
    )); 
    while ($newsWidget->have_posts()) {
        $newsWidget->the_post(); ?>
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
