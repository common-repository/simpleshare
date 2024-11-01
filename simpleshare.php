<?php
/*
Plugin Name: SimpleShare
Description: No Settings to Adjust — Social sharing buttons are automatically added to your blog posts. Use the [simpleshare] shortcode for additional locations.
Version: 2023
Requires at least: 5.0
Author: Bryan Hadaway
Author URI: https://calmestghost.com/
License: GPL
License URI: https://www.gnu.org/licenses/gpl.html
Text Domain: simpleshare
*/

if ( !defined( 'ABSPATH' ) ) {
	http_response_code( 404 );
	die();
}

add_shortcode( 'simpleshare', 'simpleshare_shortcode' );
function simpleshare_shortcode() {
	ob_start();
	echo '<div class="simpleshare">';
	echo '<a href="https://www.facebook.com/sharer/sharer.php?t=' . rawurlencode( get_the_title() ) . '&amp;u=' . esc_url( get_permalink() ) . '" title="' . esc_html( 'Share on Facebook', 'simpleshare' ) . '" class="facebook" target="_blank"><span class="icon"><svg viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path fill="currentColor" d="m22.676 0h-21.352c-.731 0-1.324.593-1.324 1.324v21.352c0 .732.593 1.324 1.324 1.324h11.494v-9.294h-3.129v-3.621h3.129v-2.675c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63h-3.119v9.282h6.115c.733 0 1.325-.592 1.325-1.324v-21.352c0-.731-.592-1.324-1.324-1.324" /></svg></span></a>';
	echo '<a href="https://twitter.com/intent/tweet?text=' . rawurlencode( get_the_title() ) . '&amp;url=' . esc_url( get_permalink() ) . '" title="' . esc_html( 'Share on Twitter', 'simpleshare' ) . '" class="twitter" target="_blank"><span class="icon"><svg viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path fill="currentColor" d="m23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124-4.09-.193-7.715-2.157-10.141-5.126-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548z" /></svg></span></a>';
	echo '<a href="mailto:?subject=' . rawurlencode( get_the_title() ) . '&amp;body=' . esc_url( get_permalink() ) . '" title="' . esc_html( 'Share over Email', 'simpleshare' ) . '" class="email" target="_blank"><span class="icon"><svg viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path fill="currentColor" d="M21.386 2.614H2.614A2.345 2.345 0 0 0 .279 4.961l-.01 14.078a2.353 2.353 0 0 0 2.346 2.347h18.771a2.354 2.354 0 0 0 2.347-2.347V4.961a2.356 2.356 0 0 0-2.347-2.347zm0 4.694L12 13.174 2.614 7.308V4.961L12 10.827l9.386-5.866v2.347z" /></svg></span></a>';
	echo '<a href="javascript:window.print()" title="' . esc_html( 'Print this Article', 'simpleshare' ) . '" class="print"><span class="icon"><svg viewbox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path fill="currentColor" d="M18,3H6V7H18M19,12A1,1 0 0,1 18,11A1,1 0 0,1 19,10A1,1 0 0,1 20,11A1,1 0 0,1 19,12M16,19H8V14H16M19,8H5A3,3 0 0,0 2,11V17H6V21H18V17H22V11A3,3 0 0,0 19,8Z" /></svg></span></a>';
	echo '</div>';
	echo '<style>.simpleshare,.simpleshare *{box-sizing:border-box!important;white-space:nowrap!important;-webkit-tap-highlight-color:transparent!important;transition:all .5s ease!important;padding:0!important;border:0!important;margin:0!important}.simpleshare{font-size:0!important;margin:30px 0!important}.simpleshare a{display:inline-block!important;width:25%!important;min-width:120px!important;font-family:arial!important;font-size:16px!important;color:#fff!important;text-align:center!important;text-decoration:none!important;text-shadow:none!important;line-height:0!important;padding:15px 0!important;background:#000!important;box-shadow:none!important}.simpleshare a.facebook{background:#3B5998!important}.simpleshare a.twitter{background:#1DA1F2!important}.simpleshare a.email{background:#222!important}.simpleshare a.print{background:#777!important}.simpleshare a:hover{opacity:.8!important}.simpleshare .icon{display:inline-block!important;width:20px!important;height:20px!important}.widget-area .simpleshare a{min-width:0!important}@media(max-width:576px){.simpleshare a{min-width:0!important}}</style>';
	$output = ob_get_clean();
	return $output;
}

add_filter( 'the_content', 'simpleshare_before_after' );
function simpleshare_before_after( $content ) {
	if ( is_single() ) {
		$beforecontent = do_shortcode( '[simpleshare]' );
		$aftercontent = do_shortcode( '[simpleshare]' );
		$fullcontent = $beforecontent . $content . $aftercontent;
	} else {
		$fullcontent = $content;
	}
	return $fullcontent;
}