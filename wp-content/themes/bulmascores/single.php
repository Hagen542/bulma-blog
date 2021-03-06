<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package Bulmascores
*/

get_header(); ?>

<div id="primary" class="content-area section">
	<main id="main" class="container">

		<div class="columns is-centered is-multiline">
			<div class="column is-9-widescreen is-12">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/loops/loop', 'single' );

					// If comments are open or we have at least one comment, load up the comment template.
//					if ( comments_open() || get_comments_number() ) :
//						comments_template();
//					endif;

				endwhile; // End of the loop.
				?>

			</div><!-- .columns is-9 -->
            <div class="column is-3-widescreen is-12">
                <?php get_sidebar(); ?>
            </div><!-- .columns is-3 -->
		</div><!-- .columns -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
