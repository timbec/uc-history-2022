<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package uc-history-2022
 */

get_header();
?>

<h3>single-memorabilia.php</h3>

	<main id="primary" class="site-main page-memorabilia">

	<article class="page-memorabilia__intro">
		<h1 class="page-memorabilia__title">
			Welcome to the Memorabilia Page
		</h1>
		<p>
			This pages features memoribilia sent to me over the years by ex-residents and collected by myself. Sadly, much of the memorabilia that existed in archives is slowly disappearing. 
		</p>
	</article>
	<ul class="page-memorabilia__container">
		<?php
		while ( have_posts() ) :
			the_post(); ?>
			<li class="page-memoriablia__item">
				<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
			</li>

			<?php the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'uc-history-2022' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'uc-history-2022' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</ul>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
