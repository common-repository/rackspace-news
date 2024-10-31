<?php

################################################################################
// Add rs Links to Admin Bar
################################################################################
function add_rs_admin_bar_link() {
	global $wp_admin_bar;
	if ( !is_admin_bar_showing() )
		return;
	$wp_admin_bar->add_menu( array(
	'id' => 'rs_link',
	'title' => __( 'Rackspace'),
	'href' => __('http://rackspace.com'),
	"meta" => array("target" => "blank")
	));

	// Add sub menu link "Cloud Control Panel"
	$wp_admin_bar->add_menu( array(
		'parent' => 'rs_link',
		'id'     => 'rs_cloudcontrolpanel',
		'title' => __( 'Cloud Control Panel'),
		'href' => __('https://mycloud.rackspace.com'),
		"meta" => array("target" => "blank")
	));
	
	// Add sub menu link "Cloud Sites Panel"
	$wp_admin_bar->add_menu( array(
		'parent' => 'rs_link',
		'id'     => 'rs_cloudsitespanel',
		'title' => __( 'Cloud Sites Control Panel'),
		'href' => __('https://manage.rackspacecloud.com/pages/Login.jsp'),
		"meta" => array("target" => "blank")
	));

	// Add sub menu link "Support"
	$wp_admin_bar->add_menu( array(
		'parent' => 'rs_link',
		'id'     => 'rs_support',
		'title' => __( 'Support'),
		'href' => __('http://www.rackspace.com/knowledge_center/'),
		"meta" => array("target" => "blank")
	));

	// Add sub menu link "Call Support"
	$wp_admin_bar->add_menu( array(
		'parent' => 'rs_support',
		'id'     => 'rs_callsupport',
		'title' => __( 'Call 1-800-961-4454'),
		'href' => __('tel:18009614454'),
		"meta" => array("target" => "blank")
	));

	// Add sub menu link "System Status"
	$wp_admin_bar->add_menu( array(
		'parent' => 'rs_support',
		'id'     => 'rs_systemstatus',
		'title' => __( 'System Status'),
		'href' => __('https://status.rackspace.com/'),
		"meta" => array("target" => "blank")
	));

	// Add sub menu link "Knowledgebase"
	$wp_admin_bar->add_menu( array(
		'parent' => 'rs_support',
		'id'     => 'rs_knowledgebase',
		'title' => __( 'KnowledgeBase'),
		'href' => __('http://www.rackspace.com/knowledge_center/'),
		"meta" => array("target" => "blank")
	));
}
add_action('admin_bar_menu', 'add_rs_admin_bar_link',25);


