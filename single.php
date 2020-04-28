<?php
get_header();
?>
<div class="container page-header text-center">
    <h1>SINGLE POST</h1>
    <h2>Latest news</h2>
    <div class="line">
        <span class="circle"></span>
    </div>
</div>
<div class="container">
    <div class="blog-single">
        <div class="row">
            
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' );

			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.


		endwhile; // End of the loop.
		?>
<?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php
get_footer();
