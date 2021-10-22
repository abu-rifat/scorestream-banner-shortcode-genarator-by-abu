<?php
/*
 * Plugin Name:       Scorestream Banner Shortcode Genarator(by Abu Rifat)
 * Plugin URI:        aburifat.com
 * Description:       Create a custom field for post category(texonomy) named 'abu_code_id' then add your banner code associated category and add this shortcode to category based post archive template 'abu-banner-code', then boom.
 * Version:           1.0.0
 * Author:            Abu Rifat M.
 * Author URI:        aburifat.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       scorestream-banner-shortcode-genarator-by-abu
 */
// If this file is called directly, abort.
if(!defined('WPINC')){
    die;
}

add_shortcode( 'abu-banner-code' , 'abu_banner_code' );

function abu_banner_code($atts){
    $term = get_queried_object();
	$banner = get_field('abu_code_id', $term);
	if(!empty($banner)){
		echo '<iframe src="https://scorestream.com/widgets/scoreboards/horz?userWidgetId='.$banner.'" style="padding:0px;border:0px;width:100%;max-width:100%;height:100%;max-height:100%;" title="scoreboardhome" scrolling="no" frameborder="0"></iframe>';
	}
}
