<div <?php post_class("col-12 col-md-8 blog-content") ?>>
    <div class="global">
        <?php the_post_thumbnail('large'); ?>
        <div class="content">
            <p class="date"><?php the_date(); ?></p>
            <h2><?php the_title(); ?></h2>
            <div class="author">
                <?php $autor = get_the_author_meta('ID'); ?>
                <?php echo get_avatar($autor); ?> By <?php the_author(); ?>
                <span class="category"><i class="fas fa-tag"></i> <?php the_category(',')?></span>
            </div>
            <div class="contingut">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="blog-footer">
            <div class="row">
                <div class="col-6 comments">
                    <p><?php echo get_comments_number();?> Comments</p>
                </div>
                <div class="col-6 share text-right">
                    <p>
                        Share:
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-linkedin"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div>
        <?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; 
        ?>
        </div>
    </div>
</div>
