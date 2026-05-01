<?php

/* este codigo elimina la seccion de descarga de mi cuenta*/

add_filter( 'woocommerce_account_menu_items', 'quitar_descargas_mi_cuenta' );
function quitar_descargas_mi_cuenta( $items ) {
    unset( $items['downloads'] );
    return $items;
}