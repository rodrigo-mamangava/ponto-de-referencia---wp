<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Debugar a funcao com pre e var_dump
 * @param type $var
 */
function debug($var) {
    echo '<pre>';
    echo var_dump($var);
    echo '<pre>';
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

add_action('manage_botao-home_posts_custom_column', 'manage_roundtable_custom_columns', 10, 2);

function manage_roundtable_custom_columns($column, $post_id) {
    $the_post = get_post($id);

    switch ($column) {
        case 'menu_order' :

            echo $the_post->menu_order;
            break;
    }
}

add_filter('user_contactmethods', 'my_user_contactmethods');

function my_user_contactmethods($user_contactmethods) {

    $user_contactmethods['twitter'] = 'Twitter Username';

    return $user_contactmethods;
}

function post_on_simples() {
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
    if (get_the_time('U') !== get_the_modified_time('U')) {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    }

    $time_string = sprintf($time_string, esc_attr(get_the_date('c')), esc_html(get_the_date()), esc_attr(get_the_modified_date('c')), esc_html(get_the_modified_date())
    );

    $posted_on = sprintf(
            esc_html_x('%s', 'post date', 'ponto-de-referencia'), $time_string
    );

    echo '<span class="posted-on">' . $posted_on . '</span>'; //
}

function post_date() {
    global $post;
    $time_string = esc_html(get_the_date());

    echo $time_string;
}

function custom_excerpt_length( $length ) {
	return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
