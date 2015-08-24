<?php 


// Override any of the default settings below:

$config['site_title'] = 'Webster Branding/Design';			// Site title
// $config['base_url'] = ''; 				// Override base URL (e.g. http://example.com)
$config['theme'] = 'smm'; 			// Set the theme (defaults to "default")
$config['date_format'] = 'jS M Y';		// Set the PHP date format
$config['twig_config'] = array(			// Twig settings
	// 'cache' => CACHE_DIR,
	'cache' => false,
	'autoescape' => false,				// Autoescape Twig vars
	'debug' => false					// Enable Twig debug
);
$config['pages_order_by'] = 'alpha';	// Order pages by "alpha" or "date"
$config['pages_order'] = 'asc';			// Order pages "asc" or "desc"
$config['excerpt_length'] = 50;			// The pages excerpt length (in words)

// To add a custom config setting:

$config['cache_enabled'] = false; // default
