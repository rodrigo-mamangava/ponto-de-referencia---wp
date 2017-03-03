<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ponto_de_Referencia
 */
get_header();
?>

<article class="single-post" role="article">
    

        <?php
        while (have_posts()) : the_post();

            get_template_part('template-parts/blog/single');


        endwhile; // End of the loop.
        ?>


</article><!--  -->


<?php
//get_sidebar();
get_footer();
