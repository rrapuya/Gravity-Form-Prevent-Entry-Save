<?php
add_action( 'gform_after_submission', 'prevent_entry_submission_save', 10, 2 ); 
function prevent_entry_submission_save ( $entry, $form ) {
	$form_id = $entry[ 'form_id' ];
	$forms_id = array(1,2,3,4,5,6,7,8);/*the Id's you want entry not be save*/
	if(in_array($form_id,$forms_id)){
		GFAPI::delete_entry( $entry['id'] );
	}
}
?>