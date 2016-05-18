<?php
function Field_Save_Order() {
	global $wpdb;
	global $ewd_feup_fields_table_name;
	
	foreach ($_POST['list-item'] as $Key=>$ID) {
		$Result = $wpdb->query("UPDATE $ewd_feup_fields_table_name SET Field_Order='" . $Key . "' WHERE Field_ID=" . $ID);
	}
		
}
add_action('wp_ajax_ewd_feup_update_field_order', 'Field_Save_Order');


// Updates the order of privilege levels after a user has dragged and dropped them
function Level_Save_Order() {
	global $wpdb;
	global $ewd_feup_levels_table_name;
	
	foreach ($_POST['list-item'] as $Key=>$ID) {
		$Result = $wpdb->query("UPDATE $ewd_feup_levels_table_name SET Level_Privilege='" . $Key . "' WHERE Level_ID=" . $ID);
	}
		
}
add_action('wp_ajax_ewd_feup_update_levels_order', 'Level_Save_Order');

// Records the number of times a product has been viewed
function Record_User_Event() {
	$Path = ABSPATH . 'wp-load.php';
	include_once($Path);

	global $wpdb;
	global $ewd_feup_user_events_table_name;

	$User_ID = $_POST['User_ID'];
	$Event_Value = $_POST['Target'];
	$Event_Location = $_POST['Location'];

	if ($Event_Value == home_url() or $Event_Value == home_url() . "/") {$Event_Location_ID = get_option('page_on_front');}
	else {$Event_Location_ID = url_to_postid($Event_Location);}
	
	if ($Event_Location_ID != 0) {$Event_Location_Title = get_the_title($Event_Location_ID);}
	else {$Event_Location_Title = $Event_Location;}

	$Event_Type = Get_Event_Type($Event_Value);

	if ($Event_Value == home_url() or $Event_Value == home_url() . "/") {$Event_Target_ID = get_option('page_on_front');}
	else {$Event_Target_ID = url_to_postid($Event_Value);}

	if (!$Event_Target_ID) {$Event_Target_ID = $wpdb->get_var($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid=%s", $Event_Value));}
	if ($Event_Target_ID != 0) {$Event_Target_Title = get_the_title($Event_Target_ID);}
	
	if (!$Event_Target_ID) {$Event_Target_ID = 0;}
	else {$Event_Target_Title = $Event_Value;}

	$Update = Add_User_Event($User_ID, $Event_Type, $Event_Location, $Event_Location_ID, $Event_Location_Title, $Event_Value, $Event_Target_ID, $Event_Target_Title);

	return $Update;
	die();
}
add_action('wp_ajax_feup_user_event', 'Record_User_Event');
add_action( 'wp_ajax_nopriv_feup_user_event', 'Record_User_Event' );

function Get_Event_Type($Event_Value) {
	$Event_Type = "Link";

	if (strpos($Event_Value, ".pdf") !== false) {$Event_Type = "Attachment";}
	if (strpos($Event_Value, ".doc") !== false) {$Event_Type = "Attachment";}
	if (strpos($Event_Value, ".xls") !== false) {$Event_Type = "Attachment";}
	if (strpos($Event_Value, ".zip") !== false) {$Event_Type = "Attachment";}
	if (strpos($Event_Value, ".rar") !== false) {$Event_Type = "Attachment";}

	if (strpos($Event_Value, ".jpg") !== false) {$Event_Type = "Image";}
	if (strpos($Event_Value, ".gif") !== false) {$Event_Type = "Image";}
	if (strpos($Event_Value, ".png") !== false) {$Event_Type = "Image";}

	return $Event_Type;
}

// Updates levels dropdown on the options page
function Get_EWD_FEUP_Levels() {
	global $wpdb;
	global $ewd_feup_levels_table_name;
	
	$Levels = $wpdb->get_results("SELECT Level_ID, Level_Name FROM $ewd_feup_levels_table_name");
	foreach ($Levels as $Level) {
		$Level_Item['Level_ID'] = $Level->Level_ID;
		$Level_Item['Level_Name'] = $Level->Level_Name;
		$Response_Array[] = $Level_Item;
		unset($Level_Item);
	}
	echo json_encode($Response_Array);
	
	wp_die();
}
add_action('wp_ajax_get_ewd_feup_levels', 'Get_EWD_FEUP_Levels');

?>
