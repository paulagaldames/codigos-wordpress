
/* se modifican 2 textos que no se lograron traducir por la vía diplomática texto 1*/

add_filter('woocommerce_get_availability_text', 'cambiar_texto_stock', 10, 2);

function cambiar_texto_stock($availability, $product) {

    if ($product->is_in_stock()) {
        return 'Disponible';
    }

    return $availability;
}

/* se modifican 2 textos que no se lograron traducir por la vía diplomática texto 2*/

add_filter('gettext', 'cambiar_texto_carrito_vacio', 20, 3);

function cambiar_texto_carrito_vacio($translated, $text, $domain) {

    if ($text === 'No products in the cart.') {
        $translated = 'No hay productos en el carrito.';
    }

    return $translated;
}