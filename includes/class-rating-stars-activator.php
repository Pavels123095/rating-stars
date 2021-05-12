<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Rating stars
 * @subpackage rating-stars/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Rating stars
 * @subpackage rating-stars/includes
 * @author     Pavel (Prizrak) <payusov.95@mail.ru>
 */
class Rating_stars_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		add_menu_page('rating-stars', $this->plugin_name, 'manage_options', 'rating-stars/admin/partials/rating-stars-admin-display.php');
	}

}
