<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//Custom post type - selecting the template
//https://themeforest.net/forums/thread/custom-post-type-selecting-the-template/36782

add_action( 'add_meta_boxes', 'add_custom_page_attributes_meta_box' );
function add_custom_page_attributes_meta_box(){
    global $post;
    if ( 'page' != $post->post_type && post_type_supports($post->post_type, 'page-attributes') ) {
        add_meta_box( 'custompageparentdiv', __('Template'), 'custom_page_attributes_meta_box', NULL, 'side', 'core');
    }
}

function custom_page_attributes_meta_box($post) {
    $template = get_post_meta( $post->ID, '_wp_page_template', 1 ); ?>
    <select name="page_template" id="page_template">
        <?php $default_title = apply_filters( 'default_page_template_title',  __( 'Default Template' ), 'meta-box' ); ?>
        <option value="default"><?php echo esc_html( $default_title ); ?></option>
        <?php page_template_dropdown($template); ?>
    </select><?php
}

add_action( 'save_post', 'save_custom_page_attributes_meta_box' );
function save_custom_page_attributes_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;
    if ( ! empty( $_POST['page_template'] ) && get_post_type( $post_id ) != 'page' ) {
        update_post_meta( $post_id, '_wp_page_template', $_POST['page_template'] );
    }
}

//Custom post type - selecting the template - END



//Custom post type - add nova coluna a lista de post type faixa
add_filter( 'manage_edit-faixa_columns', 'my_edit_faixa_columns' ) ;

function my_edit_faixa_columns( $columns ) {

	$columns = array(
		'cb' => '<input type="checkbox" />',
		'title' => __( 'title' ),
		'shortcode' => __( 'shortcode' ),
	);

	return $columns;
}

add_action( 'manage_faixa_posts_custom_column', 'my_manage_faixa_columns', 10, 2 );



function my_manage_faixa_columns( $column, $post_id ) {
	global $post;

	switch( $column ) {

		/* If displaying the 'duration' column. */
		case 'shortcode' :

			/* Get the post meta. */
			$faixaId = get_the_ID();

			/* If no duration is found, output a default message. */
			if ( empty( $faixaId ) )
				echo __( 'Unknown' );

			/* If there is a duration, append 'minutes' to the text string. */
			else
				printf( __( '[faixa id="%s"]' ), $faixaId );

			break;

		
		default :
			break;
	}
}

//Custom post type - add nova coluna a lista de post type faixa - END
