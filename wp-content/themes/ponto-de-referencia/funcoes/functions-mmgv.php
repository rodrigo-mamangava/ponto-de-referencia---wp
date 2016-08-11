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
