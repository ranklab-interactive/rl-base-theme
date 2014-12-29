<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'launch_';

global $meta_boxes;

$meta_boxes = array();

// Event Details
$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'event',

	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => 'Event Details',

	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'events' ),

	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',

	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',

	// List of meta fields
	'fields' => array(
		// All Day Event
		array(
			'name' => 'All Day Event',
			'id'   => "{$prefix}all_day",
			'type' => 'checkbox',
			// Value can be 0 or 1
			'std'  => 1,
		),
		// DATE
		array(
			'name' => 'Date',
			'id'   => "{$prefix}schedule_date",
			'type' => 'date',

			// jQuery date picker options. See here http://jqueryui.com/demos/datepicker
			'js_options' => array(
				'appendText'      => '(M d yy)',
				'dateFormat'      => 'M d yy',
				'changeMonth'     => true,
				'changeYear'      => true,
				'showButtonPanel' => true,
			),
		),
		// Time
		array(
			'name' => 'Time',
			'id'   => "{$prefix}event_time",
			'type' => 'text',
		),
		// SELECT BOX
		array(
			'name'     => 'Schedule Type',
			'id'       => "{$prefix}schedule_type",
			'type'     => 'select',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'Pool Party' => 'Pool Party',
				'Yacht Party' => 'Yacht Party',
				'Beach Party' => 'Beach Party',
				'Private Event' => 'Private Event',
				'Club' => 'Club',
			),
			// Select multiple values, optional. Default is false.
			'multiple' => false,
		),
		// Cost
		array(
			'name' => 'Cost',
			'id'   => "{$prefix}event_cost",
			'type' => 'text',
		),
		// TEXTAREA
		array(
			'name' => 'Short Description',
			'desc' => 'Textarea description',
			'id'   => "{$prefix}schedule_description",
			'type' => 'textarea',
			'cols' => '20',
			'rows' => '3',
		),
		// Venue Name
		array(
			'name' => 'Venue Name',
			'id'   => "{$prefix}venue_name",
			'type' => 'text',
		),
		// Venue Address
		array(
			'name' => 'Venue Address',
			'id'   => "{$prefix}venue_address",
			'type' => 'text',
		),
		// Venue City
		array(
			'name' => 'Venue City',
			'id'   => "{$prefix}venue_city",
			'type' => 'text',
		),
		// Venue State
		array(
			'name' => 'Venue State',
			'id'   => "{$prefix}venue_state",
			'type' => 'text',
		),
		// Venue Zip
		array(
			'name' => 'Venue Zip',
			'id'   => "{$prefix}venue_zip",
			'type' => 'text',
		),
		// Venue Telephone
		array(
			'name' => 'Venue Telephone',
			'id'   => "{$prefix}venue_Telephone",
			'type' => 'text',
		),
	),
);

// Event Organizer
$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'event-organizer',

	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => 'Event Organizer',

	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'events' ),

	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',

	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',

	// List of meta fields
	'fields' => array(
		// Event Organzier
		array(
			'name' => 'Name',
			'id'   => "{$prefix}organizer_name",
			'type' => 'text',
		),
		// Organizer Phone
		array(
			'name' => 'Phone',
			'id'   => "{$prefix}organizer_phone",
			'type' => 'text',
		),
		// Organizer Website
		array(
			'name' => 'Website',
			'id'   => "{$prefix}organizer_website",
			'type' => 'text',
		),
		// Organizer Email
		array(
			'name' => 'Email',
			'id'   => "{$prefix}organizer_email",
			'type' => 'text',
		),
		// Oranizer Notes
		array(
			'name' => 'Notes',
			'id'   => "{$prefix}organizer_notes",
			'type' => 'textarea',
			'cols' => '20',
			'rows' => '3',
		),
	),
);

/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function launch_register_meta_boxes()
{
	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Meta_Box' ) )
		return;

	global $meta_boxes;
	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'launch_register_meta_boxes' );