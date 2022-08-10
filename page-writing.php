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
<h4>page-writing.php</h4>
	<main id="primary" class="site-main page-writing">
        <article class="page-writing__intro">

	<h1>Uranium City Writing</h1>

	<p>This is a page for any and all writing about Uranium City. Most of below is my own but I hope to include other voices over the coming months and years.</p>
        </article>
		    <?php 
    
    $writingWidget = new WP_Query(array(
        'posts_per_page' => 5,
        'post_type' => 'writing',
        'orderyby' => 'meta_value_num',
        'order' => 'ASC',
    )); 
    while ($writingWidget->have_posts()) {
        $writingWidget->the_post(); ?>
        <li class="page-writing__listing">
        <figure class="page-writing__thumbnail">
            <a href="<?php the_permalink(); ?>">
		<?php echo the_post_thumbnail(); ?>
        </a>
        </figure>
        <div class="page-writing__content">
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
