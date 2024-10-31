<?php

################################################################################
// Rackspace Knowledge Center
################################################################################
function rsknowledgebase_dashboard_widgets() {
global $wp_meta_boxes;

wp_add_dashboard_widget('custom_help_widget', 'Rackspace - Knowledge Center', 'custom_dashboard_help');
}

function custom_dashboard_help() {
?>
		  <form style="display: inline;" method="get" action="http://support.rackspace.com/search?">
				<input name="q" type="text" placeholder="Enter Keywords" />
				<input type="submit" class="button button-primary" value="Search"  />
		  </form>
		  <br />
		  <h4 style="margin-top:15px;font-weight:bold;">New & Updated Articles</h4>
		  <hr>
<?php

	wp_widget_rss_output(array(
            'url' => 'http://www.rackspace.com/knowledge_center/rss.xml',
            'title' => 'Featured Articles',
            'items' => 3, //how many posts to show
            'show_summary' => 1, // 0 = false and 1 = true
            'show_author' => 0,
            'show_date' => 1
       ));


}

add_action('wp_dashboard_setup', 'rsknowledgebase_dashboard_widgets');

################################################################################
// Rackspace Blog Widget
################################################################################
function rsblog_rss_output(){
       wp_widget_rss_output(array(
            'url' => 'http://www.rackspace.com/blog/feed/',
            'title' => 'Rackspace - Latest News',
            'items' => 3, //how many posts to show
            'show_summary' => 1, // 0 = false and 1 = true
            'show_author' => 0,
            'show_date' => 1
       ));
}

// Hook into wp_dashboard_setup and add our mt widget
add_action('wp_dashboard_setup', 'rsblog_rss_widget');

// Create the function that adds the mt widget
function rsblog_rss_widget(){
  // Add our RSS widget
  wp_add_dashboard_widget( 'rsblog-rss', 'Rackspace - Latest News', 'rsblog_rss_output');
}

################################################################################
// Rackspace System Status
################################################################################
function rs_systemstatus_dashboard_widget(){
		wp_widget_rss_output(array(
            'url' => 'https://status.rackspace.com/index/rss',  //put your feed URL here
            'title' => 'Rackspace - System Status',
            'items' => 5,
            'show_summary' => 0, // 0 = false and 1 = true
            'show_author' => 0,
            'show_date' => 1
        ));

	}

// Load our Widget onto Dasboard
function load_rs_systemstatus_dashboard_widget(){
	wp_add_dashboard_widget( 'rs-systemstatus-incidents-dashboard-widget', 'Rackspace - System Status', 'rs_systemstatus_dashboard_widget');
	}
add_action('wp_dashboard_setup', 'load_rs_systemstatus_dashboard_widget');




