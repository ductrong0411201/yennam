<?php

/**
 * The header for our theme
 */
add_action('tns_header', function (){
	get_template_part('template-parts/v2/header');
});

/**
 * The landing page for our theme
 */
add_action('tns_landing', function (){
	get_template_part('template-parts/v2/slider');
	get_template_part('template-parts/v2/about');
	get_template_part('template-parts/v2/service');
	get_template_part('template-parts/v2/team');
	get_template_part('template-parts/v2/blog');
	get_template_part('template-parts/v2/advise');
});

/**
 * The loop for our theme
 */
add_action('tns_loop', function (){
	get_template_part('template-parts/archive');
});

/**
 * The template for displaying all pages
 */
add_action('tns_page', function (){
	get_template_part('template-parts/single');
});

/**
 * The landing page for our theme
 */
add_action('tns_contact', function (){
	get_template_part('template-parts/contact');
});

/**
 * The template for displaying all single posts
 */
add_action('tns_single', function (){
	get_template_part('template-parts/single');
});

/**
 * The template for displaying archive pages
 */
add_action('tns_archive', function (){
	get_template_part('template-parts/archive');
});

/**
 * The template for displaying search results pages
 */
add_action('tns_search', function (){
	get_template_part('template-parts/archive');
});

/**
 * The footer for our theme
 */
add_action('tns_footer', function (){
	get_template_part('template-parts/v2/footer');
});

/**
 * The template for displaying 404 pages (not found)
 */
add_action('tns_404', function (){

});
