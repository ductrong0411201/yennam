<?php
/**
 * Global assets
 */
global $assets;
$assets = defined('TNS_PROD') && TNS_PROD ? 'assets/dist/' : 'assets/src/';

/**
 * Register ACF option page
 */
function acf_option_page(){
	if (function_exists('acf_add_options_page')):
		acf_add_options_page([
			'page_title'      => __('Cài đặt chung', 'tay-nam-solutions'),
			'menu_title'      => __('Cài đặt chung', 'tay-nam-solutions'),
			'menu_slug'       => 'theme-general-settings-v2',
			'parent_slug'     => 'tns',
			'update_button'   => __('Cập nhật', 'tay-nam-solutions'),
			'updated_message' => __("Cập nhật thành công", 'tay-nam-solutions')
		]);

		acf_add_options_page([
			'page_title'      => __('Cài đặt đầu trang', 'tay-nam-solutions'),
			'menu_title'      => __('Cài đặt đầu trang', 'tay-nam-solutions'),
			'menu_slug'       => 'theme-header-settings-v2',
			'parent_slug'     => 'tns',
			'update_button'   => __('Cập nhật', 'tay-nam-solutions'),
			'updated_message' => __("Cập nhật thành công", 'tay-nam-solutions')
		]);

		acf_add_options_sub_page([
			'page_title'      => __('Cài đặt trang chủ', 'tay-nam-solutions'),
			'menu_title'      => __('Cài đặt trang chủ', 'tay-nam-solutions'),
			'menu_slug'       => 'theme-home-settings-v2',
			'parent_slug'     => 'tns',
			'update_button'   => __('Cập nhật', 'tay-nam-solutions'),
			'updated_message' => __("Cập nhật thành công", 'tay-nam-solutions')
		]);

		acf_add_options_sub_page([
			'page_title'      => __('Cài đặt cuối trang', 'tay-nam-solutions'),
			'menu_title'      => __('Cài đặt cuối trang', 'tay-nam-solutions'),
			'menu_slug'       => 'theme-footer-settings-v2',
			'parent_slug'     => 'tns',
			'update_button'   => __('Cập nhật', 'tay-nam-solutions'),
			'updated_message' => __("Cập nhật thành công", 'tay-nam-solutions')
		]);
	endif;
}

add_action('acf/init', 'acf_option_page');

/**
 * Enqueue scripts and styles.
 */
function tns_scripts(){

	//See tns-child/config/appearance.php
	$appearance = tns_get_config('appearance');

	//Get theme version
	$theme_version = wp_get_theme()->get('Version');

	// Threaded comment reply styles.
	if (is_singular() && comments_open() && get_option('thread_comments')):
		wp_enqueue_script('comment-reply');
	endif;

	// Styles
	if ($appearance['css']):
		foreach ($appearance['css'] as $handle => $css):
			wp_enqueue_style($handle, $css, [], $theme_version, null);
		endforeach;
	endif;

	// Scripts
	if ($appearance['js']):
		foreach ($appearance['js'] as $handle => $js):
			wp_enqueue_script($handle, $js, ['jquery'], $theme_version, true);
		endforeach;
	endif;
	wp_localize_script('tns-script', 'tns', ['admin_ajax_url' => admin_url('admin-ajax.php')]);
}

add_action('wp_enqueue_scripts', 'tns_scripts');

/**
 * Remove main stylesheet
 */
function remove_main_styles(){
	wp_dequeue_style('tns');
}

add_action('wp_print_styles', 'remove_main_styles', 99);

/**
 * Add desired theme supports.
 */
function tns_theme_support(){
	$theme_supports = tns_get_config('theme-supports');

	foreach ($theme_supports as $feature => $args):
		add_theme_support($feature, $args);
	endforeach;
}

add_action('after_setup_theme', 'tns_theme_support', 9);
