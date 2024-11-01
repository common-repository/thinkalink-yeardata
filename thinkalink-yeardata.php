<?php
/*
Plugin Name: Thinkalink YearData
Description: Thinkalink YearData allows you to use the [thinkalink_yeardata] shortcode to show the current year.
Version: 1.0.1
Author: Thinkalink Web Design
Author URI: https://www.thinkalink.com/
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Text Domain: thinkalink-yeardata

Thinkalink YearData is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
any later version.

Thinkalink YearData is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
*/

function thinkalink_yeardata_function() {
	/* Gets year data and returns it */
	$thinkalink_yeardata_var = date("Y");
	return $thinkalink_yeardata_var;
}
/* Connects [thinkalink_yeardata] shortcode to function */
add_shortcode('thinkalink_yeardata', 'thinkalink_yeardata_function');