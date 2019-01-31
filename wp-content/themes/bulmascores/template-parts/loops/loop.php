<?php
/**
* Template part for displaying posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Bulmascores
*/

?>
<article class="box" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header>
        <?php the_title( '<h2 class="title is-size-1"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

        <?php if ( 'post' === get_post_type() ) : ?>
            <div class="post-meta">
<!--				<p>-->
<!--					--><?php //esc_html_e( 'Last modified&nbsp;', 'bulmascores' )?><!--<time>--><?php //the_modified_date( 'j/m/Y' ); ?><!--</time>-->
<!--					--><?php //esc_html_e( 'by&nbsp;', 'bulmascores' ) . the_author_posts_link();?>
<!--					--><?php //bulmascores_post_meta( 'categories' ); ?>
<!--				</p>-->
            </div><!-- .post-meta -->
        <?php endif; ?>
    </header>

    <?php
        the_post_thumbnail( 'bulmascores_thumbnail', array(
            'class' => 'has-margin-b-5 is-fullwidth',
            'alt' => get_the_title(),
            'title' => get_the_title(),
        ) ); ?>

    <div class="post-content has-margin-b-4">
        <?php the_excerpt(); ?>
    </div><!-- .post-content -->

    <footer>
        <a href="<?php the_permalink(); ?>"> Read more <i class="far fa-chevron-right"></i></a>
    </footer>

</article><!-- #post-<?php the_ID(); ?> -->
