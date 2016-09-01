<?php 
foreach($viewdefs['Contacts']['base']['view']['record']['buttons'] as &$set){ 
    if( $set['type'] == 'actiondropdown' && $set['name'] == 'main_dropdown'){ 
        $set['buttons'][] = array( 
            'type' => 'divider',
            );
        $set['buttons'][] = array( 
            'type' => 'rowaction',
            'event' => 'button:excfirstlast:click',
            'name' => 'excfirstlast',
            'label' => 'LBL_EXC_FIRST_LAST_NAME',
            'acl_action' => 'edit',
            );
    }
}
?>
