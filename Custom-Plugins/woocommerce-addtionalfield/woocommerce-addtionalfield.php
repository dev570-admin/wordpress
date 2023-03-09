<?php
/**
* Plugin Name: woocommerce addtional field
* Plugin URI: https://www.wordpress.com/
* Description: In this plugin two additional field having the extra option in woocoomerce setting.
* Version: 1.0
* Author: Surajit
* Author URI: https://www.wordpress.com/

//Surajit@1234

Surajit#1234

tutorial : https://wooproducttable.com/custom-field-checkout-page-programmatically/
**/


// woocommerce extra option in woocommerce setting page

add_filter( 'woocommerce_settings_tabs_array', 'add_custom_settings_tab', 40 );


if ( ! function_exists( 'add_custom_settings_tab' ) ) {
   function add_custom_settings_tab( $settings_tabs ) {

    $settings_tabs['custom_tab'] = __( 'Additional Settings', 'woocommerce-settings-tab-demo' );
    return $settings_tabs;

}
}


add_filter( 'woocommerce_settings_tabs_array', 'add_custom_settings_tab', 40 );
add_filter( 'woocommerce_settings_tabs_options', 'add_custom_settings_tab_options' );
add_action( 'woocommerce_settings_tabs_custom_tab', 'output_custom_settings_tab' );
add_action( 'woocommerce_update_options_custom_tab', 'save_custom_settings_tab' );



function add_custom_settings_tab( $settings_tabs ) {

    $settings_tabs['custom_tab'] = __( 'Additional Settings', 'woocommerce-settings-tab-demo' );
    return $settings_tabs;

}

function add_custom_settings_tab_options() {

    woocommerce_add_setting( array(
        'name'     => __( 'Custom Field 1', 'woocommerce-settings-tab-demo' ),
        'type'     => 'text',
        'id'       => 'custom_field_1'
    ) );

    woocommerce_add_setting( array(
        'name'     => __( 'Custom Field 2', 'woocommerce-settings-tab-demo' ),
        'type'     => 'text',
        'id'       => 'custom_field_2'
    ) );

}

function output_custom_settings_tab() {

    woocommerce_admin_fields( get_custom_settings_tab_fields() );

}

function get_custom_settings_tab_fields() {

    $fields = array();

    $fields[] = array(
        'title'     => __( 'Custom Settings', 'woocommerce-settings-tab-demo' ),
        'type'      => 'title',
        'desc'      => '',
        'id'        => 'custom_tab_title'
    );

    $fields[] = array(
        'name'      => __( 'Custom Field 1', 'woocommerce-settings-tab-demo' ),
        'desc_tip'  => '',
        'id'        => 'custom_field_1',
        'type'      => 'text',
    );

    $fields[] = array(
        'name'      => __( 'Custom Field 2', 'woocommerce-settings-tab-demo' ),
        'desc_tip'  => '',
        'id'        => 'custom_field_2',
        'type'      => 'text',
    );

      $fields[] = array(
        'name'      => __( 'Custom Field 3', 'woocommerce-settings-tab-demo' ),
        'desc_tip'  => '',
        'id'        => 'custom_field_3',
        //'type'      => 'textarea',
    );

     
 return $fields;


   }
   


function save_custom_settings_tab() {
//updating or saving the value
	echo "<p class='submit'>";
   // woocommerce_update_options( get_custom_settings_tab_fields() );
    woocommerce_update_options( get_custom_settings_tab_fields() );

echo "</p>";
}
//***use short code to display the value 
function display_custom_field_1() {
    $value = get_option( 'custom_field_1' );
    return 'Woocoommerce The value of Custom field ' . $value;
}
add_shortcode( 'custom_field_1', 'display_custom_field_1' );

function display_custom_field_2() {
    $value2 = get_option( 'custom_field_2' );
    return ' Best Ever  ' . $value2;
}
add_shortcode( 'custom_field_2', 'display_custom_field_2' );

// the shortcode is [custom_field_1]  for template use echo do_shortcode([custom_field_1]);

//***without shortcode use this code to your template

// $value = get_option( 'custom_field_1' );
//echo 'The value of Custom Field 1 is: ' . $value;


//ende ================================================================= end
?>