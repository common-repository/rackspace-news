<?php

/*-----------------------------------------------------------------------------------

	Plugin Name: Rackspace News
	Version: 1.0.0
	Plugin URI:
	Description: Keep up-to-date with Rackspace from within your WordPress Blog.
	Author: Brandon Hubbard
	Author URI: http://www.brandonhubbard.com
	License: GNU General Public License version 3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html


This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

-----------------------------------------------------------------------------------*/

include_once('dashboard.php');

include_once('adminbar.php');

################################################################################
// Plugin Activation
################################################################################

register_activation_hook( __FILE__, 'rackspace_activate' );

function rackspace_activate() {
    global $wpdb;

    // PLUGIN VERSION
    $rackspace_version = '1.0';
    add_option( "rackspace_version", $rackspace_version );

}

################################################################################
// Uninstall
################################################################################
register_uninstall_hook('remove_rackspace_plugin', 'rackspace_uninstall');

// register_deactivation_hook( __FILE__, 'mediatemple_uninstall' );

function mediatemple_uninstall(){
    global $wpdb;

    delete_option( 'rackspace_version' );
    // delete_option( 'rackspace_apikey' );


}

