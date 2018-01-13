<?php
/**
 * Accessible Design for Jetpack
 * @package     AccessibleDesignForJetpack
 * @author      Maja Benke
 * @license     GPLv3
 *
 * @wordpress-plugin
 * Plugin Name: Accessible Design for Jetpack
 * Plugin URI: https://wp1x1.de
 * Description: Increase readability of statistics in Jetpack (add-on plugin for Jetpack)
 * Version: 1.0.0
 * Author: Maja Benke
 * Author URI: https://wp1x1.de
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * Adds css to admin footer.
 */
function a11y_jetpack_admin_footer() {
	?>
<style>
	.staticmetabox table td, .statsDay td, .statsDay th {
		font-size: 14px;
		font-weight: 400;
		line-height: 1.2;
	}

	#clicks .statsDay span, #referrers .statsDay span {
		position: relative;
		top: 5px;
	}

	#referrers p, #postviews p, #searchterms p, #clicks p, #authorviews p, #videoplays p, #geoviews p {
		font-size: 14px;
	}

	.stats-encourage-nodata {
		color: #444;
	}

	.postbox .all, .postbox li.link {
		font-size: 12px;
		font-weight: 600;
	}

	#stats-nuggets ul li span {
		font-weight: 300;
	}

	.stat-chart p {
		font-size: 14px;
	}

	ul#chartswitch li a {
		font-size: 13px;
	}

	#referrers p, #postviews p, #searchterms p, #clicks p, #authorviews p, #videoplays p, #geoviews p {
		font-size: 14px;
	}

	#statchart div.summarytables {
		font-size: 13px;
	}

	.summary-tabs li {
		font-size: 13px;
	}

	/*Summary*/
	.dates td, .dates th {
		font-size: 10pt;
	}

	.dates td span {
		font-size: 10pt !important;
	}


</style>
	<?php
}
add_action( 'admin_footer', 'a11y_jetpack_admin_footer', 11 );
