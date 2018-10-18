<?php 
function add_team_member_role() {
$result = add_role(
    'team_member',
    __( 'Team Member' ),
    array(
        'read'         => true,  // true allows this capability
        'edit_posts'   => true,
        'delete_posts' => false, // Use false to explicitly deny
    )
);
}

//add_action('init', add_team_member_role);
