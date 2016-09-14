<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// [bartag foo="foo-value"]
function bartag_func($atts) {
    $shortcodeVariables = shortcode_atts(array(
        'foo' => 'something',
        'bar' => 'something else',
            ), $atts);

    return "foo = {$shortcodeVariables['foo']}";
}

add_shortcode('bartag', 'bartag_func');

/**
 * Print das faqixas
 * @param type $atts
 * @return type
 */
function printFaixa($atts) {

    $postId = $atts['id'];

    $faixa = get_post($postId);

    $faixaMeta = get_post_meta($postId);
    
//    debug($faixaMeta);

    switch ($faixaMeta['_wp_page_template']['0']) {
        case 'faixa-imagem-texto.php':
            include(locate_template('faixa-imagem-texto.php'));
            break;
        
        case 'faixa-texto-imagem.php':
            include(locate_template('faixa-texto-imagem.php'));
            break;
        
        case 'faixa-imagem.php':
            include(locate_template('faixa-imagem.php'));
            break;

        default:
            break;
    }
}

add_shortcode('faixa', 'printFaixa');
