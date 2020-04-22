<div class="row">
    <div class="col-12 col-lg-5">
        <h2><?php the_title(); ?></h2>
        <div class="description">
            <?php the_content(); ?>
        </div>
        <h3>Project details</h3>
        <p><b>Client: </b> <?php the_field('client'); ?></p>
        <p><b>Agency: </b> <?php the_field('agency'); ?></p>
        <?php
            // creo variable $types per posar un array de categories
                // get_the_terms(id,'nom_categoria');
                $types = get_the_terms(get_the_ID(),'type_portfolio'); 
                $tipus ='';
                //foreach recorre l'array i anem omplint la variable $tips amb el nom de la categoria, un darrera l'altre separat per espais.
                foreach ($types as $type){
                    // print_r($type);
                    $tipus .= $type->name.' ';
                }
                ?>
                <?php // 'echo $tipus' mostra en pantalla la variable $tipus, que és el text que s'ha creat anteiorment ?>
        <p><b>Type: </b> <?php echo $tipus; ?></p>
        <p><b>Date: </b> <?php the_field('date'); ?></p>
        <p><b>Share: </b> <?php the_field('share'); ?></p>
        <p><a href="<?php the_field('url'); ?>" class="btn">LAUNCH PROJECT</a></p>
    </div>
    <div class="col-12 col-lg-7">
        <div class="gallery">
            <?php $imatges = acf_photo_gallery('images',get_the_ID());
                foreach($imatges as $img){ 
                
            ?>
            <div class="imatge">
                <img src="<?php echo $img['full_image_url']; ?>" alt="Element del portfolio">
            </div>
            <?php } ?>
            
        </div>
    </div>
</div>