<?php
/*
Plugin Name: fishmixx - fish around the clock
Plugin URI: http://fishmixx.de
Description: Dieses Plugin zeigt den Banner zu fishmixx - fish around the clock in der Sidebar.
Author: Robert Knauer
Version: 0.1
Author URI: http://electronic-help.de
*/
function widget_sidebar ()
{
	echo '<li class="widget-container widget_fishmixx">';
	echo '	<h3 class="widget-title">fishmixx - fish around the clock</h3>';
	echo '	<ul style="list-style: none;">';
	echo '		<li>';
	echo '			<a href="http://www.fishmixx.de">';
	echo '				<img src="http://www.fishmixx.de/banner/avatar.gif" alt="fishmixx - the best mixx from under the sea - fish arround the clock" title="fishmixx - the best mixx from under the sea - fish arround the clock" width="140" height="140" />';
	echo '			</a>';
	echo '		</li>';
	echo '	</ul>';
	echo '</li>';
}
function widget_sidebar_init ()
{
	if (!function_exists('register_sidebar_widget'))
		return;
	register_sidebar_widget('fishmixx', 'widget_sidebar');
}
add_action('plugins_loaded', 'widget_sidebar_init');
?>
