<?php
/*
*Plugin Name: Code Custom Post
*Plugin URI:
*Description: Code Custom Post
*Version 1.0
*Author: Jason Spriggs
*/


add_action('init', 'js_code_custom_post');

function js_code_custom_post(){
	register_post_type('code_post',
		[
		'labels' => [
			'name' => 'code',
			'singular_name' => 'code',
			'edit_item' => 'Edit item',
			'new_item' => 'New item',
			'view_item' => 'View item',
			'search_item' => 'Search code',
			'not_found' => 'No items found',
			'not_found_in_trash' => 'No items found in the trash',
			'parent_item_colon' => 'Parent item'
		],
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-editor-code',
			'rewrite' => array('slug' => 'code'),
			'publicly_queryable' => true,
			'query_var' => true,
			'supports' => [
				'title', 'editor', 'thumbnail'
			],
				'taxonomies' => ['catagory'],
		]
	);
}

add_action('admin_init', 'code_post');

function code_post(){
	add_meta_box(
		'Code Info',
		'code_post',
		'normal',
		'high'
	);
}

function code_excerpt_length($length){
	return 20;
}
add_filter('excerpt_length', 'code_excerpt_length', 999);


function code_excerpt_more($more){
	return 'Read More';
}

add_filter('excerpt_more', 'code_excerpt_more');



add_action('save_post', 'add_code_fields', 10, 2);

function add_code_fields($code_info_id, $code){
	if($code->post_type == 'code_post'){
		if(!current_user_can('edit_post', $code_info_id))
			return $code_info_id;
	}
}

add_filter('template_include', 'include_code_function', 1);

function include_code_function($template_path){
	if(get_post_type() == 'code_post'){
		if(is_single()){
			if($theme_file = locate_template(['code_post.php'])){
				$template_path = $theme_file;
			} else {
				$template_path = plugin_dir_path(__FILE__) . '/code_post.php';
			}
		}
	}
	return $template_path;
}

function set_posts_per_page_for_code($query){
	if($query -> is_post_type_archive('code_post')){
		$query -> set('posts_per_page', '3');
	}
}

add_action('pre_get_posts', 'set_posts_per_page_for_code');




/*/////////////////////////short code/////////////////////////////////////*/

function code_loop_shortcode( $atts ) {
    $output = '';
    $code_loop_atts = shortcode_atts(
      [
        'type' => 'code_post',
      ], $atts

      );
    $post_type = $code_loop_atts['type'];
    $args = array(
        'post_type' => $post_type,
        'post_status' => 'publish',
        'order' => 'date',
        'post_per_page' => 3

      );



    $the_query = new WP_Query($args);
        $output .= '<div class="container">';
          	$output .= '<h2>';
          		$output .= 'Code Posts';
          	$output .= '</h2>';
            $output .= '<div class="row">';

            $i = 0; 
		    while ($the_query->have_posts()) : $the_query->the_post();
		      $post_id = get_the_ID();

		        if ($i == 0 ){
			      	$output .= '<div class="col-sm-6 newest-recent-post">';
			      		$output .= get_the_post_thumbnail($post_id, 'full');
			      		$output .= '<h3>';
				      				$output .= get_the_title();
				      			$output .= '</h3>';
			      		$output .= '<p>';
			      			$output .= get_the_excerpt($post_id);
			      		$output .= '</p>';
			      	$output .= '</div>';

		        } else {

					$output .= '<div class="col-sm-6 older-recent-post">';
						$output .= '<div class="row older-post-container">';
							$output .= get_the_post_thumbnail($post_id, 'medium'); 
							$output .= '<aside>';	
							$output .= '<h3>';
				      				$output .= get_the_title();
				      			$output .= '</h3>';
							$output .= '<p>';  
								$output .= get_the_excerpt($post_id);
							$output .= '<p>';
							$output .= '</aside>';
						$output .= '</div>';
					$output .= '</div>';
		        }       
				$i++;
		    endwhile;

		      //$output .= '</div>';
       		$output .= '</div>';
        $output .= '</div>'; 

      	return $output;

      	wp_reset_postdata();

    }


    add_shortcode('code-loop', 'code_loop_shortcode');




