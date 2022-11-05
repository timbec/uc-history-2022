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
<h4>page-video.php</h4>
	<main id="primary" class="site-main page-video">

	<h3>Videos</h3>
    <article class="page-video__intro">
    <p>Videos shot in Uranium City over the years. </p>
    </article>
	
    <ul class="page-video__container">
        <?php 
    
    $videoWidget = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'video',
        'orderyby' => 'meta_value_num',
        'order' => 'ASC',
    )); 
    while ($videoWidget->have_posts()) {
        $videoWidget->the_post(); ?>
        <li class="page-video__listing">
        <figure class="page-video__thumbnail">
            <a href="<?php the_permalink(); ?>">
		<?php echo the_post_thumbnail(); ?>
        </a>
        </figure>
        <div class="page-video__content">
            		<h3>
		<a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
		</h3>
		<!-- <p>
			<?php the_excerpt(); ?>
		</p> -->
        </div>
        </li>
        
        
    <?php } ?>
    </ul>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
