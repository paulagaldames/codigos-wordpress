<?php

/*Este texto sirve en caso que el cliente no quiera 
que se vea la cantidad y sea remplazado por algun texto*/


add_filter( 'woocommerce_get_stock_html', 'cambiar_texto_stock', 10, 2 );

function cambiar_texto_stock( $html, $product ) {
    $stock = $product->get_stock_quantity();

    if ( $stock > 0 && $stock <= 50 ) { //se puede modificar para que se menor o igual
        return '<p class="stock low-stock" style="color:#d9534f; font-weight:bold;">
        🔥 Últimas unidades disponibles
        </p>';
    }

    return '';
}