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

    //debug($faixaMeta);

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

        case 'faixa-imagem-crop.php':
            include(locate_template('faixa-imagem-crop.php'));
            break;

        case 'faixa-form.php':
            include(locate_template('faixa-form.php'));
            break;

        case 'faixa-texto.php':
            include(locate_template('faixa-texto.php'));
            break;
        
        case 'faixa-video-texto.php':
            include(locate_template('faixa-video-texto.php'));
            break;
        
        case 'faixa-texto-video.php':
            include(locate_template('faixa-texto-video.php'));
            break;
        
        case 'faixa-video.php':
            include(locate_template('faixa-video.php'));
            break;
        
        case 'faixa-titulo.php':
            include(locate_template('faixa-titulo.php'));
            break;
        
        case 'faixa-titulo-imagem.php':
            include(locate_template('faixa-titulo-imagem.php'));
            break;
        
        case 'faixa-titulo-imagem-grande.php':
            include(locate_template('faixa-titulo-imagem-grande.php'));
            break;

        default:
            break;
    }
}

add_shortcode('faixa', 'printFaixa');
