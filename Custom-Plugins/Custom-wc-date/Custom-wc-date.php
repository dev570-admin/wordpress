<?php
/**
 * Plugin Name: Custom-wc-date
 * Plugin URI: https://github.com/dev570-admin/wordpress
 * Description: Adds a custom date and select option field to the WooCommerce checkout page 
 * Version: 1.0.0
 * Author: Surajit Mridha
 * Author URI: https://github.com/dev570-admin/wordpress
 */

// Add the custom date field to the checkout page
add_action( 'woocommerce_before_order_notes', 'custom_date_checkout_field' );
function custom_date_checkout_field( $checkout ) {
    echo '<div id="custom_date_checkout_field"><h2>' . __('') . '</h2>';
    woocommerce_form_field( 'custom_date', array(
        'type' => 'date',
        'class' => array('my-field-class form-row-wide'),
        'label' => __('Booking Date'),
        'required' => true,
    ), $checkout->get_value( 'custom_date' ));
    echo '</div>';



    woocommerce_form_field( 'custom_select', array(
    'type'          => 'select',
    'class'         => array('my-field-class form-row-wide'),
    'label'         => __('Select Size'),
    'required'      => true,
    'options'       => array(
        '100' => __('100'),
        '150' => __('150'),
        '300' => __('300'),
    ),
), $checkout->get_value( 'custom_select' ));


}

// Save the custom date field value
add_action( 'woocommerce_checkout_create_order', 'save_custom_date_checkout_field' );
function save_custom_date_checkout_field( $order ) {
    if ( ! empty( $_POST['custom_date'] ) ) {
        $order->update_meta_data( 'Custom Date', sanitize_text_field( $_POST['custom_date'] ) );
    }

    if ( ! empty( $_POST['custom_select'] ) ) {
    $order->update_meta_data( 'Custom Select', sanitize_text_field( $_POST['custom_select'] ) );
}

}




// Display the custom date on the order received page
add_action( 'woocommerce_thankyou', 'display_custom_date_checkout_field_on_order_received_page', 5 );
function display_custom_date_checkout_field_on_order_received_page( $order_id ) {
    $order = wc_get_order( $order_id );
    $custom_date = $order->get_meta( 'Custom Date' );
    $custom_select = $order->get_meta( 'Custom Select' );
    if ( ! empty( $custom_date ) && ! empty( $custom_select ) ) {
        echo '<p><strong>' . __('Your Booking Date') . ':</strong> ' . $custom_date . '</p>';
         echo '<p><strong>' . __('Item Chosen') . ':</strong> ' . $custom_select . '</p>';
    }


//     $custom_select = $order->get_meta( 'Custom Select' );
// if ( ! empty( $custom_select ) ) {
//     echo '<p><strong>' . __('Item Chosen') . ':</strong> ' . $custom_select . '</p>';
// }

}



