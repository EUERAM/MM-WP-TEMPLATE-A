<?php
get_header();
?>
 <div class="container page-header text-center">
            <h1>PORTFOLIO SINGLE</h1>
            <h2>My latest work</h2>
            <div class="line">
                <span class="circle"></span>
            </div>
        </div>
        <div class="container">
            <div class="portfolio-single">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'portfolio-single' );

			//the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		 </div>
    </div>

<?php

get_footer();
