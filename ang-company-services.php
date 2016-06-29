<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://torbara.com
 * @since             1.0.0
 * @package           Ang_Company_Services
 *
 * @wordpress-plugin
 * Plugin Name:       ANG Company Services
 * Plugin URI:        https://github.com/alex1278/ang-company-services
 * Description:       List of Services for your company.
 * Tags:              service, custom post type, custom taxonomy, images, custom fields, shortcode
 * Version:           1.0.0
 * Date:              30.06.2016
 * Author:            Aleksandr Glovatskyy
 * Author URI:        http://torbara.com
 * Author e-mail:     alex1278@list.ru
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ang-company-services
 * Domain Path:       /languages
 * 
 * 
 * ANG Company Services is free software: you can redistribute it and/or modify 
 * it under the terms of the GNU General Public License as published by 
 * the Free Software Foundation, either version 2 of the License, or 
 * any later version.
 *
 * ANG Company Services is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * A copy of the GNU General Public License has been included with
 * ANG Company Services.
 *
 * @subpackage  Widget/Services/CPT
 * @copyright  Copyright (c) 2016, ANG
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'ANG_SERVICES_BASE', plugin_basename(__FILE__) );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ang-company-services-activator.php
 */
function activate_ang_company_services() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ang-company-services-activator.php';
	Ang_Company_Services_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ang-company-services-deactivator.php
 */
function deactivate_ang_company_services() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ang-company-services-deactivator.php';
	Ang_Company_Services_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ang_company_services' );
register_deactivation_hook( __FILE__, 'deactivate_ang_company_services' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ang-company-services.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ang_company_services() {

	$plugin = new Ang_Company_Services();
	$plugin->run();

}
run_ang_company_services();
