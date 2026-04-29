<?php

/* Este texto funciona cuando se usa el widget de elementor
y no queda traudcidos los textos del cupon*/

add_filter('gettext', function($translated, $text, $domain) {

    if ($text === 'Have a coupon?') {
        return '¿Tienes un cupón?';
    }

    if ($text === 'Click here to enter your coupon code') {
        return 'Haz clic aquí para ingresar tu código';
    }

    if ($text === 'If you have a coupon code, please apply it below.') {
        return 'Si tienes un código de descuento, aplícalo a continuación.';
    }

    if ($text === 'Coupon code') {
        return 'Código de cupón';
    }

    if ($text === 'Apply') {
        return 'Aplicar';
    }

    return $translated;

}, 20, 3);