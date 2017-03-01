<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<section class = "col-xs-12 col-sm-6 col-md-4">
    <div class="item">
    <a href="<?php echo the_permalink(); ?>">
        <img class="img-circle avatar" src="<?php echo get_avatar_url(get_the_author_meta('id')); ?>"> 
        <p class="autor"><?php echo get_the_author(); ?></p> 
        <p class="data">
          <?php post_date(); ?>
        </p><!-- .entry-meta -->
        <?php the_title('<h2>', '</h2>'); ?>
        <div class="intro">
            <?php the_excerpt()?>
        </div>
            
    </a>
    </div>
</section>
