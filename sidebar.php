<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eram
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-12 col-md-4 sidebar">
    <div class="global">
	   <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
</div>