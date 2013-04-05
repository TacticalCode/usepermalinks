<?php
/**
 * @package UsePermalinks
 * @author Damon Dransfeld
 * @version 1.1
 */
/*
Plugin Name: Use Permalinks
Plugin URI: http://www.tacticalcode.de/2013/04/usepermalinks-plugin.html
Description: Force WordPress to use your permalink structure(e.g. /2013/04/your-pretty-post-url.html) instead of shortlinks(e.g. /?p=3141592). Very handy if other plugins use ugly shortlinks instead of permalinks, like the JetPack Publicize feature, if wp.me shortlinks are disabled.
Author: Damon Dransfeld
Version: 1.1
Author URI: http://tacticalcode.de
*/


/**
 * Init plugin
 */
function UsePermalinks_init()
{
	add_filter( 'get_shortlink', 'UsePermalinks_get_shortlink' );
}
add_action( 'init', 'UsePermalinks_init');

/**
 * Return the permalink instead of the ugly ugly shortlink
 */
function UsePermalinks_get_shortlink()
{
	global $post;

	if ( !$post )
		return;

	return get_permalink($post->ID);
}

?>
