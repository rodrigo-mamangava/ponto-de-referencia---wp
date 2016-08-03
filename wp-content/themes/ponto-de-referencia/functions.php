<?php
/**
 * Ponto de Referencia functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ponto_de_Referencia
 */
if (!function_exists('ponto_de_referencia_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function ponto_de_referencia_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Ponto de Referencia, use a find and replace
         * to change 'ponto-de-referencia' to the name of your theme in all the template files.
         */
        load_theme_textdomain('ponto-de-referencia', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary', 'ponto-de-referencia'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('ponto_de_referencia_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }

endif;
add_action('after_setup_theme', 'ponto_de_referencia_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ponto_de_referencia_content_width() {
    $GLOBALS['content_width'] = apply_filters('ponto_de_referencia_content_width', 640);
}

add_action('after_setup_theme', 'ponto_de_referencia_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ponto_de_referencia_widgets_init() {
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'ponto-de-referencia'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'ponto-de-referencia'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'ponto_de_referencia_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function ponto_de_referencia_scripts() {

    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

    wp_enqueue_style('ponto-de-referencia-style', get_stylesheet_uri());

    wp_enqueue_script('jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', array(), '', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '', true);

    wp_enqueue_script('pdr-btn-home', get_template_directory_uri() . '/js/btn-home.js', array('jquery'), '20160802', true);
    wp_enqueue_script('pdr-scroll-home', get_template_directory_uri() . '/js/scroll.js', array('jquery'), '20160802', true);

    wp_enqueue_script('ponto-de-referencia-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);
    wp_enqueue_script('ponto-de-referencia-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    //
}

add_action('wp_enqueue_scripts', 'ponto_de_referencia_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function get_header_transparente() {
    ?>
    <header>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img alt="Ponto de Referência" src="<?php echo get_template_directory_uri() ?>/image/ponto-de-referencia-logo.png">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#implementar-1">Quero implementar</a></li>
                        <li><a href="#navegar">Quero Navegar</a></li>
                        <li><a href="#conhecer">Quero Conhecer</a></li>
                        <li><a href="#"><img src='<?php echo get_template_directory_uri() ?>/image/search.png'></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>



    </header>
    <?php
}

add_shortcode('header_transparente', 'get_header_transparente');

function get_header_branco() {
    ?>
    <header class="branco">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img alt="Ponto de Referência" src="<?php echo get_template_directory_uri() ?>/image/ponto-de-referencia-logo.png">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#implementar-1">Quero implementar</a></li>
                        <li><a href="#navegar">Quero Navegar</a></li>
                        <li><a href="#conhecer">Quero Conhecer</a></li>
                        <li><a href="#"><img src='<?php echo get_template_directory_uri() ?>/image/search.png'></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>



    </header>
    <?php
}

add_shortcode('header_branco', 'get_header_branco');

function get_capa() {
    ?>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="capa">
                    <img src="<?php echo get_template_directory_uri() ?>/image/capa.png">                                        
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="capa-titulo">
                        <h1>MRA, Movimento Rio Atende.</h1>
                        <p>Qual a verdadeira medalha que o Brasil deve ganhar nas Olimpíadas?</p>
                    </div><!-- .capa-titulo -->
                </div>
            </div>
        </div>
    </div>


    <?php
}

add_shortcode('capa', 'get_capa');

function get_custom_footer() {
    ?>
    <footer>

        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-3">
                    <ul class="social">
                        <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/image/social/twitter.png"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/image/social/facebook.png"></a></li>                    
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-9">
                    <ul class="links-menu">
                        <li><a href="#implementar-1">Quero implementar</a></li>
                        <li><a href="#navegar">Quero Navegar</a></li>
                        <li><a href="#conhecer">Quero Conhecer</a></li>
                    </ul>


                </div>

            </div>


        </div>

    </footer>

    <?php
}

add_shortcode('footer', 'get_custom_footer');



//
add_action('init', 'theme_custom_post_type');

/**
 * Register the theme custom post type
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function theme_custom_post_type() {
    $labels = array(
        'name' => 'Botões da HOME',
        'singular_name' => 'Botão da Home',
        'menu_name' => 'Botões da HOME',
        'name_admin_bar' => 'Botões da Home',
        'add_new' => 'Novo',
        'add_new_item' => 'Novo botão',
        'new_item' => 'Novo botão',
        'edit_item' => 'Editar',
        'view_item' => 'Ver',
        'all_items' => 'Todos os botões',
        'search_items' => 'Buscar',
        'parent_item_colon' => 'Botçoes',
        'not_found' => 'Botão não localizado.',
        'not_found_in_trash' => 'Botão não localizado no lixo.'
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-screenoptions',
        'query_var' => true,
        'rewrite' => array('slug' => 'botao-home'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            //'taxonomies' => array('category')
//        'taxonomies' => array('category', 'post_tag')
    );

    register_post_type('botao-home', $args);
}

/* Custom Taxonomies */

function theme_custom_category() {

    //Áreas de pesquisa
    $labels = array(
        'name' => 'Tipo de botão',
        'singular_name' => 'Tipo de botão',
        'search_items' => 'Buscar',
        'all_items' => 'Todos',
        'parent_item' => __('Parent'),
        'parent_item_colon' => __('Parent:'),
        'edit_item' => 'Editar',
        'update_item' => 'Editar',
        'add_new_item' => 'Adicionar novo tipo de botão',
        'new_item_name' => 'Novo tipo de botão',
        'menu_name' => __('Tipo de botão'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'tipo-botao'),
    );

    register_taxonomy('tipo-botao', array('botao-home'), $args);
    //end - Áreas de pesquisa
    //Áreas de pesquisa
    $labels = array(
        'name' => 'Tamanho do botão',
        'singular_name' => 'Tamanho do botão',
        'search_items' => 'Buscar',
        'all_items' => 'Todos',
        'parent_item' => __('Parent'),
        'parent_item_colon' => __('Parent:'),
        'edit_item' => 'Editar',
        'update_item' => 'Editar',
        'add_new_item' => 'Adicionar novo tamanho de botão',
        'new_item_name' => 'Novo tamanho de botão',
        'menu_name' => __('Tamanho do botão'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'tamanho-botao'),
    );

    register_taxonomy('tamanho-botao', array('botao-home'), $args);
    //end - Áreas de pesquisa
}

add_action('init', 'theme_custom_category');



add_action('manage_botao-home_posts_custom_column', 'manage_roundtable_custom_columns', 10, 2);

function manage_roundtable_custom_columns($column, $post_id) {
    $the_post = get_post($id);

    switch ($column) {
        case 'menu_order' :

            echo $the_post->menu_order;
            break;
    }
}

/**
 * Debugar a funcao com pre e var_dump
 * @param type $var
 */
function debug($var) {
    echo '<pre>';
    echo var_dump($var);
    echo '<pre>';
}

/**
 * Verifica o tamanho do btn e imprime as classes certas
 */
function print_btn_class() {
    if (has_term('botao-normal', 'tamanho-botao')) {
        echo 'col-xs-6 col-sm-3';
    }

    if (has_term('botao-grande', 'tamanho-botao')) {
        echo 'col-xs-12 col-sm-6';
    }
}

/*
 * Get icones das rede sociais para os btn da home
 * 
 */

function getSocialIcon() {
    switch (strtolower(get_the_title())) {
        case "facebook":
            echo "<img src='" . get_template_directory_uri() . "/image/social/facebook.png'>";
            break;
        case "twitter":
            echo "<img src='" . get_template_directory_uri() . "/image/social/twitter.png'>";
            break;
        case "linkedin":
            echo "<img src='" . get_template_directory_uri() . "/image/social/Linkedin.png'>";
            break;
        default:
            echo get_the_title();
    }
}
