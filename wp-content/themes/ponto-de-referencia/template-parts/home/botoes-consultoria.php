<div class="container">

    <div class="row">


        <?php
        $args = array(
            'category_name' => 'quero-implementar-consultoria',
            'post_type' => 'botao-home',
            'orderby' => 'menu_order',
        );

        $the_query = new WP_Query($args);

        // The Loop
        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                <div class="<?php print_btn_class(); ?>" >                        
                    <a 
                        href="<?php echo get_field("link") ?>"
                        class="botao-home btn-home-1" 
                        <?php if(has_post_thumbnail){ echo 'style="background-image: url('.get_the_post_thumbnail_url().')"';} ?>
                        data-tit="<?php echo get_the_title() ?>" 
                        data-desc="<?php echo get_field("descricao") ?>"> 
                            <?php echo get_the_title() ?>
                        
                    </a>
                </div>
                <?php
            endwhile;
        endif;
        // Reset Post Data
        wp_reset_postdata();
        ?>

    </div>

</div><!-- container -->