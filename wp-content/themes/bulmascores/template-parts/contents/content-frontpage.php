<?php
/**
* Template part for displaying posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Bulmascores
*/

?>

<main id="main" class="container">

	<div class="columns is-multiline">
		<div class="column is-12 is-9-widescreen">

			<?php
			// The Query
			$bulmascores_the_query = new WP_Query( $args = 'posts_per_page=5' );

			// The Loop
			if ( $bulmascores_the_query->have_posts() ) :
				while ( $bulmascores_the_query->have_posts() ) :
					$bulmascores_the_query->the_post();

					get_template_part( 'template-parts/loops/loop', get_post_format() );
				endwhile;

			else :
				get_template_part( 'template-parts/contents/content', 'none' );

			endif;

			// Restore original Post Data
			wp_reset_query();
			wp_reset_postdata();
			?>

		</div><!-- .columns is-9 -->

		<div class="column is-12 is-3-widescreen">
			<?php get_sidebar(); ?>
		</div><!-- .columns is-3 -->

	</div><!-- .columns -->


</main><!-- #main -->
