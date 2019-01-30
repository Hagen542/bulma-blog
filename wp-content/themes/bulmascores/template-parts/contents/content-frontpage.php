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

	<div class="columns">
		<div class="column is-9">

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

			<a class="button is-large" href="<?php echo esc_url_raw( get_permalink( get_option( 'page_for_posts' ) ) ); ?>"><?php esc_html_e( 'View all posts', 'bulmascores' ); ?></a>

		</div><!-- .columns is-8 -->

		<div class="column is-3">
			<?php get_sidebar(); ?>
		</div><!-- .columns is-4 -->

	</div><!-- .columns -->


</main><!-- #main -->
