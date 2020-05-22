<?php

$scripts_path = '/dist/scripts/';
$styles_path = '/dist/css/';
// Remove all default WP template redirects/lookups
remove_action('template_redirect', 'redirect_canonical');

// Redirect all requests to index.php so the Vue app is loaded and 404s aren't thrown
function remove_redirects()
{
	add_rewrite_rule('^/(.+)/?', 'index.php', 'top');
}
add_action('init', 'remove_redirects');

// Load scripts
function load_vue_scripts()
{
	global $scripts_path, $styles_path;
	wp_enqueue_script(
		// Name must be unique in footer
		'wordpress-theme-spa-js',
		get_stylesheet_directory_uri() .  $scripts_path . 'index.js',
		'',
		'',
		// Imported in footer
		true
	);

	wp_enqueue_style(
		'wordpress-theme-spa-css',
		get_stylesheet_directory_uri() . $styles_path . 'styles.css',
		'',
		''
	);
}
add_action('wp_enqueue_scripts', 'load_vue_scripts', 100);
