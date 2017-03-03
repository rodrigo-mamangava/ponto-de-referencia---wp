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
global $wp_query;
$args = array_merge($wp_query->query_vars, array(
    'posts_per_page' => '999',
    'post_type' => array(
        'post',
        'page'
    ),
        ));
query_posts($args);

//Capa

$first = $wp_query->posts[0];
$thumb_url = get_the_post_thumbnail_url($first);

//debug($first);
?>

<?php if (have_posts()) : ?>

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

    <div class="container">
        <div class="row">
            <div class="col-xs-12 titulo-tags">
                <h1 class="page-title"><?php printf(esc_html__('Search Results for: %s', 'ponto-de-referencia'), '<span>' . get_search_query() . '</span>'); ?></h1>
            </div>
        </div>
    </div><!-- .page-header -->

    <div class="container loop">
        <div class="row is-flex">  
            <?php
            if ($wp_query->have_posts()) :
                while ($wp_query->have_posts()) : $wp_query->the_post();

                    get_template_part('template-parts/blog/loop', 'item');

                endwhile;
            endif;
            ?>

        </div>
    </div>

<?php else: ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 titulo-tags">
                <h1 class="page-title"><?php printf(esc_html__('Search Results for: %s', 'ponto-de-referencia'), '<span>' . get_search_query() . '</span>'); ?></h1>
            </div>
        </div>
    </div><!-- .page-header -->
    
    <?php get_template_part( 'template-parts/content', 'none-pr' ); ?>

<?php endif; ?>



<?php echo do_shortcode('[footer_interno]'); ?>
<?php
get_footer();
