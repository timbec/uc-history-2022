<?php
/**
*Template Name: News Archive Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	<header>
	<h1>Memorabilia</h1>
	</header>

	<?php	$args = array( 'post_type' => 'memorabilia', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>


	<div class="entry-content">

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<!--featured image-->
	<div class="archive-image">
		<?php if (has_post_thumbnail()) { ?>
		<?php the_post_thumbnail('photo-archive'); ?>
		<?php } else { ?>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/newspaper-image.jpg" />
		<?php } ?>
	</div>

			<div class="archive-text">
				<?php the_excerpt(); ?>
			</div>

		</div><!--end .entry-text-->
	<?php endwhile; ?>

    <?php
    // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    ?>


	   	</main><!-- Main -->
   	</div><!--end primary-->

<?php get_sidebar(); ?>
    
<?php get_footer(); ?>