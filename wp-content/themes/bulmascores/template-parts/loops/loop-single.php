<?php
/**
* Template part for displaying posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Bulmascores
*/

?>

<article class="" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!--<?php //bulmascores_post_meta( 'categories' ); ?>-->

    <?php the_post_thumbnail( 'bulmascores_thumbnail', array(
            'class' => 'attachment-post-thumbnail has-margin-b-6',
            'alt' => get_the_title(),
            'title' => get_the_title(),
        )
    ); ?>

    <div class="content">
        <div class="columns is-centered">
            <div class="column is-9-widescreen">
                <header class="post-header">
                    <?php the_title( '<h1 class="title is-1">', '</h1>' ); ?>
                    <!--<?php //the_subtitle( '<h2 class="subtitle">', '</h2>' ); ?>-->


                    <?php if ( 'post' === get_post_type() ) : ?>
                        <div class="post-meta has-margin-b-6">
                            <p>
                                <?php esc_html_e( 'Last modified&nbsp;', 'bulmascores' )?><time><?php the_modified_date( 'j/m/Y' ); ?></time>
                                <?php esc_html_e( 'by&nbsp;', 'bulmascores' ) . the_author_posts_link();?>
                            </p>
                        </div><!-- .post-meta -->
                    <?php
                    endif; ?>

                </header><!-- .post-header -->
                
                <?php
                the_content();

                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bulmascores' ),
                    'after'  => '</div>',
                ) );
                ?>
            </div>
        </div>
    </div><!-- .content -->

    <footer>
        <?php bulmascores_post_meta( 'tags' ); ?>
        <?php get_template_part( 'template-parts/contents/content', 'social' ); ?>
    </footer>

</article><!-- #post-<?php the_ID(); ?> -->