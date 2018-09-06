<?php 
function sc_footer_widgets() {

	register_sidebar( array(
        'name'          => 'Footer 1',
        'id'            => 'footer_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget rounded">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => 'Footer 2',
        'id'            => 'footer_2',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget rounded">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => 'Footer 3',
        'id'            => 'footer_3',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget rounded">',
        'after_title'   => '</h2>',
    ) );    

}
add_action( 'widgets_init', 'sc_footer_widgets' );