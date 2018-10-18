<?php 
wp_enqueue_script( 'customDev2', get_template_directory_uri(). '/js/dev2ajax.js' , array( 'jquery' ) );

// Hook para usuarios no logueados
add_action('wp_ajax_nopriv_register_team_member', 'register_team_member');
// Hook para usuarios logueados
//add_action('wp_ajax_register_team_member', 'register_team_member');
// Función que procesa la llamada AJAX
function register_team_member(){
    // Check parameters
    $email  = isset( $_POST['email'] ) ? $_POST['email'] : false;
    $password  = isset( $_POST['password'] ) ? $_POST['password'] : false;
    if( !$email || !$password ) {
        wp_send_json( array('message' => __('Email or password are required :(', 'wellness') ) );
        //wp_send_json( $_POST  );
    }     
    else {
        //check if is login or registration
        if ( email_exists($email) ){
            //login

        }else{
            //registration
            
            $user_id = wp_create_user( $email, $password, $email );
            if( $user_id ) {
                
            }else{
                wp_send_json( array('message' => __('Error creating user :(', 'wellness') ) );
            }
        }



        //wp_send_json( array('message' => __('Message received, greetings from server!', 'wellness') ) );
        wp_send_json( $_POST  );
    } 
}