<?php
get_header();
?>

 <div class="container page-header text-center">
            <h1>PORTFOLIO</h1>
            <h2>My latest work</h2>
            <div class="line">
                <span class="circle"></span>
            </div>
        </div>
        <div class="container portfoli">
            <div class="filter">
                <span class="all active">ALL WORKS</span>
                <span class="type_portfolio-web-design">Web design</span>
                <span class="type_portfolio-web-development">Web Development </span>
                <span class="type_portfolio-branding">Branding</span>
            </div>
            <div class="items row">
		<?php if ( have_posts() ) : ?>

			

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	    </div>
    </div>

<?php
get_footer();
