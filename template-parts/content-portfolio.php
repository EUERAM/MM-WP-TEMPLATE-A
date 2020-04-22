<div <?php post_class('col-12 col-sm-6 col-lg-4 item'); ?> >
    <a href="<?php the_permalink(); ?>">
        <div class="global">
            <?php // posa la imatge destacada ?>
            <?php the_post_thumbnail('medium'); ?>
            <div class="overlay">
                <h2><?php the_title(); ?></h2>  
                <p>Client: <?php the_field('client'); ?></p>
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
                <h3><?php echo $tipus ?></h3>
            </div>
        </div>
    </a>
</div>