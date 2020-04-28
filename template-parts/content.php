<div <?php post_class("col-12 col-sm-6 col-lg-4") ?>>
    <div class="global">
        <div class="imatge">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium'); ?>
            </a>
        </div>
        <div class="content">
            <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
            </a>
            <p class="date"><?php the_date(); ?></p>
            <div><?php the_excerpt(); ?></div>
            <div class="peu">
                <div class="row align-items-center">
                    <div class="col-6">
                        <?php $autor = get_the_author_meta('ID'); ?>
                        <?php echo get_avatar($autor); ?>
                        By <?php the_author(); ?>
                    </div>
                    <div class="col-6 text-right">
                        <div class="category">
                            <i class="fas fa-tag"></i> <?php the_category(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
