<?php
// Forzar país Chile y ocultarlo correctamente
add_filter( 'woocommerce_checkout_fields', function( $fields ) {

    $fields['billing']['billing_country']['default'] = 'CL';
    $fields['billing']['billing_country']['required'] = true;
    $fields['billing']['billing_country']['class'] = array('hidden');
    $fields['billing']['billing_country']['label_class'] = array('hidden');

    return $fields;
});