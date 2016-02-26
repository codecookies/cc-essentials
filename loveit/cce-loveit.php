<?php

if ( ! class_exists( 'CCELoveIt' ) ) {

class CCELoveIt {

    function __construct() {
        add_action('wp_enqueue_scripts', array(&$this, 'enqueue_scripts'));
        add_filter('the_content', array(&$this, 'the_content'));
        add_filter('the_excerpt', array(&$this, 'the_content'));
        add_action('publish_post', array(&$this, 'setup_loveit'));
        add_action('wp_ajax_cce_loveit', array(&$this, 'ajax_callback'));
		add_action('wp_ajax_nopriv_cce_loveit', array(&$this, 'ajax_callback'));
        add_shortcode('cce_loveit', array(&$this, 'shortcode'));
        //add_action('widgets_init', create_function('', 'register_widget("ZillaLikes_Widget");'));
	}
	
	function enqueue_scripts() {	
		$cce_options = get_option('cce_options');
		
		if ( !empty($cce_options['show_loveit_button_on']) ) {
		
			global $cce;
		
			wp_enqueue_style( 'cce-loveit', $cce->plugin_url() . '/assets/css/cce-loveit.css' );
			wp_enqueue_script( 'cce-loveit', $cce->plugin_url() . '/assets/js/cce-loveit.js', array('jquery') );
			wp_localize_script( 'cce-loveit', 'cce_loveit', array('ajaxurl' => admin_url('admin-ajax.php'), 'loved_text' => __( 'You already loved this!', 'cc' )) );
		}
	}
	
	function the_content( $content ) {		
	   // Don't show on custom page templates
	    if(is_page_template()) return $content;
	    // Don't show on Stacked slides
	    if(get_post_type() == 'slide') return $content;
	    
		global $wp_current_filter;
		if ( in_array( 'get_the_excerpt', (array) $wp_current_filter ) ) {
			return $content;
		}
		
		$cce_options = get_option('cce_options');
		
		
		/* 
		$ids = explode(',', $options['exclude_from']); // Under consideration
		if(in_array(get_the_ID(), $ids)) return $content;
		*/
		
		if( is_singular('post') && $cce_options['show_loveit_button_on']['post'] ) $content .= $this->do_likes();
		if( is_page() && !is_front_page() && $cce_options['show_loveit_button_on']['post'] ) $content .= $this->do_likes();
		
		//Under consideration: if(( is_front_page() || is_home() || is_category() || is_tag() || is_author() || is_date() || is_search()) && $options['add_to_other'] ) $content .= $this->do_likes();
		
		return $content;
	}
	
	function setup_loveit( $post_id ) {
		if(!is_numeric($post_id)) return;
	
		add_post_meta($post_id, '_cce_loves', '0', true);
	}
	
	function ajax_callback($post_id) {

		$cce_options = get_option('cce_options');

		if( isset($_POST['loves_id']) ) {
		    // Click event. Get and Update Count
			$post_id = str_replace('cce-loveit-', '', $_POST['loves_id']);
			echo $this->love_this($post_id, $cce_options['suffix_text_zero'], $cce_options['suffix_text_one'], $cce_options['suffix_text_more'], 'update');
		} else {
		    // AJAXing data in. Get Count
			$post_id = str_replace('cce-loveit-', '', $_POST['post_id']);
			echo $this->love_this($post_id, $cce_options['suffix_text_zero'], $cce_options['suffix_text_one'], $cce_options['suffix_text_more'], 'get');
		}
		
		exit;
	}
	
	function love_this($post_id, $suffix_text_zero = false, $suffix_text_one = false, $suffix_text_more = false, $action = 'get') {
		if(!is_numeric($post_id)) return;
		$suffix_text_zero = strip_tags($suffix_text_zero);
		$suffix_text_one = strip_tags($suffix_text_one);
		$suffix_text_more = strip_tags($suffix_text_more);		
		
		switch($action) {
		
			case 'get':
				$loves = get_post_meta($post_id, '_cce_loves', true);
				if( !$loves ){
					$loves = 0;
					add_post_meta($post_id, '_cce_loves', $loves, true);
				}
				
				if( $loves == 0 ) { $suffix = $suffix_text_zero; }
				elseif( $loves == 1 ) { $suffix = $suffix_text_one; }
				else { $suffix = $suffix_text_more; }
				
				return '<span class="cce-loveit-count">'. $loves .'</span><span class="cce-loveit-suffix">'. $suffix .'</span>';
				break;
				
			case 'update':
				$loves = get_post_meta($post_id, '_cce_loves', true);
				if( isset($_COOKIE['cce_loves_'. $post_id]) ) return $loves;
				
				$loves++;
				update_post_meta($post_id, '_cce_loves', $loves);
				setcookie('cce_loves_'. $post_id, $post_id, time()*20, '/');
				
				if( $loves == 0 ) { $suffix = $suffix_text_zero; }
				elseif( $loves == 1 ) { $suffix = $suffix_text_one; }
				else { $suffix = $suffix_text_more; }
				
				return '<span class="cce-loveit-count">'. $loves .'</span><span class="cce-loveit-suffix">'. $suffix .'</span>';
				break;
		
		}
	}
	
	function shortcode( $atts ) {
		extract( shortcode_atts( array(
		), $atts ) );
		
		return $this->do_likes();
	}
	
	function do_likes() {
		global $post;

        $cce_options = get_option('cce_options');
		
		$output = $this->love_this($post->ID, $cce_options['suffix_text_zero'], $cce_options['suffix_text_one'], $cce_options['suffix_text_more']);
  
  		$class = 'cce-loveit';
  		$title = __('Love this', 'cc');
  		$prefix_text = $cce_options['prefix_text'];
		if( isset($_COOKIE['cce_loves_'. $post->ID]) ){
			$class = 'cce-loveit loved';
			$title = __('You already loved this!', 'cc');
		}
		
		return '<span class="cce-loveit-wrapper"><span class="cce-loveit-prefix">' . $prefix_text . '</span><a href="#" class="'. $class .'" id="cce-loveit-'. $post->ID .'" title="'. $title .'">'. $output .'</a></span>';
	}
	
}

$GLOBALS['cce_loveit'] = new CCELoveIt();

/**
 * Template Tag
 */
function cce_loveit()
{
	global $cce_loveit;
    echo $cce_loveit->do_likes(); 
}

}
?>