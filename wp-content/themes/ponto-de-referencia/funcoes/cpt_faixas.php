<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cpt_faixas() {

    //Faixas
    $labels = array(
        'name' => 'Faixas',
        'singular_name' => 'Faixa de layout',
        'menu_name' => 'Faixas de layout',
        'name_admin_bar' => 'Faixas de layout',
        'add_new' => 'Cria nova faixa',
        'add_new_item' => 'Criar nova faixa',
        'new_item' => 'Cria nova faixa',
        'edit_item' => 'Editar',
        'view_item' => 'Ver',
        'all_items' => 'Todas as faixas',
        'search_items' => 'Buscar',
        'parent_item_colon' => 'Faixa',
        'not_found' => 'Faixa não encontrada.',
        'not_found_in_trash' => 'Faixa não foi encontrada no lixo.'
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'query_var' => true,
        'rewrite' => array('slug' => 'faixa'),
        'capability_type' => 'page',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'page-attributes', 'post-formats'),
            //'taxonomies' => array('category')
//        'taxonomies' => array('category', 'post_tag')
    );
    //Faixas - end

    register_post_type('faixa', $args);
}

add_action('init', 'cpt_faixas');


