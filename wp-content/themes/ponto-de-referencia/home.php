<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ponto_de_Referencia
 */
get_header();
?>


<?php
$args = array(
    'post_type' => 'post',
    'order' => 'DESC',
    'orderby' => 'date',
    'ignore_sticky_posts' => false,
);

// The Query
$the_query = new WP_Query($args);

//Capa

$first = $the_query->posts[0];
$thumb_url = get_the_post_thumbnail_url($first);

//debug($first);
?>
<section class="capa-single" style="background-image: url(<?php echo $thumb_url; ?>)">

    <?php get_template_part('template-parts/header/loop', 'posts'); ?>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">                
                <h1><?php echo $first->post_title; ?></h1>
                <a class="btn-abrir" href="<?php echo $first->guid; ?>">Abrir</a>

            </div>
        </div>
    </div>

    <div class="img-filter"></div>
</section> <!-- capa-single-->

<div class="container loop">
    <div class="row is-flex">  
        <?php
        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();

                get_template_part('template-parts/blog/loop', 'item');

            endwhile;
        endif;
        ?>

    </div>
</div>





<?php
get_footer();
