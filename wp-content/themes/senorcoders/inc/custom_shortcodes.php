<?php
function sc_social_shortcode() {
	ob_start();
    ?> 
    <ul class="sc_social"> 
        <?php if ( get_field('facebook', 'option') ) { ?>
        <li>
            <a href="<?php echo get_field('facebook', 'option'); ?>" target="_blank"> <i class="fab fa-facebook-f"></i> </a>
        </li>
        <?php } if ( get_field('twitter', 'option') ) { ?>
        <li>
            <a href="<?php echo get_field('twitter', 'option'); ?>" target="_blank"> <i class="fab fa-twitter"></i> </a>
        </li>
        <?php } if ( get_field('linkedin', 'option') ) { ?>
        <li>
            <a href="<?php echo get_field('linkedin', 'option'); ?>" target="_blank"> <i class="fab fa-instagram"></i> </a>
        </li>        
        <?php } ?>
    <ul>

    <?php
	return ob_get_clean();
}
add_shortcode( 'sc_social_shortcode', 'sc_social_shortcode' );

function sc_contact_shortcode() {
	ob_start();
    ?> 
    <ul class="sc_contact"> 
        <?php if ( get_field('address', 'option') ) { ?>
        <li>
            <a href="https://www.google.com/maps/search/?api=1&query=<?php echo get_field('address', 'option'); ?>" target="_blank"> <i class="fas fa-map-marked"></i> <?php echo get_field('address', 'option'); ?> </a>
        </li>
        <?php } if ( get_field('phone', 'option') ) { ?>
        <li>
            <a href="tel:<?php echo get_field('phone', 'option'); ?>" target="_blank"> <i class="fas fa-phone"></i> <?php echo get_field('phone', 'option'); ?> </a>
        </li>        
        <?php } ?>
    <ul>

    <?php
	return ob_get_clean();
}
add_shortcode( 'sc_contact_shortcode', 'sc_contact_shortcode' );

