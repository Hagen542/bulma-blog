<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmascores
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area menu">
    <div class="box">
        <h2 class="title">Sign up to our newsletter</h2>
        <p class="has-margin-b-5">Get the most awesome content delivered straight to your inbox!</p>
        <button class="button is-action">Sign up</button>
    </div>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
