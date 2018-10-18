<?php 
// Our custom post type function
function create_companies_posttype() {
 
    register_post_type( 'companies',
    // CPT Options
        array(
            'labels'            => array(
                'name'          => __( 'Companies' ),
                'singular_name' => __( 'Company' )
            ),
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => array('slug' => 'companies'),
            'menu_icon'        => 'dashicons-building',
            'supports'    => array( 'title', 'editor', 'thumbnail' )
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_companies_posttype' );

function create_challenge_posttype() {

    register_post_type( 'challenge',
    // CPT Options
        array(
            'labels'            => array(
                'name'          => __( 'Challenges' ),
                'singular_name' => __( 'Challenge' )
            ),
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => array('slug' => 'challenges'),
            'menu_icon'   => 'dashicons-thumbs-up',
	        'supports'    => array( 'title', 'editor', 'thumbnail' )
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_challenge_posttype' );


function create_teams_posttype() {

    register_post_type( 'teams',
    // CPT Options
        array(
            'labels'            => array(
                'name'          => __( 'Teams' ),
                'singular_name' => __( 'Team' )
            ),
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => array('slug' => 'teams'),
            'menu_icon'        => 'dashicons-groups',
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_teams_posttype' );



/*add_action( 'init', 'wpse26388_rewrites_init' );
function wpse26388_rewrites_init(){
    add_rewrite_rule(
        'register/([0-9]+)/?$',
        'register/?challengeID=$matches[1]',
        'top' );
}

add_filter( 'query_vars', 'wpse26388_query_vars' );


function wpse26388_query_vars( $query_vars ){
    $query_vars[] = 'challengeID';
    return $query_vars;
}*/

/*
add_action('init', function() {
    add_rewrite_rule( '^register/([0-9]+)/?',
                      'register?challengeID=$matches[1]',
                      'top' );
}, 10, 0);

add_action('init', function() {
    add_rewrite_tag( '%challengeID%', '([^&]+)' );
}, 10, 0);*/