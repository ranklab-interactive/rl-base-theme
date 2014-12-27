<?php
//Maintenance Mode
function activate_maintenance_mode() {
   if ( !(current_user_can( 'administrator' ) ||  current_user_can(
'super admin' ) ||  current_user_can( 'editor' ))) {
	include(TEMPLATEPATH.'/maintenance.php');
   }
}
$value = stripslashes(get_option('ranklab_mm_active'));

if($value == 'Yes') {
	add_action('get_header', 'activate_maintenance_mode');
} else {
	
}

?>