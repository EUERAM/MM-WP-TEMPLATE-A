<?php
/**
 Template Name: HomePage
 */

get_header();
?>

 <div class="container">
    <div class="row home align-items-center">
        <div class="col-12 text-center">

		<?php
            //comença el loop
		while ( have_posts() ) :
			the_post();
            
            //the_content mostra el contingut de la pàgina (dins del backend)
			the_content();

		endwhile; // End of the loop.
		?>

        </div>
    </div>
</div>

<?php
get_footer();
