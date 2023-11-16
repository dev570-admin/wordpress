<?php
/**
* Plugin Name: wc-date
* Plugin URI: https://www.wordpress.com/
* Description: wc calender and other meta dat Plugin.
* Version: 0.1
* Author: Surajit
* Author URI: https://www.wordpress.com/

//Surajit@1234

Surajit#1234

tutorial : https://wooproducttable.com/custom-field-checkout-page-programmatically/
**/

add_action( 'woocommerce_before_checkout_billing_form', 'my_custom_checkout_field' );

function my_custom_checkout_field( $checkout ) {

    echo '<div id="my_custom_checkout_field"><h2>' . __('Enter Date') . '</h2>';

    woocommerce_form_field( 'my_field_name', array(
        'type'          => 'date',
        'class'         => array('my-field-class form-row-wide'),
        'label'         => __('Fill in this field'),
        'placeholder'   => __('Enter something'),
        ), $checkout->get_value( 'my_field_name' ));

    echo '</div>';

}
add_action( 'woocommerce_before_checkout_billing_form', 'my_custom_checkout_field' );



/**
 * Process the checkout
 */
add_action('woocommerce_checkout_process', 'my_custom_checkout_field_process');

function my_custom_checkout_field_process() {
    // Check if set, if its not set add an error.
    if ( ! $_POST['my_field_name'] )
        wc_add_notice( __( 'Please enter something into this new shiny field.' ), 'error' );
}

/**
 * Update the order meta with field value
 */
add_action( 'woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta' );

function my_custom_checkout_field_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['my_field_name'] ) ) {
        update_post_meta( $order_id, 'My Field', sanitize_text_field( $_POST['my_field_name'] ) );
    }
}
